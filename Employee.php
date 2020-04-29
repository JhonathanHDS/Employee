<?php
//Employee
   class Employee{
    //property
    private $nama;
    private $title;
    private $salary;

    public function __construct($nama,$title,$salary) {
      $this->nama = $nama;
      $this->title = $title;
      $this->salary = $salary;
    }
    public function getEmployeeName() {
      return $this->nama;
    }
    public function getEmployeeTittle() {
      return $this->title;
    }
    public function getEmployeeMonthlySalary() {
      return $this->salary;
    }
    public function getEmployeeProfile(){
      echo "Nama".$this->nama."<br> Title".$this->title."<br> Salary".$this->salary;
   }
}

    $info = new Employee("Jhonathan Harry Dea", "Sarjana Komputer","Rp. 1.000.000");
    $info->getEmployeeProfile();
      // echo "Nama : ".$info->getEmployeeName();
      // echo "<br>";
      // echo "Title : ".$info->getEmployeeTittle();
      // echo "<br>";
      // echo "Salary : ".$info->getEmployeeMonthlySalary();
      // echo "<br>";
  
?>