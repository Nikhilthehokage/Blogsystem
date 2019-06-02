



<?php
   
   session_start();
   $name=$_POST['username'];
   
   $email= $_POST['email'];
   echo "<h1>Welcome</h1>"." ".$name;
   $con= mysqli_connect('localhost','root','nikhil','blogsystem');
   if($con == TRUE)
	   echo "<br>"."Connection Established";
 ?>
   <html>
   <head></head>
   <body>
   <h1> Enter Details <h1>
<form method="post">
<table align="center" style="margin-top:200px;">
<tr>
<td> Age :</td>
<td> <input type="integer" name="age"></td>
</tr>

<tr>
<td> Year:</td>
<td> <input type="integer" name="year"></td>
</tr>
<tr>
<td> Blog name:</td>
<td> <input type="text" name="blogname"></td>
</tr>
<tr>

<td colspan="2" align="center"> <input type="Submit"name="Submit" ></td>
</tr>



</form>
<h2> <a href="logout.php"style="float:right;">logout</a> </h2>

   </body>
   </html>
  <?php
    $age=$_POST['age'];
	$year=$_POST['year'];
	$blogname=$_POST['blogname'];
   $query= "INSERT INTO `blog`(`Name`, `Age`, `Year`, `e-mail`, `blogname`) VALUES ('$name,'$age','$year','$email','$blogname')";
   if($query == TRUE)
	   echo "<br>"."Connection Established";
   else
	   echo "error in query";
    $run= mysqli_query($con,$query);
	
   if($run == TRUE)
	   echo "Data inserted successfully";
   else 
	   echo "<br>"."error!";
   


?>
<?php
$con=mysqli_connect('localhost','root','nikhil','blogsystem');
function showdata()
{
	global $con;
	$query ="SELECT * FROM `blog`";
	$run= mysqli_query($con,$query);
	if($run == TRUE)
	{
		while($data= mysqli_fetch_assoc($run))
		{
		    echo "<pre>";
		    print_r($data);
		    echo "<pre>";
		}
	}
	else
		echo "<br>"."Failed";
	
}

     echo showdata();  
	 $_SESSION['name']=$_POST['username'];


?>

