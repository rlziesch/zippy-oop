<?php 
    switch($action) {
        case 'logout':
            $_SESSION = array(); //clears session data
            session_destroy(); // cleans up session ID
            $login_message = 'You have been logged out.';
            include('./view/login.php');
            break;

        case 'show_register':
            include('./view/register.php');
           
            break;

        case 'show_login':
            include('./view/login.php');
            break;

        case 'login':
            if (AdminDB::is_valid_admin_login($username, $password)) {
                $_SESSION['is_valid_admin'] = true;
                header("Location: .?action=list_vehicles");
            } else {
                $login_message = "Incorrect username or password.";
                include('./view/login.php');
            }
           
            break;
        
        case 'register':
            include('./util/valid_register.php');
                if (AdminDB::username_exists($username)) {
                    array_push($errors, "The username you entered is already taken.");
                }
            $errors = ValidRegister::valid_registration($username, $password, $confirm_password);
                if ($errors) {
                    include('./view/register.php');
            
                } else {
                    AdminDB::add_admin($username, $password);
                    $_SESSION['is_valid_admin'] = true;
                    header("Location: .?action=list_vehicles");
                }   
            break;   

    }