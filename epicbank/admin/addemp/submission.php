<?php 
/*
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);

    $Reg_No =  $_POST["Reg_No"];
    //echo $Reg_No;
    $username =   $_POST["username"];
    //echo $username;
    $password = $_POST["password"];
    //echo $password;
    $designation = $_POST["designation"];
    $f_name = $_POST["f_name"];
    $l_name =  $_POST["l_name"];
    $dob = $_POST["dob"];
    $sex =  $_POST["sex"];
    // echo $sex;
    $address =  $_POST["address"];
    $fathers_name =  $_POST["fathers_name"];
    $employee_status =  $_POST["employee_status"];
    $super_reg = $_POST["super_reg"];
    $remarks = $_POST["remarks"];
    $varified_by =  $_POST["varified_by"];
    $salary = $_POST["salary"];
    $nationality =  $_POST["nationality"];
    $voter_id = $_POST["voter_id"];
    $contact = $_POST["contact"];
    $religion =  $_POST["religion"];
    $b_no = $_POST["b_no"];

$sql = "INSERT INTO employee_info (Reg_No,
                                    username,
                                    password,
                                    designation,
                                    f_name, 
                                    l_name, 
                                    dob,
                                    sex, 
                                    address, 
                                    fathers_name, 
                                    employee_status, 
                                    super_reg,
                                    remarks, 
                                    varified_by, 
                                    salary, 
                                    nationality, 
                                    voter_id, 
                                    contact, 
                                    religion, 
                                    b_no ) 
                        VALUES ('".$Reg_No."',
                                '".$username."',
                                '".$password."',
                                '".$designation."',
                                    '".$f_name."', 
                                    '".$l_name."', 
                                    '".$dob."',
                                    '".$sex."', 
                                    '".$address."', 
                                    '".$fathers_name."', 
                                    '".$employee_status."', 
                                    '".$super_reg."',
                                    '".$remarks."', 
                                    '".$varified_by."', 
                                    '".$salary."', 
                                    '".$nationality."', 
                                    '".$voter_id."', 
                                    '".$contact."', 
                                    '".$religion."', 
                                    '".$b_no."')";
$conn->query($sql);*/

                         header("Location: /epicbank/admin/");
?>