<?php
echo "a<br>";
$x=3;
$y=5;
echo"$x+$y=".($x+$y);
echo"<br>$x-$y=".($x-$y);
echo"<br>$x*$y=".($x*$y);
echo"<br>$x/$y=".($x/$y);

echo"<br>b<br>";
$s=rand(1,10);
$d=rand(1,10);
echo"$s+$d=".($s+$d);
echo"<br>$s-$d=".($s-$d);
echo"<br>$s*$d=".($s*$d);
echo"<br>$s/$d=".($s/$d);

echo "<br>c<br>";
if($s>$d)
{
    while($s>$d)
   {
    echo"$s+$d=".($s+$d);
    echo"<br>$s-$d=".($s-$d);
    echo"<br>$s*$d=".($s*$d);
    echo"<br>$s/$d=".($s/$d);
    echo "<br><br>";
    $s--;
   }
}
else
{
    echo "$s<$d";
}
?>