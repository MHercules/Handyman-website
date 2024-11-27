

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max's Handyman Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="js/validate.js"></script>
</head>

<body>
    <!-- Header section-->>
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-hammer"></i>
            <strong>Max's</strong>Fixers</a>

        <nav class="navbar">
            <a href="#home">Home<i class="fa-solid fa-house"></i></a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#appointment">Appointment</a>
            <a href="#review">Reviews</a>
            <a href="#contact">Contact</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!--End of Header section-->

    <!-- Home section-->

    <section class="home" id="home">

        <div class="image">
            <img src="images\construction-site-1-2.svg" alt=""><!-- Put proper home image here-->
        </div>

        <div class="content">
            <h3>Why DIY when we can do it for you</h3>
            <p>Hi, my name is Max, and I've been in the fixing business for 15 years.</p>
            <p>I've had a love for fixing things since I was a toddler, with my father buying me play tools sparking that interest.
                So whatever your problem is, you couldn't find any better hands to make it right.</p>
            <a href="#appointment" class="btn">Make an appointment<span class="fas fa-chevron-right"></span></a>
        </div>

    </section>

    <!--End of Home section-->

    <!--About section-->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="images\construction-site-25.svg" alt="">
            </div>

            <div class="content">
                <h3>the best handyman you don't know</h3>
                <p>Here at Max's fixers we try to do the best we can in places you care about, whether it be a clogged pipe,
                    or a missaligned roofbeam. We fix it all.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!--End of about section-->

    <!--Services section-->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fa-solid fa-toilet-portable"></i>
                <h3>plumbing</h3>
                <p>Clogged toilets are my forte. Leaky pipes are only leaky when i'm not there</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fa-solid fa-screwdriver"></i>
                <h3>electrical</h3>
                <p>I can install lights, plugs and rewire a bomb. That's a joke...</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>general</h3>
                <p>I can install doors, and frames. Move furniture and whatever else you can't do.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!--End of Services section-->

    <!--Appointment section-->

    <section class="appointment" id="appointment">

        <h1 class="heading">Make an <span>appointment</span></h1>

        <div class="row">

            <div class="image">
                <img src="images\construction-worker-27.svg" alt="">
            </div>

            <form action="appointment2.php" method="post">
                <h3>make an appointment</h3>

                <?php if (isset($_GET['error'])) { ?>
                    <div class="errorMessage">
                        <?php echo stripslashes($_GET['error']) ?>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <div class="successMessage">
                        <?php echo stripslashes($_GET['success']) ?>
                    </div>
                <?php }

                ?>

                <input type="text" name="name" placeholder="Name" class="box">
                <input type="number" name="number" placeholder="Cellphone number" class="box">
                <input type="email" name="email" placeholder="Email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="make appointment" class="btn">
            </form>

        </div>

    </section>

    <!--End of Appointment section-->

    <!--Reviews section-->

    <section class="review" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icons8-user-94.png" alt="">
                <h3>James Jones</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Max was a godsend, fixed a leak in my toiletbowl.</p>
            </div>

            <div class="box">
                <img src="images/icons8-user-94.png" alt="">
                <h3>Abriette Abri</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text">No-one better!!!</p>
            </div>

            <div class="box">
                <img src="images/icons8-user-94.png" alt="">
                <h3>Sipho Tenda</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text">Give this man a Bells.</p>
            </div>
        </div>

    </section>

    <!--End of Reviews section-->

    <!--Contact me section-->

    <section class="contact" id="contact">

        <h1 class="heading"><span>Contact</span> me for a quote.</h1>

        <div class="row">

            <div class="image">
                <img src="images\construction-worker-65.svg" alt="">
            </div>

            <form action="contact2.php" method="post">
                <h3>Leave details here</h3>

                <?php if (isset($_GET['error'])) { ?>
                    <div class="errorMessage">
                        <?php echo stripslashes($_GET['error']) ?>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <div class="successMessage">
                        <?php echo stripslashes($_GET['success']) ?>
                    </div>
                <?php }?>

                <input type="text" name="name1" placeholder="Name" class="box">
                <input type="number" name="number1" placeholder="Cellphone number" class="box">
                <input type="email" name="email1" placeholder="Email" class="box">
                <input type="submit" name="contactbtn" value="submit" class="btn">
            </form>

        </div>

    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fa-solid fa-chevron-right"></i>home</a>
                <a href="#about"><i class="fa-solid fa-chevron-right"></i></i>about</a>
                <a href="#services"><i class="fa-solid fa-chevron-right"></i>services</a>
                <a href="#appointment"><i class="fa-solid fa-chevron-right"></i>appointment</a>
                <a href="#review"><i class="fa-solid fa-chevron-right"></i>reviews</a>
                <a href="#contact"><i class="fa-solid fa-chevron-right"></i>contact</a>
            </div>

            <div class="box">
                <h3>Services</h3>
                <a href="#services"><i class="fa-solid fa-chevron-right"></i>plumbing</a>
                <a href="#services"><i class="fa-solid fa-chevron-right"></i>electrical</a>
                <a href="#services"><i class="fa-solid fa-chevron-right"></i>general</a>
            </div>

            <div class="box">
                <h3>Contact me</h3>
                <a href="#"><i class="fa-solid fa-mobile-screen"></i>+27980765893</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+27234749580</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>maxfixer23@gmail.com</a>
            </div>

        </div>

        <div class="credit">Created by <span>marc hercules</span> | all rights reserved</div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>