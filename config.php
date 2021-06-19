<?php


// ----------------Database Details----------
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// ----------------Database Connection ----------
$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_errno) {
    die("Database connection error" . $conn->connect_error);
}

//----------< data insert to the "database" database-> "contact_information" table on view btn click>---------

if (isset($_POST['send'])) {
    $Cus_Name = $_POST['full_name'];
    $Cus_Email = $_POST['email'];
    $Cus_Msg = $_POST['message'];
    $query = "INSERT INTO `contact_information`(`customer_no`, `customer_name`, `customer_email`, `customer_msg`) VALUES ('null','$Cus_Name','$Cus_Email','$Cus_Msg')";
    $ressult = mysqli_query($con, $query);
    if ($ressult) {
        $mesg = "<script>if(confirm('Thanks for your feedback .Go to the Home page')){document.location.href='index.php'};</script>";
        echo $mesg;
    } else {
        echo "mysql_error";
    }
}

//----------< ata insert to the "database" database-> "card_details" table on processing btn click >---------

if (isset($_POST['prs'])) {
    $Sender_Name = $_POST['name-sender'];
    $Reciver_Name = $_POST['name-reciver'];
    $Card_img = $_POST['img'];
    $Song = $_POST['song'];
    $query = "INSERT INTO `card_details`(`card_no`, `s_name`, `r_name`, `img_no`, `song_no`) VALUES ('null','$Sender_Name','$Reciver_Name','$Card_img','$Song')";
    $ressult = mysqli_query($con, $query);
    if ($ressult) {
        $mesg = "<script>window.alert('සුබපැතුම් පත්‍රය සැකසීම සාර්ථකයි.');</script>";
        echo $mesg;
    } else {
        echo "mysql_error";
    }
//    header('location: GenarateForm.php');
}
?>