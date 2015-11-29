<?php
  /*  session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);
    
    
    $_SESSION["Reg_No"] =  $_POST["Reg_No"];
    //echo $Reg_No;
    $_SESSION["username"] =   $_POST["username"];
    //echo $username;
    $_SESSION["password"] = $_POST["password"];
    //echo $password;
    $_SESSION["designation"] = $_POST["designation"];
    $_SESSION["f_name"] = $_POST["f_name"];
    $_SESSION["l_name"] =  $_POST["l_name"];
    $_SESSION["dob "]= $_POST["dob"];
    $_SESSION["sex"] =  $_POST["sex"];
    // echo $sex;
    $_SESSION["address"] =  $_POST["address"];
    $_SESSION["fathers_name"] =  $_POST["fathers_name"];
    $_SESSION["employee_status"] =  $_POST["employee_status"];
    $_SESSION["super_reg "]= $_POST["super_reg"];
    $_SESSION["remarks"] = $_POST["remarks"];
    $_SESSION["varified_by"] =  $_POST["varified_by"];
    $_SESSION["salary "]= $_POST["salary"];
    $_SESSION["nationality"] =  $_POST["nationality"];
    $_SESSION["voter_id"] = $_POST["voter_id"];
    $_SESSION["contact "]= $_POST["contact"];
    $_SESSION["religion "]=  $_POST["religion"];
    $_SESSION["b_no "]= $_POST["b_no"];
    */

?>

<?php 
    
    session_start();
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
$conn->query($sql);

                        // header("Location: /epicbank/admin/addemp/preview.php");
?>
<!DOCTYPE html>

<html lang="en">
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/head.php";
       include_once($path);
    ?>
    <body>
        <div class="container">
            <div class="row">
              
              <?php
                   $path = $_SERVER['DOCUMENT_ROOT'];
                   $path .= "/epicbank/admin/sidebar.php";
                   include_once($path);
              ?>

              </br>
              <div class="col-md-8">
                  <div class="logout">
                    <span class="label label-info" style="font-size: 15px; padding: 8px; margin-top: 1%; font-family: 'Cuprum', sans-serif;"><?php echo $_SESSION["first_name"] . "&nbsp;" . $_SESSION["last_name"] ;?></span>
                    &nbsp;
                    &nbsp;
                    <button type="button" class="btn btn-danger">logout</button>
                </div>
                <!--<h1 style="font-family: 'Cuprum', sans-serif;">New Account</h1>               
                -->
                <div>
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Employee</h3>
                </div>
                <div class="jumbotron">
                <form class="form-inline" method="post" action="submission.php">                    
                <?php
                    
                    echo '
                        <span class="label label-default nc">User Name&nbsp;:&nbsp;&nbsp;'; echo $_POST["username"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Emlpoyee Designation&nbsp;:&nbsp;';echo $_POST["designation"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">First Name&nbsp;:&nbsp;';echo $_POST["f_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Last Name&nbsp;:&nbsp;';echo $_POST["l_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Date of Birth&nbsp;:&nbsp;';echo $_POST["dob"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Sex&nbsp;:&nbsp;';echo $_POST["sex"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc" >Father\'s Name&nbsp;:&nbsp;';echo $_POST["fathers_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
<!--            <span class="label label-default nc">Account Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder=" ACC no. here.......">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Account Type&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="current">&nbsp;&nbsp;Current Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="saving">&nbsp;&nbsp;Saving Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="deposite">&nbsp;&nbsp;Deposite Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="student">&nbsp;&nbsp;Student Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>-->                        
                        <span class="label label-default nc">Registration Number&nbsp;:&nbsp;';echo $_POST["Reg_No"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Employee Status&nbsp;:&nbsp;';echo $_POST["employee_status"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Home Address&nbsp;:&nbsp;';echo $_POST["address"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">National ID Card Number&nbsp;:&nbsp;';echo $_POST["voter_id"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Religion&nbsp;:&nbsp;';echo $_POST["religion"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Remarks&nbsp;:&nbsp;';echo $_POST["remarks"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Super Registration No&nbsp;:&nbsp;';echo $_POST["super_reg"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Varified By&nbsp;:&nbsp;';echo $_POST["varified_by"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Salary&nbsp;:&nbsp;';echo $_POST["salary"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Branch No.&nbsp;:&nbsp;';echo $_POST["b_no"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Contact No&nbsp;:&nbsp;';echo $_POST["contact"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Nationality&nbsp;:&nbsp;';echo $_POST["nationality"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <!--<span class="label label-default nc">Email&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your email here .....">
                        </div>
                        </br>
                        </br>-->
                        </br>
                        </br>';
                        ?>
                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </form>

                    
                
                    
                </div>
              </div>
            </div>
        </div>
          
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

