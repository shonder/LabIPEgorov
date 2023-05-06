<?php

    $connect = mysqli_connect('localhost', 'root', '', 'lab4ip');

    if(!$connect){
        die('error connect to Basa');
    }