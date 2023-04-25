<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
  </head>
  <body>
    <div class="back-img">
      <img
        class="bg"
        src="./img/light-forest-day-anime-background-illustration-generative-ai.jpg"
        alt="" />
      <img
        class="bg" style="opacity: 0;"
        src="./img/overhead-aerial-shot-thick-forest-with-beautiful-trees-greeneryedited.png"
        alt="" />    
      <img
        class="bg"
        src="./img/aerial-shot-road-surrounded-by-trees-forest.jpg"
        alt="" />
    </div>

    <div class="home">
      <nav>
        <div class="navbar">
          <a href="" class="logo">Hamling<span>ton.</span></a>
          <ul>
            <li><a href="index.php" class="on">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#contact">Impact</a></li>
            <li><a href="apply.php">Application</a></li> 
            <li><a href="#contact"> Get involved</a></li>
            <li><a href="">Help</a></li>
          </ul>
          <i class="fa-sharp fa-solid fa-magnifying-glass" onclick="mysrch()"></i>
        </div>
      </nav>

      <div class="info">
        <h1>Register Now</h1>
        <p>
          This is where Admin will enter in the system as a user of system
          especially he is the one who has system credentials that allows him/ her 
          to access or to update information from system or database 
        </p>
        <button onclick="myfun()">Login</button>
      </div>

      <div class="side" id="side">
        <span class="active">01</span>
        <span>02</span>
        <span>03</span>
        <span>04</span>
        <span>05</span>
      </div>
    </div>

    <div class="about" id="about">
      <h1>About Us</h1>
      <p>THis Where the Applicants and other website visitors will get project information  just like
        Team project, definition of project and it's address location , numbers and email via instagram site, facebook and twitter site</p>
      </p>
      <div class="ab_div">
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
        <div class="ab_card">
          <i class="fa-sharp fa-solid fa-calendar-days"></i>
          <h1>Lorem ipsum dolor</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero minus suscipit laboriosam deserunt tenetur dolor reiciendis</p>
          <a href="">Read More</a>
        </div>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="cont_side">
        <h1>Let's Chat, <br> Tell us about your ideas.</h1>
        <p>You Can Also Call Us at the Addrresses Bellow.</p>
        <div class="con_info">
          <i class="fa-sharp fa-solid fa-phone"></i>
          <p>(+250) 784583711</p>
        </div>
        <div class="con_info">
          <i class="fa-sharp fa-solid fa-envelope"></i>
          <p>hamlington23@gmail.com</p>
        </div>
      </div>
      <form action="" method="POST">
        <p>Send us a message</p>
        <input type="text" placeholder="Names:" name="nm"><br>
        <input type="text" placeholder="Telephone:" number="phome"><br>
        <input type="email" placeholder="Email:" name="email"><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Submit" name="mess_btn">
      </form>
      <?php
      if (isset($_POST["mess_btn"])) {
        include("connect.php");

        $nm = $_POST["nm"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $ins = mysqli_query($con,"insert into message values('','$nm','$email','$message')") or die("fail to insert".mysqli_error($con));

        if ($ins) {
          echo"<script>alert('Sent Succesfully');</script>";
        }

      }
      ?>
    </div>

    <div class="footer">
      <div class="ft_left">
        <h1>Hamling<span style="color: green;">Ton.</span></h1>
        <p>Here are some social site  we use in our project and you will also use it while visiting our website
          especially it will helps you  to know and get more information about our project  
        </p>
        <div class="social">
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-Twitter"></i></a>
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
            <li>Kicukiro, Kagarama</li>
            <li>www.hamlington250.com</li>
          </ul>
        </div>

        <div class="ft_bottom">
          <p>Designed By jean d'Amur @2023</p>
        </div>
      </div>
    </div>

    <div class="log_area">
      <div class="log_form">
        <i class="fa-solid fa-xmark" onclick="myfuny()"></i>
        <h1>Log Here!</h1>
        <form action="" method="POST">
          <input type="text" placeholder="Username" name="unm">
          <input type="password" placeholder="Password" name="pwd">
  
          <input type="submit" value="Send" name="log_btn">
        </form>
        <?php
          if (isset($_POST['log_btn'])) {
            include("connect.php");
            $unm = $_POST["unm"];
            $pwd = $_POST["pwd"];

            $ret = mysqli_query($con,"select * from user where username = '$unm' and password = '$pwd'") or die("fail to insert".mysqli_error($con));

            $rec = mysqli_fetch_array($ret);

            if (is_array($rec)) {
              $_SESSION["username"] = $rec["username"];
              $_SESSION["password"] = $rec["password"];

              echo"<script>window.location.href = 'admin.php';</script>";
            }
            else {
              echo"<scrip>Incorrect Credentials</script>";
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
          $ret2 = mysqli_query($con,"select * from apply inner join enroll on apply.apId = enroll.apId where apply.fname = '$fnm' AND apply.lname = '$lnm'");
          $rec2 = mysqli_num_rows($ret2);
          if ($rec2 == 0) {
            echo"<script>alert('You are not registered');</script>";            
          }
          else {
            $ret = mysqli_query($con,"select * from apply inner join enroll on apply.apId = enroll.apId where apply.fname = '$fnm' AND apply.lname = '$lnm' AND enroll.action = 'approved'");
            $rec = mysqli_num_rows($ret);
            if ($rec == 0) {
              echo"<script>alert('disapproved')</script>";
            }
            else {
              echo"<script>alert('approved');</script>";
            }
          }
        }
        ?>
      </div>  
    </div>

    <script>
      let form = document.querySelector(".log_area");
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

      let list = document.querySelectorAll('li');
      function activelink() {
        list.forEach((item) => {
          item.classList.remove('.indic');
          this.classList.add('.indic');
        });
      }

      list.forEach((item)=>
        item.addEventListener('click',activelink)
      );
    </script>
  </body>
</html>
