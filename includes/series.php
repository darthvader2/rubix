
<!DOCTYPE html>
<style type="text/css">
  
  div.telugu{
    height: 200px;
    
  }
</style>
<html>
<head>
  <?php
  require_once 'init.php';
    ?>
	<title>Rubix-movies</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  <title>RUBIX-HOME</title>

</head>

<body style="background-color: black">
	

	<!--navbar program-->



<nav class="navbar navbar-inverse" style="height: 75px;background-color:black">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="font-size: 50px">RUBIX</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="movies.php">Movies</a></li>
      <li><a href="#">TV SHOWS</a></li>
       
    
    </ul>
    
    </ul>
  </div>
</nav>


<!--image carousal-->

 <h2>ENGLISH</h2>
 <div>
  <?php include('seriesimage.php');?>
</div>




</body>
</html>

</body>
</html>