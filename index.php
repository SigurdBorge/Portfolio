
<?php
// $servername = "containers-us-west-90.railway.app";
// $username = "root";
// $password = "kwKS1aC2QbBNWf86guQO";
// $dbname =  "railway";

$servername = "localhost";
$username = "root";
$password = "";


// Connection
$conn = new mysqli($servername, $username, $password);


// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
      . $conn->connect_error);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> <!-- Aos is a animated scroll library in js, which contains
   many different functions. This can for example be added inside a divs and h3s, etc. -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="w.css">

</head>
<body>



<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a> <!-- nav nav.navbar creates a bar. This bar contains the elemts whitn
        the nav.navbaar. The a stands for a new line of text. -->
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a> <!-- fab fa- is an easy way of inserting icons, instead of importing a img.  -->
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="unsplash.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Sigurd Borge</h3>
      <span data-aos="fade-up">Front-end developer</span>
      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Sigurd Borge </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Qvamborge@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Trondheim, Norway </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +47 471 59 475 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <!-- <h3 data-aos="zoom-in"> <span>experience : </span> 6+ months </h3> -->
      </div>

      <a href="CV.docx" download class="btn" ata-aos="fade-up">download CV</a>

   </div>

   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>75%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>Front-end</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>backend</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>
<!--
            <div class="box" data-aos="fade-right">
               <span>( 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div> -->

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>front-end: HTML, CSS, bootsrap, JavaScript</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>backend: PHP and MySQL</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <!-- <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>full-stack developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div> -->

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>HTML and CSS</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>JavaScript</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-database"></i>
         <h3>MySQL</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-chrome"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa-brands fa-php"></i>
         <h3>PHP</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>My Personal Projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="Tip Calculator.png" alt="">
         <h3> <a href="https://sigurdborge.github.io/TipCalculator/">Tip Calculator - Javascript</a></h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="RPS1.png" alt="">
         <h3> <a href="https://sigurdborge.github.io/Rock-Paper-Scissors-Game/">Rock Paper Scissors Game - JavaScript</a></h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="br.png" alt="">
         <h3> <a href="https://sigurdborge.github.io/BreakOutGame/">Breakout Game - Javascript</a></h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img class="a" src="tindog.png" alt="">
         <h3>Tin Dog - HTML, CSS, Bootstrap</h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="por.png" alt="">
         <h3>my Personal portfolio - JavaScript, PHP, MySQL</h3>
         <span>( 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="stu.png" alt="">
         <h3>Storing students details - Using PHP, MySQL, Bootstrap</h3>
         <span>( 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="connect.php" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+47 471 59 475</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>Qvamborge@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Trondheim, Norway - Jakobsli</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> Website by <span>Sigurd Borge</span> <?php echo '2022'; ?> </div>












<!-- custom js file link  -->
<script src="w.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>

</body>
</html>
