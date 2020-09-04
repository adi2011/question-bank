<?php
session_start();
$_SESSION["current"];
?>  
<!DOCTYPE html>
<html ⚡>
<head>
	<meta charset="utf-8"></meta>
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<link rel="canonical" href="$SOME_URL">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  align-items: center;
  background-color: #d1def0;
  display: flex;
  flex-direction: column;
  height: 100vh;
  justify-content: center;
  margin: 0;
  width: 100vw;
}
body * {
  box-sizing: border-box;
  font-family: Montserrat, sans-serif;
}
.bevel {
  align-items: center;
  border-radius: 12px;
  box-shadow: 3px 3px 6px 3px rgba(0, 0, 0, 0.1), -3px -3px 3px 3px rgba(247, 251, 255, 0.5), 3px 3px 8px 2px rgba(0, 0, 0, 0) inset, -3px -3px 7px 2px rgba(247, 251, 255, 0) inset;
  display: flex;
  justify-content: space-around;
  padding: 12px 24px;
  transition: border 0.1s ease, box-shadow 0.1s ease;
}
.bevel span {
  margin-right: 20px;
}
.bevel strong {
  margin-right: 20px;
}
button .arrow {
  border-right: 2px solid #b3c8e6;
  border-top: 2px solid #b3c8e6;
  display: inline-block;
  height: 16px;
  margin-right: 0;
  transform: translateX(-4px) rotate(45deg);
  width: 16px;
}
.button {
  align-items: center;
  background-color: #d9e3f2;
  border: 3px solid transparent;
  box-shadow: 3px 3px 6px 3px rgba(0, 0, 0, 0.1), -3px -3px 3px 3px rgba(247, 251, 255, 0.5), 3px 3px 8px 2px rgba(0, 0, 0, 0) inset, -3px -3px 7px 2px rgba(247, 251, 255, 0) inset;
  color: transparent;
  cursor: pointer;
  display: flex;
  font-size: 1.5em;
  height: 48px;
  justify-content: center;
  position: relative;
  -webkit-text-stroke: 1px #7989A4;
  text-stroke: 1px solid #7989A4;
  transition: border 0.1s ease, box-shadow 0.1s ease, color 0.1s ease, text-stroke 0.1s ease, -webkit-text-stroke 0.1s ease;
  width: 48px;
}
.button-border {
  background: linear-gradient(#d9e3f2, #d9e3f2), linear-gradient(135deg, #fff 0%, #B5BEC8 100%);
  border: 6px solid transparent;
  border-radius: 14px;
  background-repeat: no-repeat;
  background-origin: padding-box, border-box;
}
.button-border::before {
  border: 3px solid #d9e3f2;
  border-radius: 10px;
  bottom: -3px;
  content: "";
  left: -3px;
  right: -3px;
  position: absolute;
  top: -3px;
}
.button-round {
  border-radius: 50%;
}
.button-round:active {
  box-shadow: 3px 3px 6px 3px rgba(0, 0, 0, 0), -3px -3px 3px 3px rgba(247, 251, 255, 0), 3px 3px 8px 2px rgba(0, 0, 0, 0.1) inset, -3px -3px 7px 2px rgba(247, 251, 255, 0.7) inset;
}
.button-square {
  height: 64px;
  width: 64px;
}
.dot {
  background: linear-gradient(135deg, rgba(247, 251, 255, 0.7) 20%, rgba(0, 0, 0, 0.125) 100%);
  border: 2px solid #d9e3f2;
  border-radius: 16px;
  box-shadow: 3px 3px 6px 2px rgba(0, 0, 0, 0.1), -3px -3px 5px 1px rgba(247, 251, 255, 0.5);
  cursor: pointer;
  height: 32px;
  margin: 0 16px;
  width: 32px;
}
.row {
  
  align-items: center;
  display: flex;
  justify-content: space-around;
  width: 80%;
}
.row input {
  display: none;
}
.row input:checked + .button {
  border: 3px solid #e0ebf5;
  box-shadow: 3px 3px 6px 3px rgba(0, 0, 0, 0), -3px -3px 3px 3px rgba(247, 251, 255, 0), 3px 3px 8px 2px rgba(0, 0, 0, 0.1) inset, -3px -3px 7px 2px rgba(247, 251, 255, 0.7) inset;
  color: #7989A4;
  -webkit-text-stroke: 1px transparent;
  text-stroke: 1px transparent;
}
.row input:checked + .button.button-border {
  border: 6px solid transparent;
}
.row input:checked + .dot {
  background: linear-gradient(-45deg, rgba(247, 251, 255, 0.4) 20%, rgba(0, 0, 0, 0.2) 100%);
}
.screen {
  margin:0% 10%;
  align-items: center;
  background: linear-gradient(135deg, #d9e3f2, #d9e3f2);
  border-radius: 32px;
  box-shadow: inset 5px 5px 7px 5px rgba(0, 0, 0, 0.1), inset -5px -5px 7px 5px rgba(247, 251, 255, 0.6);
  display: flex;
  flex-direction: column;
  height: 150px;
  justify-content: space-around;
  width: 80vw;
}
















html,
body {
  margin: 0;
  padding: 0;
}

.section {
  width: 100%;
}

.container {
  position: relative;
  width: 1170px;
  margin: 0 auto;
  color: #444;
  font-size: 14px;
  font-weight: 300;
  font-family: Roboto, 'Open Sans', Arial, sans-serif;
  overflow: hidden;
}

.section .container {
  padding: 30px 0 50px 0;
}

.section.bg {
  background: #f7f7f7;
}
/*
  Header
*/

.hold {
  height: 80px;
}

.header {
  line-height: 80px;
  width: 100%;
  transition: line-height 0.2s linear, box-shadow 0.2s linear;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
  background: rgba(245, 245, 245, 0.97);
}

.header.small {
  line-height: 50px;
  box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.8);
}

.header.small > .container > #logo {
  height: 40px;
}

