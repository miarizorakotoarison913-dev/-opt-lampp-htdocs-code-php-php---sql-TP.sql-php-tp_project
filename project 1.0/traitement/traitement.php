<?php
    session_start();
    include( '../function/connect.php');
    include_once '../function/fonction.php';
    $id_dep_emp = $_GET["id_dep_emp"];
    $_SESSION["id_emp"] = $id_dep_emp;
    header("Location: ../page/employees.php");