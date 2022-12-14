<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title>Zeta Arcade</title>
    <link href="img/favicon-16x16.png" rel="icon">
    <!--  CSS LINKS    -->
    <link rel="stylesheet" href="css/style.css">
    <!--  BOX ICONS    -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper css link-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Nav bar-->
        <div class="nav container">
            <!-- logo -->
            <a href="index.html" class="logo">Zeta <span>Arcade</span></a>
            <!-- Nav Icons -->
            <div class="nav-icons">
                <i class='bx bx-bell bx-tada' id="bell-icon"><span></span></i>
                <i class='bx bxs-download'></i>
                <div class="menu-icon">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>

            </div>

            <!---menu---->
            <div class="menu">
                <img src="img/zetalogo.png" alt="dfg">
                <div class="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#Trending">Trending</a></li>
                    <li><a href="#New">New Games</a></li>
                    <li><a href="#Action">Action Games</a></li>
                    <li><a href="http://localhost:8080/php_program/preorder.php.php">Pre Order Now!</a></li>

                </div>

            </div>

            <!----notification--->


            <div class="notification">
                <div class="notification-box">

                    <i class='bx bxs-check-circle'></i>
                    <p>
                        Congratulations, download succesful.
                    </p>
                </div>
                <div class="notification-box box-color">

                    <i class='bx bxs-x-circle'></i>
                    <p>
                        sorry, download unsuccesful.
                    </p>
                </div>

            </div>

        </div>
    </header>
    <!-----home section----->
    <section class="home container" id="home">
        <img src="img/zeta_arcade.png" alt="">
        <div class="home-text"></div>
        <h1><a href="index.html" class="logo">Uniting <br><span>Gamers </span></a></h1>
        <a href="#" class="btn">EXPLORE</a>
    </section>

    <!-- trending section-->
    <section class=" trending container" id="trending">
        <div class="heading">
            <i class="bx bxs-flame"> </i>
            <h2>Trending Games</h2>

        </div>
        <!-- content-->
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!--slide 1-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending1.webp" alt="">
                        <div class="box-text">
                            <h2>Cyberpunk 2077</h2>
                            <h3>Action || Sci-Fi || RPG</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--slide 2-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending2.jpg" alt="">
                        <div class="box-text">
                            <h2>Battlefield 2042</h2>
                            <h3>Action || Multiplayer</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.5</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--slide 3-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending3.jpg" alt="">
                        <div class="box-text">
                            <h2>AC: Valhalla</h2>
                            <h3>Action</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.3</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 4-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending4.jpg" alt="">
                        <div class="box-text">
                            <h2>Ghost Of Tsushima</h2>
                            <h3>Action || RPG || Story</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.9</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 5-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending5.png" alt="">
                        <div class="box-text">
                            <h2>GTA V</h2>
                            <h3>Action || RPG</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 6-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending6.jpg" alt="">
                        <div class="box-text">
                            <h2>Dying Light 2</h2>
                            <h3>Action || Thriller || RPG </h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.8</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 7-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending7.png" alt="">
                        <div class="box-text">
                            <h2>HALO Infinite</h2>
                            <h3>Action || RPG || Online</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.7</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 8-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending8.png" alt="">
                        <div class="box-text">
                            <h2>Resident Evil : Village</h2>
                            <h3>Horror || Thriller || RPG</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.3</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 9-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending9.jpg" alt="">
                        <div class="box-text">
                            <h2>Elden Ring</h2>
                            <h3>Action || Horror || Thriller</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>5</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slide 10-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="img/trending10.jpg" alt="">
                        <div class="box-text">
                            <h2>Naraka : Blade Point</h2>
                            <h3>Action || MMO || Online</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <span>4.2</span>
                                </div>
                                <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new games section start-->
    <section class="new container" id="new">
        <div class="heading">
            <i class="bx bx-game"></i>
            <h2>New Games</h2>
        </div>
        <!--content for new games-->
        <div class="new-content">
            <div class="box">
                <img src="img/trending6.jpg" alt="">
                <div class="box-text">
                    <h2>Dying Light 2</h2>
                    <h3>Action || Thriller || RPG </h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <span>4.8</span>
                        </div>
                        <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="new-content">
                <div class="box">
                    <img src="img/trending6.jpg" alt="">
                    <div class="box-text">
                        <h2>Dying Light 2</h2>
                        <h3>Action || Thriller || RPG </h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-content">
                <div class="box">
                    <img src="img/trending6.jpg" alt="">
                    <div class="box-text">
                        <h2>Dying Light 2</h2>
                        <h3>Action || Thriller || RPG </h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-content">
                <div class="box">
                    <img src="img/trending6.jpg" alt="">
                    <div class="box-text">
                        <h2>Dying Light 2</h2>
                        <h3>Action || Thriller || RPG </h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-content">
                <div class="box">
                    <img src="img/trending6.jpg" alt="">
                    <div class="box-text">
                        <h2>Dying Light 2</h2>
                        <h3>Action || Thriller || RPG </h3>
                        <div class="rating-download">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="box-btn"><i class="bx bx-down-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!--swiper js link-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--  Link to JS  -->
    <script src="js/main.js"></script>
</body>

</html>