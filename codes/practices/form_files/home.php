<?php

require "./lib.php";

function validate_form() {
    $username = $usernameErr = $email = $emailErr = $password = $passwordErr = $confirmPassword = $confirmPasswordErr = "";
    
    echo "<span class='error'>";
    // print_r ($_POST);
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST) {
        if(empty($_POST["username"])) {
            $usernameErr = "Please provide a username <br>";
            echo $usernameErr;
        } else {
            $username = $_POST["username"];
        }

        if(empty($_POST["emai;"])) {
            $emailErr = "Please provide an email <br>";
            echo $emailErr;
        } else {
            $email = $_POST["email"];            
        }

        if(empty($_POST["password"])) {
            $passwordErr = "Please provide a password <br>";
            echo $passwordErr;
        } else {
            $password = $_POST["password"];
        }

        if(empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Please provide a confirmation password <br>";
            echo $confirmPasswordErr;
        } else {
            $confirmPassword = $_POST["confirmationPassword"];
        }        
    }
    echo "</span>";
}


function display_form() {
    echo <<<HTML_FRAGMENT
        <h1>Welcome to Playing with PHP</h1>
        <form method="post" action="">
            <input class="field type="text" name="username" placeholder="Username"/>
            <input class="field type="email" name="email" placeholder="Email"/>
            <input class="field type="password" name="password" placeholder="Password"/>
            <input class="field type="password" name="confirmPassword" placeholder="Confirm password"/>    
            <button class="btn" type="submit" name="submit">Submit</button>
        </form>
    HTML_FRAGMENT;
}
                
display_header();
display_form();
echo "<br><br>";
validate_form();
display_footer();

?>

<!-- <span class="error">* <?php $usernameErr ?></span>
<span class="error">* $emailErr</span>
<span class="error">* $passwordErr</span>
<span class="error">* $confirmPasswordErr</span> -->