<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JolNacord University Form</title>
<link rel="icon" href="sl-removebg-preview.png" type="image/icon type">

<body>
    <div class="logo-container">
        <img src="sl-removebg-preview.png" class="logo">
    </div>
    <div class="container">
        <?php

        $serverName = "localhost"; 
        $username = "root";
        $password = "";
        $dbName = "reg";

        $con = mysqli_connect($serverName, $username, $password, $dbName);
        if (mysqli_connect_errno()) {
            echo "Failed to connect!";
            exit();
        }
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $dob = $_POST["dob"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];
            $barangay = $_POST["barangay"];
            $city = $_POST["city"];
            $province = $_POST["province"];
            $postalCode = $_POST["postalCode"];
            $course = $_POST["course"];
            $sql = "INSERT INTO form (first_name, last_name, dob, email, mobile, gender, address, barangay, city, province, postal_code, course) 
                    VALUES ('$firstName', '$lastName', '$dob', '$email', '$mobile', '$gender', '$address', '$barangay', '$city', '$province', '$postalCode', '$course')";

            if (mysqli_query($con, $sql)) {
                echo "<strong>FORM SUBMITTED SUCCESSFULLY!<br><br>";
                echo "First Name: $firstName<br><br>";
                echo "Last Name: $lastName<br><br>";
                echo "Date of Birth: $dob<br><br>";
                echo "Email Address: $email<br><br>";
                echo "Mobile Number: $mobile<br><br>";
                echo "Gender: $gender<br><br>";
                echo "Address: $address<br><br>";
                echo "Barangay: $barangay<br><br>";
                echo "City: $city<br><br>";
                echo "Province: $province<br><br>";
                echo "Postal Code: $postalCode<br><br>";
                echo "Applied Program: $course<br><br>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }

            mysqli_close($con);
        } else {
            echo "Invalid request. Please submit the form.";
        }
        ?>

        <div class="form-group buttons">
            <strong><button type="submit" onclick="window.location.href='front.html'" value="Checkout">NEXT</strong>
            </button>
        </div>
    </div>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("jnu.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .logo-container {
        position: absolute;
        top: -80px;
        left: 26px;
    }

    .logo {
        height: 250px;
        margin: 0;
    }

    h1 {
        font-size: 24px;
        color: #333;
    }

    .container {
        width: 500px;
        text-align: center;
        margin: 50px auto;
        border-radius: 5px;
        max-width: 80%;
        padding: 50px;
        background-color: rgba(224, 224, 224, 0.8);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>

</html>