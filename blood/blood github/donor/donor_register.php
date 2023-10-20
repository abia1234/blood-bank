
<?php
$conn = mysqli_connect("localhost","root","","blood");
if(! $conn ){

die('Could not connect: ' . mysqli_error());
}

if(isset($_POST['sign'])){
    
    $name = $_POST["name"];
    $username=$_POST["un"];
    $password = $_POST["ps"];
    $gender = $_POST["gender"];
    $bgroup = $_POST["bgroup"];
    $age = $_POST["age"];
    $height = $_POST["ht"];
    $weight = $_POST["wt"];
    $disease = $_POST["dise"];
    $address = $_POST["add"];
    $mobile = $_POST["mob"];
 $sql="INSERT INTO donorlist (name, username, password, gender, `blood group`, age, height, weight, disease, address, phone) 
 VALUES ('$name','$username', '$password', '$gender', '$bgroup', '$age', '$height', '$weight', '$disease', '$address', '$mobile')";
 if (mysqli_query($conn, $sql)) {
    // Data has been successfully inserted into the database
    header("Location: donor-login.php"); // Redirect to a success page
} else {
    // Handle the error, e.g., display an error message or log the error
    echo "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>