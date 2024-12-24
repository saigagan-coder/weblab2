<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $address = htmlspecialchars($_POST["address"]);

    echo "
    <h1>Form Submitted Successfully</h1>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone Number:</strong> $phone</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Address:</strong> $address</p>";
} else {
    echo "Invalid request method!";
}
?>
