<?php
session_start();
    include_once 'function/fonction.php';
    $_SESSION["offset"] = 0;
    if($_SESSION["offset"] == 0 && $_SESSION["limite"] == 20){
        $_SESSION["offset"] = $_SESSION["offset"] + 20;
        $_SESSION["get_offset"] = $_SESSION["offset"];
        header("Location: page/employees.php");
    }
    else if($_SESSION["offset"] >=  $_SESSION["get_offset"] && $_SESSION["limite"] == 20){
        $_SESSION["offset"] = $_SESSION["get_offset"] + 20;
        $_SESSION["result"] = get_dep_employees($_SESSION["id_emp"], $_SESSION["limite"], $_SESSION["offset"]);
        header("Location: page/employees.php");
    }
    
