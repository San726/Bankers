<?php
    session_start();
    include 'conn.php';
    $_SESSION["user_in"] = $_POST['username'];
    $_SESSION["pass_in"] = $_POST['password'];
    


    $user = $_SESSION["user_in"];
    $pass = $_SESSION["pass_in"];
//echo $user;
   //echo "id: " . $row["Reg_No"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";

$sql = "SELECT * FROM employee_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["username"] == $user && $row["password"] == $pass){
            $_SESSION["first_name"] = $row["f_name"];
            $_SESSION["last_name"] = $row["l_name"];
            if($row["designation"] == 1) {
                         header("Location: /epicbank/admin?id=".$row["Reg_No"]);
                         exit();
            }
            else{
                        header("Location: /epicbank/employee?id=".$row["Reg_No"]);
                        exit();
            }

            //echo "exit()".$row["username"].$row["password"];
        }else{
            //echo "exit()".$row["username"].$row["password"];
            //header("Location: /");
  
//            break;
        }
    } 
} else {
    echo "0 results";
}
?>