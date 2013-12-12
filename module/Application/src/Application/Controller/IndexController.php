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
        $config = $this->getServiceLocator()->get('config');


        // Pass Stripe key to the view
        if ($_SERVER['HTTP_HOST'] == 'directorylister.com') {
            $view->stripeKey = $config['stripe']['live']['publishable_key'];
        } else {
            $view->stripeKey = $config['stripe']['test']['publishable_key'];
        }


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
        $view->tags = $cache->getItem('tags', $tagsSuccess);

        if (!$tagsSuccess) {

            // Initialize curl
            $curl = curl_init();

            // Set curl options
            curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/repos/DirectoryLister/DirectoryLister/tags');
            curl_setopt($curl, CURLOPT_USERAGENT, 'http://www.directorylister.com');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Fetch tags from GitHub
            $apiResults = curl_exec($curl);

            // Pass tags to the view
            $view->tags = json_decode($apiResults);

            // Cache the data
            $cache->setItem('tags', $view->tags);

            // Close curl handle
            curl_close($curl);

        }

        // Slice off first 5 tags from object
        $view->tags = array_slice($view->tags, 0, 5);

        // print_r($view->tags); die(); // Debugging


        // Latest download links
        $view->name  = $view->tags[0]->name;
        $view->dlZip = $view->tags[0]->zipball_url;
        $view->dlTar = $view->tags[0]->tarball_url;


        // Return the view
        return $view;
    }

}
