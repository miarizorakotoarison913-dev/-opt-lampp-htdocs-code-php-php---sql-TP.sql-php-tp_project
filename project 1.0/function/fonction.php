<?php
include( 'function/connect.php');
function get_all_lines($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;
}

function get_one_line($sql){
    $req = mysqli_query(dbconnect(),$sql );
    $result = mysqli_fetch_assoc($req);
    mysqli_free_result($req);
    return $result;
}

function get_dep(){
    $sql = " select dept_no,dept_name from departments";
    return get_all_lines($sql); 
}




function get_manager(){
    $sql= "select  departments.dept_no,departments.dept_name,employees.first_name   from dept_manager 
    join departments on dept_manager.dept_no=departments.dept_no 
    join employees on dept_manager.emp_no = employees.emp_no  where dept_manager.to_date > CURDATE()";
    return get_all_lines($sql); 
}

function get_dep_employees($id){
    $sql = "SELECT * FROM dept_emp WHERE dept_no = '%s'";
    $sql = sprintf($sql, $id);
    $req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;

}







































?>