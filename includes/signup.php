
<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="rubix";
 $con=mysqli_connect($host,$user,$password);
 mysqli_select_db($con,$db);
 
  $username=$_POST['username'];
  $password=$_POST["password"];

 mysqli_query($con, "insert into users values('$username','$password')") or die(mysqli_error($con)) ;

    echo "done";
    
  
 

?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function lg(){
      alert("you are not logged in");
    }
  </script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="js/index.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>login</title>
</head>
<body style="background-color: black;" >
  <nav class="navbar navbar-inverse" style="height: 75px;background-color:black">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="" id="lg" style="font-size: 50px">RUBIX</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" id="lg" onclick="lg()">Home</a></li>
      <li><a href="#" id="lg" onclick="lg()">Movies</a></li>
      <li><a href="#" id="" ="lg" onclick="lg()">Series</a></li>
       <li><a href="#" id="lg" onclick="lg()">Series</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
  
    </ul>
  </div>
</nav>





<video autoplay style=" height:100%;width: 100% "    src="videos/KOLD - My Year 2016.mp4" type="video/mp4"></video>
<div id="form">
<form method="POST" action="#" >
  <h1 style="position: absolute;margin-top: 10px;left: 140px; ">LOGIN</h1>
  <input style="position: absolute;margin-top: 50px;left: 140px;: none;border: none; " id="red" type="text" name="username" placeholder="enter your username">
  <input style="position: absolute; margin-top: 90px;left: 140px  " id="red" type="password" name="password" placeholder="enter password">
<button style="position:absolute;margin-top: 140px;left: 200px  " type="submit" name="submit" value="login" >SUBMIT</button>
</form>

</div>

</body>
<style type="text/css">
  #red{
    height: 20px;
    
  }
  #form {
    width: 420px;
    height: 220px;
    
    position: absolute;
    top: 300px;
    left: 500px;
    
    background:rgb(0,0,0);
    background:rgba(0,0,0,.5000);
    *background:transparent;
}
#red{
  background-color: none;
  border-style: none;

    background:rgb(0,0,0);
    background:rgba(0,0,0,.5000);
    *background:transparent;
}

</style>
</html>