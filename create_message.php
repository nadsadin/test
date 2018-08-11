<?php
include_once 'Message.php';
if(isset($_POST['name'],$_POST['email'],$_POST['message'])&&$_POST['name']!=''&&$_POST['email']!=''&&$_POST['message']!=''){
    $db = new DB();
    $name = $db->escape_string($_POST['name']);
    $email = $db->escape_string($_POST['email']);
    $text = $db->escape_string($_POST['message']);
    $message = new Message($name,$email,$text);
    $message->save($db);
    echo $message->html_render();
}