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
    <title>Message</title>
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
                <li class = "list"><a href="message.php" class="active"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class = "list"><a href="report.php"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">

            <div class="apl-growth">
                <div class="head">
                    <i class="fa-solid fa-message"></i>
                    <span>
                        <h1>message</h1>
                        <p>Everyone who wrote to you.</p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select * from message") or die("fail to retrieve".mysqli_error($con));
                    $rec = mysqli_num_rows($ret);

                    if ($rec == 0) {
                        ?>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Message</th>
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
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                while ($a = mysqli_fetch_array($ret)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $a['mesId'];?></td>
                                        <td><?php echo $a['names'];?></td>
                                        <td><?php echo $a['email'];?></td>
                                        <td><?php echo $a['message'];?></td>
                                        <td><a href="delete.php?mesid=<?php echo $a['mesId'];?>">Delete</a></td>
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