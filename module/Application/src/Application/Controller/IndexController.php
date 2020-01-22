<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Cache\StorageFactory;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {

        // Instantiate the view object
        $view = new ViewModel();

        // Get config object
        // $config = $this->getServiceLocator()->get('config');


        // Instantiate the cache object
        $cache = StorageFactory::factory(array(
            'adapter' => array(
                'name' => 'filesystem',
                'options' => array(
                    'ttl' => 21600 // 6 hours
                )
            ),
            'plugins' => array(
                'Serializer',
                'exception_handler' => array('throw_exceptions' => false),
            )
        ));


        // Attempt to fetch stargazers from the cache
        $view->stargazers = $cache->getItem('stargazers', $stargazersSuccess);

        if (!$stargazersSuccess) {

            // Initialize curl
            $curl = curl_init();

            // Set curl options
            curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repos/DirectoryLister/DirectoryLister/stargazers');
            curl_setopt($curl, CURLOPT_USERAGENT, 'http://www.directorylister.com');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Fetch stargazers from GitHub
            $apiResults = curl_exec($curl);
            $dataObject = json_decode($apiResults);

            // Pass stargazer count to the view
            $view->stargazers = count($dataObject);

            // Cache the data
            $cache->setItem('stargazers', $view->stargazers);

            // Close curl handle
            curl_close($curl);

        }

        // print_r($view->stargazers); die(); // Debugging


        // Attempt to fetch forks from the cache
        $view->forks = $cache->getItem('forks', $forksSuccess);

        if (!$forksSuccess) {

            // Initialize curl
            $curl = curl_init();

            // Set curl options
            curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repos/DirectoryLister/DirectoryLister/forks');
            curl_setopt($curl, CURLOPT_USERAGENT, 'http://www.directorylister.com');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Fetch forks from GitHub
            $apiResults = curl_exec($curl);
            $dataObject = json_decode($apiResults);

            // Pass fork count to the view
            $view->forks = count($dataObject);

            // Cache the data
            $cache->setItem('forks', $view->forks);

            // Close curl handle
            curl_close($curl);

        }

        // print_r($view->forks); die(); // Debugging


        // Attempt to fetch forks from the cache
        $view->releases = $cache->getItem('releases', $releasesSuccess);

        if (!$releasesSuccess) {

            // Initialize curl
            $curl = curl_init();

            // Set curl options
            curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repos/DirectoryLister/DirectoryLister/releases');
            curl_setopt($curl, CURLOPT_USERAGENT, 'http://www.directorylister.com');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Fetch releases from GitHub
            $apiResults = curl_exec($curl);

            // Pass releases to the view
            $view->releases = json_decode($apiResults);

            // Cache the data
            $cache->setItem('releases', $view->releases);

            // Close curl handle
            curl_close($curl);

        }

        // Remove prereleases
        $view->releases = array_filter($view->releases, function ($release) {
            return $release->prerelease === false;
        });

        // Slice off first 5 releases from object
        $view->releases = array_slice($view->releases, 0, 5);

        // Latest download links
        $view->tag   = $view->releases[0]->tag_name;
        $view->dlZip = $view->releases[0]->zipball_url;
        $view->dlTar = $view->releases[0]->tarball_url;


        // Return the view
        return $view;
    }

}
