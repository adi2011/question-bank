<?php
// $input='Q. 9';
// function inc($matches) {
//     return ++$matches[1];
// }
// $input = preg_replace_callback("|(\d+)|", "inc", $input);
// $input = preg_replace_callback("|(\d+)|", "inc", $input);
// echo '<h1>';
// echo $input;
// echo '</h1>';
?>
<!DOCTYPE html>
<html>
<body>

<h1>NCERT SOLUTIONS:</h1>
<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
    include('./includes/dbconfig.php');
    $ref="ncert-solutions";
    $fetchdata = $database->getReference($ref)->getValue();
    ?>

<form method="POST">
  <label for="class">Class:</label>
  <select name="class" id="class">
    <?php
    foreach($fetchdata as $key => $value) {  
    echo '<option value="'
    echo $key;
    echo '">';
    echo $key;
    echo '</option>';
    }
    ?>
    <!-- <option value="Class7">Class 7</option>
    <option value="Class7">Class 8</option>
    <option value="Class7">Class 9</option>
    <option value="Class7">Class 10</option> -->
  </select>
  <input type="submit" value="Click Here">
</form>

<?php
if(isset($_POST['class'])){
// echo "<form method="POST">
//   <label for="subject">Subject:</label>
//   <select name="subject" id="subject"> ";
    
  $ref="ncert-solutions/".$_POST['class'];
  echo $ref;
  // $fetchdata = $database->getReference($ref)->getValue();
  // foreach($fetchdata as $key => $value) {  
  //   echo '<option value="'
  //   echo $key;
  //   echo '">';
  //   echo $key;
  //   echo '</option>';
  //   }
  //   // <option value="maths">Maths</option>
  //   // <option value="science">Science</option>
  // echo '</select>';
  // echo '<input type="submit" value="Click Here">'
  // echo '</form>';
  // }
  ?>

  <form method="POST">
  <label for="chapter">Chapter:</label>
  <select name="chapter" id="chapter">
    <?php
    ?>



    <option value="chapter1/ Knowing our Numbers">Chapter 1</option>
    <option value="chapter2/ Whole Numbers">Chapter 2</option>
    <option value="chapter3/ Playing with Numbers">Chapter 3</option>
    <option value="chapter4/ Basic Geometrical Ideas">Chapter 4</option>
    <option value="chapter5/ Understanding Elementary Shapes">Chapter 5</option>
    <option value="chapter6/ Integers">Chapter 6</option>
    <option value="chapter7/ Fractions">Chapter 7</option>
    <option value="chapter8/ Decimals">Chapter 8</option>
    <option value="chapter9/ Data Handling">Chapter 9</option>
    <option value="chapter10/ Mensuration">Chapter 10</option>
    <option value="chapter11/ Algebra">Chapter 11</option>
    <option value="chapter12/ Ratio and Proportion">Chapter 12</option>
    <option value="chapter13/ Symmetry">Chapter 13</option>
    <option value="chapter14/ Practical Geometry">Chapter 14</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the 
server called "action_page.php".</p>

</body>
</html>