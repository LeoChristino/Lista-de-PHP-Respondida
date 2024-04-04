<?php
$a = 8;
$b = 3;
$c = 4;
$save = 0;
$ctrl = 0;
while ($ctrl<10) {
if ($a<$b) {
	$save = $a;
	$a = $b;
	$b = $save;
	} else if ($b<$c) {
		$save = $b;
		$b = $c;
		$c = $save;
	}
	$ctrl++;
}
echo "$a.$b.$c";
  ?>