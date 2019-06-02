<?php
  session_start();
  if(isset ($_SESSION['name']))
  {
	  echo "YOU ARE ALREADY LOGGED IN";
	  header('location:Insert2.php');
	  exit();
  }
?>


<html>
<head>
<title> Index file </title>
</head>
<body>
<h1> Enter Details <h1>
<form action="Insert2.php"method="post">
<table align="center" style="margin-top:200px;">
<tr>
<td> Username :</td>
<td> <input type="text" name="username"></td>
</tr>

<tr>
<td> E-mail Address :</td>
<td> <input type="email" name="email"></td>
</tr>
<tr>

<td colspan="2" align="center"> <input type="Submit"name="Submit" ></td>
</tr>



</form>

</body>

</html>
