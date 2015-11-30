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
                   $path .= "/epicbank/employee/sidebar.php";
                   include_once($path);
              ?>

              </br>
              <div class="col-md-8">
                <div class="logout">
                    <span class="label label-info" style="font-size: 15px; padding: 8px; margin-top: 1%; font-family: 'Cuprum', sans-serif;"><?php echo $_SESSION["f_name"] . "&nbsp;" . $_SESSION["l_name"] ;?></span>
                    &nbsp;
                    &nbsp;
                    <button type="button" class="btn btn-danger">logout</button>
                </div>
                <!--<h1 style="font-family: 'Cuprum', sans-serif;">New Account</h1>               
                -->
                <div>
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-money"></i>&nbsp;&nbsp;WidthDraw</h3>
                </div>
                <div class="jumbotron">
                    <form class="form-inline">
                        <span class="label label-default nc">Account Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your Acc No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Amount&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your amount here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Chaque Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your Chaque No. here .....">
                        </div>

                        </br>
                        </br>
                        </br>
                        </br>
                        <button type="button" class="btn btn-danger">WidthDraw </button>
                    </form>
                </div>
              </div>
            </div>
        </div>
          
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

