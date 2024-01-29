
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['number'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','useraccount');
if($conn-> connect_error){
    die('Connection faild :'.$conn->connect_error);
}else{
    if(isset($_POST['submit'])){
        $stmt= $conn->prepare("INSERT INTO user(firstname, lastname, email, number, password) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $firstname, $lastname, $email, $number, $password);
        $exeval= $stmt->execute();
        
    
        echo 'Registration Successfully.....';
        $stmt->close();
        $conn->close();
    }

    }

?>
