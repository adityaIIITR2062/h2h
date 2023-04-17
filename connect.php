<?php
$Name = $_POST['Name'];
$Birthday = $_POST['Birthday'];
$Aadhar = $_POST['Aadhar'];
$Email = $_POST['Email'];
$State = $_POST['State'];
$Income = $_POST['Income'];
$Number = $_POST['Number'];

$conn = new mysqli('localhost', 'root', '', 'registration');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration(Name, Birthday, Aadhar, Email, State, Income, Phone_Number) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissii", $Name, $Birthday, $Aadhar, $Email, $State, $Income, $Number);
    $stmt->execute();
    echo "Registration Successful!!!";
    $stmt->close();
    $conn->close();
}
?>
