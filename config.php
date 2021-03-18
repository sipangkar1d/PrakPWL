<?php
    
    require 'vendor/autoload.php';

$facebook = new \Facebook\Facebook([
    'app_id'                =>  '249469220215489',
    'app_secret'            =>  '99d19cf139cc292767a3b809227941d6',
    'default_graph_version' =>  'v2.10'
]);
$helper = $facebook->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/Tugas%20PWL/admin/index.php");

try{
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken)){
        $_SESSION['access_token'] = (string)$accessToken;

        header("Location:admin/index.php");
    }
}catch (Exception $e){

}
?>