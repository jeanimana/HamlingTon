<?php
  session_start();
  $ses = $_SESSION['username'];
  $avatar = substr($ses,0,1);
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
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
</head>
<body>
    
    <img src="./img/yy.png" alt="">

    <div class="admin">
        <nav>
            <h1>Hamling<span>Ton.</span></h1>
            <ul>
                <li class = "list"><a href="admin.php" class="active"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
                <li class = "list"><a href="account.php"><i class="fa-solid fa-user"></i>Account</a></li>
                <li class = "list"><a href="app.php"><i class="fa-solid fa-right-to-bracket"></i>Application</a></li>
                <li class = "list"><a href="enroll.php"><i class="fa-solid fa-list-check"></i>Enrollment</a></li>
                <li class = "list"><a href="message.php"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class = "list"><a href="report.php"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form action="" method="POST">
                    <input type="text" placeholder="Search">
                </form>
            </div>

            <div class="avatar">
                <h1><?php echo $avatar;?></h1>
            </div>

            <div class="overview">
                <div class="card">
                    <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                    <span>
                        <p>Applied</p>
                        <?php
                            include("connect.php");
                            $ret = mysqli_query($con,"select * from apply") or die("fail to retrieve".mysqli_error($con));
                            $rec = mysqli_num_rows($ret);
                            echo"<h1>$rec</h1>";
                        ?>
                    </span>
                </div>
                <div class="card">
                    <i class="fa-solid fa-user-xmark"></i>
                    <span>
                        <p>Disapproved</p>
                        <?php
                            include("connect.php");
                            $ret = mysqli_query($con,"select * from enroll where action = 'disapproved'") or die("fail to retrieve".mysqli_error($con));
                            $rec = mysqli_num_rows($ret);
                            echo"<h1>$rec</h1>";
                        ?>
                    </span>
                </div>
                <div class="card">
                    <i class="fa-solid fa-user-check"></i>
                    <span>
                        <p>Approved</p>
                        <?php
                            include("connect.php");
                            $ret = mysqli_query($con,"select * from enroll where action = 'approved'") or die("fail to retrieve".mysqli_error($con));
                            $rec = mysqli_num_rows($ret);
                            echo"<h1>$rec</h1>";
                        ?>
                    </span>
                </div>
                <div class="card">
                    <i class="fa-solid fa-user"></i>
                    <span>
                        <p>Account</p>
                        <?php
                            include("connect.php");
                            $ret = mysqli_query($con,"select * from user") or die("fail to retrieve".mysqli_error($con));
                            $rec = mysqli_num_rows($ret);
                            echo"<h1>$rec</h1>";
                        ?>
                    </span>
                </div>
            </div>
            <div class="growth">
            <div class="ab_card">
            <i class="fa-sharp fa-solid"></i>
          <h1> Message shows the system Admin what he is Allowed to do </h1><br>
                <p>This is an interface from dashboard where Admin will Manage and find the applicant Applied, 
                     the number of Applicant Disapproved, the number of Applicant Approved and Account users number from Application,
                      Message as where Admin will get messages from Applicants. Enrollment as where Admin will Approve/Disapprove Applicant Applied ,
                       Get System Report from those Applicants Applied Especially this is place where Adimn will get all impacts and activities done in the system .
                        this interface is for Admin only,This Interfce  will help the Admin to see the written messages ,
                         project system updates and other activities that are being done in the Application system</p> 
                </div>
        </div>
    </div>
</body>
</html>