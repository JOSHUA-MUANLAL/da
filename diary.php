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
    <link rel='stylesheet' type='text/css' media='screen' href='diarylog.css'>
    <script src='main.js'></script>
</head>
<body onundo="">
    <?php
error_reporting(0);

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $s=$user;
    $e="/";
    $s.=$e; $ext=".txt";
    $s.="pass";
    $s.=$ext;
   

   
    
   
    $f=fopen($s,'r');
    if($f){
   $a=fgets($f);
if($pass==$a){
    
 $x=$user;
$x.=$e;$loc="window.php";
$x.=$loc;
    echo $x;

    header("location:$x");
}
else{
    echo"<script>alert('WRONG PASSWORD');</script>";
}

    }
    else{
        echo"<script>alert('WELCOME USER');</script>";
    }
    
    
    ?>
<h1>Welcome To My diary</h1><br>
<br><br>
 <div class="log">
    
        <h2> Log In</h2>

<center><form  method="POST" class="form" >
User<br>
<input class="input" type="text" name="user"><br>
Password<br>
<input class="input" type="password" name="pass" autocomplete="off">
<br>
<input class="submit" type="submit"><br>
<a href="signup.php">Create account</a>
</form>


</center>



</div>






    




</body>
</html>