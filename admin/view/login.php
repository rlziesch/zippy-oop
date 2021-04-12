<p><?php 
   // require_once('util/secure_conn.php');
    

    if (isset($login_message)) {
        echo "Message: " . $login_message;
    }
?></p>

<h2>Admin Login</h2>
<form action="." method="post" id="add_vehicle_form" class="add_vehicle_form">
    <input type="hidden" name="action" value="login">
    <div>
        <label>Username:</label>
        <input type="text" name="username" min="1920" max="2100" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" min="1920" max="2100" required>
        <br><br>
        <input type="submit" value="User Login" class="button blue">
        <br>
    </div>
</form>