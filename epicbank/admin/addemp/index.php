<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);
    


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
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Employee</h3>
                </div>
                <div class="jumbotron">
                    <form class="form-inline" method="POST" action="preview.php">
                        <span class="label label-default nc">User Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="username" id="exampleInputName2" placeholder="type username to Assign.....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Password&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="password" style="width:250%"class="form-control "name="password" id="exampleInputName2" placeholder="type temporary password here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Emlpoyee Designation&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="designation" id="exampleInputName2" placeholder="type your employee designation  here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">First Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="f_name" id="exampleInputName2" placeholder="type your first name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Last Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="l_name" id="exampleInputName2" placeholder="type your last name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Date of Birth&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%" name="dob" class="form-control " id="exampleInputName2" placeholder=" DOB here.......">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Sex&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                          <input type="checkbox" name="sex" value="male" aria-label="male">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                          <input type="checkbox" name="sex" value="female" aria-label="female">&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                              <input type="checkbox" name="sex" value="other" aria-label="others">&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc" >Father's Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="fathers_name" id="exampleInputName2" placeholder="type your father name here .....">
                        </div>
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
                        <span class="label label-default nc">Registration Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="Reg_No" id="exampleInputName2" placeholder="type your Reg No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Employee Status&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="employee_status" id="exampleInputName2" placeholder="type employee     status here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Home Address&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="address" id="exampleInputName2" placeholder="type your home address here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">National ID Card Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="voter_id" id="exampleInputName2" placeholder="type your ID No. here .....">
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
                              <input type="checkbox" value="islam" name="religion" aria-label="Islam">&nbsp;&nbsp;Islam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" value="christian" name="religion" aria-label="Christian">&nbsp;&nbsp;Christian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" value="Hindu" name="religion" aria-label="Hinduism">&nbsp;&nbsp;Hinduism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" value="budha" name="religion"aria-label="Budhasim">&nbsp;&nbsp;Budhaism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox"value="others" name="religion" aria-label="Others">&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Remarks&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%" name="remarks" class="form-control " id="exampleInputName2" placeholder="type Remarks here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Super Registration No&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="super_reg" id="exampleInputName2" placeholder="type super reg no .here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Varified By&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="varified_by" id="exampleInputName2" placeholder="varified by .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Salary&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="salary" id="exampleInputName2" placeholder="type your Salary here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Branch No.&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="b_no" id="exampleInputName2" placeholder="type Branch No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Contact No&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="contact" id="exampleInputName2" placeholder="type your contact no. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Nationality&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control "name="nationality" id="exampleInputName2" placeholder="type your nationality here .....">
                        </div>
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
                        </br>
                        <button type="submit" class="btn btn-success">Preview</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                    </form>
                </div>
              </div>
            </div>
        </div>
          
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

