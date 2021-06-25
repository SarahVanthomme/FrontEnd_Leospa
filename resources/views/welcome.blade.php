<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta charset = "UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leospa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/styles.css">
        <link rel="shortcut icon" href="../public/img/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="../lity-2.4.1/dist/lity.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="aos.css">
        <link rel="stylesheet" type="text/css" href="loading-bar.css"/>


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rufina:wght@400;700&display=swap');
        </style>

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body class="container-fluid">
    <nav id="home" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="600" class="navbar navbar-expand-lg navbar-light align-items-end" style="top: 0">
        <a class="navbar-brand col-2" style="padding-left: 50pt;" href="http://localhost/leospa/public/"><img src="../public/img/logo.png" alt=""></a>
        <div class="col-1"></div>
        <div class="collapse navbar-collapse col-5" id="navbarNav">
            <ul class="navbar-nav justify-content-between w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/leospa/public/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#feature">FEATURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="col-4"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <section class="row mr-0">
        <div class="bg-img1 col-12 col-lg- col-xl-6 m-mobile">
            <div class="row p-0 m-0">
                <div class="col-12" style="padding-left: 65pt;">
                    <h5 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="800">SPA & BEAUTY CENTER</h5>
                    <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1000" class="display-3" style="z-index: 20; font-family: 'Rufina', serif; font-weight: bold; padding-top: 45pt;">Beauty and success starts here.</h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" style="padding-top: 35pt;">Lorem ipsum dolor sit amet esse est consectetur adipisicing elit culpa dolores doloribus enim error esse est explicabo sit amet adipisicing.</p>
                    <div class="d-flex align-items-center" style="margin-top: 38pt;">
                        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1400"><a href="#appointment" class="btn btn-rose btn-lg active text-white" style="font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>RESERVE NOW</b></a></div>
                        <a href="https://www.youtube.com/watch?v=Kd8VD4Ttaxw" class="d-flex align-items-center watch-our-story" data-lity style="text-decoration: none;">
                            <img data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1600" src="../public/img/play_img.png" alt="" style="margin-left: 15pt; height: 60px; width: 60px;">
                            <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1800"><p style="margin-left: 15pt; margin-bottom: 0;" class="font-weight-bold">Watch our story</p></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-img2 col-6"></div>
    </section>
    <section class="row" id="about">
        <a data-aos="fade-up" data-aos-duration="800" onclick="topFunction()" id="myBtn"><i class="fas fa-chevron-up"></i></a>

        <div class="col-lg-9 col-md-12 m-auto">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="800" class="bgimg-flower position-relative" style="height: 164px; top: 100px;"></div>
            <div class="text-center">
                <img data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" src="../public/img/section1logo.png" alt="" style="height: 85px; width: 102px;" class="m-auto">
                <h4 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" style="font-weight: bolder; letter-spacing: 1px;" class="text-grey py-5 m-0">ABOUT OUR SPA CENTER</h4>
                <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="display-4" style="font-family: 'Rufina', serif; font-weight: bold; color: black;">Come and you will be inspired!</p>
                <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1500" class="py-4y" style="margin-bottom: 6rem; font-family: Roboto, sans-serif; color: #888; z-index: 10;">It’s the end of summer the sweltering heat makes human sweat in the night and makes the plants and trees wilt even in the moonlit nights. The eastern wind breeze brings an eerie feeling, that the monsoon clouds are soon coming, there is a strange silence in the ears, the sky gets darker and darker.</p>
                <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300"><a href="#" class="btn-rose btn-lg text-white font-weight-bold mt-2" role="button" aria-disabled="true">READ MORE</a></div>
                <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="bgimg-flower2 position-relative" style="height: 115px; z-index: -1; left: 45px; bottom: 220px;"></div>
            </div>
        </div>
    </section>
    <section class="row mt-mobile d-flex p-0" id="feature">
        <div class="col-6 col-md-3 p-0 box border-white" style="border-right-width: 1px; border-left-width: 1px;" data-aos="fade-up" data-aos-duration="1200">
            <img class="image" src="../public/img/section3img1.jpg" alt="">
            <a href="#">
                <div class="overlay">
                    <p class="text"><img class="img-fluid" style="height: 55px; width: auto;" src="../public/img/service_drawing.png" alt=""></p>
                    <p class="text2">Body Treatment</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 p-0 box border-white" style="border-right-width: 1px; border-left-width: 1px;" data-aos="fade-up" data-aos-duration="1200">
            <img class="image" src="../public/img/section3img2.jpg" alt="">
            <a href="#">
                <div class="overlay">
                    <p class="text"><img class="img-fluid" style="height: 55px; width: auto;" src="../public/img/service_drawing.png" alt=""></p>
                    <p class="text2">Body Treatment</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 p-0 box border-white" style="border-right-width: 1px; border-left-width: 1px;" data-aos="fade-up" data-aos-duration="1400">
            <img class="image" src="../public/img/section3img3.jpg" alt="">
            <a href="">
                <div class="overlay">
                    <p class="text"><img class="img-fluid" style="height: 55px; width: auto;" src="../public/img/service_drawing.png" alt=""></p>
                    <p class="text2">Body Treatment</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3 p-0 box border-white" style="border-right-width: 1px; border-left-width: 1px;" data-aos="fade-up" data-aos-duration="1800">
            <img class="image" src="../public/img/section3img4.jpg" alt="">
            <a href="#">
                <div class="overlay">
                    <p class="text"><img class="img-fluid" style="height: 55px; width: auto;" src="../public/img/service_drawing.png" alt=""></p>
                    <p class="text2">Body Treatment</p>
                </div>
            </a>
        </div>
    </section>
    <section class="row my-5 text-center" id="service">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-12 display-4 mt-5" style="font-family: 'Rufina', serif; font-weight: bold; color: black;">Popular Procedures</p>
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-xs-12 col-md-6 offset-md-3">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
    </section>
    <section class="justify-content-center d-flex" style="margin-bottom: 6rem;">
        <div data-aos="fade-up" data-aos-duration="800 "class="card card-procedures" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/procedure1.jpg" alt="Card image cap">
            <div class="card-body text-center justify-content-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Massage Therapy</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1100" class="card card-procedures mx-sm-1 mx-md-2 mx-lg-5" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/procedure2.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Beauty Care</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1300" class="card card-procedures" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/procedure3.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Reflexology</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
    </section>
    <section data-aos="fade-up" data-aos-duration="1300" class="row" style="background-color: #fff9f8; margin-bottom: 6rem;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner col-8 offset-2 mb-5">
                <div class="carousel-item active text-center py-5">
                    <img src="../public/img/quote.png" alt="First slide" style="width: 70px; margin-bottom: 3rem;"
                         class="ml-auto mr-auto">
                    <p style="font-family: 'Rufina', serif; font-size: x-large; line-height: 1.8;">First not a it's not the
                        load that breaks you down, it's the way you carry it. Let me tell you the secret that a has led me
                        to my goals: my strength lies solely in my tenacity. Keep your face to the sun and you cannot
                        see the shadows. Once a beginner.</p>
                    <img src="../public/img/client.png" alt="" class="rounded-circle ml-auto mr-auto"
                         style="width: 100px; margin-top: 3rem;">
                    <h5 style="font-size: xx-large; color: black !important; padding-top: 1.5rem !important;">Jack
                        Marsh, <span
                            style="font-family: 'Roboto', sans-serif; color: black; font-size: large; letter-spacing: 0.6px;">Executive</span>
                    </h5>
                </div>
                <div class="carousel-item text-center py-5">
                    <img src="../public/img/quote.png" alt="Second slide" style="width: 70px; margin-bottom: 3rem;"
                         class="ml-auto mr-auto">
                    <p style="font-family: 'Rufina', serif; font-size: x-large; line-height: 1.8;">First not a it's not the
                        load that breaks you down, it's the way you carry it. Let me tell you the secret that a has led me
                        to my goals: my strength lies solely in my tenacity. Keep your face to the sun and you cannot
                        see the shadows. Once a beginner.</p>
                    <img src="../public/img/client.png" alt="" class="rounded-circle ml-auto mr-auto"
                         style="width: 100px; margin-top: 3rem;">
                    <h5 style="font-size: xx-large; color: black !important; padding-top: 1.5rem !important;">Jane
                        Marsh, <span
                            style="font-family: 'Roboto', sans-serif; color: black; font-size: large; letter-spacing: 0.6px;">Executive</span>
                    </h5>
                </div>
                <div class="carousel-item text-center py-5">
                    <img src="../public/img/quote.png" alt="Third slide" style="width: 70px; margin-bottom: 3rem;"
                         class="ml-auto mr-auto">
                    <p style="font-family: 'Rufina', serif; font-size: x-large; line-height: 1.8;">First not a it's not the
                        load that breaks you down, it's the way you carry it. Let me tell you the secret that a has led me
                        to my goals: my strength lies solely in my tenacity. Keep your face to the sun and you cannot
                        see the shadows. Once a beginner.</p>
                    <img src="../public/img/client.png" alt="" class="rounded-circle ml-auto mr-auto"
                         style="width: 100px; margin-top: 3rem;">
                    <h5 style="font-size: xx-large; color: black !important; padding-top: 1.5rem !important;">Janine
                        Marsh, <span
                            style="font-family: 'Roboto', sans-serif; color: black; font-size: large; letter-spacing: 0.6px;">Executive</span>
                    </h5>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="row my-5 text-center">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-12 display-4 mt-5" style="font-family: 'Rufina', serif; font-weight: bold; color: black;">Experienced Team</p>
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-xs-12 col-md-6 offset-md-3">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
    </section>
    <section class="row justify-content-center">
        <div class="col-11 d-flex justify-content-around">
            <div data-aos="fade-up" data-aos-duration="800" class="position-relative show-contacts">
                <img style="width: 28rem;" class="img-fluid" src="../public/img/employee.jpg" alt="">
                <div class="employees-contacts" style="background-color: white; position:absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center; box-shadow: 0 4px 8px 0 #F2F2F2, 0 10px 50px 0 #f2f2f2;">
                    <p class="pt-5 mb-0 name" style="font-family: 'Rufina', serif; color: black; font-weight: bold;">Joseph Austin</p>
                    <p class="mt-0 pb-4 job">Thai Massage</p>
                </div>
                <div class="mb-5 show-contacts-icons position-absolute" style="left: 0; right: 0; text-align: center; margin-left: auto; margin-right: auto;">
                    <a href="#" class="mx-md-1 mx-lg-2 icon1"><i class="fab fa-facebook-f contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2 icon2"><i class="fab fa-twitter contact-icons"></i></a>
                    <div class="div-white" style="height: 5px; background-color: white;"></div>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-google-plus-g contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-instagram contact-icons"></i></a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1100" class="position-relative show-contacts">
                <img style="width: 28rem;" class="img-fluid" src="../public/img/employee2.jpg" alt="">
                <div class="employees-contacts" style="background-color: white; position:absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center; box-shadow: 0 4px 8px 0 #F2F2F2, 0 10px 50px 0 #f2f2f2;">
                    <p class="pt-5 mb-0 name" style="font-family: 'Rufina', serif; color: black; font-weight: bold;">David Hannan</p>
                    <p class="mt-0 pb-4 job">Thai Massage</p>
                </div>
                <div class="mb-5 show-contacts-icons position-absolute" style="left: 0; right: 0; text-align: center; margin-left: auto; margin-right: auto;">
                    <a href="#" class="mx-md-1 mx-lg-2 icon1"><i class="fab fa-facebook-f contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2 icon2"><i class="fab fa-twitter contact-icons"></i></a>
                    <div class="div-white" style="height: 5px; background-color: white;"></div>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-google-plus-g contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-instagram contact-icons"></i></a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1400" class="position-relative show-contacts">
                <img style="width: 28rem;" class="img-fluid" src="../public/img/employee3.jpg" alt="">
                <div class="employees-contacts" style="background-color: white; position:absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center; box-shadow: 0 4px 8px 0 #F2F2F2, 0 10px 50px 0 #f2f2f2;">
                    <p class="pt-5 mb-0 name" style="font-family: 'Rufina', serif; color: black; font-weight: bold;">Cheryl Harris</p>
                    <p class="mt-0 pb-4 job">Thai Massage</p>
                </div>
                <div class="mb-5 show-contacts-icons position-absolute" style="left: 0; right: 0; text-align: center; margin-left: auto; margin-right: auto;">
                    <a href="#" class="mx-md-1 mx-lg-2 icon1"><i class="fab fa-facebook-f contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2 icon2"><i class="fab fa-twitter contact-icons"></i></a>
                    <div class="div-white" style="height: 5px; background-color: white;"></div>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-google-plus-g contact-icons"></i></a>
                    <a href="#" class="mx-md-1 mx-lg-2"><i class="fab fa-instagram contact-icons"></i></a>
                </div>
            </div>
        </div>
    </section>
    <div id="appointment"></div>
    <section data-aos="fade-up" data-aos-duration="800" class="row" style="margin-top: 10rem; padding-top: 5rem; padding-bottom: 5rem; background-color: #fff9f8;">
        <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            <div action="">
                <div data-aos="fade-up" data-aos-duration="800" class="row d-flex justify-content-between">
                    <input type="text" id="name" name="name" placeholder="NAME" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                    <input type="email" id="email" name="email" placeholder="EMAIL ADDRESS" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="row d-flex justify-content-between mt-5">
                    <select name="service" id="service" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                        <option value="normal" style="display: none;">SELECT SERVICE</option>
                        <option value="normal">NORMAL SERVICE</option>
                        <option value="vip">VIP SERVICE</option>
                    </select>
                    <input onkeypress='return event.charCode >= 43 && event.charCode <= 57' type="tel" id="number" placeholder="PHONE NUMBER" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="row d-flex justify-content-between mt-5">
                    <input type="date" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                    <input type="time" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 49%; background-color: #fff9f8;">
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="row mt-5">
                    <textarea name="notes" id="notes" class="pl-0 pb-3 text-secondary" style="border-bottom: 1px solid #d4d3d3; width: 100%; background-color: #fff9f8;" placeholder="YOUR NOTES"></textarea>
                </div>
                <div class="row mt-5">
                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1400"><a href="#" class="btn btn-rose btn-lg active text-white" style="font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>MAKE AN APPOINTMENT</b></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="row my-5 text-center">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-12 display-4 mt-5" style="font-family: 'Rufina', serif; font-weight: bold; color: black;">Latest From Our Blog</p>
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-xs-12 col-md-6 offset-md-3">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
    </section>
    <section class="justify-content-center d-flex" style="margin-bottom: 6rem;">
        <div data-aos="fade-up" data-aos-duration="800 "class="card card-procedures" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/blog1.jpg" alt="Card image cap">
            <div class="card-body text-center justify-content-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Body Care</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1100" class="card card-procedures mx-sm-1 mx-md-2 mx-lg-5" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/blog2.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Facial Care</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1300" class="card card-procedures" style="width: 28rem;">
            <img class="card-img-top p-sm-1 p-md-4" src="../public/img/blog3.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <a class="text-decoration-none" href="#"><h5 class="card-title pt-0" style="color:black !important; font-size: x-large!important; letter-spacing: normal; padding-bottom: 1rem;"><b>Organic Balms</b></h5></a>
                <p class="card-text" style="padding-bottom: 1.8rem;">Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                <a href="#" class="btn btn-black btn-lg active text-white" style="margin-bottom: 2.5rem; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>READ MORE</b></a>
            </div>
        </div>
    </section>
    <section class="row my-5 text-center" id="contact">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-12 display-4 mt-5" style="font-family: 'Rufina', serif; font-weight: bold; color: black;">Keep In Touch</p>
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1300" class="col-xs-12 col-md-6 offset-md-3">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
    </section>
    <section class="row pt-4">
        <div class="col-12 d-sm-block d-md-flex">
            <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-2 pr-0">
                <div class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="800">
                    <i class="fas fa-map-marked-alt contact-icons2 mr-5"></i>
                    <p class="mb-0">848 E 28th ST, BROOKLYN<br>NEW YORK, USA</p>
                </div>
                <div class="d-flex align-items-center my-4" data-aos="fade-up" data-aos-duration="800">
                    <i class="far fa-envelope contact-icons2 mr-5"></i>
                    <div>
                        <a href="mailto:webmaster@example.com" style="text-decoration: none; font-size: large;" class="email">example@leospa.com</a><br>
                        <a href="mailto:webmaster@example.com" style="text-decoration: none; font-size: large;" class="email">example@leospa.com</a>
                    </div>
                </div>
                <div class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="800">
                    <i class="fas fa-mobile-alt contact-icons2 mr-5"></i>
                    <div>
                        <a href="tel:+02 365 2365 3265 (02)" style="text-decoration: none; font-size: large;" class="email">+02 365 2365 3265 (02)</a><br>
                        <a href="tel:+01 365 2365 3265 (04)" style="text-decoration: none; font-size: large;" class="email">+01 365 2365 3265 (04)</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pl-0 mt-sm-5 mt-md-0">
                <div id="formtest">
                    <span style="color: indianred" id="errorname"></span><br>
                    <input data-aos="fade-up" data-aos-duration="800" id="firstname" type="text" placeholder="Name" class="form" style="padding-left: 1rem; padding-bottom: 1rem; padding-top: 1rem; border: 1px solid #e3e6ea; font-size: large !important;"/>
                    <input required="required" data-aos="fade-up" data-aos-duration="800" id="email" type="email" placeholder="Email Address" class="my-4 form" style="padding-left: 1rem; padding-bottom: 1rem; padding-top: 1rem; border: 1px solid #e3e6ea; font-size: large !important;"/>
                    <textarea data-aos="fade-up" data-aos-duration="800" id="comment" type="text" placeholder="Your Comment" class="form" style="padding-left: 1rem; padding-bottom: 1rem; padding-top: 1rem; border: 1px solid #e3e6ea; font-size: large !important; height: 7rem;"></textarea>
                    <div class="mt-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1400"><button type="submit" onclick="myFunction()" class="btn btn-rose btn-lg active text-white" style="cursor:pointer; font-family: 'Roboto', sans-serif;" role="button" aria-pressed="true"><b>SUBMIT NOW</b></button></div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 pl-0 mt-sm-5">
                    <div class="lds-roller d-none" style="padding-left: 10rem;" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <p id="subscribed" class="d-none text-center"><span style="font-size: x-large;">Thank you!</span><br>We are eager to read your message <i class="fas fa-heart"></i><br>We've sent a confirmation to your email address.</p>
                </div>
            </div>
        </div>
    </section>




    <footer style="background-color: #fff9f8; margin-top: 5rem; padding-bottom: 1rem;">
        <a href="#home"><img src="../public/img/logo.png" alt="" style="width: 130px; padding-top: 7rem;" class="mx-auto"></a>
        <div class="d-flex justify-content-center my-5">
            <a class="footer-nav font-weight-bold pr-5" style="font-size: large;" href="#home">HOME</a>
            <a class="footer-nav font-weight-bold" style="font-size: large;" href="#about">ABOUT</a>
            <a class="footer-nav font-weight-bold px-5" style="font-size: large;" href="#feature">FEATURE</a>
            <a class="footer-nav font-weight-bold" style="font-size: large;" href="#service">SERVICE</a>
            <a class="footer-nav font-weight-bold pl-5" style="font-size: large;" href="#contact">CONTACT</a>
        </div>
        <div class="d-flex justify-content-center my-5">
            <a class="footer-nav" href="#"><i class="fab fa-facebook-f pr-3" style="font-size: large; border-right: 1px solid #b1b4bb;"></i></a>
            <a class="footer-nav" href="#"><i class="fab fa-twitter px-3" style="font-size: large; border-right: 1px solid #b1b4bb;"></i></a>
            <a class="footer-nav" href="#"><i class="fab fa-vimeo-v px-3" style="font-size: large; border-right: 1px solid #b1b4bb;"></i></a>
            <a class="footer-nav" href="#"><i class="fab fa-instagram pl-3" style="font-size: large;"></i></a>
        </div>
        <div class="my-5 d-flex justify-content-center">
            <p style="font-size: medium; font-weight:100; color: grey;">&copy; COPYRIGHT 2019 <a class="themeies" href="https://themeies.com/">THEMEIES.COM</a>. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>


    <script src="../../public/js/script.js"></script>
    <script src="../lity-2.4.1/vendor/jquery.js"></script>
    <script src="../lity-2.4.1/dist/lity.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="loading-bar.js"></script>

    <script>

        AOS.init();

        // ===== Loader ====

        function myFunction() {
            errorMessage = document.getElementById('errorname');
            errorMessageb = document.getElementById('errornameb');
            errorMessagec = document.getElementById('errornamec');

            var a = document.getElementById("formtest");
            var element = document.getElementById("firstname");
            var elementb = document.getElementById("email");
            var elementc = document.getElementById("comment");
            var loader = document.getElementById("loader");

            var x = document.getElementById("subscribed");

            if (elementc.value !== ''){
                errorMessage.innerText = '';


                a.classList.add("d-none");
                loader.classList.remove('d-none');
                setTimeout(function(){
                    loader.classList.add('d-none');
                }, 2500);

                setTimeout(function(){
                    x.classList.add('fadein');
                }, 2700);
            }

            else{
                errorMessage.innerText = 'Some fields still need to be filled in';
            }


        }

        // ===== Carousel====


        $('.carousel').carousel({
           interval: 3000
       });

        // ===== Scroll to Top ====

        var mybutton = document.getElementById("myBtn");
        mybutton.onclick = function() {topFunction()};

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


    </script>
    </body>
</html>

