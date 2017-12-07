<?php

$db=mysqli_connect('127.0.0.1','root','','Rubix');

$sql="SELECT * from movies WHERE language = 'english'";
$query=mysqli_query($db,$sql) or die(mysqli_error($db));
while($row=mysqli_fetch_array($query))
{
$image=$row ['video'];
$loc=$row['m_id'];

echo "<a href='video.php?ID=$loc'><img style='height:200px;width:150px;margin-left:10px' src='data:image/jpeg;base64,".base64_encode( $image )."'/></a>";

}

