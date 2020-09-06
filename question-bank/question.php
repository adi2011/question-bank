<?php
session_start();
?>  
<!DOCTYPE html>
<html ⚡>
<head>
	<meta charset="utf-8"></meta>
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<link rel="canonical" href="$SOME_URL">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>
    <title>Question Bank</title>
	<style>
	/*
  terrible.css
  Andrew Tunecliffe, 2015
  http://atunnecliffe.com
*/
/* uncomment to see outlines of stuff when you hover *-/
:hover {
  background:rgba(0, 0, 0, 0.1);
}/**/

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  margin: 0% 25%;
  background-color: transparent;
  width: 50%;
  height: 1000px;
  perspective: 1000px;
}

.flip-card-inner {

   border-radius: 40px;
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  
   border-radius: 40px;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
    align-content:centre;
    background: #f4f6ff;
    color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}


</style>

	
</head>
<body>

<!-- <div class="hold">
  <div class="header">
    <div class="container">
      <div id="logo">
	  <img src="./logo_kohbee.png" width=80 height=50></img>
      </div>
      <ul class="nav">
        <li><a href="https://www.kohbee.com">Home</a></li>
        <li><a href="https://www.kohbee.com/notes">Notes</a></li>
		<li><a href="https://kohbee.com/contact-us-2/">Contact us</a></li>
      </ul>
    </div>
  </div>
</div> -->


    <?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    include('./includes/dbconfig.php');
    $ref="ncert-solutions/".$_POST["class"]."/".$_POST["subject"]."/".$_POST["chapter"];
    echo "ref is <h1>";
    echo $ref;
    echo "</h1>\n"
    $fetchdata = $database->getReference($ref)->getValue();
    ?>

<div>
    <?php
    
    function inc($matches) {
          return ++$matches[1];
    }

    if(isset($_POST['show_ques'])) {
      $input='Q. 1';
    // $_SESSION["current"]=1;
    foreach($fetchdata as $key => $row){
    if($row['question_no']==$input){
    echo '   <div class="flip-card"><div class="flip-card-inner"><div class="flip-card-front">';
    echo $row['ques'];
    echo '</div><div class="flip-card-back">';
    echo 'THIS IS BACK SIDE';
    echo '</div></div></div>';
    break;
    }
    }
    } 

    else if(isset($_POST['next'])) { 
       $input = preg_replace_callback("|(\d+)|", "inc", $input);
        // $_SESSION["current"]=$_SESSION["current"]+1;
        foreach($fetchdata as $key => $row){
        if($row['question_no']==$input){
             echo '<div class="flip-card"><div class="flip-card-inner"><div class="flip-card-front">';
        echo $row['ques'];
        echo '</div><div class="flip-card-back">';
        echo 'THIS IS BACK SIDE';
        echo '</div></div></div>';
        break;
        }
      }
    }

    else if(isset($_POST['prev'])) { 
        $_SESSION["current"]=$_SESSION["current"]-1;
        foreach($fetchdata as $key => $row){
        if($row['id']==$_SESSION["current"]){
            
          echo '   <div class="flip-card"><div class="flip-card-inner"><div class="flip-card-front">';
          echo $row['ques'];
          echo '</div><div class="flip-card-back">';
          echo 'THIS IS BACK SIDE';
          echo '</div></div></div>';
                
        }
    }
    }

    ?>

        </div>
    </div>
    <!-- <div class="content-page"><div class="main-layer"><h1>ADITYA</h1></div></div> -->
<hr><br>
    <div style="margin: 0% 30%;">
    <form method="post">
        <input type="submit" name="prev"
                value="Previous"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" name="show_ques"
                value="First Question"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" name="next"
                value="Next"/>
    </form> 
    </div>
        <br><br><br>


</body>
</html>