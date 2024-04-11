<?php
$h1 = 1.70;
$idade1 = 18;
$sexo1 = "F";

$h2 = 1.98;
$idade2 = 17;
$sexo2 = "M";

$h3 = 1.80;
$idade3 = 22;
$sexo3 = "M";

$ctrl = 0;
$cont = 0;
$media = 0;
while ($cont<5) {
	if ($h1<$h2) {
		$ctrl = $h1;
		$h1 = $h2;
		$h2 = $ctrl;
	} else if ($h2<$h3) {
		$ctrl = $h2;
		$h2 = $h3;
		$h3 = $ctrl;
	}
	$cont++;
}
$cont = 0;
if ($sexo1=="F") {
	$media = $media + $idade1;
	$cont++;
}
if ($sexo2=="F") {
	$media = $media + $idade2;
	$cont++;
}
if ($sexo3=="F") {
	$media = $media + $idade3;
	$cont++;
}
$media = ($media/$cont);
while ($cont<5) {
	if ($idade1<$idade2) {
		$ctrl = $h1;
		$h1 = $h2;
		$h2 = $ctrl;
	} else if ($h2<$h3) {
		$ctrl = $h2;
		$h2 = $h3;
		$h3 = $ctrl;
	}
	$cont++;
}
echo "A maior altura é ".$h1.", e a menor altura é ".$h3."</br>";
echo "A média de idade das mulheres é: ".$media;
  ?> 