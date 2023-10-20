<?php
// Start or resume the session

// Establish a database connection (replace with your database credentials)
$conn = mysqli_connect("localhost", "root", "", "blood");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the user ID from the form
if(isset($_POST['user_id'])){
    $user_id = $_POST['user_id'];

    // Retrieve the donation history data from the database (adjust the query as per your database structure)
    $sql = "SELECT * FROM dstatus WHERE `user id` = '$user_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered'>
                <thead class='table-dark'>
                    <tr>
                        <th>Donation ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Age</th>
                        <th>Blood Group</th>
                        <th>Disease</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['did']."</td>";
            echo "<td>".$row['user id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['unit']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['bg']."</td>";
            echo "<td>".$row['disease']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "</tr>";
        }
        echo "</tbody>
            </table>";
    } else {
        echo "No records found.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
