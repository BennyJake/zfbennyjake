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
use DOMPDFModule\View\Model\PdfModel;
use Zend\View\Helper\ViewModel;

class AuthController extends AbstractActionController
{
    public function indexAction()
    {
        session_start();

        $linkedIn=new \HappyR\LinkedIn\LinkedIn();


        if ($linkedIn->isAuthenticated()) {
            //we know that the user is authenticated now. Start query the API
            $user=$linkedIn->api('v1/people/~:(id,first-name,last-name,email-address,main-address,phone-numbers,headline,picture-url,industry,summary,specialties,positions:(id,title,summary,start-date,end-date,is-current,company:(id,name,type,size,industry,ticker)),educations:(id,school-name,field-of-study,start-date,end-date,degree,activities,notes),associations,interests,num-recommenders,date-of-birth,publications:(id,title,publisher:(name),authors:(id,name),date,url,summary),patents:(id,title,summary,number,status:(id,name),office:(name),inventors:(id,name),date,url),languages:(id,language:(name),proficiency:(level,name)),skills:(id,skill:(name)),certifications:(id,name,authority:(name),number,start-date,end-date),courses:(id,name,number),recommendations-received:(id,recommendation-type,recommendation-text,recommender),honors-awards,three-current-positions,three-past-positions,volunteer)');

    foreach($user['positions']['values'] as &$position){

        $position['startDate']['fullDate'] = date('F Y',strtotime($position['startDate']['month'].'/01/'.$position['startDate']['year']));


        if(isset($position['isCurrent']) && $position['isCurrent']){

            $position['endDate']['month'] = date('m',strtotime('now'));
            $position['endDate']['year'] = date('Y',strtotime('now'));
        }
        else{
            $position['endDate']['fullDate'] = date('F Y',strtotime($position['endDate']['month'].'/01/'.$position['endDate']['year']));
        }

        //find skills used in these positions, and tally the amount of time each skill was used

        foreach($user['skills']['values'] as &$skills){

            //if we find mention of the skill in the summary, add the number or days at the position to the total
            if(strpos($position['summary'],$skills['skill']['name']) !== FALSE){

                $startPosition = new \DateTime($position['startDate']['year']."-".$position['startDate']['month']."-01");
                $endPosition = new \DateTime($position['endDate']['year']."-".$position['endDate']['month']."-01");
                $interval = $endPosition->diff($startPosition);

                $skills['time'] += $interval->days;
            }
            else{
                $skills['time'] += 0;
            }
        }
    }

    $mostSkill = 0;
    foreach($user['skills']['values'] as &$skills){
        if($skills['time'] > $mostSkill){
            $mostSkill = $skills['time'];
        }
    }
    $user['positions']['active'] = $mostSkill;

            echo "<pre>";
            var_dump($user);
            echo "</pre>";

            /*$pdf = new PdfModel();
            $pdf->setOption('filename', 'ben-chrisman-resume'); // Triggers PDF download, automatically appends ".pdf"
            $pdf->setOption('paperSize', '8x11'); // Defaults to "8x11"
            $pdf->setOption('paperOrientation', 'portrait'); // Defaults to "portrait"

            // To set view variables
            $pdf->setVariables(array(
                'info' => $user
            ));

            return $pdf;*/

            return array('info' => $user);

        } elseif ($linkedIn->hasError()) {
            echo "User canceled the login.";
            exit();
        }

        //if not authenticated
        return $this->redirect()->toUrl($linkedIn->getLoginUrl());
    }
}
//http://www.linkedin.com/uas/oauth2/authorization?response_type=code&client_id=app_id&redirect_uri=http%3A%2F%2Fwww.zfbennyjake.dev%2F&state=271a63d4278c8d6d2cb2bb20aac60d93