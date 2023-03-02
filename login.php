<?php
// $url = "welcome.html";
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if($_POST)
{
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="prabodh";
$firstname = $_POST['username'];
$password = $_POST['password'];
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$query="SELECT * from prabodh where username='$username' and password='$password'";
	  $result=mysqli_query($conn,$query);
	  if(mysqli_num_rows($result)==1)
	  {
		 header("location:welcome.html?username=$username");
        // header("location:welcome.php?username=$username");
        //  echo "<div>".$username." is login.</div>";        

	  }
	  else {
	     echo 'Wrong USERNAME or PASSWORD';
		 }

}		 
?>