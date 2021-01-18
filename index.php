<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>THIỆU</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="menu-responsive col-lg-12">
                <ul>
                    <li><a href="#">HOME</a> </li>
                    <li><a href="#">ABOUT-ME</a> </li>
                    <li><a href="#">SKILL</a> </li>
                    <li><a href="#">EXPERIENCE</a> </li>
                    <li><a href="#">PROJECT</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" header container-fluid" id="header">
        <div class="row">
            <div class="button-responsive">
                <button type="button" class="btn btn-outline-dark btn-menu"><i class="fa fa-fw fa-bars"></i></button>
            </div>
            <div class="img-linh col-lg-12">
                <img src="img/linh4.jpg" alt="">
            </div>
<?php
$conn   = mysqli_connect("localhost", "root", "", "my_profile");
$sql    = "select * from home where is_active='1' limit 1";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_assoc($result);
?>
            <div class="name col-lg-12 col-sm-12">
                <p><?php echo $row['preface']?></p>
                <!-- <p>Hello i'm Nguyen Nhat Linh</p>
                <p>I'm web developer</p>
                <p id="type">Nice to meet you</p> -->
            </div>
            <div class="circles">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="menu">
                <a href="#hd" id="header" class="current">HOME</a>
                <a href="#abm" id="aboutMe">ABOUT-ME</a>
                <a href="#skm" id="skillMe">SKILL</a>
                <a href="#edu" id="education">EXPERIENCE</a>
                <a href="#project" id="prj">PROJECT</a>
            </div>
        </div>
        <div class="row">
            <a href="#abm" id="arrow-abm">
                <div class="arrow1 col-lg-12"></div>
            </a>
            <a href="#abm" id="arrow-abm">
                <div class="arrow2 col-lg-12"></div>
            </a>
        </div>
    </div>
    <div class="content container-fluid">
        <div class="row">
            <div class="about-me col-lg-12 col-md-12 col sm-12" id="abm">
                <div class="about-me title">
                    <h4>ABOUT ME</h4>
                    <hr>
                </div>
                <div class="row">
                    <div class="about-me avatar col-lg-4 col-md-12 col-sm-12">
                        <div class="avatar-background ">
                            <img src="img/linh.jpg" alt="">
                            <h3 style="margin-top:10px">Phạm VĂN THIỆU</h3>
                            <p>DEVELOPER WEB, CEO</p>
                            <P>Water Resouces UniverSity</P>
                            <p><Button>FOLLOW</Button></p>
                        </div>
                    </div>
                    <div class="about-me details avatar col-lg-8 col-md-12 col-sm-12">
                        <p>Hi everyone, i'm THIEU, i'm come from Hai Duong
                            city</p>
                        <p>Currently, I have graduated from college and am
                            looking for an internship, the purpose to
                            improve my knowledge of web programming.</p>
                        <p>Well, let me say more in detail about my
                            education :</p>
                        <div class="education">
                            <p><b>School:</b> Water Resources University
                            </p>
                            <p><b>Year:</b> 2014-2019</p>
                            <p><b>Major:</b> Information Technology</p>
                            <p><b>specialized</b> Software Technology
                            </p>
                        </div>
                        <p>And, my contact information:
                        </p>
                        <div class="contact">
                            <diV class="contact-item">
                                <i class="fas fa-phone"></i><br>
                                <a>033.872.1996</a>
                            </div>
                            <diV class="contact-item">
                                <i class="fab fa-facebook-f"></i><br>
                                <a href="https://www.facebook.com/nguyen.linh.712714" target="_BLANK">Facebook</a>
                            </div>
                            <diV class="contact-item">
                                <i class="fab fa-instagram"></i><br>
                                <a href="https://www.instagram.com/?hl=vi" target="_BLANK">instagram</a>
                            </div>
                            <diV class="contact-item">
                                <i class="fab fa-youtube"></i><br>
                                <a href="https://www.youtube.com/channel/UC2z42KbEbne-T5yiLpKT_0Q?view_as=subscriber"
                                    target="_BLANK">Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content2 container">
        <div class="row">
            <div class="skill col-lg-12 col-md-12 col sm-12" id="skm">
                <div class=" skill title">
                    <h4>SKILL</h4>
                    <hr>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="skill-content col-lg-12">
                            <div class="skill-content-item html ">
                                <p>HTML5</p>
                            </div>
                            <div class="skill-content-item css">
                                <p>CSS</p>
                            </div>
                            <div class="skill-content-item javascript">
                                <p>Javascript</p>
                            </div>
                            <div class="skill-content-item php">
                                <p>PHP</p>
                            </div>
                            <div class="skill-content-item photoshop">
                                <p>Photoshop</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="content3 container-fluid">
        <div class="row">
            <div class="Education col-lg-12 " id="edu">
                <div class=" Education title">
                    <img src="img/book.png" alt="">
                    <h4>
                        EXPERIENCE</h4>
                    <hr>
                </div>
                <div class="timeline">
                    <div class="timeline-container left">
                        <div class="timeline-content ">
                            <div class="time-left">
                                <h2>9/2019 - Present</h2>
                            </div>
                            <h3>Web Developer</h3>
                            <p>I'm learning web php at Devmaster Academy </p>
                        </div>

                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <div class="time-right">
                                <h2>4/2019 - 9/2019</h2>
                            </div>
                            <h3>Shipper,
                                Salesman</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla velit nisi
                                reprehenderit blanditiis. Suscipit expedita, itaque saepe maiores culpa adipisci cumque
                                nulla reprehenderit deleniti. Repudiandae quo obcaecati beatae facilis.</p>
                        </div>
                    </div>
                    <div class="timeline-container left">
                        <div class="timeline-content">
                            <div class="time-left">
                                <h2>11/2014 - 4/2019</h2>
                            </div>
                            <h3>Water Resouces University</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla velit nisi
                                reprehenderit blanditiis. Suscipit expedita, itaque saepe maiores culpa adipisci cumque
                                nulla reprehenderit deleniti. Repudiandae quo obcaecati beatae facilis.</p>
                        </div>
                    </div>
                    <div class="timeline-container right">
                        <div class="timeline-content">
                            <div class="time-right">
                                <h2>2011 - 2014</h2>
                            </div>
                            <h3>Hong Quang High school</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla velit nisi
                                reprehenderit blanditiis. Suscipit expedita, itaque saepe maiores culpa adipisci cumque
                                nulla reprehenderit deleniti. Repudiandae quo obcaecati beatae facilis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="content4 container-fluid">
        <div class="row">
            <div class="project col-lg-12 col-sm-12 " id="project">
                <div class="project title">
                    <h4>PROJECT</h4>
                    <hr>
                </div>
                <div class="project coming">
                    <h1>COMING SOON!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed"></div>
    <div class="current"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $("#header").click(function () {
        document.querySelector('#header').scrollIntoView({
            behavior: "smooth"
        });
    })
    $("#arrow-abm").click(function () {
        document.querySelector('#abm').scrollIntoView({
            behavior: "smooth"
        });
    })
    $("#aboutMe").click(function () {
        document.querySelector('#abm').scrollIntoView({
            behavior: "smooth"
        });
    })
    $("#skillMe").click(function () {
        document.querySelector('#skm').scrollIntoView({
            behavior: "smooth"
        });
    })
    $("#education").click(function () {
        document.querySelector('#edu').scrollIntoView({
            behavior: "smooth"
        });
    })
    $("#prj").click(function () {
        document.querySelector('#project').scrollIntoView({
            behavior: "smooth"
        });
    })
    $(".btn-menu").click(function () {
        if ($(".menu-responsive").css("display") == "none") {
            $(".menu-responsive").css("display", "block");
        } else {
            $(".menu-responsive").css("display", "none");
        }
    })
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 450) {
            $('.menu').addClass('fixed');
            $(".menu").css("padding", "10px");
            $(".menu").css("height", "70px");
            $(".menu a").css("color", "black")
        } else {
            $('.menu').removeClass('fixed');
            $(".menu").css("padding", "0px");
            $(".menu").css("height", "50px");

        }
    });
    $(window).scroll(function () {
        $position = $(window).scrollTop();
        console.log($position);
        if ($(window).scrollTop() < 700) {
            $(".menu a:nth-of-type(1)").addClass("current");
        } else {
            $(".menu a:nth-of-type(1)").removeClass("current");
        } if ($(window).scrollTop() >= 701 && $(window).scrollTop() < 1400) {
            $(".menu a:nth-of-type(2)").addClass("current");
            $(".avatar-background").addClass("animated flipInX");
            $(".about-me.details").addClass("animated bounce bounceInRight");
        } else {
            $(".menu a:nth-of-type(2)").removeClass("current");
        } if ($(window).scrollTop() > 1401 && $(window).scrollTop() < 2000) {
            $(".menu a:nth-of-type(3)").addClass("current");
            $(".skill-content").addClass("animated fadeInUp");
        } else {
            $(".menu a:nth-of-type(3)").removeClass("current");
        } if ($(window).scrollTop() > 2000 && $(window).scrollTop() < 3938) {
            $(".menu a:nth-of-type(4)").addClass("current");
        } else {
            $(".menu a:nth-of-type(4)").removeClass("current");
        } if ($(window).scrollTop() > 2000 && $(window).scrollTop() < 2638) {
            $(".timeline-container.left:nth-of-type(1)").addClass("animated fadeInUp");
        } else if ($(window).scrollTop() > 2638 && $(window).scrollTop() < 2808) {
            $(".timeline-container.right:nth-of-type(2)").addClass("animated fadeInUp");
        } else if ($(window).scrollTop() > 2808 && $(window).scrollTop() < 3000) {
            $(".timeline-container.left:nth-of-type(3)").addClass("animated fadeInUp");
        } else if ($(window).scrollTop() > 3200 && $(window).scrollTop() < 3400) {
            $(".timeline-container.right:nth-of-type(4)").addClass("animated fadeInUp");
        }
    });
</script>

</html>