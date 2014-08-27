<?php

/**
 * Created by JetBrains PhpStorm.
 * User: Ben
 * Date: 5/12/13
 * Time: 3:15 PM
 * To change this template use File | Settings | File Templates.
 */

if(isset($_GET["message"]) && $_GET["message"]=="true"){

    if(isset($_POST["itshunney"]) && empty($_POST["itshunney"])){
        
            require "inc/twilio-php-master/Services/Twilio.php";

            $AccountSid = "AC9af970ccdc8b19be07cb8069aabfd24e";
            $AuthToken = "9d6c3e7c0cc19700230290e511e4ca30";

            $client = new Services_Twilio($AccountSid, $AuthToken);

            $sms = $client->account->sms_messages->create(

            "309-740-2660",

            PHONE,

            "From BennyJake.com - ".$_POST["name"]." - ".$_POST["email"]." - ".$_POST["subject"]." - ".$_POST["message"]
            
            );

            $message = "<i class='icon-ok-sign icon-white'></i>&nbsp;Got It, Thanks!";
            $disabled = true;

    }
    else{

        $message = "<i class='icon-ok-sign icon-white'></i>&nbsp;Sorry, You're a Bot...";
        $disabled = true;

    }
    
}
else{

    $message = "<i class='icon-envelope icon-white'></i>&nbsp;Fire Away!";
    $disabled = false;
}









