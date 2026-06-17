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

function get_dep_employees($id , $limite, $offset){
    $sql = "SELECT * FROM dept_emp JOIN employees ON dept_emp.emp_no = employees.emp_no WHERE dept_emp.dept_no = '%s' LIMIT %d OFFSET %d";
    $sql = sprintf($sql, $id, $limite, $offset);
    $req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;
}
function get_info_employees($num_emp){
    $sql = "SELECT * FROM dept_emp JOIN employees ON dept_emp.emp_no = employees.emp_no WHERE employees.emp_no = '%d'";
    $sql = sprintf($sql, $num_emp);
    $req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;
}
function getEmp($emp) {
    if(empty($emp)) return [];
    $emp = trim($emp);
    $conn = dbconnect();
    $emp = mysqli_real_escape_string($conn, $emp);
    $sql = 'SELECT * FROM employees WHERE first_name LIKE "%' . $emp . '%"
            OR last_name LIKE "%' . $emp . '%" LIMIT 20';
    return get_all_lines($sql);
}

function getDep($dep) {
    if(empty($dep)) return [];
    $dep = mysqli_real_escape_string(dbconnect(), $dep);
    $sql = "SELECT * FROM departments WHERE dept_no LIKE '%$dep%' OR dept_name LIKE '$dep%' LIMIT 20";
    return get_all_lines($sql);
}

function getAge($min, $max) {
    if(empty($min) || empty($max)) return [];
    $min = (int)$min;
    $max = (int)$max;
    $sql = "SELECT * FROM employees 
            WHERE (YEAR(CURDATE()) - YEAR(birth_date)) BETWEEN $min AND $max LIMIT 20";
    return get_all_lines($sql);
}
function Calculer_age($date_naissance) {
    $annee = explode('-', $date_naissance)[0];
    $age = 2000 - $annee;
    return $age;
}
function AllField($emp, $dep, $min, $max) {

$sql1 = 'SELECT * FROM dept_emp 
JOIN employees ON dept_emp.emp_no = employees.emp_no
JOIN departments ON dept_emp.dept_no = departments.dept_no 
WHERE (employees.first_name LIKE "'.$emp.'%" OR employees.last_name LIKE "'.$emp.'%")
AND (departments.dept_no LIKE "'.$dep.'%" OR departments.dept_name LIKE "'.$dep.'%")
AND (YEAR(CURDATE()) - YEAR(birth_date)) BETWEEN '.$min.' AND '.$max.'
LIMIT 20';
    return get_all_lines($sql1);
}

function look_employees($id){
    $sql = " SELECT first_name,to_date,from_date,employees.emp_no  as num_emp FROM dept_emp  JOIN employees ON employees.emp_no = dept_emp.emp_no WHERE employees.emp_no = $id " ;
    return get_all_lines($sql);

}

function look($emp_name,$dep_name,$age_min,$age_max){
    $sql="";
    return get_all_lines($sql);

}

// fiche pour les employers
function get_employees($id){
    $sql = "SELECT * FROM employees WHERE emp_no = '%s'";
    $sql = sprintf($sql, $id);
    $req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;

}   

// fonction pour voir l historique des salaire 
function get_salaries($id){
    $sql = "SELECT * FROM salaries WHERE emp_no = '%s'"; // (pour un employee en particulier)
    $sql = sprintf($sql, $id);
    $req = mysqli_query(dbconnect(),$sql);
    $result = array();
    while ($line = mysqli_fetch_assoc($req)) {
        $result[] = $line;
    }
    mysqli_free_result($req);
    return $result;

}   

function get_men_women(){
    $sql ="select avg(salary) as moyenne_salaire, count(first_name) as nb_homme_femme ,gender from employees  join salaries on employees.emp_no = salaries.emp_no  group by gender";
    return get_all_lines($sql);
}


function emploi_moyenne(){
    $sql = "select title,avg(salary) as moyenne_salaire from titles join salaries on salaries.emp_no = titles.emp_no   group by title "; 
    return get_all_lines($sql);
}

function go_manager($emp_no,$date,$prenom,$nom,$genre){
    $sql = "inserte into (emp_no,birth_date,first_name,last_name,gender,hire_date) from employees value ($emp_no,$date,$prenom,$nom,$genre,null)";
    $req = mysqli_query(dbconnect(),$sql );
}


































?>