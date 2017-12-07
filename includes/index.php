<!DOCTYPE html>
<html>
<head>
  <?php
  require_once 'init.php';?>


  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="js/index.js">
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
      <li><a href="series.php">TV shows</a></li>
       
    
    </ul>
    <ul class="nav navbar-nav navbar-right">

    </ul>
  </div>
</nav>


<!--image carousal-->


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 0px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 500px ">
    <div class="item active">
      <img src="../images/dunkirk2.jpg" style="height: 500px;width: 100%">

    </div>

    <div class="item">
      <img  src="../images/siliconvalley.jpg" alt="Chicago" style="height: 500px;width: 100%">
    </div>

    <div class="item">
      <img src="../images/transformers.jpg" alt="New York" style="height: 500px;width: 100%" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</body>
</html>