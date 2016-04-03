<?php
$a = $_GET['a'];
   $b = $_GET['b'];
   $c = $_GET['c'];
if($a!=0)
{
$r1=($b*$b)-(4*$a*$c);
$r2=sqrt($r1);
$r3=2*$a;
$r4=-$b+$r2;
$r5=-$b-$r2;
$query=$r4/$r3;
$query1=$r5/$r3;

echo "x1: " . $query . "<br />";
echo "x2: " .$query1. "<br/>";
}
else 
{
echo "a=0 implies it is not a Quadratic Equation";}
$host=gethostname();
$ip=gethostbyname($host);
echo "ip address: ".$ip."<br/>"

?>