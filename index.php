<?php

// first  assingment start

$start = new DateTime( "M" );
$end   = new DateTime( "M" );

for($i = $start; $i <= $end; $i->modify('+1 day')){
echo $i->format("M");
}
echo "<br>";


// first  assingment ends   


// second  assingment start

for($i= 1; $i<=100; $i++){
if($i%2!=0){
echo  $i."is a odd number";
echo "<br>";
}
}
echo "<br>";

 // second assingment ends


// third  assingment start

$n = 7;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
$x*=($i+1); 
}
echo "The factorial of  ". "=" . $x;

echo "<br>";

// first  assingment ends





// four  assingment start

$a = 100;

while($a>=1){
echo $a;
echo "<br>";
$a--;

}

echo "<br>";

// four  assingment ends



// five  assingment start

$produtc_prises = ['apple', 'orange', 'banana', 'mango'];
foreach($produtc_prises as $key => $value){
echo ++$key . '-' . $value;
echo "<br>";

}
// five  assingment ends




?>