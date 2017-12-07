  
<!DOCTYPE html>

<html>
<head>
  <?php
  require_once 'init.php';
  
    
  $ID =  mysqli_real_escape_string($db,$_GET['ID']);



  $sql = "SELECT * FROM categories WHERE sea_id = $ID ";
  $result=mysqli_query($db,$sql) or die(mysqli_error($db));
  $row=mysqli_fetch_array($result);

    ?>
	

  <title>Rubix-movies</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	


	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="js/index.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>k k </title>
</head>
<body style="background-color: black">
	

	<!--navbar program-->



<nav class="navbar navbar-inverse" style="height: 75px;background-color:black">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="font-size: 50px">RUBIX</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="movies.php">Movies</a></li>
      <li><a href="#">TV Series</a></li>
       
    
    </ul>
    
    </ul>
  </div>
</nav>


<h1 style="text-align: center;font-color:white"><?php echo $row['title'] ?></h1>


<h2>SEASON 1</h2>
    <div><?php include ('robotseason1.php'); ?></a></div>
</div>

<h2>SEASON 2</h2>
    <div><?php include ('robotseason2.php'); ?></a></div>
</div>


</body>
</html>

</body>
</html>