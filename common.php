<?php include('php/function.php');
session_start();
error_reporting(0);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        
                        <p><b>ගොවිදැනුමට ඔබව සාදරයෙන් පිළිගනිමු</b></p>
                    </div>
                    <div class="topbar__right">
                        
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.html" aria-label="logo image"></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="home/main.php">මුල් පිටුව</a>
                            <ul>
                        
                                
                            </ul>
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
                                <span class="main-header__info-phone-title">+94 77 423 1723</span>
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
                <h2>ප්‍රජාවේ සහය</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__image">
                            <img src="assets/images/blog/blog-d-1-1.jpg" class="img-fluid" alt="">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-card__content">
                           <!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                                <a href="blog-details.html"></a>
                                <a href="blog-details.html"></a>
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="blog-details.html">ඔබේ ගෙවත්තේ ශාක රෝග අඩු කරගන්නේ කෙසේද බලමු</a></h3>
                        </div><!-- /.blog-card__content -->
                        <div class="blog-details__content">
                            <p>

                                ඔබේ ශාක නිරෝගීව තබා ගැනීමට පොහොර යෙදීම

එනම්, ශාක නිරෝගීව තබා ගැනීමට ප්‍රමාණවත් තරම් පොහොර යෙදීම මිස ඊට වඩා වැඩි නොවේ. අධික ලෙස පොහොර යෙදීම බොහෝ විට තවත් ගැටළු වලට තුඩු දෙයි, මන්ද එවිට ඔබේ ශාක පළිබෝධ සහ රෝග වලට ආකර්ෂණීය වන දුර්වල, නැවුම් වර්ධනයක් ඇති කරයි. නියම කාබනික පොහොර ප්‍රමාණය (හෝ නිතිපතා කොම්පෝස්ට් හෝ කොම්පෝස්ට් පොහොර යෙදීම) ඔබේ පැළෑටි නිරෝගීව සිටීමට උපකාරී වේ. සෞඛ්‍ය සම්පන්න ශාක වලට රෝග වළක්වා ගැනීමට වඩා හොඳ හැකියාවක් ඇත.

                                 </p>


                            <p>
                                සිටුවීමට පෙර පාංශු උණුසුම් වීමට ඉඩ දෙන්න

සමහර දිලීර රෝග අපගේ උද්‍යාන තුළට කොකු ලබා ගන්නේ පස තවමත් සිසිල් වන විට අප සිටුවන බැවිනි. අපගේ ශාක අවධාරණය කර ඇති අතර එමඟින් රෝගවලට එරෙහිව සටන් කිරීමට ඇති හැකියාව අඩු වන අතර ඔබ එය දැන ගැනීමට පෙර අපි රෝගී ශාක සමඟ කටයුතු කරන්නෙමු. මෙම ගැටළුව තුරන් කිරීම සඳහා ඇති පහසුම ක්‍රමය නම් වසන්තයේ දී පස උණුසුම් වන තුරු ඔබ සිටුවන්නේ නැති බව සහතික කිරීමයි. පාංශු උෂ්ණත්වමානයක් යනු පසුකාලීනව ඔබට හිසරදයක් ඉතිරි කර ගත හැකි මිල අඩු උපාංගයකි. මෙය කළ හැකි තවත් ක්‍රමයක් නම් රෝපණය කළ යුත්තේ කවදාදැයි දැන ගැනීම සඳහා සංසිද්ධි සොයා බැලීමයි. නිදසුනක් වශයෙන්, සම්ප්‍රදාය පවසන්නේ ලිලී නිම්නය පිපෙන විට තක්කාලි සිටුවීමට කාලය පැමිණ ඇති බවයි.
                            </p>
                            <p>
                                උදේට වතුර දැමීම 
මෙය පරණ ක්‍රමයක් උවත් උත්සාහ කළ සහ සත්‍ය වූ උපදෙස් වලින් එකකි. බොහෝ දිලීර රෝග වර්ධනය වීමට තෙත්, සිසිල් පරිසරයක් අවශ්‍ය වේ. ඉතින් අපේ ශාක පත්‍ර එක රැයකින් තෙත් වී ඇත්නම්, මෙම රෝගවලට අපගේ උද්‍යානවල හොඳ ආරම්භයක් ලබා ගැනීමට අවස්ථාවක් ලැබේ. මෙය වළක්වා ගත හැකි පහසුම ක්‍රමය නම් රාත්‍රියට පෙර ඔබේ පැළෑටි වියළී යාම සඳහා හැකි ඉක්මනින් ජලය පානය කිරීමයි.
                            </p>
                        </div><!-- /.blog-details__content -->

                        

                        <br>

                        <div class="blog-comment">
                            <h2>ගොවීන්ගේ අදහස්</h2>
                            <div class="blog-comment__box">
                                <div class="blog-comment__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="">
                                </div><!-- /.blog-comment__image -->
                                <div class="blog-comment__content">
                                    <h3>රණසිංහ මහතා </h3>
                                    <h6> අගුනුකොලපලැස්ස</h6>
                                    <br>
                                    <p>අපේ ක්‍ෂේත්‍රයේ ඇති වන ගැටලු සම්බන්ධයෙන් කෘෂිකාර්මික උපදේශකවරයකුගෙන් අපට නිතර උපදෙස් ලැබෙන්නේ නැත. ඔවුන් සම්බන්ධ කර ගැනීම දුෂ්කර වන අතර බොහෝ විට ඉතා ප්රයෝජනවත් උපදෙස් නොලැබේ. ඒත් සමහර වෙලාවට අපි එහෙම කරනවා. මෙවැනි ක්‍රමවේදයක් මගින් එය ගොවීන්ට පහසු විය හැකිය.</p>
                                    <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                                </div><!-- /.blog-comment__content -->
                            </div><!-- /.blog-comment__box -->
                            <div class="blog-comment__box">
                                
                            </div><!-- /.blog-comment__box -->
                        </div><!-- /.blog-comment -->



                        <div class="comment-form">
                            <h2>ඔබේ අදහස් පහතින් දක්වන්න</h2>

                        <div class="container">
