
  <?php
$userName=$_POST['uname'];
$password=$_POST['pword'];
$repassword=$_POST['rpword'];
 /*$userName=stripslashes($userName);
 $password=stripslashes($password);
 $userName=mysql_real_escape_string($userName);
 $password=mysql_real_escape_string($password);*/
 //sql connect
 if($password!=$repassword){
   echo "<h1>Password Didn't Match</h1>"
 }
 $mysqli=new mysqli("localhost","root","","login");
$result=$mysqli->query("select * from users where username='$userName'");
$has=null;
while($isthere=mysqli_fetch_assoc($result)){
$has=$isthere['username'];
}
echo $has;
if(!($has==null)){
  echo "-->Already exist";
}
else {
  $mysqli->query("INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$userName', '$password')");
  header("Refresh:0; url=login.html");
}
//$row=mysqli_fetch_array($result);

while($row=mysqli_fetch_assoc($result)){
  echo $row['username']."</br>";
  echo $row['password']."</br>";
}

 //query
/* $result=mysql_query("select * from users where username='$userName' and password='$password'")
 or die("Failed to query database".mysql_error());
 $row=mysql_fetch_array($result);
 if($row['username']==$userName && $row['password']==$password){
   echo "Hello".$row['username'];
 }
 else{
   echo"failed to login";
 }*/


   ?>
<script >
function changeInner(){
  document.getElementById("emailmod").innerHTML = "Email id Already Exist";
}
</script>
