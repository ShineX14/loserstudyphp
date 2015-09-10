<?php
 echo "hello world <br>";
 $teststring = "I just want to test PHP's function<br>" ;
 $teststring2 = substr_replace($teststring, "Shine", 0,1);
 echo "$teststring2";

 /**
 * test class
 */
 class FirstTest
 {
 	function __construct()
 	{
 		# code...
 		echo "FirstTest Class Start!<br>";
 	}
 	public function __get($name){
 		return $this->$name;
 	}

 	public function __set($name,$value){
 		$this->$name = $value;
 	}
 }
 $a = new FirstTest();
 $a->__set('argument','age10');
 $b = $a->__get('argument');
 $a->__set('test','age12');
 $c = $a->__get('test');
 echo "$b";
 echo "$c";

?>