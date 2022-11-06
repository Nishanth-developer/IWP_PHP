<!DOCTYPE html>
<html>
<head>
    <title>Insert page</title>
</head>
<body>
    <center>
        
    <?php   

define('DB_HOST', 'localhost');
define('DB_USER', 'Nishanth');
define('DB_PASS', '123456');
define('DB_NAME', 'iwp_da');


$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


$Customer_name = $_POST['name'];
$Customer_email = $_POST['email'];
$Customer_phno = $_POST['mobile'];
$Customer_plan = $_POST['plan'];
$Customer_address = $_POST['address'];
$Customer_feedback = $_POST['feedback'];

$sql = "INSERT INTO customer_data VALUES ('$Customer_name','$Customer_email','$Customer_phno','$Customer_plan','$Customer_address','$Customer_feedback')";

if(mysqli_query($conn, $sql)){
    header('Location: done.php');
}

mysqli_close($conn);

?>


    </center>
</body>
 
</html>