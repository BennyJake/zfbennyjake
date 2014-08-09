<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $linkedIn=new \HappyR\LinkedIn\LinkedIn('cnngzjebcwln', 'AGqUh0VYP6uPAjsZ');


        if ($linkedIn->isAuthenticated()) {
            //we know that the user is authenticated now. Start query the API
            $user=$linkedIn->api('v1/people/~:(firstName,lastName)');
            echo "Welcome ".$user['firstName'];

            exit();
        } elseif ($linkedIn->hasError()) {
            echo "User canceled the login.";
            exit();
        }

        //if not authenticated
        return $this->redirect()->toUrl($linkedIn->getLoginUrl());
    }
}
//http://www.linkedin.com/uas/oauth2/authorization?response_type=code&client_id=app_id&redirect_uri=http%3A%2F%2Fwww.zfbennyjake.dev%2F&state=271a63d4278c8d6d2cb2bb20aac60d93