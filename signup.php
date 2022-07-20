<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" type="text/css" href="sunpacking.css">

    <link href="../../Documents/Sun Packing/sun.css" rel="stylesheet" type="text/css" />
    <title>My DIARY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel='stylesheet' type='text/css' media='screen' href='signup.css'>
   

</head>
<body >
<?php
error_reporting(0);
$name=$_POST['name'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$confirm=$_POST['confirm'];
$e="/";
$ext=".txt";
$d=$user;
if(is_dir($d) && $d!=" ")
{
    
    echo"<script> alert('THIS USER NAME IOS ALREADY TAKEN');</script>";
}
else
{
   if($pass!=$confirm)
   {
    echo "<script> alert('PASS DOES NOT MATCH');</script>";
   }
   else{
    $dir=$user;
   
echo $dir;
    mkdir($dir);
    $file=$dir;
    $file.=$e;
    $file.="pass";
    $file.=$ext;
    
echo $file;
$f=fopen($file,'w');
fputs($f,$pass);
fclose($f);


//window
$w=$dir;
$ww="window.php";
$w.=$e;
$w.=$ww;
$f=fopen("RESOURCE1234/win.txt",'r');
$copy=fread($f,1000000);
 $win=fopen($w,'w');
 fputs($win,$copy);
 fclose($f);
 fclose($win);


//winstyle
$style=$dir;
$style.=$e;
$style.="winstyle.css";
$f=fopen("RESOURCE1234/winstyle.txt",'r');
$winstyle=fopen($style,'w+');
$copy=fread($f,100000);
fputs($winstyle,$copy);
fclose($f);
fclose($winstyle);



//read

$read=$dir;
$read.=$e;
$read.="read.php";
$f=fopen("RESOURCE1234/read.txt",'r');

$readd=fopen($read,'w+');

$copy=fread($f,100000);
fputs($readd,$copy);

fclose($f);
fclose($readd);


//write
$write=$dir;
$write.=$e;
$write.="write.php";

$f=fopen("RESOURCE1234/write.txt",'r');

$writee=fopen($write,'w+');

$copy=fread($f,100000);

fputs($writee,$copy);


  




}
    

}



?>

 <div class="sign">
   
        <h2> SIGN UP WITH US</h2>
 <div class="form">
<form method="POST">
Name<br>
<input type="text" name="name" id="name">
<br>
user<input type="text" name="user">
<br>
Password<br>
<input type="password" name="pass">
<br>
Confirm<br>
<input type="password" name="confirm">

<input type="submit" value="create" onclick="create()">

</form> 


</div>


</div>






    




</body>
</html>