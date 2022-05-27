<?php
include_once "INFORMATION/Employee.php";
include_once "MODEL/EmployeeManager.php";

  use INFORMATION\EmployeeManager;
  use INFORMATION\Employee;
 
  $employeeManager = new EmployeeManager();
  $employeeManager->add(new Employee("nguyen"));
  $employeeManager->add(new Employee("thuan"));
  $employeeManager->add(new Employee("20_3_1998"));
  $employeeManager->add(new Employee("dong_ha"));
  $employeeManager->add(new Employee("nhan_vien"));

  $employees = $employeeManager->getEmployees();
  foreach ($employees as $Employee) {
      echo $employee->getTen();
  }