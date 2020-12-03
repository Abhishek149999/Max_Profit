<?php
//To input number of Breads, vada and samosa
echo "Enter number of Breads, Vada and Samosa: ";
$ip1 = explode(' ', readline()); 

//To input cost of vada and samosa
echo "Enter Cost of Vada and Samosa: ";
$ip2 = explode(' ', readline());

$p=0;

//Checking which product have higher cost(Samosa or Vada) and Prefering higher cost one
if ($ip2[0]< $ip2[1]){
		$m=$ip1[2];
		$max_ct=$ip2[1];
		$n=$ip1[1];
		$min_ct=$ip2[0];
	}
else if($ip2[0]>=$ip2[1]){
		$m=$ip1[1];
		$max_ct=$ip2[0];
		$n=$ip1[2];
		$min_ct=$ip2[1];
	}
//Estimating Max Profit
while($ip1[0]>=2){
	if($m>0){
		$p=$p+$max_ct;
		$m=$m-1;
		$ip1[0]=$ip1[0]-2;
	}
	else if($n>0){
		$p=$p+$min_ct;
		$n=$n-1;
		$ip1[0]=$ip1[0]-2;
	}
}

echo "Maximum Possible profit is " . $p ."\n"; 

?>