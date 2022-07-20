<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='home.css'>
    <script src='main.js'></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="sunpacking.css">

<link href="../../Documents/Sun Packing/sun.css" rel="stylesheet" type="text/css" />

</head>

<body> 



    <script>
        function on(){
            document.getElementById("down").innerHTML="<div onmouseleave='away()'  style='border-style:solid;border-color:black;height:25vh;width:100%;background:rgba(0, 243, 255,.91);margin:0%;padding:0%;margin-top:3vmin;border-radius:8px;font-size:3vh;font-family:ROG Fonts;'>"
                +"<a href='Diary/diary.php' style='text-decoration:none;color:red;font-size:3vh;'>"+" my diary"+
                "</a>"+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"+"JOSHUA"+"</div>";
        }
        function away(){
            document.getElementById("down").innerHTML="<div>"+"</div>";
        }

        function content(){
            document.getElementById("content").innerHTML="<div style='  margin-left: 25vw; width:20%;height:20vh; margin-top:20vh; border-radius:7px; background:rgba(0, 223, 205,.91);font-size:vh;display:show;'>"+
                "JOSHUA JOSHAU"+"</div>"
        }
    </script>







    <div class="container-fluid" id="main">
        <div class="row" id="row">
            <div class="a">
              <a href="Diary/diary.php">  <p class="p">MENU</p></a>

            </div>



            <div class="b" onclick="content()">
                <p class="p">MY SELF</p>
            </div>




            <div class="c">
                <p class="p">MENU</p>
            </div>




            <div class="d"  onclick="on()" >
                <p class="p">PROJECTS</p>
                
             
              
            </div>
        



            </div>


               <div class="down" id="down">
                <p id="here">

                </p>
            </div>



  <div class="content" id="content">
        
    </div>






    </div>
  
    
</body>
</html>
