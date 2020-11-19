<?php 
class Student{
	static $studentClass = "This is student class static variable";
	const stndCos = "This is student class const variable";
	protected $name = "Suman Modak";
	function __construct(){
		echo "In precence of ".__CLASS__." class<br>";
	}
	public function msg(){
		echo "This is for Global space<br>";
	}
}


class Testing extends Student{
	const varCos = "This is a const variable";
	static $var = "This is a Static Property";
	public $var1 = "This is public variable";
	protected $var2 = "This is protected variable";
	private $var3 = "This is private variable";

	function __construct(){
		echo "In precence of ".__CLASS__." class<br>";
		parent::__construct();
		echo parent::$studentClass;

	}

	public function printAll(){
		echo $this->var1 .'<br>';
		echo $this->var2.'<br>';
		echo $this->var3.'<br>';
	}
	public function hello(){
		echo self::varCos.'<br>';
		echo self::$var;
		echo $this->name;
		echo self::stndCos;
	}
}

 ?>