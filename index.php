<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,date)
    VALUES ('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'Appointment made sucessfully!';
    }else{
        $message[] = 'Appointment failed';

    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dermatologist Appointment Website</title>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--bootstrap cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap-grid.min.css">
   
    <!--custom css file link-->
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--header section starts-->
<header class="header fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-3">
            <a href="#home" class="logo">Skin<span>Care.</span></a>
        </div>
            <nav class="nav col-6">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#reviews">Reviews</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="col-3">
            <a href="#contact" class="link-btn">Make Appointment</a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        </div>
    </div>
    
    </div>
</header>

<!--header section ends-->

<!--home section starts-->
<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h2>FEEL GOOD ABOUT YOUR SKIN</h2>
                <p>SkinCare Speciality Center is one of the leading providers of advanced cosmectic dermatology,anti ageing skin care and hair and scalp care in manipal</p>
            
                <a href="#contact" class="link-btn">Make Appointment</a>

            </div>
        </div>
    </div>
</section>


<!--home section ends-->

<!--about section starts-->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img style="max-width:100%;max-height:100%;" src="images/about-img.jpg" class="w-100 mb-4 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content" >
                <span>about us</span>
                <h3>18 Years of Excellence</h3>
                <p>For nearly two decades, Skin Care Speciality Centre has been at the forefront of dermatology and cosmetic care. 
                    Our mission is simple yet powerful — to provide world-class treatments that not only resolve skin concerns but also restore 
                    confidence and enhance natural beauty.<br>
                    Over the years, we have become a trusted destination for patients seeking solutions to everything from common skin 
                    conditions to advanced cosmetic and surgical treatments. Our clinic combines cutting-edge technology, 
                    a wide range of treatment options, and a team of skilled professionals who ensure every patient receives personalized care.
                    What makes us unique is our patient-first philosophy. We understand that skin problems often go beyond the surface, 
                    affecting self-esteem and quality of life. <br>That’s why every consultation begins with listening, every treatment plan is c
                    ustomized, and every outcome is measured by the confidence and comfort our patients regain.
                    At Skin Care Speciality Centre, excellence is not just in the results we deliver but also in the compassionate care we provide.
                    Whether you want to treat a persistent skin concern, explore anti-aging solutions, or simply maintain your natural glow, 
                    we are here to help you look and feel your best — today and for years to come.</p>
                <a href="#contact" class="link-btn">Make Appointment</a>
            </div>


        </div>
    </div>
</section>




<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            
            <div class="col-md-6 content" >
                <span>Founder</span>
                <h3>Dr. Giselda Pereira</h3>
                <p>Dr. Giselda Pereira, a renowned dermatologist, founded the Skin Care Speciality Centre out of her passion for 
                    helping people regain confidence in their own skin. During her early years of medical practice, she noticed that
                     many patients were struggling not only with skin conditions but also with the emotional impact those conditions 
                     had on their daily lives.

Determined to bridge the gap between medical expertise and compassionate care, Dr. Pereira envisioned a clinic that combined advanced 
dermatological treatments with a warm, patient-focused environment. With over 18 years of experience, she continues to pioneer innovative 
skin care solutions while staying true to her mission — to help every individual feel comfortable, confident, and beautiful in their own skin.</p>
                
            </div>
            <div class="col-md-6 image">
                <img style="max-width:100%;max-height:100%;" src="images/about-doc.jpg" class="w-100 mb-4 mb-md-0" alt="">
            </div>


        </div>
    </div>
</section>

<!--about section ends-->

<!--services section starts-->

<section class="services" id="services">

    <h1 class="heading">Our services</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>dermatology</h3>
            <p>Acne<br>
                Psoriasis <br>
                Vitiligo <br>
                Allergy <br>
                Skin Infections</p>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>cosmetology</h3>
            <p>Lasers <br>
                Anti-Ageing</p>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trichology</h3>
            <p>PRP for Hair Growth <br>
                Hair Transplant <br>
                Mesotherapy</p>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>aesthetics</h3>
            <p>Body Contouring <br>
                Skin Tightening <br>
                PRP Glow Facial</p>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>bridal services</h3>
            <p>For Men <br>
                For Women</p>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>others</h3>
            <p>Thread Lift <br>
                Laser Hair Removal <br>
                Skin Rejuvenation <br>
                Body Contouring <br>
                Skin Tightening</p>
        </div>
    </div>
</section>

<!--services section ends-->

<!--process section starts-->

<section class="process">

    <h1 class="heading">work process</h1>

    <div class="box-container container">
        <div class="box">
            <img src="images/faci-1.jpg" alt="">
            <h3>Pharmacy</h3>
            <p>With state of the art, world class facilities, well managed pharmacy, medically proven and result-oriented treatments, Skin Care  is the best skin care clinic in the city.</p>
        </div>

        <div class="box">
            <img src="images/faci-2.jpg" alt="">
            <h3>laboratory</h3>
            <p>Our mission is to provide an honest, scientific approach to beauty. We use safe and effective skin care ingredients that enrich the natural biology of your skin, to produce clinically proven results that last.</p>
        </div>

        <div class="box">
            <img src="images/faci-3.jpg" alt="">
            <h3>Treatment Room</h3>
            <p>Specially designed to give your skin the ultimate moisturizing and rejuvenation treatment. It works by using hydrogen-oxygen technology to deeply cleanse and hydrate your skin, leaving it looking and feeling incredibly soft, smooth, and radiant.</p>
        </div>
    </div>
</section>

<!--process section ends-->

<!--reviews section starts-->

<section class="reviews" id="reviews">

    <h1 class="heading">Satisfied clients</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>This doctor have a very good approach towards her Patience. Have treated my hair fall problem really well and I can see positive results... I will definitely recommend this doctor for everyone.. :-)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <h3>Tanvi Raghavan</h3>
            <span>Satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>I had acne scars on my face....i went to this clinic and i m satisfied with their treatment...i m so happy now coz there are no scars in my face😍😍</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <h3>John deo</h3>
            <span>Satisfied client</span>
        </div>

        <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>I went to see Doctor for acne scar , she recommended to take MNRF Procedure , the charges was affordable and I am getting better now :)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <h3>Naomi Levi</h3>
            <span>Satisfied client</span>
        </div>
    </div>

