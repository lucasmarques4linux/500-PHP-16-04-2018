<?php 

for ($i=0; $i <= 10; $i++) {
	if ($i == 5) {
		break;
	}
	echo $i . PHP_EOL;
}
echo '--------------------' . PHP_EOL;
for ($i=0; $i <= 10; $i++) {
	if ($i == 5) {
		continue;
	}
	echo $i . PHP_EOL;
}