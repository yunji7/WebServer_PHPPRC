<?php
    /**
     * Created by PhpStorm.
     * User: pc
     * Date: 2015/6/1
     * Time: 18:47
     */

    include("phprpc/phprpc_server.php");


    class Hello
    {
        static function World()
        {
            return array("A" => 1, "B" => 1);
        }

        static function SWorld($X)
        {
            return $X;
        }
    }

    $server = new PHPRPC_Server();
    $server->add('World', 'Hello');
    $server->add('SWorld', 'Hello');
    $server->start();