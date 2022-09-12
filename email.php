<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email id is invalid";
    } else {
        echo "Email id is correct";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email validation</title>
</head>

<body>
    <form action="" method="post">
        Enter Email Id:<input type="text" name="email" placeholder="Enter email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>