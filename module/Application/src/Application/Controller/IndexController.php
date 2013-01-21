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
        
        
        // Instantiate the cache object
        $cache = StorageFactory::factory(array(
            'adapter' => array(
                'name' => 'filesystem',
                'options' => array(
                    'ttl' => 21600 // 6 hours
                )
            ),
            'plugins' => array(
                'exception_handler' => array('throw_exceptions' => false),
            )
        ));
        
        
        // Attempt to fetch stargazers from the cache
        $view->stargazers = $cache->getItem('stargazers', $success);
        
        if (!$success) {
            
            // Fetch stargazers from GitHub
            $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/stargazers');
            $stargazers = json_decode($apiResults);
            
            // Pass stargazer count to the view
            $view->stargazers = count($stargazers);
            
            $cache->setItem('stargazers', $view->stargazers);
            
        }
        
        
        // Attempt to fetch forks from the cache
        $view->forks = $cache->getItem('forks', $success);
        
        if (!$success) {
            
            // Fetch forks from GitHub
            $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/forks');
            $forks      = json_decode($apiResults);
            
            // Pass fork count to the view
            $view->forks = count($forks);
            
            $cache->setItem('forks', $view->forks);
            
        }
        
        
        // Attempt to fetch forks from the cache
        $view->tags = $cache->getItem('tags', $success);
        
        if (!$success) {
            
            // Fetch tags from GitHub
            $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/tags');
            $tags       = json_decode($apiResults);
            
            // Pass tags to the view
            $view->tags = $tags;
            
            $cache->setItem('tags', $view->tags);
            
        }
        
        
        return $view;
    }
}
