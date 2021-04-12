<?php include 'view/header.php';

      //  require_once('util/secure_conn.php');
      //  require_once('util/valid_admin.php');
   
?>
    <h2>Register Admin</h2>
<form action="." method="post" id="add_vehicle_form" class="add_vehicle_form">
    <input type="hidden" name="action" value="register">
    <div>
        <label>Username:</label>
        <input type="text" name="username" min="1920" max="2100" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" min="1920" max="2100" required>
        <br>
        <Label>Confirm Password:</label>
        <input type="password" name="confirm_password" min="1920" max="2100" required>
        <br>
        <input type="submit" value="Register Admin" class="button blue">
        <br>
    </div>
</form>

<p><?php 
    if (isset($errors)) {
    foreach ($errors as $error) {
    echo $error;
    } }
         ?> </p>

<br>



<?php include 'view/footer.php'; ?>