</section>


<!--reviews section ends-->

<!--contact section starts-->

<section class="contact" id="contact">

    <h1 class="heading">make appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
           if(isset($message)){
              foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
              }
           }
        ?>
        
        <span>Your name:</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>Your email:</span>
        <input type="email" name="email" placeholder="enter your email" class="box"required>
        <span>Your number:</span>
        <input type="text" name="number" placeholder="enter your number" class="box"required>
        <span>Appointment date:</span>
        <input type="datetime-local" name="date" class="box"required>
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>

<!--contact section ends-->

<!-- footer section strats--->
<section class="footer">
<div class="box-container container">
    <div class="box">
        <i class="fas fa-phone"></i>
            <h3>Phone number:</h3>
            <p>+91 9845570658</p>
            <p>+91 7855992366</p>
    </div>

    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
            <h3>Our Address:</h3>
            <p>Karnataka, Manipal - 574117</p>
            
    </div>
    <div class="box">
        <i class="fas fa-clock"></i>
            <h3>Working Hours:</h3>
            <p>7:00 am to 10:00 pm</p>
    </div>

    <div class="box">
        <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            
            <p>dr.giselda.pereira@skinclinic.com</p>
            <p>support@skinclinic.com</p>
    </div>
</div>
<div class="credit"> &copy; created by  <span>smitha</span></div>
</section>
<!-- footer section ends--->


  <!--custom js file link-->  
  <script src="js/script.js"></script>
    
</body>
</html>