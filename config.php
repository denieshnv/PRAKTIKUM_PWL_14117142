<?php

require_once 'vendor/autoload.php';

if(!session_id()){
    session_start();
}

$facebook = new \Facebook\Facebook([
    'app_id' => '4501712653189608',
    'app_secret' => '14cd1c25969fdcb9790efa0188d6a6ae',
    'default_graph_version' => 'v10.0'
])
?>