<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
include('php/config.php');
error_reporting(0);
   if(isset($_FILES['image'])){
      $_SESSION["ImgUrlComment"]=$_FILES['image']['name'];
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $extensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/uploads/".$file_name);
         $_SESSION["boolisOkay"] = true;
      }else{
         print_r($errors);
      }
   }
   if(!empty($_POST['name'])){
$Name=$_POST["name"];
$Email=$_POST["email"];
$Phone=$_POST["phone"];
$message=$_POST["message"];

$query = sprintf("INSERT INTO `posts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES ('1', '$Name', '$Email', '$Phone', '$message', current_timestamp(), current_timestamp());");

//execute query
$result = $db->query($query);

echo $result;

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Govidanuma</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="HTML">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                        </div><!-- /.topbar__social -->
                        <p>ගොවිදැනුමට ඔබව සාදරයෙන් පිළිගනිමු</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="home/main.php">මුල් පිටුව</a>
                           
                        </li>
                        <li>
                            <a href="about.php">අප ගැන</a>
                        </li>
                        <li>
                            <a href="common.php">ප්‍රජාව</a>
                        </li>
                       
                        <li class="dropdown">
                            <a href="shaka-roga.html">ශාක රෝග</a>
                            
                        
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        
                       
                        <a href="+94 77 310 8865" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text"><b>අමතන්න</b></span>
                                <span class="main-header__info-phone-title">+94 77 310 8865</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html"></a></li>
                    <li></li>
                    <li><span></span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>අප ගැන</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

       

        <div class="client-carousel client-carousel__has-border-top client-carousel__about-page">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="team-one">
            <img src="assets/images/icons/team-bg-1-1.png" alt="" class="team-one__bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="team-one__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>හමුවන්න</p>
                                <h3>අත්දැකීමෙන් පරිපූර්ණ ගොවීන් </h3>
                            </div><!-- /.block-title -->
                            <div class="team-one__summery">
                                <p>මෙමගින් අප, ශ්‍රී ලංකික මහා පරිමාණ භෝග සඳහා රෝග විනිශ්චය ක්‍රමවේදයක් හඳුන්වා දී ඇත. එමෙන්ම ඔබ ඇතුලත් කරන රෝගී පත්‍රයෙහි රෝගය මෙතෙක් හඳුනා නොගත් රෝගයක් නම්, ඔබට ක්ෂේස්ත්‍රයේ ප්‍රවීනයන්ගේ උපදෙස් අප හරහා සෘජුවම ලබාගැනීමේ අවස්ථාව හිමිවේ.</p>
                            </div><!-- /.team-one__summery -->

                            <!-- If we need navigation buttons -->
                            <div class="team-one__nav">
                                <div class="swiper-button-prev" id="team-one__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-next" id="team-one__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                            </div><!-- /.team-one__nav -->

                        </div><!-- /.team-one__content -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="team-one__carousel-wrap">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
        },"breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Jessica Brown">
                                   
                                </div><!-- /.team-card__image -->
                                <h3>සිනහව </h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Jessica Brown">
                                    
                                    
                                </div><!-- /.team-card__image -->
                                <h3>අස්වැන්න</h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="Jessica Brown">
                                   
                                </div><!-- /.team-card__image -->
                                <h3>ශ්‍රමය</h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Jessica Brown">
                                    
                                </div><!-- /.team-card__image -->
                                <h3>සිනහව </h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Jessica Brown">
                                    
                                </div><!-- /.team-card__image -->
                                <h3>අස්වැන්න</h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="Jessica Brown">
                                    
                                </div><!-- /.team-card__image -->
                                <h3>ශ්‍රමය</h3>
                                <p></p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->

                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.team-one__carousel-wrap -->
        </section><!-- /.team-one -->

        

        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="assets/images/resources/about-3-2.jpg" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>සම්බන්ද වන්න</p>
                                <h3>වසර 33 ක විශිෂ්ට සේවාවක් සපයන කෘෂිකර්ම දෙපාර්තමේන්තුවේ ප්‍රවීණයන් සමඟ </h3>
                            </div><!-- /.block-title -->
                            <ul class="about-three__list list-unstyled">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    වී පර්යේෂණ හා සංවර්ධන ආයතනය බතලගොඩ 
                                </li>
                               
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                   ජාතික කෘෂි තොරතුරු හා සන්නිවේදන මධ්‍යස්ථානය
                                </li>

                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    ක්ෂේත්‍ර භෝග පර්යේෂණ හා සංවර්ධන ආයතනය 
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    උද්‍යාන බෝග පර්යේෂණ හා සංවර්ධන ආයතනය
                                </li>
                            </ul><!-- /.about-three__list list-unstyled -->
                            <div class="about-three__summery">
                                <p>ගොවියාගේ ආදායම හා ජීවන තත්ත්වය ඉහළ නැංවීම සහ පාරිභෝගිකයාට දැරිය හැකි මිලකට ආහාර ලබා දීම සඳහා ආහාර බෝග අංශයේ  ඵලදායිතාව සහ නිෂ්පාදනය පවත්වා ගෙන යාම සහ වැඩි කිරීම කෙරෙහි  කෘෂිකර්ම දෙපාර්තමේන්තුවේහි අරමුණ යොමු වී ඇත.  කෘෂිකර්ම දෙපාර්තමේන්තුවේහි ප්‍රධාන කාර්යයන් අතර පර්යේෂණ, ව්‍යාප්තිය, බීජ හා රෝපණ ද්‍රව්‍ය නිෂ්පාදනය, ශාක නිරෝධායනයට අදාළ නියාමන සේවා, පාංශු සංරක්ෂණය සහ පළිබෝධනාශක ඇතුළත් වේ. </p>
                            </div><!-- /.about-three__summery -->
                            <div class="about-three__signs">
                                
                            </div><!-- /.about-three__signs -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->


        <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
            <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <!-- /.call-to-action__bg -->
            <div class="container">
                <div class="call-to-action__content">
                    <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                    <h3>රෝග විනිශ්චය ක්‍රමවේදයට පිවිසෙන්න</h3>
                </div><!-- /.call-to-action__content -->
                <div class="call-to-action__button">
                    <a href="home/main.php" class="thm-btn">රූපය ඇතුලත් කිරීම සඳහා</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__button -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

         <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                          
                            <img src="assets/images/resources/contact-1-1.jpg" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>ගොවිදැනුම</p>
                                <h3>ඔබේ ගැටළු අපට යොමුකරන්න </h3>
                            </div><!-- /.block-title -->
                            <div class="contact-two__summery">
                                <p>ඔබගේ වගාවේ ඔබට හඳුනාගත හැකි හෝ හඳුනාගැනීමට අපහසු කිසියම් රෝගයක් ඇත්නම් ඒ පිළිබඳව අපට දැනුම් දෙන්න. වගා දැනුම යටතේ වගා ප්‍රවීනයන්ගේ උපදෙස් අනුව වඩාත් යෝග්‍ය විසඳුමක් ලබාදීමට අපි බලාපොරොත්තු වන්නෙමු.</p>
                            </div><!-- /.contact-two__summery -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <form action=""  method="post" enctype="multipart/form-data">
            <div class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="නම">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="විද්‍යුත් තැපෑල">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="දුරකථන අංකය">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="ගැටලුව"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <br><br><br>
                                <div class="col-lg-12">
                                <p>සොයාගැනීමට අවශ්‍ය රූපය: </p>
                                   <input name="image" id="selected_image"  class="thm-btn" type="file"  />
                                <br><br><br>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">යොමු කරන්න</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </div>
                        </form>
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->











        <footer class="site-footer">
            <img src="assets/images/icons/footer-bg-icon-1.png" class="site-footer__shape-1" alt="">
            <img src="assets/images/icons/footer-bg-icon-2.png" class="site-footer__shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-widget__Logo">
                                <img src="assets/images/logo-light.png" width="153" alt="">
                            </a>
                            <p>ශාක රෝගයක් අර්ථ දැක්වෙන්නේ “ශාකයක උපරිම විභවතාවයට අනුව ක්‍රියා කිරීම වළක්වන ඕනෑම දෙයක්” ලෙසිනි. මෙම නිර්වචනය පුළුල් වන අතර අජීවී හා ජෛව ශාක රෝග ඇතුළත් වේ.
                            </p>
                            <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                                <input type="email" name="EMAIL" placeholder="විද්‍යුත් තැපෑල">
                                <button type="submit"><i class="agrikon-icon-right-arrow"></i></button>
                            </form><!-- /.mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            <div class="footer__social">
                               
                            </div><!-- /.topbar__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">යොමු </h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="#">මුල් පිටුව</a></li>
                                <li><a href="#">අප ගැන</a></li>
                                <li><a href="#">ව්‍යාපෘති </a></li>
                                
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">දැනුමට යමක් </h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__post">
                                <li>
                                    <img src="assets/images/resources/footer-post-1.png" alt="">
                                    <div class="footer-widget__post-content">
                                        <span></span>
                                        <h4><a href="blog-details.html">එළවළු වගා කරන්නේ කෙසේද</a></h4>
                                    </div><!-- /.footer-widget__post-content -->
                                </li>
                                <li>
                                    <img src="assets/images/resources/footer-post-2.png" alt="">
                                    <div class="footer-widget__post-content">
                                        <span></span>
                                        <h4><a href="blog-details.html">පලතුරු වගා කරන්නේ කෙසේද</a></h4>
                                    </div><!-- /.footer-widget__post-content -->
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__post -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title">සහය</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                            <li>
                                <i class="agrikon-icon-telephone"></i>
                                <a href="tel:+94 77 310 8865">+94 77 310 8865</a>
                            </li>
                            <li>
                                <i class="agrikon-icon-email"></i>
                                <a href="mailto:govidanuma@gmail.com">govidanuma@gmail.com</a>
                            </li>
                            <li>
                               
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->
        <div class="bottom-footer">
            <div class="container">
                
                <div class="bottom-footer__links">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div><!-- /.bottom-footer__links -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>


    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
    <script>
    var uploadFiles;
    function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#selected_image')
                            .attr('src', e.target.result)
                            .width(220)
                            .height(220);

                    };
                    alert("රූපය තෝරාගෙන, තවදුරටත් ඉදිරියට යාමට විශ්ලේෂණය ක්ලික් කරන්න");
                    reader.readAsDataURL(input.files[0]);
                    uploadFiles = input.files;
                }
            }

        $(document).ready(function () {
            // fix menu when passed
            $(".masthead").visibility({
                once: false,
                onBottomPassed: function () {
                    $(".fixed.menu").transition("fade in");
                },
                onBottomPassedReverse: function () {
                    $(".fixed.menu").transition("fade out");
                }
            });

            // create sidebar and attach to menu open
            $(".ui.sidebar").sidebar("attach events", ".toc.item");
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i["GoogleAnalyticsObject"] = r;
            (i[r] =
                i[r] ||
                function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }),
            (i[r].l = 1 * new Date());
            (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

        ga("create", "UA-87734989-1", "auto");
        ga("send", "pageview");
    </script>
    </script>



</body>

</html>