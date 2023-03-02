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
<body data-aos-easing='ease' data-aos-duration='1000' data-aos-delay='0' style='background: rgb(29,29,40)' >
    <!-- header-area -->
    <header class='header-style-two'>
        <div class='header-top-wrap'>
            <div class='container custom-container'>
                <div class='row align-items-center'>
                    <div class='col-md-6 d-none d-md-block'>
                        <div class='header-top-subs'>
                            <p>Welcome <span> [Your_Name] </span>, Browes your favourite movies. </p>
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
                                        <li class=' menu-item-has-children'><a href='index.php?txtName=&txtMail=&txtPass='>Home</a>
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
                                            <a class = "fas fa-palette"></a>
                                            <ul  class='submenu-two'>
                                                <li class = "colors" id = "color1" data-color = "#e4d804"></li>
                                                <li class = "colors" id = "color2" data-color = "#1EAE98"></li>
                                                <li class = "colors" id = "color3" data-color = "#F21170"></li>
                                                <li class = "colors" id = "color4" data-color = "#FF79CD"></li>
                                                <li class = "colors" id = "color5" data-color = "#FF7A5A"></li>
                                                <li class = "colors" id = "color6" data-color = "#17B978"></li>
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
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- movie-details-area start-->

    <?php 
        $main_id=$_REQUEST["id"];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://imdb-api.com/en/API/Title/k_vcjd4a8n/".$main_id."/FullActor,FullCast,Posters,Images,Trailer,Ratings,Wikipedia",
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
        $img=$jsonvalue->image;
        $name=$jsonvalue->title;
        $year=$jsonvalue->year;
        $time=$jsonvalue->runtimeStr;
        $description=$jsonvalue->plot;
        $imdb=$jsonvalue->imDbRating;
        $director=$jsonvalue->directors;
        $category=$jsonvalue->genres;
        $cast=$jsonvalue->actorList;
        $posters=$jsonvalue->posters->posters;
        $images=$jsonvalue->images->items;
        $backimages=$jsonvalue->posters->backdrops;
        $trailer=$jsonvalue->trailer->link;
        $budget=$jsonvalue->boxOffice->budget;
        $openingWeekendUSA=$jsonvalue->boxOffice->grossUSA;
        $grossUSA=$jsonvalue->boxOffice->budget;
        $cumulativeWorldwideGross=$jsonvalue->boxOffice->budget;
        $similars=$jsonvalue->similars;
        
        $bg = isset($backimages[0]) ? ($backimages[0]->link != '' ? $backimages[0]->link : "Resources/Images/slider_bg.jpg") :"Resources/Images/slider_bg.jpg";
        echo "
        <section class='movie-details-area' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(32,33,22,0.75), rgba(32,33,42,1)),url(&quot;",$bg,"&quot;);'>
            <div class='container'>
                <div class='row align-items-center position-relative'>
                    <div class='col-xl-3 col-lg-4'>
                        <div class='movie-details-img'>
                            <img class='poster-img-HJ' src='",$img,"' alt=''>
                            <a href='",$trailer,"' class='popup-video'><img src='Resources/Images/play_icon.png' alt=''></a>
                        </div>
                    </div>
                    <div class='col-xl-9 col-lg-8'>
                        <div class='movie-details-content'>
                            <h2><span>",$name,"</span></h2>
                            <div class='banner-meta'>
                                <ul>
                                    <li class='category'>
                                        <a href='#'>",$category,"</a>
                                        
                                    </li>
                                    <li class='release-time'>
                                        <span><i class='far fa-calendar-alt'></i>",$year,"</span>
                                        <span><i class='far fa-clock'></i>",$time,"</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li class='release-time'>
                                        <span><i class='fas fa-video'></i>",$director," </span>
                                    </li>
                                </ul>
                                
                            </div>
                            <p>
                            ",$description,"
                            </p>
                            <div class='movie-details-prime'>
                                <ul>
                                    <li class='share'><a href='#'><i class='fas fa-share-alt'></i> Share</a></li>
                                    <li class='streaming'>
                                        <h6>Add to Favourite</h6>
                                        <span>Hell Movies</span>
                                    </li>
                                    <li class='watch'><a href='#' class='btn popup-video'><i class='fas fa-heart'></i> Favourite </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!-- movie-details-area-end -->

        <!-- episode-area -->
        <section class='episode-area episode-bg' data-background='' style='background: rgb(29,29,40)'>
            <div class='container'>
            
                <div class='row'>
                    <div class='col-12'>
                        <div class='movie-history-wrap'>
                            <h3 class='title'>Top <span>Cast <i class='fad fa-angle-double-right'></i></span>  </h3>
                            <div class='owl-carousel owl-theme' id='owl-carousel-topcast'>";
                            for($i=0;$i<10;$i++){
                                $cast_name=isset($cast[$i]) ? $cast[$i]->name : '';
                                if($cast_name != '')
                                {
                                    $cast_image=$cast[$i]->image;
                                    $character=$cast[$i]->asCharacter;
                                echo " <div class='item'>
                                        <div class='top-cast-div'>
                                            <div class='picture'>
                                                <img src='",$cast_image,"'>
                                            </div>
                                            <div class='team-content'>
                                                <h3 class='top-cast-name'>",$cast_name,"</h3>
                                                <h4 class='top-cast-title'>",$character,"</h4>
                                            </div>
                                        </div>
                                    </div>";
                                }
                            }
                            
                            echo "</div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-12'>
                        <div class='movie-history-wrap'>
                            <h3 class='title'> Images <span> <i class='fad fa-angle-double-right'></i></span>  </h3>
                            <div class='owl-carousel owl-theme' id='owl-carousel-images'>";

                            if(isset($images))
                            {
                                for($i=0;$i<count($images);$i++){
                                    $image=isset($images[$i]) ? $images[$i]->image : '';
                                    if($image != '')
                                echo "   <div class='item'>
                                        <div class='movie-detail-images-hell'> <img src='",$image,"'>
                                        </div>   
                                    </div>";
                                }
                            }
                            
                        echo "   </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-12'>
                        <div class='movie-history-wrap'>
                            <h3 class='title'> Box  <span> Office <i class='fad fa-angle-double-right'></i></span>  </h3>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-12 col-md-2 col-lg-3'>  </div>
                    <div class='col-md-8 col-lg-6'>   
                        <div class='row'>
                            <div class='col-md-6 col-6'>
                                <div class='box-office-heading'> Budget <i class='far fa-money-check-edit-alt'></i></div>
                                <div class='box-office-content'> <i class='fad fa-grip-lines-vertical'> </i> $<span class='count'>",$budget,"</span> </div> 
                            </div>
                            <div class='col-md-6 col-6'>
                                <div class='box-office-heading'> Gross <i class='far fa-hand-holding-usd'></i> </div>
                                <div class='box-office-content'> <i class='fad fa-grip-lines-vertical'> </i> ",$grossUSA,"</div> 
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6 col-6'>
                                <div class='box-office-heading'> Opnening weekend <i class='far fa-door-open'></i> </div>
                                <div class='box-office-content'> <i class='fad fa-grip-lines-vertical'> </i> ",$openingWeekendUSA," </div> 
                            </div>
                            <div class='col-md-6 col-6'>
                                <div class='box-office-heading'> Gross world wide <i class='far fa-hands-usd'></i> </div>
                                <div class='box-office-content'> <i class='fad fa-grip-lines-vertical'> </i> ",$openingWeekendUSA," </div> 
                            </div>
                        </div>
                    </div>
                    <div class='col-12 col-md-2 col-lg-3'>  </div>
                </div>
            </div>
        </section>
        <!-- episode-area-end -->

        <!-- Top movies start-->
        <section class='top-rated-movie tr-movie-bg2' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(0,0,0,0.95), rgba(0,0,0,1)),url(&quot;Resources/Images/slider_bg.jpg&quot;);'>
            <div class='container'>
                <div class='row justify-content-center' style='margin-bottom: 60px;'>
                    <div class='col-lg-8'>
                        <div class='section-title title-style-three text-center mb-70'>
                            <span class='sub-title'>You may also like </span>
                            <h2 class='title'>Similar Movies</h2>
                        </div>
                    </div>
                </div>
                <div class='row movie-item-row'>";
                for($index =0;$index<count($similars) && $index<8;$index++){
                    $id=$similars[$index]->id;
                    $str=$similars[$index]->image;
                    $name=$similars[$index]->title;
                    $imdb=$similars[$index]->imDbRating;
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
          echo " </div>
        </div>
    </section>";
    ?>
    <!-- Top movies end-->
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

   

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js' integrity='sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='JS/slick.min.js.download'></script>
    <script src='./main.js.download'></script>
    <script>
        $('#owl-carousel-images').owlCarousel({
            loop:true,
            margin:15,
            
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:true
                }
            }
        })
        $('#owl-carousel-topcast').owlCarousel({
            loop:true,
            margin:15,
            autoplay:true,
            autoplayTimeout: 1500,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:true
                }
            }
        })
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now).toLocaleString('en'));
                }
            });
        });
    </script>
</body>
</html>