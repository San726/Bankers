<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);
    
$sql = "SELECT * FROM employee_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["Reg_No"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
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
                <div class="input-group" style="margin-top : 9.5%">
                     <form class="form-inline" action="index.php" method="post">
                       <input type="text" class="form-control" name="inputID" placeholder="Search for User Account...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                      </span>
                         </form>
                    </div>
                <div class="jumbotron" style="margin-top: 2%;">
                <form class="form-inline" method="post" action="submission.php">                    
                <?php
                    
                    echo '
                        <span class="label label-default nc">Name&nbsp;:&nbsp;';echo $_row["f_name"] . "&nbsp" . $_row["l_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Account No.&nbsp;:&nbsp;';echo $_row["acc_no"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Account Type&nbsp;:&nbsp;';echo $_row["acc_type"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Registration No&nbsp;:&nbsp;';echo $_row["Customer_Id"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Loan Amount&nbsp;:&nbsp;';echo $_row["Loan_No"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Balance&nbsp;:&nbsp;';echo $_row["f_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>

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

