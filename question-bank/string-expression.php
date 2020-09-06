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
    echo $fetchdata->getValue();
    ?>

<form action="./question.php" method="POST">
  <label for="class">Class:</label>
  <select name="class" id="class">

    <option value="Class6">Class 6</option>
    <option value="Class7">Class 7</option>
    <option value="Class7">Class 8</option>
    <option value="Class7">Class 9</option>
    <option value="Class7">Class 10</option>

  </select>
  
  <label for="subject">Subject:</label>
  <select name="subject" id="subject">
    <option value="maths">Maths</option>
    <option value="science">Science</option>
  </select>

  <label for="chapter">Chapter:</label>
  <select name="chapter" id="chapter">
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