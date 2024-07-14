<?php

   $db =mysqli_connect("localhost","root","","super-admin");
   if ( !$db ) {
        die("Connection failed : " . mysqli_error());
    }

   session_start();


?>