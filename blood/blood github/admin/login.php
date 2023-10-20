
<?php
$conn = mysqli_connect("localhost","root","","blood");
if(! $conn ){

die('Could not connect: ' . mysqli_error());
}

if(isset($_POST['submit'])){
    
 $uname=$_POST['uname'];
 $pass=$_POST['pass'];
 $sql="SELECT * FROM admin_login WHERE username='$uname' AND password='$pass'";
 $run=mysqli_query($conn,$sql);

 if (mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_assoc($run);
    if ($row['username'] == $uname && $row['password'] == $pass) {
        header("Location: admin-home.php");
    } else {
        echo "Username and password don't match what's in the database. Redirecting to error page.";
        header("Location: admin-login.php?error=Invalid Username or Password");
    }
} else {
    echo "No matching user found in the database. Redirecting to error page.";
    header("Location: admin-login.php?error=Invalid Username or Password");
}


 
}
mysqli_close($conn);
?>