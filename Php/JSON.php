<?php
    //$configStr = file_get_contents('sftp.json');
    $configStr = '{ "name": "My Server", "host": "localhsot", "protocol": "sftp", "port": 22, "username": "username", "remotePath": "/", "uploadOnServer": true }';
    function is_json_valid($configStr){
        if(json_decode($configStr)){
            echo "<h1>JSON is valid <br><br></h1>";
            // Convert JsonSirng To JsonObject In PHP
            $JsongObj = json_decode($configStr);
            $JsongObj -> name = "Your Server";
            $JsongObj -> host = "www.Google.com";
            $JsongObj -> protocol = "";
            //Convert JsonObject To JsonString In PHP 
            $JsonStr = json_encode($JsongObj);
            print_r ('<p style="font-weight:bold">String Json : </p>'.$configStr.'<br><br>
            <p style="font-weight:bold">Convert String Json To Object Json : </p>');
            print_r ($JsongObj);
            print_r ('<br><br><p style="font-weight:bold">Convert Json Object To String jSON  : </p>'.$JsonStr);
        }else{
            echo "<h1>JSON not valid or JSON is invalid</h1>";
        }
    }
    is_json_valid($configStr)
?>