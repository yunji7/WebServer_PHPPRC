<?php
    /**
     * Created by .
     * User: android
     * Date: 2015/10/25
     * Time: 18:54
     */


    include("phprpc/phprpc_client.php");

    $client = new PHPRPC_Client('http://localhost/WebServer/PHPRPC/My/RPC_Server.php');

    var_dump($client->World());
    var_dump($client->SWorld(5));