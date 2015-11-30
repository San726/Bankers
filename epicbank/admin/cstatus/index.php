<?php
    session_start();
    $_SESSION["ids"] = $_POST["inputID"];
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
                <div class="input-group" style="margin-top : 9.5%">
                     <form class="form-inline" action="index.php" method="post">
                       <input type="text" class="form-control" name="inputID" placeholder="Search for User Account...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                      </span>
                         </form>
                    </div>
                <div class="jumbotron" style="margin-top: 2%;">
                                    
                <?php

                        $sql = "select customer.customer_id, customer.f_name,customer.l_name, loan.amount,account.account_no,
      account.balance,account_type.type_name from customer join borrow on  customer.customer_id=borrow.customer_id
       join loan on borrow.loan_no=loan.loan_no join  has on customer.customer_id=has.customer_id join  account on
        has.account_no=account.account_no join account_type on account_type.type_no=account.type_no where 
        account.account_no= ". $_POST["inputID"];

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["Reg_No"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";

                    
                    echo '
                        <span class="label label-default nc">Name&nbsp;:&nbsp;';echo $row["f_name"] . "&nbsp" . $row["l_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Account No.&nbsp;:&nbsp;';echo $row["account_no"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Account Type&nbsp;:&nbsp;';echo $row["type_name"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Registration No&nbsp;:&nbsp;';echo $row["customer_id"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Loan Amount&nbsp;:&nbsp;';echo $row["amount"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <span class="label label-default nc">Balance&nbsp;:&nbsp;';echo $row["balance"]; echo '</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>

                        </br>
                        </br>
                        
                       ';

                           }
} else {
    echo '<span class="label label-default nc">Nothing to show... .....</span>';
}
                        ?>

                </div>
              </div>
            </div>
        </div>
          
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

