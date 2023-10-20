<?php
session_start();
$conn = mysqli_connect("localhost","root","","blood");
if(! $conn ){

die('Could not connect: ' . mysqli_error());
}

if(isset($_POST['login'])){
    
 $uname=$_POST['un'];
 $pass=$_POST['ps'];
 $sql="SELECT * FROM donorlist WHERE username='$uname' AND password='$pass'";
 $run=mysqli_query($conn,$sql);
 

 if (mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_assoc($run);
    if ($row['username'] == $uname && $row['password'] == $pass) {
        $_SESSION['user'] = $row['user id'];
        echo "Login successful"; // Add this line for debugging
        header("Location: donor-dash.html");
        exit();
    } else {
        echo "Username and password don't match what's in the database. Redirecting to error page.";
        header("Location: donor-login.php?error=Invalid Username or Password");
        exit();
    }
} else {
    echo "No matching user found in the database. Redirecting to error page.";
    header("Location: donor-login.php?error=Invalid Username or Password");
    exit(); 
}   


 
}
mysqli_close($conn);
?>
