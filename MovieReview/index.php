<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Flix Fire</title>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' integrity='sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' integrity='sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel='stylesheet' href='Style/bootstrap.min.css'>
    <link rel='stylesheet' href='Style/slick.css'>
    <link rel='stylesheet' href='Style/default.css'>
    <link rel='stylesheet' href='Style/style.css'>
    <link rel='stylesheet' href='Style/responsive.css'>
    
</head>
<body data-aos-easing='ease' data-aos-duration='1000' data-aos-delay='0' >
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="movies";
	$cnn=mysqli_connect($servername,$username,$password,$databasename);
    $nm="";
	if($cnn==true)
	{
        
        if($_REQUEST['txtName']!=""){
		$name=$_REQUEST['txtName'];
		$mail=$_REQUEST['txtMail'];
        $pass=$_REQUEST['txtPass'];
        $SQL="Select * from moviessignup where Mail='$mail' && Password='$pass'";
		$result=mysqli_query($cnn,$SQL);
		
		    if(mysqli_num_rows($result)==0){
                $SQL="Insert into moviessignup values('$name','$mail','$pass')";
                mysqli_query($cnn,$SQL);
                $rows=mysqli_affected_rows($cnn);	
                if($rows>0)
                echo '<script type="text/JavaScript"> 
                alert("Successfully Created Your Account");
                </script>';
                    
                else
                echo '<script type="text/JavaScript"> 
                alert("Please try Again...");
                 </script>';
            }
        }
        else if($_REQUEST['txtName']=="" && $_REQUEST['txtPass']!=""  && $_REQUEST['txtMail']!=""){
                $mail=$_REQUEST['txtMail'];
            $pass=$_REQUEST['txtPass'];
            $SQL="Select * from moviessignup where Mail='$mail' && Password='$pass'";
            $result=mysqli_query($cnn,$SQL);
            
            if(mysqli_num_rows($result)>0)
            echo '<script type="text/JavaScript"> 
            alert("Successfully Login");
            </script>';
                
            else
            echo '<script type="text/JavaScript"> 
            alert("Please try Again...");
            </script>';
        }
	}
	else
	{
		echo "Cannot open database..";
	}
	
echo "
    <!-- header-area -->
    <header class='header-style-two'>
        <div class='header-top-wrap'>
            <div class='container custom-container'>
                <div class='row align-items-center'>
                    <div class='col-md-6 d-none d-md-block'>
                        <div class='header-top-subs'>
                            <p>Welcome <span> ",$nm,"</span>, Browes your favourite movies. </p>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='header-top-link'>
                            <ul class='header-link'>
                                <li><a href='About.html'>About Us</a></li>
                            </ul>
                            <ul class='header-social'>
                                <li><a href='#'><i class='fab fa-facebook-f'></i></a></li>
                                <li><a href='#'><i class='fab fa-instagram'></i></a></li>
                                <li><a href='#'><span class='fab fa-youtube'></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='sticky-header' class='menu-area'>
            <div class='container custom-container'>
                <div class='row'>
                    <div class='col-12'>
                        <div class='mobile-nav-toggler'><i class='fas fa-bars'></i></div>
                        <div class='menu-wrap'>
                            <nav class='menu-nav show'>
                                <div class='logo'>
                                    <a href='#'>
                                        <img src='Resources/Images/demologo.png' alt='Logo'>
                                    </a>
                                </div>
                                <div class='navbar-wrap main-menu d-none d-lg-flex'>
                                    <ul class='navigation'>
                                        <li class='active menu-item-has-children'><a href='#'>Home</a>
                                        <div class='dropdown-btn'><span class='fas fa-angle-down'></span></div></li>
                                        <li class='menu-item-has-children'><a href='movies.php'>Movies</a>
                                            
                                        <div class='dropdown-btn'><span class='fas fa-angle-down'></span></div></li>
                                        <li class='menu-item-has-children'><a href='series.php'>Web Series</a>
                                        <li><a href='contact.html'>Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class='header-action d-none d-md-block navbar-wrap1'>
                                    <ul>
                                        <li class='d-none d-xl-block'>
                                            <div class='footer-search'>
                                                <form action='http://localhost/MovieReview/search.php'>
                                                    <input type='text' name='movie' placeholder='Find Your Movie'>
                                                    <button><i class='fas fa-search'></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <li class='header-btn'><a href='login.html' class='btn'>Log In</a></li>
                                        <li class = 'menu-item-has-children'>
                                            <a class = 'fas fa-palette'></a>
                                            <ul  class='submenu-two'>
                                                <li class = 'colors' id = 'color1' data-color = '#e4d804'></li>
                                                <li class = 'colors' id = 'color2' data-color = '#1EAE98'></li>
                                                <li class = 'colors' id = 'color3' data-color = '#F21170'></li>
                                                <li class = 'colors' id = 'color4' data-color = '#FF79CD'></li>
                                                <li class = 'colors' id = 'color5' data-color = '#FF7A5A'></li>
                                                <li class = 'colors' id = 'color6' data-color = '#17B978'></li>
                                            </ul>
                                            <div class='dropdown-btn'><span class='fas fa-angle-down'></span></div>
                                        </li>
                                        <!--<li class='header-btn'><a href='#' class='btn'>My Account</a></li>-->
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class='mobile-menu'>
                            <div class='close-btn'><i class='fas fa-times'></i></div>

                            <nav class='menu-box'>
                                <div class='nav-logo'><a href='#'><img src='resources/Images/demologo.png' alt='' title=''></a>
                                </div>
                                <div class='menu-outer'>
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                
                                    <ul class='navigation'>
                                        
                                    </ul>
                                </div>
                                <div class='social-links'>
                                    <ul class='clearfix'>
                                        <li><a href='#'><span class='fab fa-facebook-square'></span></a></li>
                                        <li><a href='#'><span class='fab fa-instagram'></span></a></li>
                                        <li><a href='#'><span class='fab fa-youtube'></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class='menu-backdrop'></div>
                        <!-- End Mobile Menu -->";
