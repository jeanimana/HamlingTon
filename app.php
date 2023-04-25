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
    <title>Application</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
</head>
<body>
    
    <img src="./img/yy.png" alt="">

    <div class="admin">
        <nav>
            <h1>Hamling<span>Ton.</span></h1>
            <ul>
                <li class = "list"><a href="admin.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
                <li class = "list"><a href="account.php"><i class="fa-solid fa-user"></i>Account</a></li>
                <li class = "list"><a href="app.php" class="active"><i class="fa-solid fa-right-to-bracket"></i>Application</a></li>
                <li class = "list"><a href="enroll.php"><i class="fa-solid fa-list-check"></i>Enrollment</a></li>
                <li class = "list"><a href="message.php"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class = "list"><a href="report.php"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">

            <div class="apl-growth">
                <div class="head">
                    <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                    <span>
                        <h1>Applied</h1>
                        <p>This is a List of All Applicants Applied
                            
                        </p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select * from apply") or die("fail to retrieve".mysqli_error($con));
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
                                        <td><?php echo $a['apId']; ?></td>
                                        <td><?php echo $a['fname'].$a['lname']; ?></td>
                                        <td><?php echo $a['gender']; ?></td>
                                        <td><?php echo $a['dob']; ?></td>
                                        <td><?php echo $a['email']; ?></td>
                                        <td><a href="delete.php?ap_id=<?php echo $a['apId']; ?>">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                ?>
            </div>

            
            <div class="dis-growth">
                <div class="head">
                    <i class="fa-solid fa-user-xmark"></i>
                    <span>
                        <h1>Disapproved</h1>
                        <p>Applicant Disapproved.</p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select apply.apId,concat_ws(' ',apply.fname,apply.lname) as names,apply.gender,dob,email,enroll.action from apply join enroll on apply.apId = enroll.apId where enroll.action='disapproved'") or die("fail to retrieve".mysqli_error($con));
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
                                        <td><?php echo $a['apId']; ?></td>
                                        <td><?php echo $a['names']; ?></td>
                                        <td><?php echo $a['gender']; ?></td>
                                        <td><?php echo $a['dob']; ?></td>
                                        <td><?php echo $a['email']; ?></td>
                                        <td><?php echo $a['action']; ?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                ?>
            </div>

            
            <div class="approv-growth">
                <div class="head">
                    <i class="fa-solid fa-user-check"></i>
                    <span>
                        <h1>Approved</h1>
                        <p>Applicant Approved.</p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select apply.apId,concat_ws(' ',apply.fname,apply.lname) as names,apply.gender,dob,email,enroll.action from apply join enroll on apply.apId = enroll.apId where enroll.action='approved'") or die("fail to retrieve".mysqli_error($con));
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
                                        <td><?php echo $a['apId']; ?></td>
                                        <td><?php echo $a['names']; ?></td>
                                        <td><?php echo $a['gender']; ?></td>
                                        <td><?php echo $a['dob']; ?></td>
                                        <td><?php echo $a['email']; ?></td>
                                        <td><?php echo $a['action']; ?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                ?>
            </div>

        </div>
    </div>

</body>
</html>