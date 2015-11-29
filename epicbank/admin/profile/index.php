<?php
    session_start();
    $_SESSION["ids"] = $_POST["inputID"];
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);   

   // $sql = "SELECT customer.*, serve.b_name FROM customer JOIN serve  ON customer.customer_id=serve.customer_id WHERE serve.customer_id = ". $_SESSION["ids"];
   
   $sql = "SELECT customer.*, branch.b_name FROM customer , serve , branch WHERE customer.customer_id=serve.customer_id AND serve.customer_id = ". $_SESSION["ids"];

    //$sql2 = "SELECT * FROM serve";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                //$_SESSION["regno"] =  $row["regno"];
                $regno = $row["Customer_Id"];
                //echo $row["Customer_Id"];
		        $f_name = $row["f_name"];   
                //echo $f_name;             
                $l_name =  $row["l_name"];
                $dob = $row["dob"];
                $sex =  $row["sex"];
                $address =  $row["address"];
                $fathers_name =  $row["fathers_name"];
                //echo $fathers_name;
                $nationality =  $row["nationality"];
                $voter_id = $row["voter_id"];
                $contact = $row["contact"];
                $religion =  $row["religion"];
                $email =  $row["email"];
                $accountno =  $row["acc_no"];
                $acctype =  $row["acc_type"];
                $b_name = $row["b_name"];
        }
    } else {
        //echo "0 results";
    }

   /* $result2 = $conn->query($sql);
    if($result2->num_rows > 0){
        while($row = $result2->fetch_assoc()){
            $_SESSION["b_no"] = $row["b_no"];
        }
    }else{
        echo "0 results";
    }*/

    
  
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
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-user-secret"></i>&nbsp;&nbsp;Customer Profile</h3>
                </div>
                <div>
                    <div class="input-group" style="margin-top:3.5%">
                     <form class="form-inline" action="index.php" method="post">
                       <input type="text" class="form-control" name="inputID" placeholder="Search for User Account...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                      </span>
                         </form>
                    </div>
                </div>
                <div class="jumbotron">
                    <form class="form-inline" method="post" action="update.php">
                        <span class="label label-default nc">First Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="f_name" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $f_name;} ?>" placeholder="type your first name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Last Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="l_name" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $l_name;} ?>" placeholder="type your last name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Date of Birth&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="dob" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $dob;} ?>"  placeholder=" DOB here.......">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Sex&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                          <input type="checkbox"name="sex" value="male" aria-label="male" <?php if($sex == "male"){ echo "checked";}?>>&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                          <input type="checkbox"name="sex" value="female" aria-label="female" <?php if($sex == "female"){ echo "checked";}?>>&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                              <input type="checkbox" name="sex" value="others" aria-label="others" <?php if($sex == "others"){ echo "checked";}?>>&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Father's Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="fathersname" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $fathers_name;} ?>" placeholder="type your father name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Account Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="accountno" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $accountno;} ?>" placeholder=" ACC no. here.......">
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
                              <input type="checkbox" name="acctype" value="Current Acc." aria-label="current" <?php if($acctype == "Current Acc."){ echo "checked";}?>>&nbsp;&nbsp;Current Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" name="acctype" value="Saving Acc." aria-label="saving" <?php if($acctype == "Saving Acc."){ echo "checked";}?>>&nbsp;&nbsp;Saving Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" name="acctype" value="Deposite Acc." aria-label="deposite" <?php if($acctype == "Deposite Acc."){ echo "checked";}?>>&nbsp;&nbsp;Deposite Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox"name="acctype" value="Student Acc." aria-label="student" <?php if($acctype == "Student Acc."){ echo "checked";}?>>&nbsp;&nbsp;Student Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Registration Number Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="regno" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $regno;} ?>" placeholder="type your Reg No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Home Address&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="address" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $address;} ?>" placeholder="type your home address here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">National ID Card Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="voter_id" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $voter_id;} ?>" placeholder="type your ID No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Religion&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <div class="form-group inp">
                              <input type="checkbox" name="religion" value="islam" aria-label="Islam" <?php if($religion == "islam"){ echo "checked";}?>>&nbsp;&nbsp;Islam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" name="religion" value="christian" aria-label="Christian" <?php if($religion == "christian"){ echo "checked";}?>>&nbsp;&nbsp;Christian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" name="religion" value="hinduism" aria-label="Hinduism" <?php if($religion == "hinduism"){ echo "checked";}?>>&nbsp;&nbsp;Hinduism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" name="religion" value="budhaism" aria-label="Budhasim" <?php if($religion == "budhasim"){ echo "checked";}?>>&nbsp;&nbsp;Budhaism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" name="religion" value="others" aria-label="Others" <?php if($religion == "others"){ echo "checked";}?>>&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Contact No&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="contact" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $contact;} ?>" placeholder="type your contact no. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Nationality&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="nationality" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $nationality;} ?>" placeholder="type your nationality here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Email&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="email" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $email;} ?>" placeholder="type your email here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Branch Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="b_name" id="exampleInputName2" value="<?php if(isset($_POST["inputID"])){echo $b_name;} ?>" placeholder="type Branch Name here .....">
                        </div>
                        </br>
                        </br>
                        </br>
                        </br>
                        <button type="submit" class="btn btn-warning" onclick="alert('Successfully Updated');">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-info">Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                    
                    </form>
                </div>
              </div>
            </div>
        </div>
          

        <script type="text/javascript">
        </script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">
          function sum()
          {
            Session["var"] = san;
            var sessionValue = '<%=Session["var"]%>';
             document.getElementById('firstname').value = Session["var"];
             
          }
        </script>
    </body>
</html>

