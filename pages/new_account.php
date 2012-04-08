<h3>Account creation</h3>
<?php
    if (isset($_POST['create_account']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['gender'])) {
        if($_POST['username'] != "" || $_POST['password'] != ""){
            if ($db->createAccount($_POST['username'], $_POST['password'], $_POST['gender'])) {
            echo "Successfully created user acount. Now log in.";
        } else {
            echo "Hmm...your account could not be created. Try another username.";
        }
        } else {
            echo "Username and password field can't be empty";
        }
    } else {
        echo "Some user creation information is missing.";
    }
?>
