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

        .bttn2 {
            margin-top: 72%;
        }

        .line_align {
            align-items: self-start;
            margin: 10px 0px;
        }

        .line_ini {
            border-bottom: 2px solid #EBEBEB;
            padding: 0;
            margin-bottom: 50px;
        }

        .head_h3 {
            font-family: 'Gilroy-Regular';
            padding-right: 22%;
            font-weight: 600;
            font-size: 36px;
        }

        .head_p {
            font-size: 35px;
            margin-top: 20px;
            color: #FF5500;
        }

        .fa-check {
            border-radius: 50px;
            background: #DBFFE3;
            color: #00C82C;
            padding: 6px;
            font-size: 16px;
        }

        .fas-p {
            color: #7A7A7A;
            font-family: 'Gilroy-Regular';
            font-size: 16px;
            margin-left: 10px;
        }

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
            background: linear-gradient(180deg, rgba(248, 116, 136, 1) 2%, rgba(255, 255, 255, 1) 2%);
            border-radius: 20px;
            padding: 60px 30px;
            box-shadow: 0px 0px 8px #ccc;
        }

        .help_back2 {
            background: linear-gradient(180deg, rgba(255, 85, 0, 1) 2%, rgba(255, 255, 255, 1) 2%);
            border-radius: 20px;
            padding: 60px 30px;
            box-shadow: 0px 0px 8px #ccc;
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
            background: rgb(255, 246, 243);
            background: linear-gradient(180deg, rgba(255, 246, 243, 1) 8%, rgba(255, 255, 255, 1) 65%);
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
            font-size: 16px;
            border-radius: 10px;
        }

        .bttn {
            margin-top: 36px;
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

        .c-pad {
            padding: 6% 20px 15%;
        }

        .c-p {
            color: #FF5500;
            font-size: 23px;
        }

        .c-h {
            font-weight: 800;
            font-size: 55px;
            line-height: 75px;
        }

        .btn_pap {
            padding: 17px;
            font-size: 15px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .btn_pada {
            color: #FF5500;
            border: 1px solid #FF5500;
        }

        .pro-head {
            margin-top: 73px;
            font-size: 52px;
            font-family: 'Gilroy-Regular';
            font-weight: 700;
        }

        .pro-head2 {
            margin-top: 30px;
        }

        .pro-p {
            font-size: 23px;
            font-family: 'Gilroy-Regular';
            color: #705D7B;
            margin-top: 15px;
        }

        .pro-h2 {
            color: #FFA233;
            margin-top: 30px;
        }

        .pro-n {
            margin-bottom: 73px;
        }

        .inp {
            font-size: small;
            color: #A3A3A3;
            font-family: 'Gilroy-Regular';
            padding: 20px;
        }

        label {
            font-family: 'Gilroy-Regular';
            font-weight: 700;
            font-size: 17px;
        }

        @media (max-width: 1024px) {
            .fa-check {
                border-radius: 50px;
                background: #DBFFE3;
                color: #00C82C;
                padding: 6px;
                font-size: 10px !important;
            }

            .fas-p {
                color: #7A7A7A;
                font-family: 'Gilroy-Regular';
                font-size: 14px !important;
                margin-left: 10px;
            }
        }

        @media(max-width: 430px) {
            .fas-p {
                color: #7A7A7A;
                font-family: 'Gilroy-Regular';
                font-size: 9px !important;
                margin-left: 2px !important;
            }

            .fa-check {
                border-radius: 50px;
                background: #DBFFE3;
                color: #00C82C;
                padding: 6px;
                font-size: 6px !important;
            }

          
        }
    </style>

</head>

<body style="overflow-x: hidden !important;">

    <!-- nav and header -->
    <div style="background-color:#FFF9F8;">
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
            <div class="container">

                <div class=" text-center pb-5">
                    <h1 class="pro-head">PRODUCT DIVE</h1>
                    <h3 class="pro-head2">Transition into Product Management</h3>
                    <p class="pro-p">A step by step guide on how to get a product management job</p>
                    <h2 class="pro-h2"> One-Time Payment</h2>
                    <h2 class="pro-n">NGN200,000.00</h2>
                    <div class="col-lg-7 m-auto">

                        <img src="/images/pro.png" alt="product" class="col-md-12">
                    </div>

                </div>

            </div>
        </div>
    </div>





    <!-- testimonial -->
    <div style="background-color:#FFF9F8;">
        <div style=" background-image: url('/images/test.svg'); background-size:cover">
            <div class="container test_cover">
                <div class="text-center">
                    <h3 class="bel_h4">What Students Say</h3>
                    <hr>

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
                                    <div class="test_box bg-white mt-2">
                                        <div class="">
                                            <img src="/images/que.svg" alt="" style="float: right;">
                                        </div>

                                        <div class="row">

                                            <div class="test_auth1">
                                                <h3 class="test_authh">Ayodotun Akinfenwa </h3>
                                                <p class="test_authp" style="font-family: Gilroy-Regular;">Coach and Brand Expert</p>
                                            </div>
                                        </div>
                                        <p class="test_p" style="font-family: Gilroy-Regular;">TrainQuarters has helped me arrange my course materials with ease... everything is in one place, a detailed landing page, payment set up, videos, worksheets, email portal. It’s been convenient. <br> I also really loved the tech support. They have been super helpful and patient with me, I had loads and loads of questions per time and they always came through.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="test_box bg-white mt-2">
                                        <div class="">
                                            <img src="/images/que.svg" alt="" style="float: right;">
                                        </div>

                                        <div class="row">

                                            <div class="test_auth1">
                                                <h3 class="test_authh">Cornelia Mezu </h3>
                                                <p class="test_authp" style="font-family: Gilroy-Regular;">Coach and Baker</p>
                                            </div>
                                        </div>
                                        <p class="test_p2" style="font-family: Gilroy-Regular;">I started using Trainquarters after trying other platforms which confused me. I was supported from onboarding to my course set up, launch and student management.</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <div class="text-center mt-5">
            <h3>What to Expect</h3>
            <hr>
            <p style="color: #7A7A7A; font-family: 'Gilroy-Regular';" class="mb-5">This course prepares you for a successful transition into a product manager.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
                <div class="row line_align">
                    <i class="fas fa-check"></i>
                    <p class="fas-p">This course prepares you for a successful transition into a product </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h3>CheckOut</h3>
            <hr>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">First Name</label>
                    <input type="text" placeholder="Enter your First name" class="form-control inp">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Phone Number</label>
                    <input type="text" placeholder="Enter your Phone Number" class="form-control inp">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Last Name</label>
                    <input type="text" placeholder="Enter your Last name" class="form-control inp">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Referral Code (Optional)</label>
                    <input type="text" placeholder="Enter Referral Code" class="form-control inp">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 form-group p-0">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Enter your Email Address" class="form-control inp">
                    </div>
                    <div class="col-md-12 form-group p-0">
                        <label for="">Country</label>
                        <select name="" id="" class="form-control inp">
                            <option value="" disabled>Select</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Select a payment type">Select a payment type</label>
                    <div class="col-md-12 form-group p-0">
                        <div class="form-control">
                            <input type="radio" placeholder="One time payment" name="payment">
                            <label for="" style="color:#A3A3A3; font-weight: 400; font-size: 13px; font-family: 'Gilroy-Regular';">One time payment</label>
                        </div>

                    </div>
                    <div class="col-md-12 form-group p-0">
                        <div class="form-control ">
                            <input type="radio" placeholder="Installmental" name="payment" value="">
                            <label for="" style=" color:#A3A3A3; font-weight: 400; font-size: 13px; font-family: 'Gilroy-Regular';">Installmental</label>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="">
            <div class="col-lg-7 m-auto">
                <a href="#" class="register text-white">
                    <button class="btn text-white btn_pad1 col-md-12 btn_pap" type="submit">Pay with Credit/Debit Card</button>
                </a>
            </div>
            <div class="col-lg-7 m-auto">
                <a href="#" class="register">
                    <button class="btn btn_pada col-md-12 btn_pap" type="submit">Pay with Paypal</button>
                </a>
            </div>
            <div class="col-lg-7 m-auto">
                <a href="#" class="register">
                    <button class="btn btn_pada col-md-12 btn_pap" type="submit">Pay with flutterwave</button>
                </a>
            </div>


        </div>

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