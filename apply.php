<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
  </head>
  <body>
    <div class="back-img">
    <img
      class="bg"
      src="./img/high-angle-shot-curvy-road-surrounded-by-lot-beautiful-trees-esposende.jpg"
      alt="" />
    <!-- <img
      class="bg"
      src="./img/aerial-shot-road-forest-covered-yellowing-trees-surrounded-by-lake.jpg"
      alt="" />    
    <img
      class="bg"
      src="./img/aerial-shot-road-surrounded-by-trees-forest.jpg"
      alt="" /> -->
    </div>

    <div class="home">
      <nav>
        <div class="navbar">
          <a href="" class="logo">Hamling<span>ton.</span></a>
          <ul>
            <li><a href="index.php" class="on">Home</a></li>
            <li><a href="index.php">About Us</a></li>
            <li><a href="index.php">Events</a></li>
            <li><a href="index.php">Contact Us</a></li>
            <li><a href="apply.php">Application</a></li>
            <li><a href="apply.php">Impacts</a></li>
            <li><a href="">Help</a></li>
          </ul>
          <i class="fa-sharp fa-solid fa-magnifying-glass" onclick="mysrch()"></i>
        </div>
      </nav>

      <div class="info">
        <h1>APPLY HERE</h1>
        <p>
          This is an interface that will help the applicants to make application and visit project website
          and it place where the applicants will get application form and it's requirements to fill that form when he will be looking for a job 
        </p>
        <button onclick="myfun()">Application</button>
      </div>

      <div class="side">
        <span>01</span>
        <span>02</span>
        <span>03</span>
        <span class="active">04</span>
        <span>05</span>
      </div>
    </div>

    <div class="footer">
      <div class="ft_left">
        <h1>Hamling<span style="color: green;">Ton.</span></h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime rem odio, fugiat deleniti, voluptate veritatis commodi doloremque dolore similique sit impedit. Pariatur nemo sint facilis molestias ab sed culpa. Soluta?</p>
        <div class="social">
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>

        <div class="ft_right">
          <ul>
            <p>Useful links</p>
            <li>About us</li>
            <li>Application</li>
            <li>Help</li>
          </ul>
          <ul>
            <p>Operations</p>
            <li>Login</li>
            <li>Apply</li>
            <li>Results</li>
          </ul>
          <ul>
            <p>Address</p>
            <li>Rwanda, Kigali</li>
            <li>Kicukiro, Niboye</li>
            <li>www.hamlington250.com</li>
          </ul>
        </div>

        <div class="ft_bottom">
          <p>Designed By isimwe isimbi christian @04/2023</p>
        </div>
      </div>
    </div>

    <div class="ap_area">
      <div class="ap_form">
        <i class="fa-solid fa-xmark" onclick="myfuny()"></i>
        <h1>Apply Now!</h1>
        <form action="" method="POST">
          <input type="text" placeholder="Firstname" name="fnm">
          <input type="text" placeholder="Lastname" name="lnm">
          <input type="date" name="date"><br>
          <input type="radio" value="M" name="gender"><span>Male</span>
          <input type="radio" value="F" name="gender"><span>Female</span><br>
          <input type="email" placeholder="Email" name="email">
          <input type="number" placeholder="Phone number" name="phone">
          <input type="number" placeholder="National ID" name="nid"><br>
          <input type="text" placeholder="Province" name="province">
          <input type="text" placeholder="District" name="district">
          <input type="text" placeholder="Sector" name="sector"><br>
          <input type="text" placeholder="Cell" name="cell">
          <input type="text" placeholder="Village" name="village"><br>
  
          <input type="submit" value="Send" name="app_btn">
        </form>
      <?php
      if (isset($_POST["app_btn"])) {
        include("connect.php");

        $fnm = $_POST["fnm"];
        $lnm = $_POST["lnm"];
        $date = $_POST["date"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $nid = $_POST["nid"];
        $province = $_POST["province"];
        $district = $_POST["district"];
        $sector = $_POST["sector"];
        $cell = $_POST["cell"];
        $village = $_POST["village"];

        $ins = mysqli_query($con,"insert into apply values('','$fnm','$lnm','$date','$gender','$email','$phone','$nid','$province','$district','$sector','$cell','$village',curdate())") or die("fail to insert".mysqli_error($con));

        if ($ins) {
          echo"<script>alert('Submit Succesfully');</script>";
        }

      }
      ?>
      </div>  
    </div>

    
    <div class="srch_area">
        <div class="log_form">
          <i class="fa-solid fa-xmark" onclick="mysrchy()"></i>
          <h1>Search Here!</h1>
        <form action="" method="POST">
          <input type="text" placeholder="Firstname" name="fname">
          <input type="text" placeholder="Lastname" name="lname">
  
          <input type="submit" value="Send" name="bilo">
        </form>
        <?php
        if (isset($_POST['bilo'])) {
          include("connect.php");

          $fnm = $_POST['fname'];
          $lnm = $_POST['lname'];

          $ret = mysqli_query($con,"select * from apply inner join enroll on apply.apId = enroll.apId where apply.fname = '$fnm' AND apply.lname = '$lnm' AND enroll.action = 'approved'");
          $rec = mysqli_num_rows($ret);
          if ($rec == 0) {
            echo"<script>alert('Disapproved');</script>";
          }
          else {
            echo"<script>alert('Approved');</script>";
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

      
      let formsrch = document.querySelector(".srch_area");
      function mysrchy() {
        formsrch.style.display = 'none';
      }
      function mysrch() {
        formsrch.style.display = 'flex';
      }
    </script>


    <script>
      window.addEventListener("scroll", function () {
        let nav = document.querySelector("nav");
        if (window.scrollY > 100) {
          nav.style.background = "rgba(0, 0, 0, 0.900)";
          nav.style.boxShadow = "0px 1px 20px 16px rgba(0, 0, 0, 0.900)";
        } else {
          nav.style.background = "none";
          nav.style.boxShadow = "none";
        }
      });
    </script>
  </body>
</html>
