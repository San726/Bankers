<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);  
    $Reg_No =  $_POST["regno"];
    //echo $Reg_No;
    //$username =   $_POST["username"];
    //echo $username;
    //$password = $_POST["password"];
    //echo $password;
    //$designation = $_POST["designation"];
    $f_name = $_POST["f_name"];
    //echo $f_name;
    $l_name =  $_POST["l_name"];
    $dob = $_POST["dob"];
    $sex =  $_POST["sex"];
    // echo $sex;
    $address =  $_POST["address"];
    $fathers_name =  $_POST["fathersname"];
    //$employee_status =  $_POST["employee_status"];
    //$super_reg = $_POST["super_reg"];
    //$remarks = $_POST["remarks"];
    //$varified_by =  $_POST["varified_by"];
    //$salary = $_POST["salary"];
    $nationality =  $_POST["nationality"];
    $voter_id = $_POST["voter_id"];
    $contact = $_POST["contact"];
    $religion =  $_POST["religion"];
    $email =  $_POST["email"];
    $accountno =  $_POST["accountno"];
    $accounttype =  $_POST["acctype"];
    $b_name = $_POST["b_name"];

$sql = "UPDATE customer , serve , branch SET 
                                                b_name = \"".$b_name."\",
                                                f_name = \"".$f_name."\",
                                                l_name = \"".$l_name."\",
                                                dob = \"".$dob."\",
                                                sex = \"".$sex."\",
                                                address = \"".$address."\",
                                                fathers_name = \"".$fathers_name."\",
                                                acc_type = \"".$accounttype."\",
                                                acc_no = \"".$accountno."\",
                                                nationality = \"".$nationality."\",
                                                voter_id = \"".$voter_id."\",
                                                contact = \"".$contact."\",
                                                religion = \"".$religion."\",
                                                email = \"".$email."\"
                                             WHERE customer.customer_id=serve.customer_id AND serve.customer_id =". $_SESSION["ids"].";";

//$sql = "UPDATE customer , serve , branch SET f_name = 'san' WHERE customer.customer_id=serve.customer_id AND serve.customer_id = ".$_SESSION["ids"].";";
$conn->query($sql);
    header("Location: /epicbank/admin/");
?>