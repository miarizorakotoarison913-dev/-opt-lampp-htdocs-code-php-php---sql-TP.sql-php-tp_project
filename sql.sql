 'SELECT * FROM dept_emp JOIN employees ON dept_emp.emp_no = employees.emp_no WHERE employees.first_name LIKE "%' A '%"
            OR last_name LIKE "%'S'%"; 


SELECT * FROM dept_emp JOIN employees ON dept_emp.emp_no = employees.emp_no
JOIN departments ON dept_emp.dept_no = departments.dept_no 
WHERE employees.first_name LIKE "Lortz%"
OR last_name LIKE "Lortz%"
AND departments.dept_no LIKE "%d009%" OR departments.dept_name LIKE "Customer Service%" 
AND (YEAR(CURDATE()) - YEAR(birth_date)) BETWEEN 60 AND 70 LIMIT 20;

SELECT * FROM dept_emp 
JOIN employees ON dept_emp.emp_no = employees.emp_no
JOIN departments ON dept_emp.dept_no = departments.dept_no 
WHERE (employees.first_name LIKE "Lortz%" OR employees.last_name LIKE "Lortz%")
AND (departments.dept_no LIKE "%d009%" OR departments.dept_name LIKE "Customer Service%")
AND (YEAR(CURDATE()) - YEAR(birth_date)) BETWEEN 60 AND 70
LIMIT 20;