?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- Main Area Start -->
    <main>
		<!-- slider-area -->    
            <section class='slider-area slider-bg' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(32,33,43,0.75), rgba(32,33,42,1)),url(&quot;Resources/Images/slider_bg.jpg&quot;);'>
                <div class='slider-active slick-initialized slick-slider'>
                    <div class='slick-list draggable'><div class='slick-track' style='opacity: 1; width: 4560px;'><div class='slider-item slick-slide slick-current slick-active' data-slick-index='0' aria-hidden='false' style='width: 1520px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;' tabindex='0'>
                        <div class='container'>
                            <div class='row align-items-center'>
                                <div class='col-lg-6 order-0 order-lg-2'>
                                    <div class='slider-img text-center text-lg-right' data-animation='fadeInRight' data-delay='1s' style='animation-delay: 1s;'>
                                        <img src='Resources/Images/slider_img01.jpg' alt=''>
                                    </div>
                                </div>
                                <div class='col-lg-6'>
                                    <div class='banner-content'>
                                        <h6 class='sub-title' data-animation='fadeInUp' data-delay='.2s' style='animation-delay: 0.2s;'>Hell Movies</h6>
                                        <h2 class='title' data-animation='fadeInUp' data-delay='.4s' style='animation-delay: 0.4s;'>Unlimited <span>Movie</span>, TV Shows, &amp; More.</h2>
                                        <div class='banner-meta' data-animation='fadeInUp' data-delay='.6s' style='animation-delay: 0.6s;'>
                                            <ul>
                                                <li class='quality'>
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class='category'>
                                                    <a href='#' tabindex='0'>Romance,</a>
                                                    <a href='#' tabindex='0'>Drama</a>
                                                </li>
                                                <li class='release-time'>
                                                    <span><i class='far fa-calendar-alt'></i> 2021</span>
                                                    <span><i class='far fa-clock'></i> 128 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href='https://www.youtube.com/watch?v=R2gbPxeNk2E' class='banner-btn btn popup-video' data-animation='fadeInUp' data-delay='.8s' tabindex='0' style='animation-delay: 0.8s;'><i class='fas fa-play'></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class='slider-item slick-slide' data-slick-index='1' aria-hidden='true' style='width: 1520px; position: relative; left: -1520px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;' tabindex='-1'>
                        <div class='container'>
                            <div class='row align-items-center'>
                                <div class='col-lg-6 order-0 order-lg-2'>
                                    <div class='slider-img text-center text-lg-right' data-animation='fadeInRight' data-delay='1s' style='animation-delay: 1s;'>
                                        <img src='Resources/Images/slider_img02.jpg' alt=''>
                                    </div>
                                </div>
                                <div class='col-lg-6'>
                                    <div class='banner-content'>
                                        <h6 class='sub-title' data-animation='fadeInUp' data-delay='.2s' style='animation-delay: 0.2s;'>Movflx</h6>
                                        <h2 class='title' data-animation='fadeInUp' data-delay='.4s' style='animation-delay: 0.4s;'>Unlimited <span>Movie</span>, TV Shows, &amp; More.</h2>
                                        <div class='banner-meta' data-animation='fadeInUp' data-delay='.6s' style='animation-delay: 0.6s;'>
                                            <ul>
                                                <li class='quality'>
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class='category'>
                                                    <a href='#' tabindex='-1'>Romance,</a>
                                                    <a href='#' tabindex='-1'>Drama</a>
                                                </li>
                                                <li class='release-time'>
                                                    <span><i class='far fa-calendar-alt'></i> 2021</span>
                                                    <span><i class='far fa-clock'></i> 120 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href='https://www.youtube.com/watch?v=R2gbPxeNk2E' class='banner-btn btn popup-video' data-animation='fadeInUp' data-delay='.8s' tabindex='-1' style='animation-delay: 0.8s;'><i class='fas fa-play'></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class='slider-item slick-slide' data-slick-index='2' aria-hidden='true' style='width: 1520px; position: relative; left: -3040px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;' tabindex='-1'>
                        <div class='container'>
                            <div class='row align-items-center'>
                                <div class='col-lg-6 order-0 order-lg-2'>
                                    <div class='slider-img text-center text-lg-right' data-animation='fadeInRight' data-delay='1s' style='animation-delay: 1s;'>
                                        <img src='Resources/Images/slider_img03.jpg' alt=''>
                                    </div>
                                </div>
                                <div class='col-lg-6'>
                                    <div class='banner-content'>
                                        <h6 class='sub-title' data-animation='fadeInUp' data-delay='.2s' style='animation-delay: 0.2s;'>Movflx</h6>
                                        <h2 class='title' data-animation='fadeInUp' data-delay='.4s' style='animation-delay: 0.4s;'>Unlimited <span>Movie</span>, TV Shows, &amp; More.</h2>
                                        <div class='banner-meta' data-animation='fadeInUp' data-delay='.6s' style='animation-delay: 0.6s;'>
                                            <ul>
                                                <li class='quality'>
                                                    <span>Pg 18</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class='category'>
                                                    <a href='#' tabindex='-1'>Romance,</a>
                                                    <a href='#' tabindex='-1'>Drama</a>
                                                </li>
                                                <li class='release-time'>
                                                    <span><i class='far fa-calendar-alt'></i> 2021</span>
                                                    <span><i class='far fa-clock'></i> 120 min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href='https://www.youtube.com/watch?v=R2gbPxeNk2E' class='banner-btn btn popup-video' data-animation='fadeInUp' data-delay='.8s' tabindex='-1' style='animation-delay: 0.8s;'><i class='fas fa-play'></i> Watch Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
                </div>
            </section>
        <!-- slider-area-end -->

        <!-- New release and Upcoming movies start-->
        <section class='top-rated-movie ucm-bg2' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(0,0,0,0.80), rgba(0,0,0,1)),url(&quot;Resources/Images/slider_bg.jpg&quot;);'>
            <div class='container'>
                <div class='row align-items-end mb-55' style='margin-bottom: 60px;'>
                    <div class='col-lg-6'>
                        <div class='section-title title-style-three text-center text-lg-left'> <span class='sub-title'>Newly in Theaters</span>
                            <h2 class='title'>Newly Release Movies</h2> </div>
                    </div>
                </div>

                <div class='row tr-movie-active'>
                    <div class="owl-carousel owl-theme">
                <?php
 
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://imdb-api.com/en/API/InTheaters/k_vcjd4a8n",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    ));
                    
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $jsonvalue = json_decode($response);
                    for($index =0;$index<count($jsonvalue->items) && $index<10;$index++){
                        $id=$jsonvalue->items[$index]->id;
                        $str=$jsonvalue->items[$index]->image;
                        $name=$jsonvalue->items[$index]->title;
                        $year=$jsonvalue->items[$index]->year;
                        $time=$jsonvalue->items[$index]->runtimeStr;
                        echo " 
                            <div class='movie-item movie-item-three mb-50'>
                                <div class='movie-poster'>
                                    <img src='",$str,"' alt=''>
                                    <ul class='overlay-btn'>
                                        <li><a href='detailpage.php?id=",$id,"' class='btn'>Details</a></li>
                                    </ul>
                                </div>
                                <div class='movie-content'>
                                    <div class='top'>
                                        <h5 class='title'><a href='#'>",$name,"</a></h5>
                                        <span class='date'>",$year,"</span>
                                    </div>
                                    <div class='bottom'>
                                        <ul>
                                            <li><span class='quality'> <a href=''> <i class='fa fa-heart'></i> </a></span></li>
                                            <li>
                                                <span class='duration'><i class='far fa-clock'></i>",$time,"</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        ";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- New release and Upcoming movies end-->

        <!-- Top movies start-->
        <section class='top-rated-movie tr-movie-bg2' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(0,0,0,0.95), rgba(0,0,0,1)),url(&quot;Resources/Images/slider_bg.jpg&quot;);'>
            <div class='container'>
                <div class='row justify-content-center' style='margin-bottom: 60px;'>
                    <div class='col-lg-8'>
                        <div class='section-title title-style-three text-center mb-70'>
                            <span class='sub-title'>Top rated movies</span>
                            <h2 class='title'>Most Popular</h2>
                        </div>
                    </div>
                </div>
                <div class='row movie-item-row'>
                    
                <?php
 
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://imdb-api.com/en/API/MostPopularMovies/k_vcjd4a8n",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    ));
                    
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $jsonvalue = json_decode($response);
                    for($index =0;$index<count($jsonvalue->items) && $index<12;$index++){
                        $id =$jsonvalue->items[$index]->id;
                        $str=$jsonvalue->items[$index]->image;
                        $name=$jsonvalue->items[$index]->title;
                        $year=$jsonvalue->items[$index]->year;
                        //$time=$jsonvalue->items[$index]->runtimeStr;
                        $imdbCount=$jsonvalue->items[$index]->imDbRatingCount;
                        $imdb=$jsonvalue->items[$index]->imDbRating;
                        echo " 
                        <div class='col-xl-3 col-lg-4 col-sm-6'>
                            <div class='movie-item movie-item-three mb-50'>
                                <div class='movie-poster'>
                                    <img src='",$str,"' alt=''>
                                    <ul class='overlay-btn'>
                                        <li><a href='detailpage.php?id=",$id,"' class='btn'>Details</a></li>
                                    </ul>
                                </div>
                                <div class='movie-content'>
                                    <div class='top'>
                                        <h5 class='title'><a href='#'>",$name,"</a></h5>
                                        <span class='date'>",$year,"</span>
                                    </div>
                                    <div class='top'>
                                        <h5 class='title'>IMDB Count</a></h5>
                                        <span class='date'>",$imdbCount,"</span>
                                    </div>
                                    <div class='bottom'>
                                        <ul>
                                            <li><span class='quality'> <a href=''> <i class='fa fa-heart'></i> </a></span></li>
                                            <li>
                                                <span class='rating'><i class='fas fa-thumbs-up'></i>",$imdb,"</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        }
                    ?>
                </div>
                
            </div>
        </section>
        <!-- Top movies end-->
        
	</main>
    <!-- Main Area End -->

    <!-- footer-area -->
    <footer style='background: #000'>
        <div class='copyright-wrap'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-6 col-md-6'>
                        <div class='copyright-text'>
                            <p>Copyright © 2021. All Rights Reserved By <a href='#'>Hell Companies</a></p>
                        </div>
                    </div>
                    <div class='col-lg-6 col-md-6'>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

   <!-- JS here -->

   <script type="text/javascript">
    console.log('entered');
        const colors = document.getElementsByClassName('colors');
        let i;
        for (i = 0; i < colors.length; i++)
        {
            colors[i].addEventListener('click', changecolor);
        }

        function changecolor(){
            let color = this.getAttribute('data-color');
            console.log('color = ' + color);
            document.documentElement.style.setProperty('--primary-color01', color);
        }

    </script>
   <script src='JS/jquery-3.6.0.min.js.download'></script>
   <script src='JS/popper.min.js.download'></script>
   <script src='JS/bootstrap.min.js.download'></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src='JS/slick.min.js.download'></script>
   <script src='./main.js.download'></script>
   <script>
    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:25,
        nav:true,
        autoplay:true,
        autoplayTimeout: 2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
   </script>
</body>
</html>