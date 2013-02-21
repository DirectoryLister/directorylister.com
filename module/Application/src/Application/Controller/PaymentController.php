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
        
        if ($this->getRequest()->isPost()) {
            
            // Set Stripe API key
            $config = $this->getServiceLocator()->get('config');
            Stripe::setApiKey($config['stripe']['test']['secret_key']);
            
            // Get Stripe token from post data
            $token = $this->getRequest()->getPost('stripeToken');
            
            // Generate Stripe charge
            $charge = Stripe_Charge::create(array(
                'amount'   => 500,
                'currency' => 'usd',
                'card'  => $token
            ));
            
            die('Payment successfully charged.');
            
        } else {
            
            die("ERROR: I'm sorry Dave, I'm afraid I can't do that.");
            
        }
        
    }
    
}