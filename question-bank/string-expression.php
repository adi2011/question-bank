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


<form action="./action.php" method="POST">
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
    <option value="chapter1">Chapter 1</option>
    <option value="chapter2">Chapter 2</option>
    <option value="chapter3">Chapter 3</option>
    <option value="chapter4">Chapter 4</option>
    <option value="chapter5">Chapter 5</option>
    <option value="chapter6">Chapter 6</option>
    <option value="chapter7">Chapter 7</option>
    <option value="chapter8">Chapter 8</option>
    <option value="chapter9">Chapter 9</option>
    <option value="chapter10">Chapter 10</option>
    <option value="chapter11">Chapter 11</option>
    <option value="chapter12">Chapter 12</option>
    <option value="chapter13">Chapter 13</option>
    <option value="chapter14">Chapter 14</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the 
server called "action_page.php".</p>

</body>
</html>