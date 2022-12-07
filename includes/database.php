<?php

    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $db = "amu_versatiles" ;

    $conn = mysqli_connect($server , $username , $password , $db) ;

    if ($conn)
        {
            //echo "Success" ;
        }
    else    
        {
            die("Error".mysqli_connect_error()) ;
        }
