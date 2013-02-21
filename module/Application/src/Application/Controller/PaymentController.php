<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Stripe;
use Stripe_Charge;

class PaymentController extends AbstractActionController
{
    
    public function indexAction()
    {
        // ..
    }
    
    public function donatePostAction()
    {
        
        // Set Stripe API key
        $config = $this->getServiceLocator()->get('config');
        Stripe::setApiKey($config['stripe']['test']['secret_key']);
        
        // Get Stripe token from post data
        $token = $this->getRequest()->getPost('stripeToken');
        
        var_dump($token);
        
        // Generate Stripe charge
        $charge = Stripe_Charge::create(array(
            'amount'   => 500,
            'currency' => 'usd',
            'card'  => $token
        ));
        
        die('<h2>Successfully charged $5.00</h2>');
        
    }
    
}