<img <?php echo('src="assets/images/team/team-1-4.jpg'.$_SESSION["ImgUrlComment"].'"'); ?> width="300" height="350">
    <div class="row">

        <div class="col-md-6 col-md-offset-3 post">
            <h2><?php echo $post['title'] ?></h2>
            <p><?php echo $post['body']; ?></p>
        </div>
        <div class="col-md-6 col-md-offset-3 comments-section">
            <!-- if user is not signed in, tell them to sign in. If signed in, present them with comment form -->
            <?php if (isset($user_id)): ?>
                <form class="clearfix" action="common.php" method="post" id="comment_form">
                    <textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                    <button  id="submit_comment" class="thm-btn">Submit comment</button>
                </form>
            <?php else: ?>
                <div class="well" style="margin-top: 20px;">
                    <h4 class="text-center"><a href="#">Sign in</a> to post a comment</h4>
                </div>
            <?php endif ?>
            <!-- Display total number of comments on this post  -->
            <h4><span id="comments_count"><?php echo count($comments) ?></span> Comment(s)</h4>
            <hr>
            <!-- comments wrapper -->
            <div id="comments-wrapper">
            <?php if (isset($comments)): ?>
                <!-- Display comments -->
                <?php foreach ($comments as $comment): ?>
                <!-- comment -->
                <div class="comment clearfix">
                    <img src="profile.png" alt="" class="profile_pic">
                    <div class="comment-details">
                        <span class="comment-name"><?php echo getUsernameById($comment['user_id']) ?></span>
                        <span class="comment-date"><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></span>
                        <p><?php echo $comment['body']; ?></p>
                        <a class="reply-btn" href="#" data-id="<?php echo $comment['id']; ?>">reply</a>
                    </div>

                    
                  
                    <!-- reply form -->
                    <form action="post_details.php" class="reply_form clearfix" id="comment_reply_form_<?php echo $comment['id'] ?>" data-id="<?php echo $comment['id']; ?>">
                        <textarea class="form-control" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
                        <button class="btn btn-primary btn-xs pull-right submit-reply">Submit reply</button>
                    </form>



                    <!-- GET ALL REPLIES -->
                    <?php $replies = getRepliesByCommentId($comment['id']) ?>
                    <div class="replies_wrapper_<?php echo $comment['id']; ?>">
                        <?php if (isset($replies)): ?>
                            <?php foreach ($replies as $reply): ?>
                                <!-- reply -->
                                <div class="comment reply clearfix">
                                    <img <?php echo('src="assets/images/team/team-1-4.jpg'.$_SESSION["ImgUrlComment"].'"'); ?> alt="" class="profile_pic">
                                    <div class="comment-details">
                                        <span class="comment-name"><?php echo getUsernameById($reply['user_id']) ?></span>
                                        <span class="comment-date"><?php echo date("F j, Y ", strtotime($reply["created_at"])); ?></span>
                                        <p><?php echo $reply['body']; ?></p>
                                        <a class="reply-btn" href="#">reply</a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>
                    <!-- // comment -->
                <?php endforeach ?>
            <?php else: ?>
                <h2>Be the first to comment on this post</h2>
            <?php endif ?>
            </div><!-- comments wrapper -->
        </div><!-- // all comments -->
    </div>
</div>

                        </div><!-- /.comment-form -->


                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="agrikon-icon-magnifying-glass"></i></button>
                                </form>
                            </div><!-- /.blog-sidebar__search -->
                            
                            <div class="blog-sidebar__categories">
                                <h3>ප්‍රයෝජනවත් සබැඳි</h3>
                                <ul>
                                    <li>
                                        <a href="https://doa.gov.lk/"><i class="agrikon-icon-right-arrow"></i>කෘෂිකර්ම දෙපාර්තමේන්තුව  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.dea.gov.lk/"><i class="agrikon-icon-right-arrow"></i>

                                            අපනයන කෘෂිකර්ම දෙපාර්තමේන්තුව  </a>
                                    </li>

                                    <li>
                                        <a href="https://www.agrimin.gov.lk/"><i class="agrikon-icon-right-arrow"></i>කෘෂිකර්ම අමාත්‍යාංශය</a>
                                    </li>

                                    <li>
                                        <a href="http://agrariandept.gov.lk/"><i class="agrikon-icon-right-arrow"></i>ගොවිජන සංවර්ධන දෙපාර්තමේන්තුව</a>
                                    </li>

                                    <li>
                                        <a href="http://www.aib.gov.lk/"><i class="agrikon-icon-right-arrow"></i>කෘෂි රක්ෂණ මණ්ඩලය</a>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__categories -->
                            <div class="blog-sidebar__tags">
                                <h3>Tags</h3>
                                <div class="blog-sidebar__tags-links">
                                    <a href="#">Agriculture,</a>
                                    <a href="#">Food,</a>
                                    <a href="#">Healthy,</a>
                                    <a href="#">Dairy,</a>
                                    <a href="#">Organic,</a>
                                    <a href="#">Farm,</a>
                                    <a href="#">Economy</a>
                                </div><!-- /.blog-sidebar__tags-links -->
                            </div><!-- /.blog-sidebar__tags -->
                        </div><!-- /.blog-sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->



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
    <!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>