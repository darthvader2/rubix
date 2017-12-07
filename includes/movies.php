
<!DOCTYPE html>

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
      <li class="active"><a href="index.php"    >Home</a></li>
      <li><a href="#">Movies</a></li>
      <li><a href="series.php">TV SHOWS</a></li>
       
    
    </ul>
    
    </ul>
  </div>
</nav>


<!--image carousal-->


<div>
  <h2>ENGLISH</h2>
  <?php include('imageenglish.php');?>
</div>




<div>
		<h2>TELUGU</h2>
    <div><?php include ('teluguimage.php'); ?></a></div>
</div>

<div>
    <h2>TAMIL</h2>
    <div><?php include ('tamilimage.php'); ?></a></div>
</div>


<div>
    <h2>action</h2>
    <div><?php include ('action.php'); ?></a></div>
</div>

<div>
    <h2>romance</h2>
    <div><?php include ('romance.php'); ?></a></div>
</div>


<div>
    <h2>comedy</h2>
    <div><?php include ('comedy.php'); ?></a></div>
</div>



</body>
</html>

</body>
</html>