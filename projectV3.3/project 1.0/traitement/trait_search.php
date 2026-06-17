<?php
session_start();
include('../function/connect.php');
include_once '../function/fonction.php';
if(!empty($_GET["emp"]) && !empty($_GET["dep"]) && !empty($_GET["min"]) && !empty($_GET["max"])){




    $emp = $_GET["emp"];
    $dep = $_GET["dep"];
    $min = $_GET["min"];
    $max = $_GET["max"];

    $searched = AllField($emp,$dep,$min,$max);
    $result_of_search  = count($searched);
 
    $found = false;

if($result_of_search > 0) {
        $found = true;
}
if($found) {
    $_SESSION["searched"] = $searched;
        header("Location: ../page/search.php");
        exit();
    } 
else {
        $_SESSION["search_none"] = "Aucun résultat trouvé";
        header("Location: ../index.php");
        exit();
    }

}

if(!empty($_GET["emp"]) || !empty($_GET["dep"]) || !empty($_GET["min"]) || !empty($_GET["max"])) {

    $result_dep     = 0;
    $result_emp     = 0;
    $result_min_max = 0;
    $searched_dep     = [];
    $searched_emp     = [];
    $searched_min_max = [];

   if(!empty(trim($_GET["emp"] ?? ''))) {
    $emp          = trim($_GET["emp"]);
    $searched_emp = getEmp($emp);
    $result_emp   = count($searched_emp);
}

if(!empty(trim($_GET["dep"] ?? ''))) {
    $dep          = trim($_GET["dep"]);
    $searched_dep = getDep($dep);
    $result_dep   = count($searched_dep);
}

if(!empty(trim($_GET["min"] ?? '')) && !empty(trim($_GET["max"] ?? ''))) {
    $min              = (int)$_GET["min"];
    $max              = (int)$_GET["max"];
    $searched_min_max = getAge($min, $max);
    $result_min_max   = count($searched_min_max);
}

    $found = false;

    if($result_emp > 0) {
        $_SESSION["search_emp"] = $searched_emp;
        $found = true;
    }
    if($result_dep > 0) {
        $_SESSION["search_dep"] = $searched_dep;
        $found = true;
    }
    if($result_min_max > 0) {
        $_SESSION["search_age"] = $searched_min_max;
        $found = true;
    }

    if($found) {
        header("Location: ../page/search.php");
        exit();
    } else {
        $_SESSION["search_none"] = "Aucun résultat trouvé";
        header("Location: ../index.php");
        exit();
    }

    return get_all_lines($sql);
} else {
    header("Location: ../index.php");
    exit();
}
die();