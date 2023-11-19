<?php
    $op=$_GET["chon"];
    if($op!= ""){
        include("database_class.php");
        $dao=new Dao ("root","","test");
        $sql="select * from {$op}";
        $header="DANH SÁCH {$op}";
        $dao->table($sql, $header);
    }
?>