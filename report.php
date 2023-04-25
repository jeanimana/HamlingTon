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
    <title>Report</title>
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
                <li class = "list"><a href="app.php"><i class="fa-solid fa-right-to-bracket"></i>Application</a></li>
                <li class = "list"><a href="enroll.php"><i class="fa-solid fa-list-check"></i>Enrollment</a></li>
                <li class = "list"><a href="message.php"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class = "list"><a href="report.php" class="active"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">

            
            <div class="search3">
                <form action="" method="POST">
                    <input type="text" placeholder="Enter a month" name="month">
                    <input type="submit" value="Search" name="mon_btn">
                </form>
                <?php
                if (isset($_POST['mon_btn'])) {
                    include("connect.php");
                    $mnt = $_POST['month'];
                    $ret = mysqli_query($con,"select * from apply where month(regDate)='$mnt'") or die("fail to retrieve".mysqli_error($con));
                    $rec = mysqli_num_rows($ret);
                }
                ?>
            </div>
                    
                <div class="rep-growth">
                    <div class="head">
                    <i class="fa-solid fa-calendar-days"></i>
                        <span>
                            <h1>Monthly Report</h1>
                            <p>Everyone retrieved from a month suggested.</p>
                        </span>
                    </div>
                <?php
                if (isset($_POST['mon_btn'])){
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
                                        <td><a href="">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </table>
                        <?php
                    }
                }
                else{
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
                ?>
            </div>

            
            <div class="search3">
                <form action="" method="POST">
                    <input type="text" placeholder="Enter a year" name="year">
                    <input type="submit" value="Search" name="yr_btn">
                </form>
                <?php
                if (isset($_POST['yr_btn'])) {
                    include("connect.php");
                    $yr = $_POST['year'];
                    $ret = mysqli_query($con,"select * from apply where year(regDate)='$yr'") or die("fail to retrieve".mysqli_error($con));
                    $rec = mysqli_num_rows($ret);
                }
                ?>
            </div>

            <div class="rep-growth">
                <div class="head">
                    <i class="fa-solid fa-calendar"></i>
                    <span>
                        <h1>Annual Report</h1>
                        <p>Everyone retrieved from a year suggested.</p>
                    </span>
                </div>
                <?php
                if (isset($_POST['yr_btn'])) {
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
                                        <td><a href="">Delete</a></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                }
                else{
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
                ?>
            </div>


        </div>
    </div>

</body>
</html>