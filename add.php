<?php

if (isset($_POST['submit'])) {
  // XSS attacks
  //prevent it by using htmlspecialchars()
  echo htmlspecialchars($_POST['email'])  . '<br/>';
  echo htmlspecialchars($_POST['title']) . '<br/>';
  echo htmlspecialchars($_POST['ingredients']) . '<br/>';
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