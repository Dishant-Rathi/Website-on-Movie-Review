<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Flix Fire</title>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
    <link rel='stylesheet' href='Style/bootstrap.min.css'>
    <link rel='stylesheet' href='Style/slick.css'>
    <link rel='stylesheet' href='Style/default.css'>
    <link rel='stylesheet' href='Style/style.css'>
    <link rel='stylesheet' href='Style/responsive.css'>
    
</head>
<body data-aos-easing='ease' data-aos-duration='1000' data-aos-delay='0' >
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
                                        <li class='active menu-item-has-children'><a href='series.php'>Web Series</a>
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
    <section class='top-rated-movie tr-movie-bg2' data-background='Resources/Images/slider_bg.jpg' style='background: linear-gradient(to bottom, rgba(0,0,0,0.95), rgba(0,0,0,1)),url(&quot;Resources/Images/slider_bg.jpg&quot;);'>
            <div class='container'>
                <div class='row justify-content-center' style='margin-bottom: 60px;'>
                    <div class='col-lg-8'>
                        <div class='section-title title-style-three text-center mb-70'>
                            <span class='sub-title'>Top rated web series</span>
                            <h2 class='title'>Most Popular</h2>
                        </div>
                    </div>
                </div>
                <div class='row movie-item-row'>
                <?php
 
                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://imdb-api.com/en/API/Top250TVs/k_vcjd4a8n",
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
                    // echo $jsonvalue->results[0]->title;

                    for($index =0;$index<(count($jsonvalue->items))/20-1;$index++){
                        echo "<div class='row movie-item-row' id='page-".$index."'>";

                        for($index2 = 0; $index2<20;$index2++){
                            $id =$jsonvalue->items[($index*20)+$index2]->id;
                            $str=$jsonvalue->items[($index*20)+$index2]->image;
                            $name=$jsonvalue->items[($index*20)+$index2]->title;
                            $year=$jsonvalue->items[($index*20)+$index2]->year;
                            //$time=$jsonvalue->items[$index]->runtimeStr;
                            $imdbCount=$jsonvalue->items[($index*20)+$index2]->imDbRatingCount;
                            $imdb=$jsonvalue->items[($index*20)+$index2]->imDbRating;
                            
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
                            </div>";
                        
                        }
                        echo "</div>";
                    }
                    ?>
                
            </div>
            <center>
                <button type="button" class='btn' onclick="prev()"> Prev </button>
                <button type="button" class='btn' onclick="next()"> Next </button>
        </center>
        </section>
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
        <script src='JS/jquery-3.6.0.min.js.download'></script>
        <script src='JS/popper.min.js.download'></script>
        <script src='JS/bootstrap.min.js.download'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src='JS/slick.min.js.download'></script>
        <script src='./main.js.download'></script>
        <script type="text/javascript">
            var pageNo = 0;
            document.getElementById("page-0").style.display = "";
            document.getElementById("page-1").style.display = "none";
            document.getElementById("page-2").style.display = "none";
            document.getElementById("page-3").style.display = "none";
            document.getElementById("page-4").style.display = "none";
            document.getElementById("page-5").style.display = "none";
            document.getElementById("page-6").style.display = "none";
            document.getElementById("page-7").style.display = "none";
            document.getElementById("page-8").style.display = "none";
            document.getElementById("page-9").style.display = "none";
            document.getElementById("page-10").style.display = "none";
            document.getElementById("page-11").style.display = "none";
            function next() {
                var pg = "page-"+pageNo;
                document.getElementById(pg).style.display = "none";
                pageNo++;
                pg = "page-"+pageNo;
                document.getElementById(pg).style.display = "";
            }
            function prev() {
                var pg = "page-"+pageNo;
                document.getElementById(pg).style.display = "none";
                pageNo--;
                pg = "page-"+pageNo;
                document.getElementById(pg).style.display = "";
            }
        </script>
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
</body>
</html>