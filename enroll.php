<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
</head>
<body>
    
    <img src="./img/yy.png" alt="">

    <div class="admin">
        <nav>
            <h1>Hamling<span>Ton.</span></h1>
            <ul>
                <li class="list"><a href="admin.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
                <li class="list"><a href="account.php"><i class="fa-solid fa-user"></i>Account</a></li>
                <li class="list"><a href="app.php"><i class="fa-solid fa-right-to-bracket"></i>Application</a></li>
                <li class="list"><a href="enroll.php" class="active"><i class="fa-solid fa-list-check"></i>Enrollment</a></li>
                <li class = "list"><a href="message.php"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class="list"><a href="report.php"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">

            <div class="apl-growth">
                <div class="head">
                    <i class="fa-solid fa-square-check"></i>
                    <span>
                        <h1>Approvement</h1>
                        <p>Approved and Disapproved of applicant.</p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select apply.apId,concat_ws(' ',apply.fname,apply.lname) as names,apply.gender,apply.dob,apply.email from apply left join enroll on apply.apId = enroll.apId where enroll.apId is null") or die("fail to retrieve".mysqli_error($con));
                    $rec = mysqli_num_rows($ret);

                    if ($rec == 0) {
                        ?>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Gender</th>
                                <th>DoB</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td colspan="6">No one applied yet!</td>
                            </tr>
                        </table>
                        <?php
                    }
                    else {
                        ?>
                        <form action="" method="POST">
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Gender</th>
                                <th>DoB</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                while ($a = mysqli_fetch_array($ret)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $a['apId'];?></td>
                                        <td><?php echo $a['names'];?></td>
                                        <td><?php echo $a['gender'];?></td>
                                        <td><?php echo $a['dob'];?></td>
                                        <td><?php echo $a['email'];?></td>
                                        <td><select name="decision[<?php echo $a['apId'];?>]">
                                            <option value="Approved">Approved</option>
                                            <option value="Disapproved">Disapproved</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <input type="submit" value="Submit" name="en_btn">
                        </form>

                        <?php
                        if (isset($_POST["en_btn"])) {
                            
                            foreach ($_POST['decision'] as $apid => $decision ){
                                $ins = mysqli_query($con,"insert into enroll values('$apid','$decision')");
                            }
                        }
                    }
                ?>
            </div>

        </div>
    </div>

</body>
</html>