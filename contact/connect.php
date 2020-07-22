<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];

    $conn = new mysqli('localhost','root',' ','text');
    if($conn->connect_error){
        die('connection failed :' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into shubham123(firstname,lastname,country,subject))
            value(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$firstname, $lastname, $country, $subject);
        $stmt->execute();
        echo "we will conntect you according to our time......";
        $stmt->close();
        $conn->close();

    }


?>
