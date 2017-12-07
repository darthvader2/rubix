  
<!DOCTYPE html>

<html>
<head>
  <?php
  require_once 'init.php';
  
    
  $ID =  mysqli_real_escape_string($db,$_GET['ID']);



  $sql = "SELECT * FROM movies WHERE m_id = $ID ";
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
      <li><a href="#">Series</a></li>
       <li><a href="#">Series</a></li>
    
    </ul>
    
    </ul>
  </div>
</nav>


<h1 style="text-align: center;font-color:white"><?php echo $row['title'] ?></h1>



<video src="<?php echo $row['location'] ?>" controls autoplay style="height:70%;width:50%;margin-left: 300px" type="video/mkv"></video>

<h2>DESCRIPTION</h2>
<p><?php echo $row['description'] ?></p>


</body>
</html>

</body>
</html>