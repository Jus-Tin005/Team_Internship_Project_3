<?php

$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


if(!empty($username) || !empty($email) || !empty($phone) || !empty($message)) {

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "khunTun1997";
        $dbname = "goodvides";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


        if(mysqli_connect_errno()){
                die('Connect error ! (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        }else {
                $SELECT = "SELECT email FROM register WHERE email = ? LIMIT 1 ";
                $INSERT = "INSERT INTO register (username, email, phone, message)
                                  VALUES(?, ?, ?, ?)";


                //  prepare statement
                $stmt = $conn -> prepare($SELECT);
                $stmt -> bind_param("s", $email);
                $stmt -> execute();
                $stmt -> bind_result($email);
                $stmt -> store_result();
                $rnum = $stmt -> num_rows;


                if($rnum == 0) {
                        $stmt -> close();

                        $stmt = $conn -> prepare($INSERT);
                        $stmt -> bind_param("ssis", $username, $email, $phone, $message);
                        $stmt -> execute();
                        echo "New records are inserted successfully !";
                }else {
                        echo "Someone already have registered using this email !";
                }

                $stmt -> close();
                $conn -> close();
        }
} else{
        echo "All fields are required";
        die();
}


// testing area


// 1
// function getMessage(){
//         echo "hello world";
// }


// error_reporting(E_ALL);
// ini_set('display_errors', true);

//     $host = '127.0.0.1';
//     $db   = 'projectthreetesting';
//     $user = 'root';
//     $pass = 'khunTun1997';

//     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//     try{
//         $con = mysqli_connect($host, $user, $pass, $db);
//     }catch (Exception $e){
//         echo $e->getMessage();
//         exit;
//     }

//     $username = 'NameF';
//     $email = 'none@none.com';
//     $phone = '12/01/9999';
//     $message = "heeeee";
//     $id = '1';


//     try{
//         $stmt = $con->prepare('
//          UPDATE
//          mytest
//          SET
//             username     = ?,
//             email    = ?,
//             phone = ?,
//             message = ?
//          WHERE
//             id = ?;
//         ');
//         $stmt->bind_param('ssisi', $username,$email, $phone, $message, $id);
//         $stmt->execute();
//         }catch (Exception $e){
//             echo $e->getMessage();
//             exit;
//         }



// 2


// if(!defined('DB_SERVER')){
//     require_once("./insert.php");
// }
// class DBConnection{

//     private $host ="localhost";
//     private $username = "root";
//     private $password = "khunTun1997";
//     private $database = "projectthreetesting";

//     public $conn;

//     public function __construct(){

//         if (!isset($this->conn)) {

//             $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

//             if (!$this->conn) {
//                 echo 'Cannot connect to database server';
//                 exit;
//             }
//         }

//     }
//     public function __destruct(){
//         $this->conn->close();
//     }
// }


// 3


     /*    $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "khunTun1997";
        $dbname = "projectthreetesting";

$connection = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

if(isset($_POST['send'])){
   $username = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];


   $request = " insert into mytest(username, email, phone, message) values('$name','$email','$phone','$message') ";
   mysqli_query($connection, $request);

   header('location:contact.php');

}else{
   echo 'something went wrong please try again!';
}
 */

// testing area








?>