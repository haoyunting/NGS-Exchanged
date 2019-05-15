<?php
    $db = mysql_connect("localhost","zj","201901f10075","zj_db");
    $sql = "select * from staff";
    $result = $db->query($sql);
    echo $result;
?>