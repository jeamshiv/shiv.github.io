
<h2>Http Browser</h2><br>
<?php 

/*"HTTP_REFERER"
"REMOTE_ADDR"
"REQUEST_URI"
"HTTP_HOST"
"HTTP_USER_AGENT"
"REDIRECT_STATUS"*/


echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
foreach ($browser as $data) {
	echo $data;
}
?>

<Br><br><h2>Http refered</h2><br>
<?php 
	if(isset($_SERVER['HTTP_REFERER'])) {
    echo $_SERVER['HTTP_REFERER'];
}
 ?>


 <Br><br><h2>Remote address</h2><br>

 <?php 

  $ipaddress = getenv("REMOTE_ADDR") ; 
  echo "Your IP Address is " . $ipaddress;

?>
<br><h2>Remote address</h2><br>

<?php 
	echo "Computer name is ". get_current_user();
  ?>


<?php 
 $ipaddress = $_SERVER['REMOTE_ADDR']; 
 echo "Your IP Address is " . $ipaddress; 
?>


 <?php 
    echo "server software ". $_SERVER['SERVER_SOFTWARE'];
  ?>


<br><h2>Server host</h2><br>
<?php
echo "This is php self ".  $_SERVER['PHP_SELF'];
echo "<br>";
echo "Server Name " .$_SERVER['SERVER_NAME'];
echo "<br>";
echo "http host " .$_SERVER['HTTP_HOST'];
echo "<br>";

echo "http user agent ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "script name ".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "server software ". $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>Now readable format<br>";


$request_time = $_SERVER['REQUEST_TIME'];
date_default_timezone_set("Asia/Calcutta");

echo(date("F d, Y h:i:s A", $request_time));

echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br>";



echo $_SERVER['SERVER_ADMIN'];
echo "<br>Below <br> User Device User name";

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo $hostname;

?><br><BR><Br><Br>

  <?php 

      $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
      echo $hostname;

   ?>

<?php 
 
 echo getmyuid();

 ?>

 <br><BR><BR>

 <?php 

echo "Computer name is ";
 echo get_current_user();

  ?>
  <br><br><BR>

  <?php 

echo "mygid ";
echo getmygid();

   ?>
  <br><Br><BR>

  <?php 

  echo "getmypid ";
  echo getmypid();

   ?>

     <br><Br><BR>

  <?php 

  echo "getmyinode  ";
  echo getmyinode();

   ?>

     <br><Br><BR>

  <?php 

  echo "getlastmod ";
  echo getlastmod();
  echo" last mod" .(date("F d, Y h:i:s A", getlastmod()));

   ?>
    <br><Br><BR>
<?php 

	echo "User Ip address";
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	echo $ip;
 ?>

 <?php 
 if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
 	echo "User IP address is ". $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else{
 	echo "Unable to get User's IP Address";
 	}
  ?>

