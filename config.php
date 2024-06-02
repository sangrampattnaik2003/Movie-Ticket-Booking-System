<?php
    $host = "127.0.0.1";
    $user = "rahulreghunath11";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "db_movie";  
define("server","localhost",true);	//Your database name you want to connect to
define("user","root",true);	//Your database name you want to connect to
define("password","",true);	//Your database name you want to connect to
define("database","db_movie",true);	//Your database name you want to connect to
    
     $con = mysqli_connect(server,user,password,database)or die(mysql_error());
?>