#logo {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  float: left;
  height: 40px;
  width: 170px;
  margin-left: 5px;
}

ul.nav {
  float: right;
  list-style: none;
  margin: 0;
  padding: 0;
}

ul.nav li {
  float: left;
  position: relative;
}

ul.nav li a {
  transition: color 0.2s linear;
  font-size: 18px;
}

ul.nav li:hover a {
  color: red;
}

ul.nav li a {
  padding: 21px;
  color: initial;
  text-decoration: initial;
}
/*
  Slider
*/

.section .slider,
.section .footer {
  background: #1D797E;
}

.slidercontent {
  text-align: center;
}

.hero {
  font-family: 'Roboto Slab', sans-serif;
  color: white;
  font-weight: normal;
  letter-spacing: 1px;
}

h1.hero {
  font-size: 54px;
}

h2.hero {
  font-size: 30px;
  margin-bottom: 60px;
}

h1.hero:after {
  content: "";
  width: 300px;
  position: relative;
  border-bottom: 1px solid #aaa;
  text-align: center;
  margin: auto;
  margin-top: 15px;
}

.call {
  color: white;
  display: block;
  margin-bottom: 20px;
}

.call span {
  display: inline;
  border: 1px solid white;
  padding: 8px 13px;
  font-size: 20px;
  transition: background 0.15s linear;
}

.call span:hover {
  background: rgba(255, 255, 255, 0.1);
  cursor: pointer;
}
/* 
  Columns 
*/

.col {
  float: left;
  padding: 0;
  margin: 0;
  position: relative;
}

.col.four {
  width: 23%;
  margin: 0 1%;
}

.col.three {
  width: 31.3%;
  margin: 0 1%;
}

.col.two {
  width: 40%;
  margin: 0 2.5%;
  padding: 0 2.5%;
}

.col.extrapad {
  padding-top: 20px;
  padding-bottom: 20px;
}

.col .service,
.col .feature {
  font-size: 21px;
  font-weight: 300;
  font-family: 'Roboto Slab', sans-serif;
}

.col .service:after {
  content: "";
  width: 50px;
  position: relative;
  border-bottom: 1px solid #eee;
  display: block;
  text-align: center;
  margin: auto;
  margin-top: 15px;
}

.col .feature {
  font-size: 19px;
}

.col h1.side,
.col p.side,
.col span.side:first-of-type {
  margin-left: 50px;
  text-align: left;
}

.col .icon {
  border-radius: 50%;
  height: 85px;
  width: 85px;
  line-height: 85px;
  text-align: center;
  margin: 0 auto;
  transition: background 0.25s linear, color 0.25s linear;
}

.col .icon.side {
  position: absolute;
  padding: 0;
  margin: 0;
  top: -15px;
  height: 50px;
  width: 50px;
}

