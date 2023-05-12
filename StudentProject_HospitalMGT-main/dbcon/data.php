<?php

    class mydb{

    // function openCon(){
    //     $servser = 'localhost';
    //     $username = "root";
    //     $password = "";
    //     $db = 'hospital_database';

    //     $conn = new mysqli($servser,$username,$password,$db);

    //     if($conn->connect_error){
    //         die ("connect object failed: ".$conn-connect_error);
    //     }
    //     return $conn;
    // }

        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "hospital_database";
        private $conn = "";

        public function __construct(){
            $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if($this->conn->connect_error){
                die ("connect object failed: ".$this->conn->connect_error);
            }
            // return $conn;
        }

        public function InsertDepartmentData($name, $description, $status, $created_at)
        {
            $sql = "INSERT INTO department (name, description, status, created_at) VALUES ('$name', '$description', '$status', '$created_at')";

            // echo $sql;

            if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
              }
              
        }

        public function __construct(){
            $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if($this->conn->connect_error){
                die ("connect object failed: ".$this->conn->connect_error);
            }
            // return $conn;
        }
        public function InsertDoctorData($firstname, $lastname,$department,$emailaddress,$age,$phonenum )
        {
            $sql = "INSERT INTO doctor (firstname,lastname,department,emailaddress,age,phonenum) VALUES ('$firstname', '$lastname','$department','$emailaddress','$age','$phonenum')";

            // echo $sql;

            if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
              }
              
        }


// // 
//     function showAdmin($tablename,$conn)

//     {
       
//     $sql = "SELECT * FROM $tablename";

//     $result = $conn->query($sql);

//     }

//     // 
// // 
//        function insertAdd($conn,$tablename,$fname,$lname,$email,$phone,$username,$password,$confirmpass,$image)
//        {
//         $sqlstr = "INSERT INTO $tablename(fname,lname,email,phone,user,password,confirmpass,image) values('$fname','$lname','$email','$phone','$username','$password','$confirmpass','$image')";

//         if ($conn->query($sqlstr)) {
//             echo "data inserted ";
//         } else {
//             echo "error" . $conn->error;
//         }

//        }
// // 



//        function getUser($conn,$email){
//         $sql = "SELECT * from registration where email='{$email}'";
        
//         $result = mysqli_query($conn, $sql);

//         $user = mysqli_fetch_assoc($result);
        
//         return $user;
//     }

//     function CheckUser($conn, $tablename, $email, $password)
//     {
//         $result = $conn->query("SELECT * FROM " . $tablename . " WHERE email='" . $email . "' AND paswword='" . $password . "'");
//         return $result;
//     }

//     function loginCheck($tablename,$con,$email,$password)
//     {
//         $sql = "SELECT * FROM $tablename WHERE email='$email' AND password='$password' ";
//         $result = $con->query($sql);
//         return $result;
//     }




//     function UpdateUser($conn, $tablename, $name, $degree, $mobile,  $email, $ref, $jobpost, $id)
//     {
      
//         $sql = "UPDATE jobregistration SET name='{$name}', degree='{$degree}' ,mobile = '{$mobile}', email = '{$email}' ,ref = '{$ref}', jobpost = '{$jobpost}',idUpdate = '{$idUpdate}' WHERE ID = $id";

//         if ($conn->query($sql) === TRUE) {
//            return true;
//         } 
//         else {
//            return false;
//         }
        
         
       
//     }




//     function getManager($con,$id){
//         $sql = "select * from jobregistration where id='{$id}'";
        
//         $result = mysqli_query($con, $sql);

//         $manager = mysqli_fetch_assoc($result);
//         return $manager;
//     }


//     function deleteManager($conn,$id){

//         $sql = "DELETE FROM jobregistration WHERE ID = ?";
//         if ($conn->query($sql) === TRUE) {
//             return true;
//          } 
//          else {
//             return false;
//          }

//     }


    }


$db = new mydb();
$db->InsertData("Medicine", "Test", 1, date('Y-m-d'));
//$db =new mydb();
//$db->InsertDoctorData("samin","khan","cadio","saminkhan2069@gmail.com",23,01621947397);