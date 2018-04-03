<?php

function draw(){

	for($i = 1; $i <= 6; $i++){
		echo str_repeat('*', $i);
		echo '<br>';
	}

	for($x = 6; $x >= 1; $x--){
		echo str_repeat('*', $x);
		echo '<br>';
	}
}

echo draw();

//napomena: u slucaju da se krene od $i = 0, u ovakvoj postavci, 
//ispisace isto, s tim sto ce ostaviti prazan red na pocetku

?>


