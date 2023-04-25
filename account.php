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
    <title>Account</title>
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
                <li class = "list"><a href="account.php" class="active"><i class="fa-solid fa-user"></i>Account</a></li>
                <li class = "list"><a href="app.php"><i class="fa-solid fa-right-to-bracket"></i>Application</a></li>
                <li class = "list"><a href="enroll.php"><i class="fa-solid fa-list-check"></i>Enrollment</a></li>
                <li class = "list"><a href="message.php"><i class="fa-solid fa-message"></i>Message</a></li>
                <li class = "list"><a href="report.php"><i class="fa-solid fa-clipboard-list"></i>Report</a></li>
                <li class="logout"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="view">
            
            <button onclick="myfun()"><i class="fa-thin fa-plus"></i>Create</button>

            <div class="acc-growth">
                <div class="head">
                    <i class="fa-solid fa-user"></i>
                    <span>
                        <h1>Account</h1>
                        <p>Every Account is presented here.</p>
                    </span>
                </div>
                <?php
                    include("connect.php");

                    $ret = mysqli_query($con,"select * from user") or die("fail to retrieve".mysqli_error($con));
                    $rec = mysqli_num_rows($ret);

                    if ($rec == 0) {
                        ?>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Gender</th>
                                <th>DoB</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
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
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Gender</th>
                                <th>DoB</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                while ($a = mysqli_fetch_array($ret)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $a['uid']; ?></td>
                                        <td><?php echo $a['fname']; ?></td>
                                        <td><?php echo $a['lname']; ?></td>
                                        <td><?php echo $a['gender']; ?></td>
                                        <td><?php echo $a['dob']; ?></td>
                                        <td><?php echo $a['email']; ?></td>
                                        <td><?php echo $a['username']; ?></td>
                                        <td><?php echo $a['password']; ?></td>
                                        <td><a href="delete.php?us_id=<?php echo $a['uid']; ?>">Delete</a></td>
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


    <div class="ap_area">
        <div class="ap_form">
          <i class="fa-solid fa-xmark" onclick="myfuny()"></i>
          <h1>Create Yours!</h1>
          <form action="" method="POST">
            <input type="text" placeholder="Firstname" name="fnm">
            <input type="text" placeholder="Lastname" name="lnm"><br>
            <input type="radio" value="M" name="gender"><span>Male</span>
            <input type="radio" value="F" name="gender"><span>Female</span><br>
            <input type="date" name="date">
            <input type="email" placeholder="Email" name="email"><br>
            <input type="text" placeholder="Username" name="unm">
            <input type="password" placeholder="Password" name="pwd"><br>
    
            <input type="submit" value="Send" name="acc_btn">
          </form>
          <?php
          if (isset($_POST['acc_btn'])) {
              include("connect.php");

              
        $fnm = $_POST["fnm"];
        $lnm = $_POST["lnm"];
        $gender = $_POST["gender"];
        $date = $_POST["date"];
        $email = $_POST["email"];
        $phone = $_POST["unm"];
        $nid = $_POST["pwd"];

        $ins = mysqli_query($con,"insert into user values('','$fnm','$lnm','$gender','$date','$email','$phone','$nid')") or die("fail to insert".mysqli_error($con));

        if ($ins) {
          echo"<script>alert('Submit Succesfully');</script>";
        }
          }

            
          ?>
        </div>  
      </div>
  
      
    <script>
      let form = document.querySelector(".ap_area");
      function myfuny() {
        form.style.display = 'none';
      }
      function myfun() {
        form.style.display = 'flex';
      }
    </script>  

</body>
</html>