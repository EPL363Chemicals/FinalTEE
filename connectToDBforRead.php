<?php

    $con =mysql_connect("localhost", "root", "261994akk");
    mysql_select_db("teedb2");
    mysql_query ("set character_set_results='utf8'");

    if (!$con){
        echo "Cannot connect: ".mysql_error();
    }
    else{
        mysql_select_db("root", $con);
        mysql_query ("set character_set_results='utf8'");
    }

?>