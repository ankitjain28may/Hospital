
<?php

  session_start();
  
require_once("connectvars.php");
   // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['username'])) {
    if (isset($_COOKIE['username'])) {
      $_SESSION['username'] = $_COOKIE['username'];
    }
  }
   if(!isset($_SESSION['usermain'])) {
    if (isset($_COOKIE['usermain'])) {
      $_SESSION['usermain'] = $_COOKIE['usermain'];
    }
  }
  if(isset($_SESSION['usermain']))
  {
	 $home_url = 'http://'.DB_HOST.'/Hospital/mainhospital.php';
  header('Location: ' . $home_url);
  }
 if(isset($_SESSION['username']))
  { 

  $home_url = 'http://'.DB_HOST.'/Hospital/patient.php';
  header('Location: ' . $home_url);
  }
  
?>
<html ng-app="indexapp">
<head >
	<title>Admin page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="angular-loader/build/loading-bar.css">
<script type="text/javascript" src="angular.min.js"></script>
<script type="text/javascript" src="angular-route.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.backstretch.min.js"></script>
<script type="text/javascript" src="angular-loader/build/loading-bar.js"></script>
<script src="indexroute.js"></script>


</head>

<body>

<div class="ng-view"></div>
</body>
<script>
 $.backstretch([
      "HOSPITALHEART_1stblue.jpg",
      "HOSPITALHEART1_midblue.jpg",
      "HOSPITALHEART1_lastblue.jpg"    
      ], {
        fade: 1050,
        duration: 500
    });


</script>
</html>