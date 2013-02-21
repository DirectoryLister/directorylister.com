<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Stripe;
use Stripe_Charge;

class PaymentController extends AbstractActionController
{
    
    public function donatePostAction()
    {
        
        // Get request object
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            // Get config object
            $config = $this->getServiceLocator()->get('config');
            
            // Set Stripe API key
            if ($_SERVER['HTTP_HOST'] == 'directorylister.com') {
                Stripe::setApiKey($config['stripe']['live']['secret_key']);
            } else {
                Stripe::setApiKey($config['stripe']['test']['secret_key']);
            }
            
            // Get Stripe token from post data
            $token = $request->getPost('stripeToken');
            
            // Generate Stripe charge
            $charge = Stripe_Charge::create(array(
                'amount'   => 500,
                'currency' => 'usd',
                'card'  => $token
            ));
            
            die('Payment successfully processed.');
            
        } else {
            
            die("ERROR: I'm sorry Dave, I'm afraid I can't do that.");
            
        }
        
    }
    
}