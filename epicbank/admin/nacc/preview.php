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

    $Reg_No =  $_POST["regno"];
    //echo $Reg_No;
    //$username =   $_POST["username"];
    //echo $username;
    //$password = $_POST["password"];
    //echo $password;
    //$designation = $_POST["designation"];
    $f_name = $_POST["f_name"];
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
    $b_no = $_POST["b_no"];

$sql = "INSERT INTO customer (customer_id,
                                    f_name, 
                                    l_name, 
                                    dob,
                                    sex, 
                                    address, 
                                    fathers_name, 
                                    acc_type,
                                    acc_no,
                                    nationality, 
                                    voter_id, 
                                    contact, 
                                    religion,
                                    email 
                                   ) 
                        VALUES ('".$Reg_No."',
                                    '".$f_name."', 
                                    '".$l_name."', 
                                    '".$dob."',
                                    '".$sex."', 
                                    '".$address."', 
                                    '".$fathers_name."', 
                                    '".$accounttype."',
                                    '".$accountno."',
                                    '".$nationality."', 
                                    '".$voter_id."', 
                                    '".$contact."', 
                                    '".$religion."', 
                                    '".$email."' 
                                    )";
$sql2="INSERT INTO serve (customer_id,b_no) VALUES ('".$Reg_No."','".$b_no."')";

$conn->query($sql2);
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
                    <button type="button" class="btn btn-danger" onclick="redirect();">logout</button>
                </div>
                <!--<h1 style="font-family: 'Cuprum', sans-serif;">New Account</h1>               
                -->
                <div>
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;New Account</h3>
                </div>
                <div class="jumbotron">
                <form class="form-inline" method="post" action="submission.php">                    
                <?php
                    
                    echo '
                        
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
                        <span class="label label-default nc" >Father\'s Name&nbsp;:&nbsp;';echo $_POST["fathersname"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                  <span class="label label-default nc">Account Number&nbsp;:&nbsp;';echo $_POST["accountno"]; echo '</span>
                        &nbsp;
                        &nbsp;
                      
                        </br>
                        </br>
                        <span class="label label-default nc">Account Type&nbsp;:&nbsp;';echo $_POST["acctype"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                       
                        
                        <span class="label label-default nc">Registration Number&nbsp;:&nbsp;';echo $_POST["regno"]; echo '</span>
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
                        <!--
                        <span class="label label-default nc">Branch No.&nbsp;:&nbsp;';echo $_POST["b_no"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br> -->
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
                        <span class="label label-default nc">Email&nbsp;:&nbsp;';echo $_POST["email"]; echo '</span>
                        &nbsp;
                        &nbsp;

                        </br>
                        </br>

                        <span class="label label-default nc">Branch No&nbsp;:&nbsp;';echo $_POST["b_no"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        
                        
                        ';
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

