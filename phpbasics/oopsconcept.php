<?php
	class A{
		private function abc(){
			echo "this is first public class A<br>";
		}
		public function des(){
			$this->abc();//$this represents object by reference.
		}
	}
	$a= new A;
	// $a->abc();
	$a->des();
	echo "i am a php script!";
?>