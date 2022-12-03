<?php
    require_once "validation.php";

    $nameErr = $surnameErr = $dobErr = $passwordErr = $retypePasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $retypePassword = $_POST['retypePassword'];

        // Validacija za ime
        if(text_validation($name)) {
            $nameErr = text_validation($name);
        }

        // Validacija za prezime
        if(text_validation($surname)) {
            $surnameErr = text_validation($surname);
        }

        // Validacija za datum
        if(date_validation($dob)) {
            $dobErr = date_validation($dob);
        }

        // Validacija za password
        if(passwordValidation($password)) {
            $passwordErr = passwordValidation($password);
        }

        // Validacija za re.password
        if(passwordValidation($retypePassword)) {
            $retypePasswordErr = passwordValidation($retypePassword);
            if($password != $retypePassword) {
                $retypePasswordErr = "Password and retype password must be the same";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <form action="#" method="post">
        <p>
            Name:
            <input type="text" name="name">
            <span class="err" id="err_name">* <?php echo $nameErr; ?></span>
        </p>
        <p>
            Surname:
            <input type="text" name="surname">
            <span class="err" id="err_surname">* <?php echo $surnameErr; ?> </span>
        </p>
        <p>
            Gender:
            <input type="radio" name="gender" value="m">Male
            <input type="radio" name="gender" value="f">Female
            <input type="radio" name="gender" value="o" checked>Other
        </p>
        <p>
            Date of birth:
            <input type="date" name="dob">
            <span class="err" id="err_surname">* <?php echo $dobErr; ?> </span>
        </p>
        <p>
            Username:
            <input type="text" name="username">
        </p>
        <p>
            Password:
            <input type="password" name="password">
            <span class="err" id="err_surname">* <?php echo $passwordErr; ?> </span>
        </p>
        <p>
            Retype password:
            <input type="password" name="retypePassword">
            <span class="err" id="err_surname">* <?php echo $retypePasswordErr; ?> </span>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>