.col:hover > .icon {
  background: #F44336;
  color: white;
}

.col:hover > .icon.side {
  background: initial;
  color: initial;
}

.responsivegroup {
  display: none;
}
/*
  Column specifics
*/

.col p,
.col h1 {
  padding: 0 1%;
  text-align: center;
}

.group.margin {
  margin-bottom: 20px;
}

.col .imgholder {
  height: 300px;
  width: 100%;
  background: #333;
  transition: background 0.3s linear;
}

.col.bg {
  background: #FFF;
}

.col.pointer {
  cursor: pointer;
}

.col.bg:hover .imgholder {
  background: #555;
}

.col span.feature {
  font-size: 20px;
}
/*
  Text
*/

.container > h1:not(.hero) {
  margin-bottom: 30px;
  text-align: center;
}

.container > h1:after {
  content: "";
  width: 30px;
  position: relative;
  border-bottom: 1px solid #aaa;
  display: block;
  text-align: center;
  margin: auto;
  margin-top: 15px;
}

h2 {
  font-family: 'Roboto Slab', sans-serif;
  text-align: center;
  font-weight: 400;
  font-size: 18px;
}

.left,
.left > h1,
.left > p {
  text-align: left;
}

.reset {
  text-align: left !important;
}

.reset:after {
  display: none !important;
}
/* 
  Slider with Content
*/

.white h1,
.white h2,
.white p,
.white div,
.white a {
  color: #fff;
}
/*
  Responsive
*/

.group:after {
  content: "";
  display: table;
  clear: both;
}

@media all and (max-width: 768px) {
  .container {
    width: 95%;
  }
  .col.four {
    width: 48%;
    margin: 1%;
  }
  .col.three {
    display: block;
    width: 95%;
    padding: 0;
    margin: 0 auto;
    float: none;
  }
  .header {
    height: auto;
    background: #eee;
  }
  #logo {
    position: initial;
    float: none;
    display: block;
    transform: none;
    margin: 10px auto 0 auto;
  }
  ul.nav {
    float: none;
    display: block;
    text-align: center;
    margin: 0 auto;
  }
  ul.nav li {
    float: initial;
    display: inline-block;
  }
  .responsivegroup {
    display: block;
  }
  .responsivegroup:after {
    content: "";
    display: table;
    clear: both;
  }
}

@media all and (min-width: 768px) {
  .container {
    width: 750px;
  }
}

@media all and (min-width: 992px) {
  .container {
    width: 970px;
  }
}

@media all and (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

@media all and (max-width:450px) {
  .col, .col.four, .col.three, .col.two {
    display: block;
    width: 95%;
    padding: 0;
    margin: 0 auto;
    float: none;
  }
  .col.extrapad {
    padding: 1%;
    margin-bottom: 10px;
  }
  .group {
    display: none;
  }
}

</style>

	
</head>
<body>

<div class="hold">
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
</div>
<div class="section">
  <div class="slider">
    <div class="container slidercontent">
      <h1 class="hero">Kohbee Questions</h1>
      <h2 class="hero">Questions made by the top-faculties over india to clear your concepts </h2>
    </div>
  </div>
</div>

    <?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    include('./includes/dbconfig.php');
    $ref="question-bank/number systems and its operations";
    $fetchdata = $database->getReference($ref)->getValue();
    ?>

<div>
    <?php
    if(isset($_POST['show_ques'])) {
    $_SESSION["current"]=1;
    foreach($fetchdata as $key => $row){
    if($row['id']==$_SESSION["current"])
    echo $row['ques'];
    }
    } 

    else if(isset($_POST['next'])) { 
        $_SESSION["current"]=$_SESSION["current"]+1;
        foreach($fetchdata as $key => $row){
        if($row['id']==$_SESSION["current"])
        echo $row['ques'];
    }
    }

    else if(isset($_POST['prev'])) { 
        $_SESSION["current"]=$_SESSION["current"]-1;
        foreach($fetchdata as $key => $row){
        if($row['id']==$_SESSION["current"])
        echo $row['ques'];
    }
    }

    ?>
    <?php 
    echo "<h1>";
    echo $_SESSION["current"];
    echo "</h1>";
    ?>

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

<div class="section">
  <div class="footer">
    <div class="container white">
      <div class="col four left">
        
      </div>
      <div class="group"></div>
    </div>
  </div>
</div>

</div>




		

</body>
</html>