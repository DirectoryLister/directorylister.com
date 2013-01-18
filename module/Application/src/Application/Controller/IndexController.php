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

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        
        // Instantiate the view object
        $view = new ViewModel();
        
        // Fetch stargazers from GitHub
        $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/stargazers');
        $stargazers = json_decode($apiResults);
        
        // Pass stargazer count to the view
        $view->stargazers = count($stargazers);
        
        
        // Fetch forks from GitHub
        $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/forks');
        $forks      = json_decode($apiResults);
        
        // Pass stargazer count to the view
        $view->forks = count($forks);
        
        
        // Fetch tags from GitHub
        $apiResults = file_get_contents('https://api.github.com/repos/DirectoryLister/DirectoryLister/tags');
        $tags       = json_decode($apiResults);
        
        // Pass tags to the view
        $view->tags = $tags;
        
        
        return $view;
    }
}
