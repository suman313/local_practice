<?php 
namespace second;
include "Abstract.php";

class Student extends A{
	public function getPayment(){
		echo "This is the function for getting payment from Visa<br>";
	}
	public function msg(){
		echo "This is for class space";
	}
}

 ?>