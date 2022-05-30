<?php
include_once "INFORMATION/Employee.php";
include_once "MODEL/EmployeeManager.php";

  use INFORMATION\EmployeeManager;
  use INFORMATION\Employee;

  $emp_1 = new Employee("Nguyễn Đức", "Thuần", "20_3_1998", "đông hà", "Giám đốc");
  $emp_2 = new Employee("Nguyễn Đức", "Vinh", "20_3_1998", "đông hà", "Tong Giám đốc");
  $emp_3 = new Employee("Nguyễn Đức", "Lan", "20_3_1998", "đông hà", "Ke Toan");
 
  $employeeManager = new EmployeeManager();
  
  $employeeManager->add( $emp_1 );
  $employeeManager->add( $emp_2 );
  $employeeManager->add( $emp_3 );
  $employeeManager->add( new Employee("Nguyễn Đức", "Huong", "20_3_1998", "đông hà", "Ke Toan") );

  echo '<pre>';
  print_r($employeeManager);
  echo '</pre>';


  $employees = $employeeManager->getEmployees();


  echo '<pre>';
  print_r($employees);
  echo '</pre>';

 /*
    Array[
       Employee {
        ho -> 
        ten ->
        ...
       },
       Employee {
        
       }
    ]
 */

  foreach ($employees as $Employee) {
      echo $employee->getTen();
  }
