<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../../public/assets/css/app.css">
</head>
<body>

<?php if(!isset($_SESSION)) {
     session_start();
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/" style="color:#ff97cb; font-weight: bold"><img src="public/resources/img/main/logo.gif" alt="fancy" width="50" height="25"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothes <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/men">Men</a></li>
          <li><a href="/women">Women</a></li>
        </ul>
      </li>
      <li><a href="/contacts">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if(isset($_SESSION['user'])) :?>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp<?=$_SESSION['user'][0]->first_name . ' ' . $_SESSION['user'][0]->last_name?></a></li>
      <li><a href="/" onclick="$.post('/logout');"><span class="glyphicon glyphicon-log-in"></span>&nbspLog Out</a></li>
    <?php else :?>
      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php endif ?>
      
    </ul>
  </div>
</nav>

