<?php

if (isset($_POST['submit'])) {
  // XSS attacks
  //prevent it by using htmlspecialchars()
  // echo htmlspecialchars($_POST['email'])  . '<br/>';
  // echo htmlspecialchars($_POST['title']) . '<br/>';
  // echo htmlspecialchars($_POST['ingredients']) . '<br/>';

  // empty() to check if its empty input
  //check email
  if (empty($_POST['email'])) {
    echo 'An email is required  <br>';
  } else {
    $email = htmlspecialchars($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'Enter a valid email';
    }
  }

  //check title
  if (empty($_POST['title'])) {
    echo 'A title is required  <br>';
  } else {
    $title = htmlspecialchars($_POST['title']);
    if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
      echo 'Title must be letters and spaces only';
    }
  }

  //check email
  if (empty($_POST['ingredients'])) {
    echo 'ingredients are required  <br>';
  } else {
    $ingredients = htmlspecialchars($_POST['ingredients']);
    if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
      echo 'ingredients must be comma-separated';
    }
  } // end of form check
}




?>
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h4 class="center">Add a Pizza</h4>

  <form action="add.php" method="POST" class="white">

    <label>Your Email:</label>
    <input type="text" name="email">

    <label>Pizza Title:</label>
    <input type="text" name="title">

    <label>Ingredients (comma separeted):</label>
    <input type="text" name="ingredients">

    <div class="center">
      <input type="submit" name="submit" value="Submit" class="btn brand">
    </div>

  </form>
</section>

<?php include('templates/footer.php'); ?>



</html>