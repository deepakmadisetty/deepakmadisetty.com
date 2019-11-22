<?php

    session_start();

    if($_GET['logout'] == 1 AND $_SESSION)
    {
        session_destroy();
        
        $message = "You have been logged out. Have a nice day!";
        
    }

    include("connection.php");

    if($_POST['submit']=="Sign Up") {
        
        if(!$_POST['first_name']) $error.= "<br />Pleaes enter your first name!";
        
        if(!$_POST['last_name']) $error.= "<br />Pleaes enter your last name!";
        
        if(!$_POST['email']) $error.= "<br />Pleaes enter your email!";
        
        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address!";
        
        if(!$_POST['password']) $error.= "<br />Please enter a password!";
            
        else {
                
            if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include atleast one capital letter in your password!";
            if(strlen($_POST['password']) < 8 ) $error.="<br />Please enter a password with atleast 8 characters!";
        }
        
        if ($error) $error = "There were error(s) in your sign up details:".$error;            
        
        else {
                
            $query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($conn, $_POST['email'])."'" ;
        
            $result = mysqli_query($conn, $query);
            
            $results = mysqli_num_rows($result);
                    
			if ($results) $error = "The email is already registered. Do you want to log in?";
            
            else {
                
                $query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('$_POST[first_name]', '$_POST[last_name]', '".mysqli_real_escape_string($conn, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                
                mysqli_query($conn, $query);
                
                echo "You have been Signed up!";
                
                $_SESSION['id']=mysqli_insert_id($conn);
                                
                header("Location:mainpage.php");
                
            }
        }

    }

    if($_POST['submit'] == "Log In") {
        
        $query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($conn, $_POST['loginemail'])."'AND 
		password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "'LIMIT 1";
        
		$result = mysqli_query($conn, $query);
		
		$row = mysqli_fetch_array($result);
                        
        if($row) {
        
            $_SESSION['id']=$row['id'];
            
            header("Location:mainpage.php");

        }
        
        else {
        
            $error = "We could not find a user with that email or password";
            
        }
        
        
    }
    
?>