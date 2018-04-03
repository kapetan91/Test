<?php

class factorialNumber {
	public $n;

	public function factorial($n){
		if($n < 2){
			return 1;
		} else {
			return ($n * $this->factorial($n-1));
		}
	}
}

$newFactorial = New factorialNumber();
echo $newFactorial->factorial(5);

?>