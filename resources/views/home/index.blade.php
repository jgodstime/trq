<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <title>Train</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;&display=swap" rel="stylesheet">
    <link src='/assets/fonts/poppins' rel="stylesheet">
    <link src='/trq.css' rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        @media(max-width:760px) {

            .arrow1,
            .arrow2 {
                display: none !important;
            }

            .bel_h4 {
                font-size: 23px !important;
                line-height: 35px !important;
            }

            .nav_pad {
                padding: 25px 14px !important;
            }

            .main_pad {
                padding: 33px !important;
            }

            .off_set {
                margin-left: 0px !important;
            }

        }

        @media(max-width:768px) {

            .nav_pad {
                padding: 25px 46px;
            }

            .main_pad {
                padding: 41px 0px 10px 63px;
            }

            .arrow1 {
                position: absolute;
                left: 28% !important;
                margin-top: 44px !important;
                width: 123px !important;
            }

            .arrow2 {
                position: absolute;
                right: 25% !important;
                width: 109px !important;
            }

            .tru_cont {
                padding: 20px;
                margin-bottom: 40px;
                margin-top: 40px;
            }

            .tru_back {
                background: url(images/truth.svg);
                background-size: cover;
                height: 433px !important;
                padding: 20px !important;
            }
        }
    </style>

    <style>
        @import url('http://fonts.cdnfonts.com/css/gilroy-bold');


        .solar_pa {
            margin-bottom: 45px;
        }

        .sol_space {
            padding-left: 12%;
        }

        .faq_color {
            color: black;
        }

        .footer_b {
            padding: 17% 2px 2%;
        }

        .btn_link:focus {
            outline: 2px auto #ffdbc9;
        }

        .btn_link {
            background: none;
            border: 1px solid #cccccc;
            border-radius: 10px;
        }

        .fa-plus,
        .fa-times {
            background: #FFDBC9;
            color: #FA0000;
            padding: 12px;
            border-radius: 20px;
        }

        @media (max-width: 430px) {

            .off_set {
                margin-left: 0px !important;
            }

            .tru_back {
                background: url(images/truth.svg);
                background-size: cover;
                height: 621px !important;
                padding: 20px !important;
            }


        }

        @media (max-width: 350px) {



            .tru_head {
                color: white;
                font-size: 32px !important;
                margin-bottom: 60px;
                font-weight: 600;
            }


        }

        @media(max-width:768px) {

            .all_head {
                color: #F04678;
                font-size: 25px;
                font-weight: 600 !important;
            }

            .sub_head {
                margin-top: 20px !important;
                color: #0A6A71;
                font-size: 41px;
                font-weight: 600;
            }
        }

        .all_head {
            color: #3ABCCD;
            font-size: inherit;
        }



        .sub_head {
            margin-top: 20px;
            color: #0A6A71;
            font-size: 30px;
            font-weight: 600;
        }



        .pad_row {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .btn_bot {
            margin-bottom: 10px;
        }

        .test_cover {
            padding: 60px 20px;
        }

        .test_b {
            margin-bottom: 67px;
        }

        .caro_test {
            margin: 50px 0px;
        }

        .test_p2 {
            margin-bottom: 81px;
            color: #927E9E;
            margin-top: 20px;
            font-size: 13px;
            line-height: 22px;
        }

        .test_p {
            color: #927E9E;
            margin-top: 20px;
            font-size: 13px;
            line-height: 22px;
        }

        .test_authh {
            margin: 10px 0px 2px;
            font-size: 23px;
            font-weight: 600;
        }

        .test_authp {
            margin: 0px;
            font-size: 13px;
            color: #626262;

        }

        .test_auth1 {
            margin-left: 10px;
        }

        .test_box {
            padding: 25px 36px;
            border-radius: 10px;
        }

        .help_back {
            background: linear-gradient(180deg, rgba(248, 116, 136, 1) 2%, rgba(255, 246, 241, 1) 2%);
            border-radius: 20px;
            padding: 60px 30px;
        }

        .help_back1 {
            background: linear-gradient(180deg, rgba(255, 85, 0, 1) 2%, rgba(255, 246, 214, 1) 2%);
            border-radius: 20px;
            padding: 60px 30px;
        }


        .help_h3 {
            font-size: 30px;
            font-weight: 600;
        }

        .help_h2 {
            margin: 30px 0px;
            font-weight: 600;
        }

        .help_p,
        .helpa {
            margin-bottom: 63px;
        }

        .arrow1 {
            position: absolute;
            left: 29%;
            margin-top: 35px;
        }

        .arrow2 {
            position: absolute;
            right: 30%;
        }

        .box1 {
            font-size: 32px;
            font-weight: 800;
            background: #FFA233;
            color: white;
            padding: 25px 42px;
            border-radius: 10px;
            box-shadow: 0px 20px 37px #ffa56e;
        }

        .sol_box2 {
            padding-top: 10%;
        }

        .box2 {
            font-size: 32px;
            font-weight: 800;
            background: #F87488;
            color: white;
            padding: 25px 42px;
            border-radius: 10px;
            box-shadow: 0px 20px 37px #ffa56e;
        }

        .box3 {
            font-size: 32px;
            font-weight: 800;
            background: #B888F8;
            color: white;
            padding: 25px 42px;
            border-radius: 10px;
            box-shadow: 0px 20px 37px #FFA5AA;
        }

        .sol_back {
            background-color: #FFFAF7;
            padding: 50px 0px;
        }

        .sol_head {
            margin: 20px;
            padding: 0px 50px;
        }

        .sol_par {
            padding-top: 50px;
            font-size: 14px;
            color: #605B5B;
            font-family: cursive;
        }

        .par1 {
            margin: 25px 20px 15px 0px;
            color: #605B5B;
        }

        .par2 {
            margin: 40px 20px 24px 0px;
            color: #605B5B;
        }

        .bel_box {
            background-color: #FFEFE8;
            padding: 30px;
            border-radius: 10px;
        }

        .bel_head {
            padding: 0px 50px;
        }

        .bel_h4 {
            font-size: 34px;
            line-height: 50px;
        }

        .bel_pad {
            padding: 60px 0px;
        }

        .cont {
            padding: 60px 20px;
        }

        .regular_gil {
            font-family: 'Gilroy-Regular', sans-serif;
            padding: 60px 20px;
        }

        body {
            font-family: 'Gilroy-Bold', sans-serif;
        }

        .btn1 {
            width: 171px;
            background: #ff5903;
        }

        .nav_pad {
            padding: 25px 120px;
        }

        .space1 {
            padding: 12px;
        }

        .nav_flex {
            width: 100%;
            padding: 0px 88px;
        }

        .space {
            margin: 0px 20px;
        }

        .main_pad {
            padding: 90px 0px 10px 134px;
        }

        .main_top {
            padding-top: 30px;
        }

        .main_head {
            font-size: 20px;
            font-weight: 600;
            margin-top: 30px;
        }

        .main_para {
            font-weight: 600;
            font-size: 52px;
            padding-right: 44px;
            padding-top: 10px;
        }

        .main_par {
            padding-top: 20px;
            padding-right: 37px;
            font-family: 'Gilroy-Light', sans-serif;
        }

        .btn_grp {
            padding: 0px;
            margin-top: 42px;
        }

        .btn_color {
            border: 1px solid #FF5500;
        }


        .btn_pad1 {
            background-color: #FF5500;
        }

        a:hover {
            text-decoration: none;
        }

        .btn_pa {
            padding: 15px;
            font-size: 13px;
        }

        .head_back {
            background: linear-gradient(352deg, rgba(255, 255, 255, 1) 27%, rgba(254, 237, 237, 1) 37%);
        }

        .tru_head {
            color: white;
            font-size: 60px;
            margin-bottom: 60px;
            font-weight: 600;
        }


        .tru_back {
            background: url('images/truth.svg');
            background-size: cover;
            height: 602px;
            padding: 145px 104px 50px;
        }

        .back_opa {
            background: #FF9363;
            opacity: 0.7;
            border-radius: 10px;
            padding: 20px 20px 5px;
        }

        .tru_box1 {
            color: white;
            padding: 33px 0px;
        }

        .tru_box2 {
            color: white;
            padding: 17px 54px 0px 0px;
        }

        .main1 {
            background: #FFF4F2;
            padding: 60px 0px;
        }

        .tru_cont {
            padding: 30px;
            margin-bottom: 60px;
            margin-top: 60px;
        }



        .main1_list {
            margin-top: 30px;
        }

        .help_cont {
            padding: 60px 20px;
        }

        .help_box {
            padding: 55px 36px;
            box-shadow: 0px 0px 6px #ccc;
            border-radius: 10px;
        }

        .help_box1 {
            padding: 43px 36px;
            box-shadow: 0px 0px 6px #ccc;
            border-radius: 10px;
        }

        .help_h4 {
            margin: 30px 0px 15px;
        }

        .help_top {
            margin-top: 60px;
        }

        .btn_pa2 {
            padding: 15px;
            font-size: 13px;
        }

        .bttn {
            margin-top: 22px;
        }

        hr {
            width: 10%;
            margin-left: auto;
            margin-right: auto;
            border-top: 7px solid rgb(255, 85, 0);

        }

        .color_bel {
            color: #FF5500;
            font-size: 25px;
        }

        @media (max-width: 1024px) {
            .tru_back {
                background: url(images/truth.svg);
                background-size: cover;
                height: 496px;
                padding: 79px 104px 50px;
            }

            .main_pad {
                padding: 41px 0px 10px 130px;
            }

            .main_head {
                font-size: 17px;
                font-weight: 600;
                margin-top: 0px;
            }

            .main_para {
                font-weight: 600;
                font-size: 32px;
                padding-right: 44px;
                padding-top: 10px;
            }

            .par2 {
                margin: 40px 20px 47px 0px;
                color: #605B5B;
            }

            .arrow1 {
                position: absolute;
                left: 26%;
                margin-top: 44px;
                width: 187px;
            }

            .arrow2 {
                position: absolute;
                right: 24%;
                width: 187px;
            }

            .tru_box2 {
                color: white;
                padding: 17px 25px 0px 0px;
            }

            .help_boxa {
                margin-bottom: 0px;
            }

            .help_box {
                padding: 55px 33px;
                box-shadow: 0px 0px 6px #ccc;
                border-radius: 10px;
            }

            .help_box1 {
                padding: 43px 20px;
                box-shadow: 0px 0px 6px #ccc;
                border-radius: 10px;
            }

            .help_back1 {
                background: linear-gradient(180deg, rgba(255, 85, 0, 1) 2%, rgba(255, 246, 214, 1) 2%);
                border-radius: 20px;
                padding: 60px 26px;
            }

            .helpa {
                margin-bottom: 25px;
            }

            .test_p {
                color: #927E9E;
                margin-top: 20px;
                font-size: 13px;
                line-height: 19px;
            }
        }

        .off_set {
            margin-left: 16.666667%;
        }
    </style>

</head>

<body style="overflow-x: hidden !important;">

    <!-- nav and header -->
    <div class="head_back">
        <nav class="navbar navbar-expand-lg navbar-light text nav_pad">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.svg" alt="nav_logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <div class="d-flex nav_flex">
                    <ul class="navbar-nav mt-2 mt-lg-0 ">
                        <li class="nav-item space active">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item space">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">

                        <li class="nav-item space">
                            <a class="nav-link" href="#">Login</a>
                        </li>

                        <button class="btn btn1 space space1" type="submit"><a href="#" class="register text-white">Sign Up</a></button>

                    </ul>

                </div>

            </div>
        </nav>
        <div class="row main_top">
            <div class="col-lg-6 main_pad">
                <h4 class="main_head">TECH SUPPORT FOR COURSE CREATORS</h4>
                <h3 class="main_para">Let’s take away the stress of tech platforms</h3>
                <P class="main_par">You don’t need to hire a tech assistant or to waste hours trying to figure out how to use an online course tech platform. We can help, starting with <span style="color: #FF5500; font-weight: 800;">$197 per month</span> </P>

                <div class="col-md-12 btn_grp">
                    <button class="btn text-white btn_pad1 col-md-4 btn_pa mt-2" type="submit"><a href="#" class="register text-white">Get Started</a></button>
                    <button class="btn text-white btn_color col-md-4 btn_pa mt-2" type="submit"><a href="#" class="register text-danger">Book a Call</a></button>
                </div>


            </div>
            <div class="col-lg-6 ">
                <img src="/images/tqmain.svg" alt="tgix" class="img-fluid main_image">
            </div>
        </div>
    </div>


    <!-- sponsors -->
    <div class="container cont">
        <div class="row">
            <div class="col">
                <img src="/images/bella.svg" alt="">
            </div>
            <div class="col">
                <img src="/images/day.svg" alt="">
            </div>
            <div class="col">
                <img src="/images/van.svg" alt="">
            </div>
            <div class="col">
                <img src="/images/gen.svg" alt="">
            </div>
            <div class="col">
                <img src="/images/yes.svg" alt="">
            </div>

        </div>
    </div>


    <!-- belief -->
    <div class="container bel_pad">
        <div class="text-center bel_head">
            <h4 class="bel_h4">We believe you were not put on this earth to struggle with landing pages, videos and tech jargons.</h4>
            <hr>
            <h5 class="color_bel mt-5">
                Does This Sound Like You?
            </h5>
        </div>
        <div class="row regular_gil">
            <div class="col-md-6">
                <div class="bel_box mt-4">
                    <img src="/images/orange.svg" alt="">
                    <p class="par1">
                        You’ve tried other tech platforms but they were so confusing. You are not techy. Tech platforms have been frustrating you and seem to be wasting your time. You’re tired of dealing with tech platforms which seem so hard to use

                    </p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="bel_box mt-4">
                    <img src="/images/purple.svg" alt="">
                    <p class="par2">
                        You’ve been researching all the different tools you need for your online course and they feel so overwhelming and stressful. You need an easier way

                    </p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="bel_box mt-4">
                    <img src="/images/green.svg" alt="">
                    <p class="par1">
                        You have a full time job, mummy duties and clients to deal with. After a long day, the last thing you want to do is to sit down to start designing landing pages yourself or figuring out payment pages. You need support

                    </p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="bel_box mt-4">
                    <img src="/images/orangee.svg" alt="">
                    <p class="par2">
                        You’ve been researching all the different tools you need for your online course and they feel so overwhelming and stressful. You need an easier way

                    </p>
                </div>

            </div>

        </div>
    </div>

    <!-- solution-->
    <div class="sol_back">
        <div class="container ">
            <div class="text-center sol_head">
                <h4 class="bel_h4">We have a solution for you</h4>
                <hr>
            </div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-4 sol_space">
                    <span class="box1">1</span>
                    <p class="sol_par">You book a personalized <br> tech support session with us</p>
                </div>

                <div>
                    <img src="/images/arr1.svg" alt="" class="arrow1">
                </div>
                <div>
                    <img src="/images/arr2.svg" alt="" class="arrow2">
                </div>
                <div class="col-md-4 sol_box2 sol_space">
                    <span class="box2">2</span>
                    <p class="sol_par solar_pa">We get on a call with you to help you implement what you need whether it’s a landing page, online course set up, payment integration, etc
                    </p>
                </div>


                <div class="col-md-4 sol_space">
                    <span class="box3">3</span>
                    <p class="sol_par">You’re good to go
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- truth -->
    <div class="container tru_cont">
        <div class="tru_back">
            <h2 class="tru_head">Here’s <br> the truth</h2>

            <div class="row">
                <div class="col-md-6 col-lg-5 mt-2">
                    <div class="back_opa" style="background: #FF935E 67%;">
                        <img src="/images/light.svg" alt="">
                        <p class="tru_box1">You shouldn’t be wasting <br> your time on tech</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 mt-2">
                    <div class="back_opa" style="background: #FF935E 67%;">
                        <img src="/images/light.svg" alt="">
                        <p class="tru_box2">Our team at TrainQuarters can handle this for you, while you focus on what really matters, your content</p>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- ===== about event ===== -->
    <div class="main1">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 ict_row">

                    <h2 class="bel_h4">We are not your <br> average tech platform</h2>

                    <div class="mb-3">
                        <div class="row main1_list">
                            <div class="col-md-1"><img src="/images/purple.svg" alt=""></div>
                            <div class="event_abt col-md-10">In addition to having the software tools that help you to build beautiful landing pages and host online courses, ebooks and coaching programs.</div>
                        </div>
                        <div class="row main1_list">
                            <div class="col-md-1"><img src="/images/orangee.svg" alt=""></div>
                            <div class="event_abt col-md-10">We also provide you with personalized tech support sessions where you can work with someone on our team to set up your tools.</div>
                        </div>
                        <div class="row main1_list">
                            <div class="col-md-1"><img src="/images/orange.svg" alt=""></div>
                            <div class="event_abt col-md-10"> You will never feel alone or confused.</div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6">
                    <img src="/images/platform.svg" class="img-fluid ict" alt="">

                </div>
            </div>
        </div>
    </div>

    <!-- help -->
    <div class="container help_cont">
        <div class="text-center">
            <h3 class="bel_h4">We can help you with</h3>
            <hr>
        </div>

        <div class="help_top row">
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="help_box text-center">
                    <img src="/images/orange-big.svg" alt="">
                    <h4 class="help_h4">Landing Page</h4>
                    <p class="help_boxa" style="color: #927E9E;">Whether you need an optin page, thank you page, sales page, etc</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="help_box text-center">
                    <img src="/images/purple-big.svg" alt="">
                    <h4 class="help_h4">Online School Set Up</h4>
                    <p style="color: #927E9E;">You’ll be able to set up your school in minutes</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="help_box1 text-center">
                    <img src="/images/orangee-big.svg" alt="">
                    <h4 class="help_h4">Online Course Set Up</h4>
                    <p style="color: #927E9E;">Whether you need to upload your videos, connect payment gateway, send emails to your students etc</p>
                </div>
            </div>

        </div>


    </div>

    <!-- packages -->
    <div class="container">
        <div class="text-center">
            <h3 class="bel_h4">Our Packages</h3>
            <hr>
        </div>
        <div class="row off_set mt-5 mb-5 p-0">
            <div class="col-md-10 col-lg-5 mb-5">
                <div class="text-center help_back">
                    <h3 class="help_h4">Tech Support on Demand</h3>
                    <h2 class="help_h2" style="color:#FF5500">$197 per month</h2>
                    <p class="help_p">Get somebody to help you to set up any tech related activity to make it easy to launch your online course</p>

                    <button class="btn text-white btn_color col-md-10 btn_pa2" type="submit"><a href="#" class="register " style="color:#FF5500">Get Started</a></button>
                </div>
            </div>
            <div class="col-md-10 col-lg-5 mb-5">
                <div class="text-center help_back1">
                    <h3 class="help_h4">Tech Support + Business Coaching</h3>
                    <h2 class="help_h2" style="color:#FF5500">$1,500 per month</h2>
                    <p class="helpa">Get expert guidance to help you create and sell your online course. </p>

                    <button class="btn text-white btn_color col-md-10 btn_pa2 bttn" type="submit"><a href="#" class="register" style="color:#FF5500">Get Started</a></button>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial -->
    <div style="background-color:#FFF9F8;">
        <div style=" background-image: url('/images/test.svg'); background-size:cover">
            <div class="container test_cover">
                <div class="text-center">
                    <h3 class="bel_h4">Testimonial</h3>
                    <hr>
                    <p class="mt-4" style="color:#626262;">We're fanatical about your success</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide caro_test" data-ride="carousel">

                    <a class="carousel-control-prev left" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next left" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>


                    <div class="carousel-inner container ">


                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="test_box bg-white">
                                        <div class="test_b">
                                            <img src="/images/que.svg" alt="" style="float: right;">
                                        </div>

                                        <div class="row">
                                            <img src="/images/ayo.svg" alt="">
                                            <div class="test_auth1">
                                                <h3 class="test_authh">Ayodotun Akinfenwa </h3>
                                                <p class="test_authp">Coach and Brand Expert</p>
                                            </div>
                                        </div>
                                        <p class="test_p">TrainQuarters has helped me arrange my course materials with ease... everything is in one place, a detailed landing page, payment set up, videos, worksheets, email portal. It’s been convenient. <br> I also really loved the tech support. They have been super helpful and patient with me, I had loads and loads of questions per time and they always came through.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="test_box bg-white">
                                        <div class="test_b">
                                            <img src="/images/que.svg" alt="" style="float: right;">
                                        </div>

                                        <div class="row">
                                            <img src="/images/cor.svg" alt="">
                                            <div class="test_auth1">
                                                <h3 class="test_authh">Cornelia Mezu </h3>
                                                <p class="test_authp">Coach and Baker</p>
                                            </div>
                                        </div>
                                        <p class="test_p2">I started using Trainquarters after trying other platforms which confused me. I was supported from onboarding to my course set up, launch and student management.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="help_box text-center">
                                    <img src="/images/purple-big.svg" alt="">
                                    <h4 class="help_h4">Online School Set Up</h4>
                                    <p style="color: #927E9E;">You’ll be able to set up your school in minutes</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="help_box text-center">
                                    <img src="/images/purple-big.svg" alt="">
                                    <h4 class="help_h4">Online School Set Up</h4>
                                    <p style="color: #927E9E;">You’ll be able to set up your school in minutes</p>
                                </div>
                            </div>
                        </div>

                    </div> -->




                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--===== faq =====-->
    <div class="pad_row" style="padding-bottom: 60px;" id="faq">

        <h2 class="hel_h4 text-center">Frequently Asked Questions</h2>
        <hr>

        <div id="accordion" class=" club_top">
            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">How many sessions of tech support would I have access to?
                        <span collapsed data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>
            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">Can you offer tech support with all the different softwares I use

                        <span collapsed data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>
            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        Are there any other fees?
                        <span collapsed data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>

            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        How do I receive my payment?
                        <span collapsed data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>

            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        What happens if I cancel my plan?
                        <span collapsed data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>

            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        Can I have my own customized domain?
                        <span collapsed data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>
            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        Do you offer refunds
                        <span collapsed data-toggle="collapse" data-target="#collapseSev" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseSev" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>
            <div class="col-md-8 col-sm-10 m-auto  mb-2 btn_bot">
                <button class=" btn_link  col-md-12 p-4 text-left btn_bot accord">
                    <h4 class="color_faq">
                        Who can I contact if I have additional questions
                        <span collapsed data-toggle="collapse" data-target="#collapseEig" aria-expanded="false" aria-controls="collapseTwo" class="fas fa-plus" style="float: right; "></span>
                    </h4>

                    <div id="collapseEig" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <ul style=" list-style: none; padding: 15px 0px">
                            <li>Unlimited</li>
                        </ul>

                    </div>
                </button>
            </div>

        </div>

    </div>


    <!-- support -->
    <div class="text-center mt-5 mb-5">
        <h3 class="mt-5 mb-5">You deserve to be supported</h3>
        <button class="btn text-white btn_pad1 col-md-2 btn_pa" type="submit"><a href="#" class="register text-white">Get Started</a></button>
    </div>


    <!-- footer -->
    <div class="footer" style="background: url('/images/footer.svg');background-size:cover;">
        <div class="container">
            <div class="row footer_b">
                <div class="col-md-6">
                    <p>Copyright © 2021 All Rights Reserved | TRAINQUARTERS™</p>
                </div>
                <div class="col-md-6">
                    <p style="float: right;"> Privacy policy || Terms of use || Instrustors's terms</p>
                </div>
            </div>
        </div>

    </div>












    <script>
        $('.fa-plus').click(function() {
            if ($(this).hasClass('fa-plus')) {
                $(this).removeClass('fa-plus');
                $(this).addClass('fa-times');
            } else if ($(this).hasClass('fa-times')) {
                $(this).removeClass('fa-times');
                $(this).addClass('fa-plus');

            } else {
                $(this).children('i').addClass('fa-plus');
            }
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
</body>

</html>