<?php

$db=mysqli_connect('127.0.0.1','root','','Rubix');

$sql="SELECT * from episodes WHERE season= '1' ";
$query=mysqli_query($db,$sql) or die(mysqli_error($db));
while($row=mysqli_fetch_array($query))
{
$image=$row ['series'];
$loc=$row['episode'];

echo "<a href='episodes.php?ID=$loc'>$loc</a>";

}


