<?php 
	
	class Info{

		private $str;

		public function __construct($str){
			$this->str = $str;
		}

		public function sayHello(){
			$str = explode("@", $this->str);
			$str = strtoupper($str[0]);
			return "Hello, ".$str."!";
		}

	}

	$user = new Info("kithora1904@gmail.com");
	echo $user->sayHello();