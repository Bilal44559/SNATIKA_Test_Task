<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://snatika.com/public/frontend_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://snatika.com/public/frontend_assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://snatika.com/public/frontend_assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .manage-logo {
            width: 170px;
            display: inline-block;
        }
    </style>

<style>
    .new-tes .carousel-item {
        min-height: 420px !important;
    }

    .purple-color {
        color: #a30189 !important;
    }

    .manage-logo {
        width: 170px;
        display: inline-block;
    }

    #marq-container {
        height: 335px;
        overflow: hidden;
    }

    #marq {
        animation: marquee 20s linear infinite;
        animation-fill-mode: forwards;
        margin-bottom: 0;
    }

    #marq1 {
        animation: marquee 20s linear infinite;
        animation-fill-mode: forwards;
    }

    #marq-container-2 {
        height: 335px;
        overflow: hidden;
    }

    #marq-2 {
        animation: marquee-2 20s linear infinite;
        animation-fill-mode: forwards;
        margin-bottom: 0;
    }

    #marq1-2 {
        animation: marquee-2 20s linear infinite;
        animation-fill-mode: forwards;
    }

    @keyframes marquee {
        from {
            transform: translateY(0%);
        }

        to {
            transform: translateY(-100%);
        }
    }

    @keyframes marquee2 {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(-200%);
        }
    }

    @keyframes marquee-2 {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0%);
        }
    }

    @keyframes marquee2-2 {
        from {
            transform: translateY(0%);
        }

        to {
            transform: translateY(200%);
        }
    }

    .admission_going_on {
        z-index: 1;
        margin-bottom: -35px;
        background: #a30189;
        color: #fff;
        padding: 5px;
        width: 70%
    }

    .qualifistyle {
        border-top: 3px solid #bbb;
        border-right: 3px solid #bbb;
        height: 80px
    }

    .qualifistylee {
        border-right: 3px solid #bbb;
    }

    .qualifistyleee {
        border-left: 3px solid #bbb
    }

    .qualifistyleeee {
        border-right: 3px solid #bbb;
    }

    .qualifistyleeImage {
        border-bottom: 3px solid #bbb;
        margin-top: 0px
    }
</style>
</head>

<body>
    <section id="navbar-section" class="navbar-section fixed-top">

        <div class="top-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="top-head-info-block">
                            <ul class="d-flex">

                                <li class="mr-3">
                                    <a href="#">
                                        <i class="las la-phone"></i>

                                        <select name="phoneCall" id="phoneCall" class="d-inline-block">
                                            <option value="+23418880209">+234 1 8880 209</option>
                                            <option value="+27218259877">+27 21 825 9877</option>
                                            <option value="+13478554980">+ 1 347 855 4980</option>
                                            <option value="+442032876900" selected="">+ 44 20 3287 6900</option>
                                        </select>
                                    </a>
                                </li>
                                <li><a href="mailto:info@snatika.com"><i class="las la-envelope"></i>
                                        info@snatika.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 justify-content-end d-none d-md-flex">
                        <div class="top-head-account-block">
                            <ul class="d-flex justify-content-lg-end">
                                <li><a href="{{ route('login') }}" class="logreg"> <i class="las la-key"></i>
                                        Login</a></li>
                                <li><a href="https://snatika.com/online-application" class="logreg"> <i
                                            class="las la-user-plus"></i> Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <nav class="navbar navbar-expand-lg  navbar-light navbar-customs item-align-right"
            style="background:#fff;color:#000;">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Toggle button -->

                <div class="row">
                    <div class="col-8 d-lg-none">
                        <a href="https://snatika.com" class="d-flex justify-content-end py-3" style="width: 68%">
                            <img src="https://snatika.com/public/frontend_assets/img/snatika_new_logo.png"
                                class="w-100" alt="SNATIKA">
                        </a>
                    </div>
                    <div class="col-4 d-lg-none d-flex align-items-center justify-content-end">
                        <a href="javascript:void(0);" id="menu_toggle_btn">
                            <span class="navbar-toggler-icon"></span>
                        </a>
                    </div>
                </div>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarExampleOnHover"
                    style="margin-bottom: -30px;padding-bottom: 24px;">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 5.5rem;margin-top:10px">
                        <a class="navbar-brand" href="https://snatika.com">
                            <img src="https://snatika.com/public/frontend_assets/img/snatika_new_logo.png"
                                alt="logo" height="55">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown dropdown-hover position-static" style="margin-left: 30px;">

                            <a href="https://snatika.com/program-category-all" class="nav-link dropdown-toggles"
                                id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                PROGRAMS<i class="las la-angle-down ml-1"></i>
                            </a>
                            <!-- Dropdown menu -->

                            <div class="container">

                                <div class="row my-4">

                                    <div class="dropdown-menu"
                                        style="overflow:scroll;background: #fff;width:100%;
                                    height:700px;padding-top: 5px;padding-bottom: 50px;border-top:1px solid #eee;margin-top: -5px;">
                                        <div class="row" id="myDIV">
                                            <div class="col-3">
                                                <div class="col-12 text-center">
                                                    <b class="">DOMAINS</b>
                                                </div>
                                                <div style="font-weight:500" class="nav flex-column nav-pills "
                                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">



                                                    <a class="nav-link text-center  active domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home0" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">BUSINESS
                                                        MANAGEMENT</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home1" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">ACCOUNTING
                                                        AND FINANCE</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home2" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">EDUCATION
                                                        AND TRAINING</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home3" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">HEALTH</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home4" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">HUMAN
                                                        RESOURCES</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home5" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">INFORMATION
                                                        TECHNOLOGY</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home6" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">LAW AND
                                                        LEGAL</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home7" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">LOGISTICS
                                                        &amp; SHIPPING</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home8" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">MARKETING
                                                        AND SALES</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home9" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">PUBLIC
                                                        ADMINISTRATION</a>


                                                    <a class="nav-link text-center  domain  btn"
                                                        style="color: #000;padding:5px;margin:2px 0px;border-radius:5px;font-weight:500;font-size: 16px;"
                                                        id="v-pills-home-tab" data-toggle="pill"
                                                        href="#v-pills-home10" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">TOURISM AND
                                                        HOSPITALITY</a>


                                                </div>
                                            </div>
                                            <style>
                                                .catcol {
                                                    color: #000;
                                                }
                                            </style>
                                            <div class="col-9">
                                                <div class="tab-content" id="v-pills-tabContent">

                                                    <div class="tab-pane fade show  active " id="v-pills-home0"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/doctorate"
                                                                            class="catcol"><strong>DOCTORATE&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <a
                                                                    href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-practice-level-8-diploma-othm">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">
                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Strategic Management &amp; Leadership
                                                                                Practice (Level 8)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-level-8-diploma-qualifi">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">
                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc98d9e7d7_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Strategic Management &amp; Leadership
                                                                                (Level 8)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-master-strategic-management-leadership-arden-university-uk">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/655ae8ea0e3cf_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Strategic Management and Leadership
                                                                                (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-master-business-administration-europe-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Business Administration (MBA )
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://snatika.com/program/mba-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Business Administration (MBA )
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-project-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Project Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-strategic-management-and-leadership-university-of-gloucestershire">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9b74c6d5_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Strategic Management and Leadership
                                                                                (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-risk-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Risk Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-oil-gas-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Oil &amp; Gas Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-engineering-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Engineering Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-facilities-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Facilities Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/bachelor"
                                                                            class="catcol"><strong>BACHELOR&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Business Administration (BBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-quality-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Quality Management ( Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-operations-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Operations Management (Level
                                                                                7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-for-construction-senior-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma for Construction Senior
                                                                                Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-management-consulting-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Management Consulting (Level
                                                                                7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-business-management-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Business Management (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-security-management-level-5">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Security Management
                                                                                (Level 5)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-strategic-management-leadership-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Strategic Management
                                                                                Leadership (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-project-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Project Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-risk-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Risk Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home1"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-finance-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Finance (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/msc-accounting-finance-arden-university-uk">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/655ae8ea0e3cf_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Accounting and Finance (MSc)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-master-business-administration-accounting-finance-europe-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Accounting &amp; Finance (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/msc-in-accounting-and-finance-uk-university-of-gloucestershire">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9b74c6d5_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Accounting and Finance (MSc)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/bachelor"
                                                                            class="catcol"><strong>BACHELOR&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-accounting-finance-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Accounting and Finance (BA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-accounting-and-business-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Accounting and Business
                                                                                (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-wealth-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Wealth Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-capital-markets--regulations--and-compliance-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Capital Markets, Regulations,
                                                                                and Compliance (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-financial-trading-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Financial Trading (Level
                                                                                6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-accounting-finance-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Accounting Finance (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home2"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-education-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Education Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-coaching-mentoring-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Coaching and Mentoring (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-education-and-training-othm-level-5">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Education and Training (Level
                                                                                5)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-teaching-and-learning-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Teaching and Learning (Level
                                                                                6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-translation-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Translation (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-career-guidance-development-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Career Guidance &amp;
                                                                                Development (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-research-methods-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Research Methods (Level
                                                                                7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-academic-and-professional-skills-development-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Academic and Professional
                                                                                Skills Development (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-leading-the-internal-quality-assurance-of-assessment-processes-and-practice-othm-level-4">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Leading the Internal
                                                                                Quality Assurance of Assessment
                                                                                Processes and Practice (Level 4)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-education-management-leadership-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Education Management
                                                                                Leadership (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-coaching-mentoring-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Coaching Mentoring (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home3"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-health-safety-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Health &amp; Safety Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-health-social-care-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Health and Social Care Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/msc-health-and-social-care-management-london-graduate-school">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc96eba4c2_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Health and Social Care Management (MSc)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-psychology-othm--level-5">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Psychology (Level 5)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-health-and-wellness-coaching-qualifi-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc98d9e7d7_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Health and Wellness Coaching
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-health-and-social-care-management-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Health and Social Care
                                                                                Management (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-health-social-care-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Health Social Care Management
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home4"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-human-resource-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Human Resource Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/msc-in-human-resources-management-university-of-gloucestershire">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9b74c6d5_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Human Resources Management (MSc)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-human-resource-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Human Resource Management
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home5"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-cyber-security-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Cyber Security (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-data-science-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Data Science (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-information-technology-othm--level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Information Technology (Level
                                                                                6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home6"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-international-law-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                International Law (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-paralegal-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Paralegal (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-international-business-law-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in International Business Law
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home7"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-shipping-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Shipping Management (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-logistics-supply-chain-management-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image" class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Logistics and Supply Chain Management
                                                                                (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-procurement-and-supply-chain-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Procurement and Supply Chain
                                                                                Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-logistics-and-supply-chain-management-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image" class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Logistics and Supply Chain
                                                                                Management (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-logistics-supply-chain-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Logistics Supply Chain
                                                                                Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home8"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-marketing-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Marketing (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-brand-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Brand Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-digital-marketing-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Digital Marketing (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-professional-marketing-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Professional Marketing (Level
                                                                                6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-strategic-marketing-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Strategic Marketing (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home9"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-public-administration-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Public Administration (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/masters-program-in-police-leadership-and-management-lgs">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc96eba4c2_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Police Leadership And Management (MSc)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>


                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-international-trade-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in International Trade (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-public-relations-level-4">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Public Relations ( Level
                                                                                4)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-international-relations-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in International Relations
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-public-administration-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Public Administration (Level
                                                                                7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-police-leadership-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Police Leadership Management
                                                                                (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show " id="v-pills-home10"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="row">

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/masters"
                                                                            class="catcol"><strong>MASTER&nbsp;PROGRAMS</strong>
                                                                        </a>
                                                                    </div><a
                                                                        href="https://snatika.com/program-category/masters"
                                                                        class="catcol">
                                                                    </a>
                                                                </div><a
                                                                    href="https://snatika.com/program-category/masters"
                                                                    class="catcol">


                                                                </a><a
                                                                    href="https://snatika.com/program/mba-tourism-hospitality-ucam-spain">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9aa000fd_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Tourism &amp; Hospitality Management
                                                                                (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/mba-master-business-administration-tourism-hospitality-management-europe-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">

                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Tourism &amp; Hospitality (MBA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/bachelor"
                                                                            class="catcol"><strong>BACHELOR&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-tourism-hospitality-eie">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc8d942e76_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Tourism &amp; Hospitality (BA)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="col-3">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a href="https://snatika.com/program-category/professional"
                                                                            class="catcol"><strong>PROFESSIONAL&nbsp;PROGRAMS</strong></a>
                                                                    </div>
                                                                </div>


                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-facilities-management-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Facilities Management (Level
                                                                                7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-6">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Tourism &amp; Hospitality
                                                                                Management (Level 6)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-certificate-in-golf-club-management-level-5">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/651bc9994bd51_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Certificate in Golf Club Management
                                                                                (Level 5)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-7">
                                                                    <div class="row"
                                                                        style="padding-top: 20px;color:#333">
                                                                        <div class="col-4">

                                                                            <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/universities-image/6607c27e1fe03_universities_image"
                                                                                alt="Image"
                                                                                class="img-responsive">


                                                                        </div>
                                                                        <div class="col-8"
                                                                            style="margin-left: -20px;margin-top:-5px">
                                                                            <p style="font-weight: 500">
                                                                                Diploma in Tourism Hospitality
                                                                                Management (Level 7)
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-11 text-center"
                                                                style="margin-top:150px;background: #eee;padding:20px;
                                                                    border-radius:5px;margin-bottom:50px">
                                                                <p><b>CHOOSE YOUR PREFERRED PROGRAM FROM ONE OF THE
                                                                        LARGEST
                                                                        BOUQUET OF DOMAIN SPECIFIC QUALIFICATION</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <style>
                            .txt {
                                font-weight: 500;
                                color: #333;
                            }
                        </style>
                        <li class="nav-item">
                            <a class="txt nav-link" href="https://snatika.com/learner-stories">LEARNER STORIES</a>
                        </li>


                        <li class="nav-item position-relative">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink">
                                MORE <i class="las la-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu" style="margin-top: -30px">
                                <div class="row moredropd" id="myDIV">
                                    <ul class="moredropdul">
                                        <li class="text-mob-center"><a href="https://snatika.com/about-us">ABOUT
                                                US</a>
                                        </li>
                                        <li class="text-mob-center"><a
                                                href="https://snatika.com/faq-categories">FAQ</a>
                                        </li>
                                        <li class="text-mob-center"><a href="https://snatika.com/blog">BLOGS</a>
                                        </li>
                                        <li class="text-mob-center"><a href="https://snatika.com/contact-us">CONTACT
                                                US</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://snatika.com/partner">RECRUITMENT PARTNER</a>
                        </li>
                        <li>

                            <button type="button" class="btn purple-btn ml-4" data-toggle="modal"
                                data-target="#exampleModalCenter">Request for Information</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>

    </section>

    <section class="sidebar">
        <div class="container">
            <!--START MOBILE SIDE MENU WINDOW-->
            <div class="mobile-sidemenu-window" id="mobile-sidemenu-window">

                <div class="main-content">
                    <!--main menu window-->
                    <div class="inner-sidemenu-window position-relative">

                        <div class="sidemenu-header">
                            <div class="login-header box-spacing d-flex bg-light-grey position-relative"
                                style="float: right;margin-right:20px">
                                <a href="javascript:void(0);" class="mobile-sidemenu-window-close"
                                    style="height: 30px;float:right"><i class="las la-times"></i></a>
                            </div>
                        </div>
                        <div class="text-center col-12" style="float: center">
                            <br>
                            <div class="col-8" style="margin-top:20px;margin-left:-20px">
                                <a href="https://snatika.com">
                                    <img src="https://snatika.com/public/frontend_assets/img/snatika_new_logo.png"
                                        class="w-100" alt="SNATIKA">
                                </a>
                            </div>
                            <div class="col-4">&nbsp;</div>
                        </div>
                        <div class="menu-window-body">
                            <hr>

                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <a href="https://snatika.com/login" class="logreg"><i
                                                class="las la-key"></i> Login</a>

                                    </div>
                                    <div class="col-4">

                                        <a href="https://snatika.com/online-application" class="logreg"><i
                                                class="las la-user-plus"></i> Register</a>
                                    </div>
                                </div>
                            </div>


                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                            <div class="box-spacing border-bottom"><br>
                                <h4 class="menu-heading"><a style="color:#333"
                                        href="https://snatika.com/program-category-all">PROGRAMS</a></h4>

                                <style>
                                    div.panel {
                                        display: none;
                                    }

                                    div.panel.show {
                                        display: block !important;
                                    }

                                    /* https://jsfiddle.net/5h5evjpw/# */
                                </style>

                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> BUSINESS MANAGEMENT </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/QUALIFI.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-master-strategic-management-leadership-arden-university-uk"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Strategic Management and Leadership (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-master-business-administration-europe-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Business Administration (MBA )</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Business Administration (MBA )</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-project-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Project Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UOG.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-strategic-management-and-leadership-university-of-gloucestershire"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Strategic Management and Leadership (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-risk-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Risk Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-oil-gas-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Oil &amp; Gas Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-engineering-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Engineering Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-facilities-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Facilities Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/bba-bachelor-business-administration-europe-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Business Administration (BBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-practice-level-8-diploma-othm"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Strategic Management &amp; Leadership Practice (Level 8)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/QUALIFI.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-level-8-diploma-qualifi"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Strategic Management &amp; Leadership (Level 8)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-quality-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Quality Management ( Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-operations-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Operations Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-for-construction-senior-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma for Construction Senior Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-management-consulting-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Management Consulting (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-business-management-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Business Management (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-security-management-level-5"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Security Management (Level 5)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-strategic-management-leadership-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Strategic Management Leadership (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-project-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Project Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-risk-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Risk Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> ACCOUNTING AND FINANCE </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-finance-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Finance (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/QUALIFI.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/msc-accounting-finance-arden-university-uk"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Accounting and Finance (MSc)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-master-business-administration-accounting-finance-europe-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Accounting &amp; Finance (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UOG.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/msc-in-accounting-and-finance-uk-university-of-gloucestershire"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Accounting and Finance (MSc)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/bba-bachelor-business-administration-europe-accounting-finance-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Accounting and Finance (BA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-accounting-and-business-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Accounting and Business (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-wealth-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Wealth Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-capital-markets--regulations--and-compliance-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Capital Markets, Regulations, and Compliance (Level 7)
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-financial-trading-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Financial Trading (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-accounting-finance-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Accounting Finance (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> EDUCATION AND TRAINING </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-education-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Education Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-coaching-mentoring-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Coaching and Mentoring (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-education-and-training-othm-level-5"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Education and Training (Level 5)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-teaching-and-learning-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Teaching and Learning (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-translation-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Translation (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-career-guidance-development-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Career Guidance &amp; Development (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-research-methods-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Research Methods (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-academic-and-professional-skills-development-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Academic and Professional Skills Development (Level
                                                    6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-leading-the-internal-quality-assurance-of-assessment-processes-and-practice-othm-level-4"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Leading the Internal Quality Assurance of Assessment
                                                    Processes and Practice (Level 4)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-education-management-leadership-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Education Management Leadership (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-coaching-mentoring-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Coaching Mentoring (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> HEALTH </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-health-safety-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Health &amp; Safety Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-health-social-care-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Health and Social Care Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/LGS.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/msc-health-and-social-care-management-london-graduate-school"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Health and Social Care Management (MSc)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-psychology-othm--level-5"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Psychology (Level 5)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/QUALIFI.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-health-and-wellness-coaching-qualifi-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Health and Wellness Coaching (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-health-and-social-care-management-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Health and Social Care Management (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-health-social-care-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Health Social Care Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> HUMAN RESOURCES </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-human-resource-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Human Resource Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UOG.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/msc-in-human-resources-management-university-of-gloucestershire"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Human Resources Management (MSc)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-human-resource-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Human Resource Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> INFORMATION TECHNOLOGY </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-cyber-security-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Cyber Security (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-data-science-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Data Science (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-information-technology-othm--level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Information Technology (Level 6)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> LAW AND LEGAL </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-international-law-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    International Law (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-paralegal-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Paralegal (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-international-business-law-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in International Business Law (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> LOGISTICS &amp; SHIPPING </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-shipping-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Shipping Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-logistics-supply-chain-management-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Logistics and Supply Chain Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-procurement-and-supply-chain-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Procurement and Supply Chain Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-logistics-and-supply-chain-management-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Logistics and Supply Chain Management (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-logistics-supply-chain-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Logistics Supply Chain Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> MARKETING AND SALES </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-marketing-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Marketing (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-brand-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Brand Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-digital-marketing-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Digital Marketing (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-professional-marketing-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Professional Marketing (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-strategic-marketing-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Strategic Marketing (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> PUBLIC ADMINISTRATION </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-public-administration-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Public Administration (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/LGS.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/masters-program-in-police-leadership-and-management-lgs"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Police Leadership And Management (MSc)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-international-trade-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in International Trade (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-public-relations-level-4"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Public Relations ( Level 4)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-international-relations-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in International Relations (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-public-administration-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Public Administration (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-police-leadership-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Police Leadership Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" style="border-bottom: 1px solid #eee;padding:5px 0px">
                                    <div class="row">
                                        <div class="col-10">
                                            <b> TOURISM AND HOSPITALITY </b>

                                        </div>
                                        <div class="col-2">
                                            <i class="las la-angle-down " style="margin-right:0px "></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="row">
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/UCAM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-tourism-hospitality-ucam-spain"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Tourism &amp; Hospitality Management (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/mba-master-business-administration-tourism-hospitality-management-europe-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Tourism &amp; Hospitality (MBA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/EIE.svg" alt="Image"
                                                class="img-responsive">

                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/bba-bachelor-business-administration-europe-tourism-hospitality-eie"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Tourism &amp; Hospitality (BA)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-facilities-management-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Facilities Management (Level 7)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-6"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Tourism &amp; Hospitality Management (Level 6)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/SNATIKA.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-certificate-in-golf-club-management-level-5"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Certificate in Golf Club Management (Level 5)</p>
                                            </a>
                                        </div>
                                        <div class="col-3"
                                            style="padding-bottom:10px;border-bottom:1px solid #eee;">

                                            <img src="https://snatika.com/public/svg/OTHM.svg" alt="Image"
                                                class="img-responsive">
                                        </div>
                                        <div class="col-9"
                                            style="padding-bottom:5px;border-bottom:1px solid #eee;">
                                            <a href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-7"
                                                style="color: #000">
                                                <p style="margin-left:-20px;font-weight:400">
                                                    Diploma in Tourism Hospitality Management (Level 7)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <script>
                                    var acc = document.getElementsByClassName("accordion");
                                    // var panel = document.getElementsByClassName('panel');
                                    var i;
                                    // for (var i = 0; i < acc.length; i++) {
                                    //     acc[i].onclick = function() {
                                    //         var setClasses = !this.classList.contains('active');
                                    //         setClass(acc, 'active', 'remove');
                                    //         setClass(panel, 'show', 'remove');

                                    //         if (setClasses) {
                                    //             this.classList.toggle("active");
                                    //             this.nextElementSibling.classList.toggle("show");
                                    //         }
                                    //     }
                                    // }

                                    for (i = 0; i < acc.length; i++) {
                                        acc[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var panel = this.nextElementSibling;
                                            if (panel.style.display === "block") {
                                                panel.style.display = "none";
                                            } else {
                                                panel.style.display = "block";
                                            }
                                        });
                                    }

                                    function setClass(els, className, fnName) {
                                        for (var i = 0; i < els.length; i++) {
                                            els[i].classList[fnName](className);
                                        }
                                    }
                                </script>
                                <button type="button" class="btn purple-btn ml-4 closemobmenu"
                                    data-toggle="modal" data-target="#exampleModalCenter">Request for
                                    Information</button>
                                <div class="box-spacing border-bottom ">
                                    <h4 class="menu-heading">Menu Links</h4>
                                    <ul class="list-unstyled menu-cat-list mb-0">

                                        <li>
                                            <a href="https://snatika.com" class="text-dark">Home</a>
                                        </li>
                                        <li>
                                            <a class="text-dark" href="https://snatika.com/about-us">About Us</a>
                                        </li>
                                        <li>
                                            <a class="text-dark" href="https://snatika.com/learner-stories">Learner
                                                Stories</a>
                                        </li>

                                        <li>
                                            <a class="text-dark" href="https://snatika.com/partner">Recruitment
                                                Partner</a>
                                        </li>
                                        <li>
                                            <a href="https://snatika.com/contact-us" class="text-dark">Contact
                                                Us</a>
                                        </li>
                                        <li><a class="text-dark" href="https://snatika.com/faq-categories">FAQs</a>
                                        </li>
                                        <li><a class="text-dark" href="https://snatika.com/privacy-policy">Privacy
                                                Policy</a></li>
                                        <li><a class="text-dark"
                                                href="https://snatika.com/terms-and-conditions">Terms &amp;
                                                Conditions</a></li>











                                    </ul>

                                </div>


                            </div>

                        </div>

                    </div>
                    <!-- sub menue -->

                    <div class="sidemenu_innerCat_window" id="doctorate_programs_menu">
                        <a href="javascript:void(0);"
                            class="back-btn-cat back-btn-menu d-block bg-light-grey box-spacing"><i
                                class="las la-angle-left mr-3"></i>Menu</a>
                        <div class="menu-window-body box-spacing">
                            <h4 class="menu-heading">All Doctorate Programs</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/business-management/program-listing"
                                            class="text-dark"><strong>Business Management
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Business Management')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBusiness Management">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-practice-level-8-diploma-othm">Doctorate
                                                    Program in Strategic Management and Leadership Practice - OTHM -
                                                    Level 8</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/doctorate-in-strategic-management-and-leadership-level-8-diploma-qualifi">Doctorate
                                                    Program in Strategic Management and Leadership - QUALIFI - Level
                                                    8</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidemenu_innerCat_window" id="masters_programs_menu">
                        <a href="javascript:void(0);"
                            class="back-btn-cat back-btn-menu d-block bg-light-grey box-spacing"><i
                                class="las la-angle-left mr-3"></i>Menu</a>
                        <div class="menu-window-body box-spacing">
                            <h4 class="menu-heading">All Masters Programs</h4>
                            <ul class="list-unstyled">










                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/business-administration/program-listing"
                                            class="text-dark"><strong>Business Administration
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Business Administration')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBusiness Administration">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-strategic-management-and-leadership-london-graduate-school">Masters
                                                    Program in Strategic Management and Leadership - LGS - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-strategic-management-and-leadership-university-of-gloucestershire">Masters
                                                    Program in Strategic Management and Leadership - UOG - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-project-management-london-graduate-school">Masters
                                                    Program in Project Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-risk-management-london-graduate-school">Masters
                                                    Program in Risk Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-ucam-spain">Masters Program
                                                    in Business Administration - UCAM - MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-risk-management-ucam-spain">Masters
                                                    Program in Business Administration - Risk Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-project-management-ucam-spain">Masters
                                                    Program in Business Administration - Project Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-master-business-administration-europe-eie">Masters
                                                    Program in Business Administration - EIE - MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-oil-gas-ucam-spain">Masters
                                                    Program in Business Administration - Oil &amp; Gas Management - UCAM
                                                    - MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-engineering-ucam-spain">Masters
                                                    Program in Business Administration - Engineering Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-facilities-ucam-spain">Masters
                                                    Program in Business Administration - Facilities Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-shipping-ucam-spain">Masters
                                                    Program in Business Administration - Shipping Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-master-strategic-management-leadership-arden-university-uk">Masters
                                                    Program in Strategic Management and Leadership – ARDEN UNIVERSITY –
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-entrepreneurship-innovation-enae-spain">Masters
                                                    Program in Entrepreneurship and Innovation - ENAE - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-Health-Wellness-Coaching-enae-spain">MSc
                                                    in Health and Wellness Coaching</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-Occupational-Health-Safety-Environmental-Management-enae-spain">MSc
                                                    in Occupational Health, Safety and Environmental Management</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/accounting-and-finance/program-listing"
                                            class="text-dark"><strong>Accounting and Finance
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Accounting and Finance')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuAccounting and Finance">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-accounting-and-finance-london-graduate-school">Masters
                                                    Program in Accounting and Finance - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-accounting-and-finance-uk-university-of-gloucestershire">Masters
                                                    Program in Accounting and Finance - UOG - MSc</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-finance-ucam-spain">Masters
                                                    Program in Business Administration - Finance - UCAM - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-master-business-administration-accounting-finance-europe-eie">Masters
                                                    Program in Business Administration - Accounting &amp; Finance - EIE
                                                    - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-accounting-finance-arden-university-uk">Masters
                                                    Program in Accounting and Finance - ARDEN UNIVERSITY - MSc</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/education-and--training/program-listing"
                                            class="text-dark"><strong>Education and Training
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Education and  Training')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuEducation and  Training">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/ma-coaching-and-mentoring-london-graduate-school">Masters
                                                    Program in Coaching and Mentoring - LGS - MA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/ma-education-management-and-leadership-london-graduate-school">Masters
                                                    Program in Education Management and Leadership - LGS - MA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-education-management-ucam-spain">Masters
                                                    Program in Business Administration - Education Management - UCAM -
                                                    MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-coaching-mentoring-ucam-spain">Masters
                                                    Program in Business Administration - Coaching &amp; Mentoring - UCAM
                                                    - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/health/program-listing"
                                            class="text-dark"><strong>Health
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Health')" class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuHealth">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-health-and-social-care-management-london-graduate-school">Masters
                                                    Program in Health and Social Care Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-health-social-care-management-ucam-spain">Masters
                                                    Program in Business Administration - Health &amp; Social Care
                                                    Management - UCAM - MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-health-safety-ucam-spain">Masters
                                                    Program in Business Administration - Health &amp; Safety Management
                                                    - UCAM - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/human-resources/program-listing"
                                            class="text-dark"><strong>Human Resources
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Human Resources')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuHuman Resources">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/ma-human-resources-management-london-graduate-school">Masters
                                                    Program in Human Resources Management - LGS - MA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-human-resources-management-university-of-gloucestershire">Masters
                                                    Program in Human Resources Management - UOG - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-human-resource-management-ucam-spain">Masters
                                                    Program in Business Administration - Human Resource Management -
                                                    UCAM - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/law-and-legal/program-listing"
                                            class="text-dark"><strong>Law and Legal
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Law and Legal')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuLaw and Legal">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/masters-program-in-international-law-lgs">Masters
                                                    Program in International Law - LGS - LLM</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-international-law-ucam-spain">Masters
                                                    Program in Business Administration - International Law - UCAM -
                                                    MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/logistics-and-supply-chain/program-listing"
                                            class="text-dark"><strong>Logistics and Supply Chain
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Logistics and Supply Chain')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuLogistics and Supply Chain">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-logistics-and-supply-chain-management-london-graduate-school">Masters
                                                    Program in Logistics and Supply Chain Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-logistics-supply-chain-management-ucam-spain">Masters
                                                    Program in Business Administration - Logistics &amp; Supply Chain
                                                    Management - UCAM - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/public-administration/program-listing"
                                            class="text-dark"><strong>Public Administration
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Public Administration')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuPublic Administration">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/ma-in-public-administration-london-graduate-school">Masters
                                                    Program in Public Administration - LGS - MA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/masters-program-in-police-leadership-and-management-lgs">Masters
                                                    Program in Police Leadership and Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-public-administration-ucam-spain">Masters
                                                    Program in Business Administration - Public Administration - UCAM -
                                                    MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/marketing-and-sales/program-listing"
                                            class="text-dark"><strong>Marketing and Sales
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Marketing and Sales')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuMarketing and Sales">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-strategic-marketing-london-graduate-school">Masters
                                                    Program in Strategic Marketing - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-marketing-ucam-spain">Masters
                                                    Program in Business Administration - Marketing - UCAM - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/tourism-and-hospitality/program-listing"
                                            class="text-dark"><strong>Tourism and Hospitality
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Tourism and Hospitality')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuTourism and Hospitality">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/msc-in-tourism-hospitality-management-london-graduate-school">Masters
                                                    Program in Tourism and Hospitality Management - LGS - MSc</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-tourism-hospitality-ucam-spain">Masters
                                                    Program in Business Administration - Tourism &amp; Hospitality -
                                                    UCAM - MBA</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/mba-master-business-administration-tourism-hospitality-management-europe-eie">Masters
                                                    Program in Business Administration - Tourism &amp; Hospitality - EIE
                                                    - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/information---technology/program-listing"
                                            class="text-dark"><strong>Information Technology
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Information   Technology')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuInformation   Technology">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="https://snatika.com/program/mba-cyber-security-ucam-spain">Masters
                                                    Program in Business Administration - Cyber Security - UCAM - MBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/mba-data-science-ucam-spain">Masters
                                                    Program in Business Administration - Data science - UCAM - MBA</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidemenu_innerCat_window" id="bachelor_programs_menu">
                        <a href="javascript:void(0);"
                            class="back-btn-cat back-btn-menu d-block bg-light-grey box-spacing"><i
                                class="las la-angle-left mr-3"></i>Menu</a>
                        <div class="menu-window-body box-spacing">
                            <h4 class="menu-heading">All Bachelor Programs</h4>
                            <ul class="list-unstyled">










                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/business---management/program-listing"
                                            class="text-dark"><strong>Business Management
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Business   Management')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBusiness   Management">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/ba-business-management-strategy-uk-university-of-gloucestershire">Bachelors
                                                    Program in Business Management &amp; Strategy - UOG - BA (Hons)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-eie">Bachelors
                                                    Program in Business Administration – eie – BBA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/ba-in-business-management">BA in
                                                    Business Management</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/information-technology/program-listing"
                                            class="text-dark"><strong>Information Technology
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Information Technology')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuInformation Technology">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bsc-information-technology-uk-university-of-gloucestershire">Bachelors
                                                    Program in Information Technology - UOG - BSc (Hons)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bsc-in-cyber-security-uk-university-of-gloucestershire">Bachelors
                                                    Program in Cyber Security - UOG - BSc (Hons)</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/bsc-in-computing">BSc in
                                                    Computing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/tourism-and-hospitality/program-listing"
                                            class="text-dark"><strong>Tourism and Hospitality
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Tourism and Hospitality')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuTourism and Hospitality">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-tourism-hospitality-eie">Bachelors
                                                    Program in Tourism &amp; Hospitality Management – eie – BA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/ba-in-tourism">BA in Tourism</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/accounting---finance/program-listing"
                                            class="text-dark"><strong>Accounting - Finance
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Accounting - Finance')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuAccounting - Finance">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bba-bachelor-business-administration-europe-accounting-finance-eie">Bachelors
                                                    Program in Accounting and Finance – eie – BA</a>
                                            </li>
                                            <li>
                                                <a href="https://snatika.com/program/ba-in-accounting-and-finance">BA
                                                    in Accounting and Finance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/health/program-listing"
                                            class="text-dark"><strong>Health
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Health')" class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuHealth">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bsc-in-health-and-care-management">BSc
                                                    in Health and Care Management</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/human-resource/program-listing"
                                            class="text-dark"><strong>Human Resource
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Human Resource')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuHuman Resource">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="https://snatika.com/program/ba-in-hrm">BA in HRM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/marketing/program-listing"
                                            class="text-dark"><strong>Marketing
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Marketing')" class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuMarketing">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="https://snatika.com/program/ba-in-marketing">BA in
                                                    Marketing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidemenu_innerCat_window" id="professional_programs_menu">
                        <a href="javascript:void(0);"
                            class="back-btn-cat back-btn-menu d-block bg-light-grey box-spacing"><i
                                class="las la-angle-left mr-3"></i>Menu</a>
                        <div class="menu-window-body box-spacing">
                            <h4 class="menu-heading">All Professional Programs</h4>
                            <ul class="list-unstyled">










                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/accounting-and-finance/program-listing"
                                            class="text-dark"><strong>Accounting and Finance
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Accounting and Finance')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuAccounting and Finance">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-asset-based-lending-qualifi-level-7">Professional
                                                    Diploma in Asset-Based Lending - QUALIFI (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-accounting-and-business-othm-level-6">Professional
                                                    Diploma in Accounting and Business - OTHM (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-wealth-management-level-7">Professional
                                                    Diploma in Wealth Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-financial-trading-level-6">Professional
                                                    Certificate in Financial Trading (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-capital-markets--regulations--and-compliance-level-7">Professional
                                                    Diploma in Capital Markets, Regulations, and Compliance
                                                    (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-accounting-finance-othm-level-7">Professional
                                                    Program in Accounting and Finance – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/business--management/program-listing"
                                            class="text-dark"><strong>Business Management
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Business  Management')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBusiness  Management">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-executive-management-qualifi-level-7">Professional
                                                    Diploma in Executive Management - QUALIFI (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-strategic-management-and-innovation-qualifi-level-7">Professional
                                                    Diploma in Strategic Management and Innovation - QUALIFI
                                                    (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-business-management-othm-level-6">Professional
                                                    Diploma in Business Management - OTHM (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-quality-management-level-7">Professional
                                                    Diploma in Quality Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-security-management-level-5">Professional
                                                    Certificate in Security Management (Level-5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-for-construction-senior-management-level-7">Professional
                                                    Diploma for Construction Senior Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-operations-management-level-7">Professional
                                                    Diploma in Operations Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-management-consulting-level-7">Professional
                                                    Diploma in Management Consulting (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-strategic-management-leadership-othm-level-7">Professional
                                                    Program in Strategic Management and Leadership – OTHM – Level 7</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-risk-management-othm-level-7">Professional
                                                    Program in Risk Management – OTHM – Level 7</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-project-management-othm-level-7">Professional
                                                    Program in Project Management – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/education-and-training/program-listing"
                                            class="text-dark"><strong>Education and Training
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Education and Training')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuEducation and Training">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-continuing-professional-development-cpd-for-leadership-qualifi-level-7">Professional
                                                    Diploma in Continuing Professional Development (CPD) for Leadership
                                                    - QUALIFI (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-early-learning-and-childcare-qualifi-level-5">Professional
                                                    Diploma in Early Learning and Childcare - QUALIFI (Level-5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-leading-the-internal-quality-assurance-of-assessment-processes-and-practice-othm-level-4">Professional
                                                    Certificate in Leading the Internal Quality Assurance of Assessment
                                                    Processes and Practice - OTHM (Level-4)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-research-methods-othm-level-7">Professional
                                                    Certificate in Research Methods - OTHM (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-academic-and-professional-skills-development-othm-level-6">Professional
                                                    Certificate in Academic and Professional Skills Development - OTHM
                                                    (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-teaching-and-learning-othm-level-6">Professional
                                                    Diploma in Teaching and Learning - OTHM (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-career-guidance-development-level-7">Professional
                                                    Diploma in Career Guidance &amp; Development (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-translation-level-7">Professional
                                                    Diploma in Translation (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-education-and-training-othm-level-5">Professional
                                                    Diploma in Education and Training - OTHM (Level-5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-education-management-leadership-othm-level-7">Professional
                                                    Program in Education Management and Leadership – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/information--technology/program-listing"
                                            class="text-dark"><strong>Information Technology
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Information  Technology')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuInformation  Technology">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-cyber-security-qualifi-level-4-5">Professional
                                                    Diploma in Cyber Security - QUALIFI (Level-4 &amp; 5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-data-science-qualifi-level-7">Professional
                                                    Diploma in Data Science - QUALIFI (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-it-e-commerce-qualifi-level-4-5">Professional
                                                    Diploma in IT - E-commerce - QUALIFI (Level-4 &amp; 5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-it-networking-qualifi-level-4-5">Professional
                                                    Diploma in IT - Networking - QUALIFI (Level-4 &amp; 5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-it-web-design-qualifi-level-4-5">Professional
                                                    Diploma in IT - Web Design - QUALIFI (Level-4 &amp; 5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-information-technology-othm--level-6">Professional
                                                    Diploma in Information Technology - OTHM (Level-6)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/health-and-social/program-listing"
                                            class="text-dark"><strong>Health and Social
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Health and Social')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuHealth and Social">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-health-and-wellness-coaching-qualifi-level-7">Professional
                                                    Diploma in Health and Wellness Coaching - QUALIFI (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-psychology-othm--level-5">Professional
                                                    Diploma in Psychology - OTHM (Level-5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-health-and-social-care-management-othm-level-6">Professional
                                                    Diploma in Health and Social Care Management - OTHM (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-health-social-care-management-othm-level-7">Professional
                                                    Program in Health &amp; Social Care Management – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/logistics-and-supply-chain--management/program-listing"
                                            class="text-dark"><strong>Logistics and Supply Chain Management
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Logistics and Supply Chain  Management')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuLogistics and Supply Chain  Management">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-logistics-and-supply-chain-management-othm-level-6">Professional
                                                    Diploma in Logistics and Supply Chain Management - OTHM
                                                    (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-procurement-and-supply-chain-management-level-7">Professional
                                                    Diploma in Procurement and Supply Chain Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-logistics-supply-chain-management-othm-level-7">Professional
                                                    Program in Logistics &amp; Supply Chain Management – OTHM – Level
                                                    7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/tourism-and-hospitality-management/program-listing"
                                            class="text-dark"><strong>Tourism and Hospitality Management
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Tourism and Hospitality Management')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuTourism and Hospitality Management">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-6">Professional
                                                    Diploma in Tourism &amp; Hospitality Management - OTHM (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-golf-club-management-level-5">Professional
                                                    Certificate in Golf Club Management (Level-5)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-facilities-management-level-7">Professional
                                                    Diploma in Facilities Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-tourism-hospitality-management-othm-level-7">Professional
                                                    Program in Tourism &amp; Hospitality Management – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/marketing-and--sales/program-listing"
                                            class="text-dark"><strong>Marketing and Sales
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Marketing and  Sales')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuMarketing and  Sales">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-professional-marketing-level-6">Professional
                                                    Diploma in Professional Marketing (Level-6)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-brand-management-level-7">Professional
                                                    Diploma in Brand Management (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-digital-marketing-level-7">Professional
                                                    Diploma in Digital Marketing (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-coaching-mentoring-othm-level-7">Professional
                                                    Program in Coaching and Mentoring – OTHM – Level 7</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-strategic-marketing-othm-level-7">Professional
                                                    Program in Strategic Marketing – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/law-and-legal-services/program-listing"
                                            class="text-dark"><strong>Law and Legal Services
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Law and Legal Services')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuLaw and Legal Services">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-paralegal-level-7">Professional
                                                    Certificate in Paralegal (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-international-business-law-othm-level-7">Professional
                                                    Program in International Business Law – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/public--administration/program-listing"
                                            class="text-dark"><strong>Public Administration
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('Public  Administration')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuPublic  Administration">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-certificate-in-public-relations-level-4">Professional
                                                    Certificate in Public Relations (Level-4)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-international-relations-level-7">Professional
                                                    Diploma in International Relations (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-international-trade-level-7">Professional
                                                    Diploma in International Trade (Level-7)</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-public-administration-othm-level-7">Professional
                                                    Program in Public Administration – OTHM – Level 7</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-police-leadership-management-othm-level-7">Professional
                                                    Program in Police Leadership and Management – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/pp-human-resource/program-listing"
                                            class="text-dark"><strong>PP Human Resource
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('PP Human Resource')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none" id="submenuPP Human Resource">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/professional-diploma-in-human-resource-management-othm-level-7">Professional
                                                    Program in Human Resource Management – OTHM – Level 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidemenu_innerCat_window" id="bridge-program_programs_menu">
                        <a href="javascript:void(0);"
                            class="back-btn-cat back-btn-menu d-block bg-light-grey box-spacing"><i
                                class="las la-angle-left mr-3"></i>Menu</a>
                        <div class="menu-window-body box-spacing">
                            <h4 class="menu-heading">All Bridge Program Programs</h4>
                            <ul class="list-unstyled">










                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-public-administartion/program-listing"
                                            class="text-dark"><strong>BP Public Administartion
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Public Administartion')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Public Administartion">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-public-administration-ucam">Bridge
                                                    Program - MBA - Public Administration - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-logistics-and-supply-chain/program-listing"
                                            class="text-dark"><strong>BP Logistics and Supply Chain
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Logistics and Supply Chain')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Logistics and Supply Chain">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-logistics-supply-chain-management-ucam">Bridge
                                                    Program - MBA - Logistics &amp; Supply Chain Management - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-tourism-hospitality/program-listing"
                                            class="text-dark"><strong>BP Tourism Hospitality
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Tourism Hospitality')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Tourism Hospitality">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-tourism-and-hospitality-management-ucam">Bridge
                                                    Program - MBA - Tourism and Hospitality Management - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-business-administration/program-listing"
                                            class="text-dark"><strong>BP Business Administration
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Business Administration')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Business Administration">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-project-management-ucam">Bridge
                                                    Program - MBA - Project Management - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-human-resources/program-listing"
                                            class="text-dark"><strong>BP Human Resources
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Human Resources')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Human Resources">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-human-resource-management-ucam">Bridge
                                                    Program - MBA - Human Resource Management - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>



                                    <div class="menu-cat-list d-flex align-items-center justify-content-between">
                                        <a href="https://snatika.com/bp-health-&amp;-safety/program-listing"
                                            class="text-dark"><strong>BP Health &amp; Safety
                                            </strong></a><a href="javascript:void(0);"
                                            onclick="open_submenu_mobile('BP Health &amp; Safety')"
                                            class="text-dark icon-link">
                                            <i class="las la-arrow-down"></i></a>
                                    </div>
                                    <div class="dropdown-inner-submenu-mobile d-none"
                                        id="submenuBP Health &amp; Safety">
                                        <ul class="sub-menu">
                                            <li>
                                                <a
                                                    href="https://snatika.com/program/bridge-program-mba-health-&amp;-safety-management-ucam">Bridge
                                                    Program - MBA - Health &amp; Safety Management - UCAM</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MOBILE SIDE MENU WINDOW-->
        </div>
    </section>

    <section class="program-category" style="background: #f6ecdd">
        <!--banner sec start-->
        <section class="main-banner-section position-relative">
            <div class="banner-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach ($sliders as $key => $slider)
                                        <li data-target="#carouselExampleIndicators"
                                            data-slide-to="{{ $key }}"
                                            class="{{ $key == 0 ? 'active' : '' }}">
                                        </li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($sliders as $index => $slider)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img class="d-block w-100 h-100 carousel-img"
                                                src="{{ asset('storage/' . $slider->image) }}"
                                                alt="{{ $slider->title }}">
                                            <div class="carousel-caption">
                                                <h2 class="mb-3">{{ $slider->title }}</h2>
                                                <p class="mb-4 font-22">{{ $slider->description }}</p>
                                                <b class="d-none d-sm-block">
                                                    <a href="{{ $slider->link }}"
                                                        class="purple-btn">{{ $slider->button_text }}</a>
                                                </b>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--search bar sec start-->
            <section class="search-bar py-4">
                <div class="container">
                    <div class="search-area">
                        <form method="post" action="https://snatika.com/program-finder">
                            <input type="hidden" name="_token" value="nu9cBohHDmNnknGxMREi6KGQgvTKTC8FTfbrCiOs">
                            <div class="row no-gutters">
                                <div class="col-sm-12 col-md-4 offset-md-3 mt-3 mt-md-0">
                                    <div class="d-flex align-items-center border p-2 custom-select-field bg-white">
                                        <i class="las la-search font-20"></i>
                                        <input type="text" name="search_input"
                                            class="form-control h-100 no-border search_text"
                                            placeholder="Search Programs">
                                    </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <button type="submit" class="btn purple-btn text-white w-100">SEARCH</button>
                                </div>
                                <div class="col-12 col-md-6 offset-md-3">
                                    <div class="search-results-box" style="display: none">
                                        <ul class="suggestion_data">
                                            <li>
                                                <div class="search-result-listitem" style="flex-direction:column">
                                                    <div class="search-result-listitem-text">
                                                        <h6>Loading...</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--search bar sec end-->
        </section>
        <!--banner sec end-->
        <style>
            .xbox {
                text-align: center;
                background: #fff;
                padding: 30px 10px;
                margin: 0px 15px 20px 15px;
            }
        </style>



        <style>
            .post {
                margin-bottom: 40px;
            }

            .post .post-img {
                display: block;
                -webkit-transition: 0.2s opacity;
                transition: 0.2s opacity;
            }

            .post .post-img>img {
                width: 100%;
            }

            .post .post-meta {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .post-meta .post-category.cat-1 {
                background-color: #4BB92F;
            }

            .post-meta .post-category {
                font-size: 13px;
                text-transform: uppercase;
                padding: 3px 10px;
                font-weight: 600;
                border-radius: 2px;
                margin-right: 15px;
                color: #FFF;
                background-color: #212631;
                -webkit-transition: 0.2s opacity;
                transition: 0.2s opacity;
            }

            .post-meta .post-date {
                font-size: 13px;
                font-weight: 600;
            }

            .post .post-title {
                font-size: 18px;
                margin-bottom: 0px;
            }
        </style>

        <section class="pt-5 " style="background: #ffffff">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">Recent Posts</h4>
                    </div>
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="post">
                                    <a class="post-img" href="javascript:;">
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->title }}">
                                    </a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-{{ $post->category_id }}" href="#">
                                                {{ $post->category->name }}
                                            </a>
                                            <span
                                                class="post-date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span>
                                        </div>

                                        <h3 class="post-title">
                                            <a href="javascript:;">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12">
                            <div style="min-height: 70vh;" class="d-flex align-items-center justify-content-center">
                                <h5 class="text-center">No Post Found!</h5>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </section>


        <section class="find-program-section bg-light py-5">
            <div class="container">
                <div class="row bg-light">
                    <div class="col-md-4 d-none">
                        <div class="card">
                            <div class="card-body bg-purple text-white text-center">
                                FIND YOUR PROGRAM
                            </div>
                            <div class="card-body border-top border-bottom text-center">
                                <h6>Important Dates</h6>
                                <strong>Admission Last Date</strong>
                                <div>
                                    <span>16th June 2022</span>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6>Batch Start Date</h6>
                                <strong>1st July 2022 </strong>
                                <div class="mt-4">
                                    <a class="btn btn-dark">Enroll Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-md-0 mt-3 d-flex flex-column justify-content-center text-center">
                        <h3>{{ $about->heading ?? '' }}
                            <a class="manage-logo" href="javascript:;">
                                <img class="w-100" src="{{ asset('assets/images/SNATIKA_LOGO_.png') }}"
                                    alt="SNATIKA LOGO">
                            </a>
                        </h3>
                        <p>{{ $about->heading ?? 'Leverage Your Experience to Achieve a Doctorate / Masters / Bachelors / Professional Qualification' }}
                        </p>
                        <p class="py-3">
                            {!! $about->description ??
                                `At SNATIKA, we offer accelerated online Doctorate / Masters / Bachelors / Professional programs available exclusively for senior professionals. That's because we give merit to the knowledge you have gained over the years of experience in your domain. Our programs offer immense value to working professionals and can be completed entirely online with incredible scheduling flexibility. The programs' learning contents are designed to help senior working professionals gain the expertise to manage current industry challenges. You can choose from one of the largest bouquets of programs spread across various industries and get a relevant certification related to your domain.` !!}
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="services-section py-5">
            <div class="container">
                <div class="owl-carousel program-slider owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2239px, 0px, 0px); transition: 0.25s; width: 3360px;">
                            @if ($programs->count() > 0)
                                @foreach ($programs as $item)
                                    <div class="owl-item cloned">
                                        <div class="items text-center">
                                            <div class="svg-holder">
                                                <span>
                                                    <img src="{{ asset('storage/' . $item->icon) }}"
                                                        alt="{{ $item->title }}">
                                                </span>
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">
                                                    {{ $item->title ?? 'GET IT DONE 100% ONLINE' }}</p>
                                                <p class="pt-3">{!! $item->description ??
                                                    ' Our programs are specifically designed to fit into the lives
                                                                                                    of busy professionals like you.' !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation"
                            class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                            role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"><button role="button"
                            class="owl-dot active"><span></span></button></div>
                </div>
                <div class="row">
                    <div class="col-12 pt-4 d-flex justify-content-center">
                        <a href="https://snatika.com/program-category-all" class="purple-btn">FIND YOUR PROGRAM</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-program-section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center main-heading purple-color">OUR POSTS</h4>
                        <p class="py-4 sub-heading text-center"></p>
                        <div style="text-align: left;"><span style="font-size: 1rem;">Led by Expert Researchers and
                                Senior-Level Practitioners, SNATIKA offers a diverse range of Doctorate, Masters
                                Degrees, Bachelors Degrees, and Professional Programs for Senior Professionals. Our
                                world-class content equips our Learners with the Skills, Knowledge, and Internationally
                                Accepted Academic Qualifications much needed to boost Professional Growth.</span></div>
                        <p></p>
                    </div>
                </div>
                <div class="courses-slider">
                    <div class="row">
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                                <div class="col-sm-12 col-md col-lg pt-4">
                                    <div class="card">
                                        <span class="admission_going_on">
                                            {{ $post->category->name ?? 'ADMISSION GOING ON' }}
                                        </span>
                                        <img class="card-img-top"
                                            src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->title }}">
                                        <div class="card-body custom-card-body text-left">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <span class="card-line"></span>
                                            <div class="card-text course-para">
                                                <div style="text-align: left;" bis_skin_checked="1"><span
                                                        style="font-size: 1rem;">The doctoral degree is not only a very high
                                                        scientific achievement and a personal milestone but also a smart and
                                                        sustainable investment in one's professional future. This program boosts
                                                        your academic as well as your business career in an international and
                                                        flexible setting, which doesn‘t require you to put your professional
                                                        career on hold.</span></div>
                                            </div>

                                            <div class="row card-number-listing">
                                                <div class="col-12 card-bottom-des">
                                                    <span class="icon-circle">
                                                        <i class="las la-chair"></i>
                                                    </span>
                                                    <span class="icon-text">No of Seats:
                                                        <strong>{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="program-category/doctorate/" class="btn purple-btn">Know More</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <div style="min-height: 70vh;" class="d-flex align-items-center justify-content-center">
                                    <h5 class="text-center">No Post Found!</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!--how it work sec start-->
        <section class="how-it-work-section py-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center main-headindg">HOW IT WORKS</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/636f939811dea_work"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Program Duration</h6>
                                <p>
                                    12 Months
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/clock.webp"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Daily Input</h6>
                                <p>2-3 hours/day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/user.webp"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Cohort Size</h6>
                                30 Learners only
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/user-time.webp"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Effort</h6>
                                <p>8-12 hours/week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/67344e306cc75_work"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Assessments</h6>
                                <p>Assessments are based only on project work</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">
                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/651bad73e59fe_work"
                                    alt="HOW IT WORKS">
                            </div>
                            <div>
                                <h6>Instalment Payment</h6>
                                <p>Instalment options available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-4 text-center">
                        <a href="https://snatika.com/program-category-all" class="purple-btn">FIND YOUR PROGRAM</a>
                    </div>
                </div>
            </div>
        </section>
        <!--how it work sec end-->

        <section class="our-qualification-section py-5 bg-light-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-2 mb-3">
                        <h4 class="text-left main-heading">COUNT ON OUR QUALIFICATION</h4>
                    </div>
                    <div class="col-12">
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>The Atal Incubation Center - Goa Institute of Management (AIC-GIM), established under the Atal Innovation Mission by NITI Aayog, Government of India, is a leading incubator dedicated to fostering entrepreneurship and innovation. Located in Goa, AIC-GIM supports startups and aspiring entrepreneurs by providing access to state-of-the-art infrastructure, tailored mentorship, funding opportunities, and valuable industry networks. With a mission to nurture innovative ideas and help them grow into impactful ventures, AIC-GIM offers a collaborative ecosystem designed to drive sustainable business growth, empowering entrepreneurs to make a meaningful impact on India's economy and beyond.</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736d881aed19_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>ENAE Business School in Murcia, Spain, is a leader in business education with over 35 years of experience. Accredited with a 5-star QS rating, Forbes top school recognition, and AMBA accreditation, ENAE is globally respected for its rigorous and practical programs. Notably, Forbes ranks its Executive MBA as 2nd in Spain, and its Master's in International Trade holds a top 50 global ranking. ENAE's commitment to excellence prepares students for impactful careers in business and management.


SNATIKA learners are awarded MSC, MA and MBA degree from ENAE Business School</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736d67b4362f_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>OTHM, UK, is an Awarding Organisation (AO) which is approved and regulated by Ofqual, UK (a UK government department). Ofqual is responsible for maintaining standards and confidence in international qualifications. Ofqual also regulates the National Curriculum Assessments in England.

SNATIKA is an accredited/approved training partner of OTHM.</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736d69ca08cb_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>Universidad Católica San Antonio de Murcia (UCAM) is a fully accredited European University founded in the year 1996. The university is strategically located in Murcia, Spain, with a Campus of more than 16,000 students and around 1,000 professors. The World University Ranking especially highlights the internationalisation capacity of UCAM. The university has a diverse academic offer, constantly adapting and consistent with the real needs of society. MBA degree is awarded by UCAM under the provision of university private degrees – Título Propio.

SNATIKA learners are awarded MBA degrees from UCAM.</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736d6aceeb79_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>The University of Gloucestershire, a UK state university, is the degree awarding institution. It is located in the edge of the stunning Cotswolds and has three campuses which are based in Cheltenham and Gloucester.

This partnership with the university is through Achievers International Campus</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736db4f71004_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                                <div class="single-qualification row p-3">
                                <div class="col-12 col-md-9">
                                    <p>Achievers International Campus has over four decades of experience in the higher education sector. Having closely worked with the industry and brought global education to local students, Achievers International Campus has pioneered the way forward in getting international recognition for talented students.


SNATIKA learners are awarded MA, MSc, or MBA degrees from the University of Gloucestershire through Achievers International Campus.</p>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div>
                                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/6736d84128bb9_webp" alt="COUNT ON OUR QUALIFICATION">
                                    </div>
                                </div>
                            </div>
                                                        </div>
                </div>
            </div>
        </section>


        <section class="background-img-girl position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row program-intake-banner">
                            <div class="col-12">
                                <h6 class="text-center mb-3" style="font-size: 1rem;">
                                    <p class="textsize14">TAKE THE FASTEST ROUTE TO YOUR MASTERS</p>
                                </h6>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 marginbox10">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h6>Admission Closes on</h6>
                                        <p>
                                            15th January 2025
                                        </p>
                                        <strong class="font-12 d-block mt-1">
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 marginbox10">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <h6>Batch Start Date</h6>
                                        <p>
                                            15th February 2025
                                        </p>
                                        <strong class="font-13 d-block mt-1">
                                            Limited Intake: 30 Learners Only
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  marginbox10">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <h6>Program Fee</h6>
                                        £ 8,900
                                        <br>
                                        <strong class="font-13 d-block mt-1">Instalment options available</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 marginbox10">
                                <div class="card ">
                                    <div class="card-body text-center">
                                        <h6>Program Duration</h6>
                                        <p>
                                            12 Months
                                        </p>
                                        <strong class="font-13 d-block mt-1">
                                            100% online, designed for Working Professionals
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-center">
                                <a class="purple-btn" href="https://snatika.com/register">ENROL NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--how it work sec start-->
        <section class="how-it-work-section get-access-to-section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center main-heading">GET ACCESS TO</h4>
                    </div>
                    <div class="col-sm-12 col-lg-3 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">

                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/67333a2c6f773_access"
                                    alt="GET ACCESS TO">
                            </div>
                            <div>
                                <p></p>
                                <p style="margin-left:0px;text-align:center;">Mentorship from&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">AIC-GIM and&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">industry-leading experts</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">

                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/673339f946f21_access"
                                    alt="GET ACCESS TO">
                            </div>
                            <div>
                                <p></p>
                                <p style="margin-left:0px;text-align:center;">Exclusive Demo Day&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">event with investors and&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">venture capitalists</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">

                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63bd49d280e0a_access"
                                    alt="GET ACCESS TO">
                            </div>
                            <div>
                                <p></p>
                                <p style="margin-left:0px;text-align:center;">Formal convocation&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">ceremony hosted by&nbsp;</p>
                                <p style="margin-left:0px;text-align:center;">AIC-GIM at completion</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 pt-4 text-center">
                        <div class="card-conteiner">
                            <div class="image-holder">

                                <img class="w-100"
                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/67333b50a6059_access"
                                    alt="GET ACCESS TO">
                            </div>
                            <div>
                                <p></p>
                                <p>Global networking<br>opportunities with start-up<br>founders and investors</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--how it work sec end-->
        {{-- <section class="whoShouldEnrollsec py-5 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 justify-content-center">
                        <h4 class="text-center main-heading">WHO SHOULD ENROLL</h4>
                    </div>
                    <div class="ck-editor-datat dark-textt small-textt my-s3 text-center">
                        <strong>
                            Master's Program in Entrepreneurship and Innovation is ideal for:
                        </strong><br>
                        <strong>
                            .
                        </strong>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <p class="pt-3 text-left" style="margin-left: 40%">
                                    <i class="las la-check pr-2"></i>
                                    Aspiring Entrepreneurs
                                </p>
                                <p class="pt-3 text-left" style="margin-left: 40%">
                                    <i class="las la-check pr-2"></i>
                                    Early-Stage Entrepreneurs
                                </p>
                                <p class="pt-3 text-left" style="margin-left: 40%">
                                    <i class="las la-check pr-2"></i>
                                    Future Entrepreneurs
                                </p>
                            </div>
                            <div class="col-12 pt-4 text-center">
                                <a href="https://snatika.com/register" class="purple-btn">ENROLL NOW</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}




        <!--qualification sec start-->
        {{-- <section class="our-qualification-section py-5 bg-light-bluess" style="background: #f4fcfc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1 mb-3">
                        <h4 class="text-center main-heading">COUNT ON OUR QUALIFICATION</h4>
                    </div>
                    <div class="col-12">
                        <div class="single-qualification row p-3">
                            <div class="col-12 col-md-9">
                                <p></p>
                                <p>SNATIKA ensures that all our programs are of Highest Standards. We are very
                                    particular that quality and regulatory standards are met.</p>
                                <p></p>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="qualification-wrapper">
                                    <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/673444276a0c8_webp"
                                        alt="QUALIFICATION">
                                </div>
                            </div>
                        </div>
                        <div class="single-qualification row p-3">
                            <div class="col-12 col-md-9">
                                <p></p>
                                <p>SNATIKA's admission process ensures that learners who are apt for the program only
                                    get admitted to our programs. Learners are provided with the right resource
                                    material, academic support, and timely assistance for them to successfully complete
                                    the Masters program. We can provide this across genders, races, time zones, and
                                    geographies because of a strong academic delivery process, which is aptly supported
                                    by our PhD/Doctorate facilitators. SNATIKA's academic delivery process ensures this
                                    is done flawlessly.</p>
                                <p>&nbsp;</p>
                                <p>SNATIKA is certified for ISO 9001:2015 for the "Admission Process and Academic
                                    Delivery Process."</p>
                                <p></p>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="qualification-wrapper">
                                    <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/673446c623d84_webp"
                                        alt="QUALIFICATION">
                                </div>
                            </div>
                        </div>
                        <div class="single-qualification row p-3">
                            <div class="col-12 col-md-9">
                                <p></p>
                                <p>ENAE Business School in Murcia, Spain, is a leader in business education with over 35
                                    years of experience. Accredited with a 5-star QS rating, Forbes top school
                                    recognition, and AMBA accreditation, ENAE is globally respected for its rigorous and
                                    practical programs. Notably, Forbes ranks its Executive MBA as 2nd in Spain, and its
                                    Master's in International Trade holds a top 50 global ranking. ENAE's commitment to
                                    excellence prepares students for impactful careers in business and management.</p>
                                <p>&nbsp;</p>
                                <p>SNATIKA learners are awarded MSC, MA and MBA degree from ENAE Business School</p>
                                <p></p>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="qualification-wrapper">
                                    <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67344840f1207_webp"
                                        alt="QUALIFICATION">
                                </div>
                            </div>
                        </div>
                        <div class="single-qualification row p-3">
                            <div class="col-12 col-md-9">
                                <p></p>
                                <p>The Atal Incubation Center - Goa Institute of Management (AIC-GIM), established under
                                    the Atal Innovation Mission by NITI Aayog, Government of India, is a leading
                                    incubator dedicated to fostering entrepreneurship and innovation. Located in Goa,
                                    AIC-GIM supports startups and aspiring entrepreneurs by providing access to
                                    state-of-the-art infrastructure, tailored mentorship, funding opportunities, and
                                    valuable industry networks. With a mission to nurture innovative ideas and help them
                                    grow into impactful ventures, AIC-GIM offers a collaborative ecosystem designed to
                                    drive sustainable business growth, empowering entrepreneurs to make a meaningful
                                    impact on India's economy and beyond.</p>
                                <p></p>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="qualification-wrapper">
                                    <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/673443b297049_access"
                                        alt="QUALIFICATION">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Similar Course sec start-->
        <!--Similar Course sec end-->






        {{-- <section class="bg-light naensecwall position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 30px">
                        <p class="text-center text-light" style="font-size: 26px;font-weight:500;margin-top:20px">
                            ENAE Business School: Rankings and Accolades</p>
                        <p class="text-center text-light" style="font-size: 18px;">
                            ENAE Business School, based in Murcia, Spain, is a prestigious institution known for its
                            commitment to excellence in business and management education. With over 35 years dedicated
                            to preparing leaders in business, ENAE has achieved multiple accolades and certifications
                            that underscore its impact and quality.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734e5b2ef948_enae_banner"
                            alt="ENAE" style="width: 150px;height:150px">
                        <p class="text-center text-light">
                        </p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>Highlighting the
                                    Executive MBA as&nbsp;</strong></span></p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>the 2nd best
                                    Executive Program</strong>

                            </span></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67332add3c1be_enae_banner"
                            alt="ENAE" style="width: 150px;height:150px">
                        <p class="text-center text-light">
                        </p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>Among the best
                                    5-star business&nbsp;</strong></span></p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>schools
                                    2024</strong></span></p>
                        <p></p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67332d38cc2d2_enae_banner"
                            alt="ENAE" style="width: 150px;height:150px">
                        <p class="text-center text-light">
                        </p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>Featured as 2nd
                                    best Masters&nbsp;</strong></span></p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>degree in Spain
                                    with International</strong></span></p>
                        <p style="text-align:center;"><span
                                style="color:hsl(0, 0%, 100%);"><strong>Trade</strong></span></p>
                        <p></p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734b5999e78c_enae_banner"
                            alt="ENAE" style="width: 150px;height:150px">
                        <p class="text-center text-light">
                        </p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>Top 6 of the
                                    best MBAs in&nbsp;</strong></span></p>
                        <p style="text-align:center;"><span style="color:hsl(0, 0%, 100%);"><strong>Spain in
                                    2024</strong></span></p>
                        <p></p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734ab30c5586_enae_banner"
                            alt="ENAE">
                        <p class="text-center text-light">

                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734ab60863fd_enae_banner"
                            alt="ENAE">
                        <p class="text-center text-light">

                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734ab96521f0_enae_banner"
                            alt="ENAE">
                        <p class="text-center text-light">

                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" align="center" style="">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6734abd954ebf_enae_banner"
                            alt="ENAE">
                        <p class="text-center text-light">

                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center"
                        style="background:#000000;padding:10px 0px;opacity:90%">
                        <h2><span style="color:rgb(255,255,255);"><strong>+35 &nbsp;</strong></span></h2>
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);">Years of experience
                                training&nbsp;&nbsp;</span><br><span style="color:rgb(255,255,255);">executive and
                                leaders</span></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center"
                        style="background:#000000;padding:10px 0px;opacity:90%">
                        <h2><span style="color:rgb(255,255,255);"><strong>+13Thou &nbsp;</strong></span></h2>
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);">Alumni from more then
                                52&nbsp;</span><br><span style="color:rgb(255,255,255);">Nationalities</span></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center"
                        style="background:#000000;padding:10px 0px;opacity:90%">
                        <h2><span style="color:rgb(255,255,255);"><strong>+6th&nbsp;</strong></span></h2>
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);">In the Forbes
                                best&nbsp;</span><br><span style="color:rgb(255,255,255);">Business School
                                Ranking</span></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center"
                        style="background:#000000;padding:10px 0px;opacity:90%">
                        <h2><span style="color:rgb(255,255,255);"><strong>+200&nbsp;</strong></span></h2>
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);">Associated
                                Business&nbsp;</span><br><span style="color:rgb(255,255,255);">Schools</span></p>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-light position-relative">
            <div class="container-fluid">
                <div class="row" style="background:#ad1431;border-bottom:solid 5px #000">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ">&nbsp;</div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 " align="center">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67332f27c178e_enae_banner"
                            alt="ucam" style="height: 135px;width: 135px;">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 " style="margin-top:10px">
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);">“Welcome to ENAE Business
                                School's MBA in Entrepreneurship and Innovation, created with SNATIKA. Through rigorous
                                academics and immersive experiences at AIC-GIM, gain the tools, mentorship, and industry
                                insights to lead boldly.”</span></p>
                        <p style="margin-left:0px;">&nbsp;</p>
                        <p style="margin-left:0px;"><span style="color:rgb(255,255,255);"><strong>Dr. Miguel Lopez
                                    Gonzalez de Leon</strong></span><strong>&nbsp;</strong><br><span
                                style="color:rgb(255,255,255);">Dean, ENAE Business School</span></p>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="bg-light naensecwall1 position-relative py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <p class="text-center text-dark" style="font-size: 26px;font-weight:500;margin-top:20px">
                            AIC-GIM: DRIVING ENTREPRENEURIAL SUCCESS</p>
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/672db4586d952_enae_banner"
                            alt="">
                        <p class="text-center text-dark" style="font-weight:700">
                            Atal Incubation Centre - Goa Institute of Management (AIC-GIM) is a driving force in
                            empowering start-ups and entrepreneurs by providing a supportive environment that fosters
                            innovation and business growth. Through a comprehensive ecosystem of resources, programs,
                            and mentorship, AIC-GIM nurtures ideas from concept to execution, helping entrepreneurs turn
                            their visions into reality.
                        </p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-4" align="center">
                                <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/6733303ed5214_enae_banner"
                                    alt="AIC GIM">
                                <p class="text-center text-dark">

                                </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row"
                    style="background: linear-gradient(90deg, hsla(0, 0%, 100%, 1) 0%, hsla(44, 84%, 85%, 1) 100%);margin-top:25px">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 " style="margin-top:10px">


                        <p style="margin-left:0px;text-align:right;"><span style="color:rgb(0,0,0);">"At AIC-GIM,
                                supported by SNATIKA and ENAE, you'll balance advanced education with practical venture
                                development, gaining</span><br><span style="color:rgb(0,0,0);">both theoretical
                                insights and hands-on experience in innovation and entrepreneurship."</span></p>
                        <p style="margin-left:0px;text-align:right;"><br><span
                                style="color:rgb(0,0,0);"><strong>Sumit Garg</strong></span><br><span
                                style="color:rgb(0,0,0);">CEO, Atal Incubation Center - Goa Institute of Management
                                (AIC-GIM)</span></p>

                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 " align="center">
                        <img src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67333061cbc64_enae_banner"
                            alt="AIC GIM" style="height: 135px;width: 135px;">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">&nbsp;</div>
                </div>
            </div>
        </section> --}}

        <!--what you will learn sec start-->
        {{-- <section class="what-you-will-learn-section py-5" style="background: #fff">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ">
                        <img class="w-100"
                            src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/image.webp"
                            alt="what you will earn">
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-12 text-md-left text-center">
                                <h4 class="main-heading font-20">WHAT YOU'LL EARN</h4>
                            </div>
                            <div class="col-12">
                                <p class="pt-3"><i class="las la-check pr-2"></i> MBA in Entrepreneurship and
                                    Innovation Degree from ENAE Business School, Spain
                                </p>
                                <p class="pt-3"><i class="las la-check pr-2"></i> Program Completion Certificate
                                    from AIC-GIM
                                </p>
                                <p class="pt-3"><i class="las la-check pr-2"></i> Masters Program Certificate from
                                    SNATIKA
                                </p>
                                <p class="pt-3"><i class="las la-check pr-2"></i> Extensive Network Access and
                                    Practical Portfolio with an investor-ready pitch
                                </p>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-md-start justify-content-center">
                                <a href="https://snatika.com/program-category-all" class="purple-btn">FIND YOUR
                                    PROGRAM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--what you will learn sec end-->

        <!--eligibility sec start-->
        {{-- <section class="eligibility-section py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-2">
                        <h4 class="main-heading text-center mb-4">ELIGIBILITY</h4>
                    </div>
                    <div class="col-12 text-center">
                        <p style="margin-left:0px;text-align:center;"><strong>Graduate</strong>&nbsp;</p>
                        <p style="margin-left:0px;text-align:center;">Minimum 2 Years of Work Experience in Business,
                            Start-ups, or&nbsp;</p>
                        <p style="margin-left:0px;text-align:center;">Management Sector</p>
                        <p style="margin-left:0px;text-align:center;">&nbsp;</p>



                    </div>
                    <div class="col-12 text-center">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <p class="eligibility-paras">
                                    <strong>Note: </strong>Candidates can only apply for the program which is relevant
                                    to
                                    their area of work experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-4 text-center">
                        <a href="https://snatika.com/program-category-all" class="purple-btn">FIND YOUR PROGRAM</a>
                    </div>
                </div>
            </div>
        </section> --}}





        <!--eligibility sec end-->

        {{--
        <section class="pt-5 " style="background: #ffffff">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center">SYLLABUS</h4>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div><span style="color: rgb(33, 37, 41); font-family: Roboto, sans-serif;">This program is
                                available for study over 12 months, giving learners the flexibility they need to master
                                the complexities&nbsp;</span><span
                                style="color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 1rem;">in
                                the field of&nbsp;</span><span
                                style="color: rgb(32, 32, 32); font-family: Roboto, sans-serif;">Entrepreneurship&nbsp;&nbsp;</span><span
                                style="color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 1rem;">and&nbsp;</span><span
                                style="color: rgb(32, 32, 32); font-family: Roboto, sans-serif;">Innovation</span><span
                                style="color: rgb(33, 37, 41); font-family: Roboto, sans-serif; font-size: 1rem;">.</span>
                        </div>
                        <!-- TimeLine Start -->
                    </div>
                    <input type="hidden" id="program_ids" value="130">

                    <div class="col-12 col-lg-3 text-right mt-4">
                        <br>
                        <a class="purple-btn DownloadSyll" onclick="SyllabusDownloadCounter()"
                            href="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67343c441feab_syllabus"
                            download="download">DOWNLOAD BROCHURE </a>
                    </div>
                    <div class="history-timeline-container mt-2">
                        <ul class="timeline">
                            <li class="timeline-item ml-3" ng-repeat="item in retailer_history">
                                <div class="item-title font-14 text-dark">
                                    <h5>Stage 1</h5>
                                    <div class="ck-editor-data dark-text small-text">
                                        <p>All the units of Stage 1 are mandatory</p>
                                        <p><br><strong>Units</strong><br>• Foundations of Entrepreneurship<br>•
                                            Innovation Management<br>• Business Model Development and Lean
                                            Start-ups<br>• Financial Management for Entrepreneurs<br>• Marketing and
                                            Growth Hacking<br>• Legal and Ethical Issues in Entrepreneurship</p>
                                        <figure class="table">
                                            <table style="border-color:rgb(255, 255, 255);border-style:solid;">
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            style="border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;">
                                                            <figure class="table" style="width:351.987px;">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                style="background-color:rgb(246, 236, 221);border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;width:350px;">
                                                                                <p><strong>First Immersion - 5
                                                                                        Days</strong><br>&nbsp; &nbsp;
                                                                                    &nbsp; &nbsp; (End of Stage 1)</p>
                                                                                <p>1. Workshops on Core Entrepreneurial
                                                                                    Skills<br>2. Mentorship
                                                                                    Sessions<br>3. Industry and Start-up
                                                                                    Interactions<br>4. Collaborative
                                                                                    Learning Environment<br>5. Business
                                                                                    Plan Development</p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </figure>
                                                        </td>
                                                        <td
                                                            style="border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;">
                                                            <p style="margin-left:0px;"><img class="image_resized"
                                                                    style="width:44.12%;"
                                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/672cef823cebb_cylp_image_left">
                                                            </p>
                                                            <p style="margin-left:0px;">&nbsp;</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </figure>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item ml-3" ng-repeat="item in retailer_history">
                                <div class="item-title font-14 text-dark">
                                    <h5>Stage 2</h5>
                                    <div class="ck-editor-data dark-text small-text">
                                        <p>Learners, on successful completion of Stage 1, would move to next stage of
                                            the MBA program.&nbsp;</p>
                                        <p>The last stage consists of 1 unit.</p>
                                        <p><strong>Unit</strong><br>• Venture Development and Funding Strategy</p>
                                        <figure class="table">
                                            <table style="border-color:rgb(255, 255, 255);border-style:solid;">
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            style="border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;">
                                                            <figure class="table" style="width:351.987px;">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                style="background-color:rgb(246, 236, 221);border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;">
                                                                                <p><strong>Second Immersion - 5
                                                                                        Days</strong><br>&nbsp; &nbsp;
                                                                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                    &nbsp;(Post Stage 2)</p>
                                                                                <p>1. Demo Day Presentations<br>2.
                                                                                    Real-time Feedback from
                                                                                    Investors<br>3. Networking with
                                                                                    Industry Leaders<br>4. Post-Event
                                                                                    Networking<br>5. Convocation and
                                                                                    Certification</p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </figure>
                                                        </td>
                                                        <td
                                                            style="border-top:1px solid rgb(222, 226, 230);padding:0.75rem;vertical-align:top;">
                                                            <p style="margin-left:0px;"><img class="image_resized"
                                                                    style="width:43.73%;"
                                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/site_media_files/6733484a4223eImg-02.jpg">
                                                            </p>
                                                            <p style="margin-left:0px;">&nbsp;</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </figure>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item ml-3" ng-repeat="item in retailer_history">
                            </li>
                        </ul>
                    </div>
                    <!-- TimeLine Ends -->
                </div>
            </div>

        </section> --}}



        {{-- <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="m-0">CERTIFICATION</h4>
                        <p class="py-4">Complete all the stages successfully to obtain Masters Degree from ENAE
                            Business School, Spain and Masters Program Certificate from SNATIKA</p>
                    </div>
                    <div class="col-sm-12 col-md col-lg pt-md-0 pt-3">
                        <center>
                            <img class="w-100s align-items-center"
                                src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/67333562bf59f_certificate"
                                style="height:345px;width:345px">
                        </center>
                        <div class="pt-3 text-center">
                            <p class="font-weight-bold">
                                Masters in Enterpreneureship and Innovation - MBA
                            </p>
                            <p class="font-weight-bold">
                                ENAE, Spain
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md col-lg pt-md-0 pt-3">
                        <center>
                            <img class="w-100s align-items-center"
                                src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/673335a3e1410_certificate"
                                style="height:345px;width:345px">
                        </center>
                        <div class="pt-3 text-center">
                            <p class="font-weight-bold">
                                Program Completion Certificate
                            </p>
                            <p class="font-weight-bold">
                                AIC GIM
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md col-lg pt-md-0 pt-3">
                        <center>
                            <img class="w-100s align-items-center"
                                src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/program-images/673335d344288_certificate"
                                style="height:345px;width:345px">
                        </center>
                        <div class="pt-3 text-center">
                            <p class="font-weight-bold">
                                Masters Program Certificate
                            </p>
                            <p class="font-weight-bold">
                                SNATIKA
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <!--admission process sec start-->
        {{-- <section class="admission-process-section py-5" style="background: #ffffff">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="main-heading ">ADMISSION PROCESS</h4>
                        <p class="font-12">SNATIKA Programs follow a first come, first served process of admission and
                            applications are evaluated as soon as they are received. The step-by-step admission process
                            has been outlined below.</p>
                    </div>
                    <div class="admission-slider owl-carousel owl-theme owl-loaded owl-drag">









                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1916px, 0px, 0px); transition: all; width: 7284px;">
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63723d172d069_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 5: INTERVIEW</p>
                                                <p class="text pt-3">Post application confirmation, you will need to
                                                    undergo an interview with a senior member of the SNATIKA academic
                                                    team to assess your suitability for the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-6.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 6 : ADMISSION OFFER LETTER</p>
                                                <p class="text pt-3">If you clear the interview, then you'll receive
                                                    your Admission Offer Letter within 2 working days.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-7.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 7: PAYMENT OF FEE</p>
                                                <p class="text pt-3">You will need to pay the fee within 5 days of
                                                    receiving the admission offer email.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-8.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 8: ADMISSION CONFIRMATION</p>
                                                <p class="text pt-3">Upon receipt of the Program Fee, you would
                                                    receive your Admission Confirmation for the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63723d53a4317_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 9: LOG IN TO SNATIKA LMS</p>
                                                <p class="text pt-3">Your access to the SNATIKA LMS would be enabled
                                                    on the batch start date.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-1.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 1: PROGRAM SELECTION</p>
                                                <p class="text pt-3">Choose the program relevant to your work
                                                    experience and click on the Enrol Now icon.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-2.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 2: CREATE YOUR PROFILE</p>
                                                <p class="text pt-3">Create your profile by filling out the
                                                    Registration Form and verifying your email.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-3.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 3: SUBMIT ADMISSION FORM</p>
                                                <p class="text pt-3">Fill out the Admission Application form and
                                                    upload the requested documents.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/637611ff6a1ee_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 4: APPLICATION CONFIRMATION</p>
                                                <p class="text pt-3">You will receive an application confirmation
                                                    email from us within five days, or else you will be requested to
                                                    share some more documents or information.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63723d172d069_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 5: INTERVIEW</p>
                                                <p class="text pt-3">Post application confirmation, you will need to
                                                    undergo an interview with a senior member of the SNATIKA academic
                                                    team to assess your suitability for the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-6.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 6 : ADMISSION OFFER LETTER</p>
                                                <p class="text pt-3">If you clear the interview, then you'll receive
                                                    your Admission Offer Letter within 2 working days.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-7.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 7: PAYMENT OF FEE</p>
                                                <p class="text pt-3">You will need to pay the fee within 5 days of
                                                    receiving the admission offer email.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-8.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 8: ADMISSION CONFIRMATION</p>
                                                <p class="text pt-3">Upon receipt of the Program Fee, you would
                                                    receive your Admission Confirmation for the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63723d53a4317_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 9: LOG IN TO SNATIKA LMS</p>
                                                <p class="text pt-3">Your access to the SNATIKA LMS would be enabled
                                                    on the batch start date.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-1.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 1: PROGRAM SELECTION</p>
                                                <p class="text pt-3">Choose the program relevant to your work
                                                    experience and click on the Enrol Now icon.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-2.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 2: CREATE YOUR PROFILE</p>
                                                <p class="text pt-3">Create your profile by filling out the
                                                    Registration Form and verifying your email.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/step-3.webp">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 3: SUBMIT ADMISSION FORM</p>
                                                <p class="text pt-3">Fill out the Admission Application form and
                                                    upload the requested documents.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/637611ff6a1ee_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 4: APPLICATION CONFIRMATION</p>
                                                <p class="text pt-3">You will receive an application confirmation
                                                    email from us within five days, or else you will be requested to
                                                    share some more documents or information.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 373.333px; margin-right: 10px;">
                                    <div class="items pt-4">
                                        <div class="text-center d-flex flex-column align-items-center">
                                            <div class="image-holder">
                                                <img class="w-100 h-100"
                                                    src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63723d172d069_process">
                                            </div>
                                            <div class="pt-4">
                                                <p class="font-weight-bold">Step 5: INTERVIEW</p>
                                                <p class="text pt-3">Post application confirmation, you will need to
                                                    undergo an interview with a senior member of the SNATIKA academic
                                                    team to assess your suitability for the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation"
                                class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                type="button" role="presentation" class="owl-next"><span
                                    aria-label="Next">›</span></button></div>
                        <div class="owl-dots"><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                    <div class="col-12 d-flex justify-content-center pt-4">
                        <a href="https://snatika.com/program-category-all" class="purple-btn">FIND YOUR PROGRAM</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--admission process sec end-->
        {{-- <section class="py-5 bluish-gradient program-fee bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-sm-0">
                        <div class="card indian-fee-card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <h4>PROGRAM FEE</h4>

                                <h4>
                                    £ 8,900
                                </h4>

                                <p class="text-muted">Installment Option Available</p>
                                <br>

                                <form>

                                    <select id="from" hidden="">
                                        <option value="GBP">GBP</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="INR">INR</option>
                                    </select>

                                    <select id="to"
                                        style="padding: -5px 0px;margin-left:65px;width:120px;float:left"
                                        class="form-control">
                                        <option value="ALL">
                                            Albania</option>
                                        <option value="USD">
                                            America</option>
                                        <option value="AFN">
                                            Afghanistan</option>
                                        <option value="ARS">
                                            Argentina</option>
                                        <option value="AWG">
                                            Aruba</option>
                                        <option value="AUD">
                                            Australia</option>
                                        <option value="AZN">
                                            Azerbaijan</option>
                                        <option value="BSD">
                                            Bahamas</option>
                                        <option value="BBD">
                                            Barbados</option>
                                        <option value="BYR">
                                            Belarus</option>
                                        <option value="EUR">
                                            Belgium</option>
                                        <option value="BZD">
                                            Beliz</option>
                                        <option value="BMD">
                                            Bermuda</option>
                                        <option value="BOB">
                                            Bolivia</option>
                                        <option value="BAM">
                                            Bosnia and Herzegovina</option>
                                        <option value="BWP">
                                            Botswana</option>
                                        <option value="BGN">
                                            Bulgaria</option>
                                        <option value="BRL">
                                            Brazil</option>
                                        <option value="GBP">
                                            Britain (United Kingdom)</option>
                                        <option value="BND">
                                            Brunei Darussalam</option>
                                        <option value="KHR">
                                            Cambodia</option>
                                        <option value="CAD">
                                            Canada</option>
                                        <option value="KYD">
                                            Cayman Islands</option>
                                        <option value="CLP">
                                            Chile</option>
                                        <option value="CNY">
                                            China</option>
                                        <option value="COP">
                                            Colombia</option>
                                        <option value="CRC">
                                            Costa Rica</option>
                                        <option value="HRK">
                                            Croatia</option>
                                        <option value="CUP">
                                            Cuba</option>
                                        <option value="EUR">
                                            Cyprus</option>
                                        <option value="CZK">
                                            Czech Republic</option>
                                        <option value="DKK">
                                            Denmark</option>
                                        <option value="DOP ">
                                            Dominican Republic</option>
                                        <option value="XCD">
                                            East Caribbean</option>
                                        <option value="EGP">
                                            Egypt</option>
                                        <option value="SVC">
                                            El Salvador</option>
                                        <option value="GBP">
                                            England (United Kingdom)</option>
                                        <option value="EUR">
                                            Euro</option>
                                        <option value="FKP">
                                            Falkland Islands</option>
                                        <option value="FJD">
                                            Fiji</option>
                                        <option value="EUR">
                                            France</option>
                                        <option value="GHC">
                                            Ghana</option>
                                        <option value="GIP">
                                            Gibraltar</option>
                                        <option value="EUR">
                                            Greece</option>
                                        <option value="GTQ">
                                            Guatemala</option>
                                        <option value="GGP">
                                            Guernsey</option>
                                        <option value="GYD">
                                            Guyana</option>
                                        <option value="EUR">
                                            Holland (Netherlands)</option>
                                        <option value="HNL">
                                            Honduras</option>
                                        <option value="HKD">
                                            Hong Kong</option>
                                        <option value="HUF">
                                            Hungary</option>
                                        <option value="ISK">
                                            Iceland</option>
                                        <option value="INR">
                                            India</option>
                                        <option value="IDR">
                                            Indonesia</option>
                                        <option value="IRR">
                                            Iran</option>
                                        <option value="EUR">
                                            Ireland</option>
                                        <option value="IMP">
                                            Isle of Man</option>
                                        <option value="ILS">
                                            Israel</option>
                                        <option value="EUR">
                                            Italy</option>
                                        <option value="JMD">
                                            Jamaica</option>
                                        <option value="JPY">
                                            Japan</option>
                                        <option value="JEP">
                                            Jersey</option>
                                        <option value="KZT">
                                            Kazakhstan</option>
                                        <option value="KPW">
                                            Korea (North)</option>
                                        <option value="KRW">
                                            Korea (South)</option>
                                        <option value="KGS">
                                            Kyrgyzstan</option>
                                        <option value="LAK">
                                            Laos</option>
                                        <option value="LVL">
                                            Latvia</option>
                                        <option value="LBP">
                                            Lebanon</option>
                                        <option value="LRD">
                                            Liberia</option>
                                        <option value="CHF">
                                            Liechtenstein</option>
                                        <option value="LTL">
                                            Lithuania</option>
                                        <option value="EUR">
                                            Luxembourg</option>
                                        <option value="MKD">
                                            Macedonia</option>
                                        <option value="MYR">
                                            Malaysia</option>
                                        <option value="EUR">
                                            Malta</option>
                                        <option value="MUR">
                                            Mauritius</option>
                                        <option value="MXN">
                                            Mexico</option>
                                        <option value="MNT">
                                            Mongolia</option>
                                        <option value="MZN">
                                            Mozambique</option>
                                        <option value="NAD">
                                            Namibia</option>
                                        <option value="NPR">
                                            Nepal</option>
                                        <option value="ANG">
                                            Netherlands Antilles</option>
                                        <option value="EUR">
                                            Netherlands</option>
                                        <option value="NZD">
                                            New Zealand</option>
                                        <option value="NIO">
                                            Nicaragua</option>
                                        <option value="NGN">
                                            Nigeria</option>
                                        <option value="KPW">
                                            North Korea</option>
                                        <option value="NOK">
                                            Norway</option>
                                        <option value="OMR">
                                            Oman</option>
                                        <option value="PKR">
                                            Pakistan</option>
                                        <option value="PAB">
                                            Panama</option>
                                        <option value="PYG">
                                            Paraguay</option>
                                        <option value="PEN">
                                            Peru</option>
                                        <option value="PHP">
                                            Philippines</option>
                                        <option value="PLN">
                                            Poland</option>
                                        <option value="QAR">
                                            Qatar</option>
                                        <option value="RON">
                                            Romania</option>
                                        <option value="RUB">
                                            Russia</option>
                                        <option value="SHP">
                                            Saint Helena</option>
                                        <option value="SAR">
                                            Saudi Arabia</option>
                                        <option value="RSD">
                                            Serbia</option>
                                        <option value="SCR">
                                            Seychelles</option>
                                        <option value="SGD">
                                            Singapore</option>
                                        <option value="EUR">
                                            Slovenia</option>
                                        <option value="SBD">
                                            Solomon Islands</option>
                                        <option value="SOS">
                                            Somalia</option>
                                        <option value="ZAR">
                                            South Africa</option>
                                        <option value="KRW">
                                            South Korea</option>
                                        <option value="EUR">
                                            Spain</option>
                                        <option value="LKR">
                                            Sri Lanka</option>
                                        <option value="SEK">
                                            Sweden</option>
                                        <option value="CHF">
                                            Switzerland</option>
                                        <option value="SRD">
                                            Suriname</option>
                                        <option value="SYP">
                                            Syria</option>
                                        <option value="TWD">
                                            Taiwan</option>
                                        <option value="THB">
                                            Thailand</option>
                                        <option value="TTD">
                                            Trinidad and Tobago</option>
                                        <option value="TRY">
                                            Turkey</option>
                                        <option value="TRL">
                                            Turkey</option>
                                        <option value="TVD">
                                            Tuvalu</option>
                                        <option value="UAH">
                                            Ukraine</option>
                                        <option value="GBP">
                                            United Kingdom</option>
                                        <option value="USD">
                                            United States of America</option>
                                        <option value="UYU">
                                            Uruguay</option>
                                        <option value="UZS">
                                            Uzbekistan</option>
                                        <option value="EUR">
                                            Vatican City</option>
                                        <option value="VEF">
                                            Venezuela</option>
                                        <option value="VND">
                                            Vietnam</option>
                                        <option value="YER">
                                            Yemen</option>
                                        <option value="ZWD">
                                            Zimbabwe</option>
                                        <option value="INR">
                                            India</option>


                                    </select>

                                    <input style="width: 50px;" class="form-control" hidden=""
                                        disabled="" type="text" id="amount" placeholder="Amount"
                                        value="8900">
                                    <button type="button" class="form-control"
                                        style="border: 1px solid #ccc;width:150px"><span id="result">1,045,839
                                            ALL</span></button>

                                    <p style="float: right;margin-bottom:-10px"><small>*Bank rates may vary</small>
                                    </p>

                                </form>
                                <script>
                                    const convert = document.getElementById("convert");
                                    const result = document.getElementById("result");
                                    const from = document.getElementById("from");
                                    const to = document.getElementById("to");
                                    const amount = document.getElementById("amount");
                                    window.addEventListener("load", function() {
                                        let fromCurrency = from.value;
                                        let toCurrency = to.value;
                                        let amt = amount.value;
                                        let mainamt = amt.toLocaleString();
                                        fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`)
                                            .then(response => {
                                                return response.json();
                                            })
                                            .then(data => {
                                                let rate = data.rates[toCurrency];
                                                let total = rate * amt;
                                                let ttl = total.toLocaleString();
                                                result.innerHTML = `${ttl}
                                                ${toCurrency}`;
                                            });
                                    });
                                    to.addEventListener("click", function() {
                                        let fromCurrency = from.value;
                                        let toCurrency = to.value;
                                        let amt = amount.value;
                                        let mainamt = amt.toLocaleString();
                                        fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`)
                                            .then(response => {
                                                return response.json();
                                            })
                                            .then(data => {
                                                let rate = data.rates[toCurrency];
                                                let total = rate * amt;
                                                let ttl = total.toLocaleString();
                                                result.innerHTML = `${ttl}
                                                ${toCurrency}`;
                                            });
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 border mt-md-0 mt-3 mx-sm-0 mx-3">
                        <div class="row">
                            <div class="col-12 border-bottom">
                                <h4 class="text-center m-0 py-2">No Cost EMI Options*</h4>
                            </div>
                            <div class="col-sm-4 text-center py-3">
                                <h5>EMI GBP 2,633</h5>
                                <p>
                                    3 Months Tenure
                                </p>
                                <br>
                                <a href="javascript:void(0)" data-toggle="modal"
                                    data-target="#emiOptionModelWindow382" class="purple-btn mt-2">View Plans</a>
                            </div>
                            <div class="col-sm-4 border-left border-right text-center py-3">
                                <h5>EMI GBP 1,675</h5>
                                <p>
                                    5 Months Tenure
                                </p>
                                <br>
                                <a href="javascript:void(0)" data-toggle="modal"
                                    data-target="#emiOptionModelWindow383" class="purple-btn mt-2">View Plans</a>

                            </div>
                            <div class="col-sm-4 text-center py-3">
                                <h5>EMI GBP 805</h5>
                                <p>
                                    11 Months Tenure
                                </p>
                                <br>
                                <a href="javascript:void(0)" data-toggle="modal"
                                    data-target="#emiOptionModelWindow384" class="purple-btn mt-2">View Plans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Testimonials section end-->

        <!--Testimonials section start-->
        {{-- <section class="new-tes general-testimonials py-5">
            <div class="container">






                <div id="carouselExampleControls" class="carousel general-testimonials-inner slide"
                    data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item slide1">
                            <div class="col-12">
                                <h3 class="text-center main-heading mt-3">Our Reach</h3>
                            </div>

                            <div class="country-testimonials">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">SNATIKA’s accelerated and affordable master’s
                                                        programs only need a couple of hours of work per day.
                                                        That’s exactly what I’ve been looking for since I’m quite busy
                                                        already juggling a demanding job and a family..</p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_SA.png">
                                                    </div>
                                                    <h6 class="card-title">Jenny</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">Working full-time and navigating a postgrad
                                                        program is not easy. But the SNATIKA program structure makes
                                                        it manageable. I got to study on my own time and learned
                                                        information
                                                        that I can apply professionally. Now I will have a UK
                                                        master’s degree to add to my resume. Thank you, SNATIKA team,
                                                        that
                                                        making it possible! </p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_India.png">
                                                    </div>
                                                    <h6 class="card-title">Vinayak Patil</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">Glad to see that SNATIKA recognizes prior
                                                        learning
                                                        through work experience benefits. I didn’t think I
                                                        could get a master’s degree anytime soon since I don’t have
                                                        enough
                                                        funds for a 2-year program. Now I can graduate in just
                                                        9 months by leveraging my work experience. </p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_Nigeria.png">
                                                    </div>
                                                    <h6 class="card-title">Olowoyeye</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slide1">
                            <div class="col-12">
                                <h3 class="text-center main-heading mt-3">Our Reach</h3>
                            </div>
                            <div class="country-testimonials">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">It’s great that SNATIKA learners can study
                                                        independently without having to adhere to a schedule and
                                                        attend live classes. It saves my time and scheduling study time
                                                        easier since I’m working full time. I also get
                                                        PhD/Doctorate academicians to assist me in my projects from
                                                        SNATIKA!
                                                    </p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_US.png">
                                                    </div>
                                                    <h6 class="card-title">Cameron Walters</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">A program that values my experience as much
                                                        as my
                                                        education. This is what all professionals want.
                                                        SNATIKA is great. They offer just the right mix of features. UK
                                                        master’s degree, 100% online and an opportunity to
                                                        complete the program in 9 months! </p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_SL.png">
                                                    </div>
                                                    <h6 class="card-title">Himanshi Rana</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4 country-box">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text">I initially had a little trouble with my
                                                        assignment submissions. But the SNATIKA team went above
                                                        and beyond to quickly resolve my issues. It’s an amazing
                                                        platform.
                                                        Thanks for being co-operative with your adult
                                                        learners.</p>
                                                    <div class="img-wrapper">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/Circle_Flag_India.png">
                                                    </div>
                                                    <h6 class="card-title">Mayank Saaw</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slide-3 active">
                            <div class="container">
                                <div class="row custom-padding">
                                    <div class="col-12">
                                        <h3 class="text-center main-heading mt-3">Our Reach</h3>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex justify-content-center">
                                        <marquee behavior="alternate" width="60%" direction="down"
                                            height="335px">
                                            <ul class="list-unstyled text-center">
                                                <li>India</li>
                                                <li>Nepal</li>
                                                <li>Bangladesh</li>
                                                <li>Pakistan</li>
                                                <li>Sri Lanka</li>
                                                <li>Myanmar</li>
                                                <li>Cambodia</li>
                                                <li>China</li>
                                                <li>Kazakhstan</li>
                                                <li>South Africa</li>
                                                <li>Botswana</li>
                                                <li>Mozambique</li>
                                                <li>Botswana</li>
                                                <li>Kenya</li>
                                                <li>Tanzania</li>
                                                <li>Uganda</li>
                                                <li>Rwanda</li>
                                                <li>Ethiopia</li>
                                                <li>Burkina Faso</li>
                                                <li>Ghana</li>
                                                <li>Zambia</li>
                                                <li>Sierra Leone</li>
                                                <li>Namibia</li>
                                                <li>Liberia</li>
                                                <li>Madagascar</li>
                                                <li>Zambia</li>
                                                <li>USA</li>
                                                <li>American Samoa</li>
                                                <li>Switzerland</li>
                                                <li>United Arab Emirates</li>
                                                <li>Oman</li>
                                                <li>Kuwait</li>
                                                <li>Qatar</li>
                                                <li>Fiji Islands</li>
                                                <li>Cambodia</li>
                                                <li>Burundi</li>
                                                <li>Papua New Guinea</li>
                                            </ul>
                                        </marquee>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                                        <div class="inner-details w-100 text-center">
                                            <div class="row">
                                                <div class="col-12 col-md-6 sumup">
                                                    <div class="text-center">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/globe.png">
                                                        <h6 class="font-17 mt-2">NO. OF COUNTRIES</h6>
                                                        <strong class="d-block"><b class="count">36</b>+</strong>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 sumup">
                                                    <div class="text-center">
                                                        <img
                                                            src="https://snatika.com/public/frontend_assets/img/multi-people.png">
                                                        <h6 class="font-17 mt-2">NO. OF PEOPLE</h6>
                                                        <strong class="d-block"><b class="count">8765</b>+</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4  d-flex justify-content-center">
                                        <marquee behavior="alternate" width="60%" direction="up"
                                            height="335px">
                                            <ul class="list-unstyled text-center">
                                                <li>Olayiwola Ajose (Nigeria)</li>
                                                <li>Sanjay Patil (India)</li>
                                                <li>Andrew (USA)</li>
                                                <li>Pyae Myint (Myanmar)</li>
                                                <li>David Massaquoi (Liberia)</li>
                                                <li>Makgabo (South Africa)</li>
                                                <li>Ali Rida (Qatar)</li>
                                                <li>Iman Khalid (UAE)</li>
                                                <li>Hassibullah (Afghanistan)</li>
                                                <li>Kehinde Adewole (Nigeria)</li>
                                                <li>Anurag Gautam (India)</li>
                                                <li>Naftoli Bulbula (Ethiopia)</li>
                                                <li>Gerson (Mozambique)</li>
                                                <li>Soumaïla Coulibaly (Mali)</li>
                                                <li>Brent Esberto (American Samoa)</li>
                                                <li>Mahamadou kabirou (Niger)</li>
                                                <li>Mbiakop Vanessa (Cameroon)</li>
                                                <li>Shamal Dhanushka (Sri Lanka)</li>
                                                <li>Chitente Martin (Zambia)</li>
                                                <li>Julian Namanya (Uganda)</li>
                                                <li>Segomotso Samuel (Botswana)</li>
                                                <li>Deborah Joseph (Sierra Leone)</li>
                                            </ul>
                                        </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slide-4 bg-purple">
                            <div class="country-list">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="text-center main-heading mt-3">Our Reach</h3>
                                        </div>
                                        <div class="col-12">
                                            <div class="countery-list-box p-4">
                                                <h4 class="font-26 mb-5 text-center"></h4>
                                                <div class="block-1">
                                                    <marquee behavior="alternate" loop="infinite" width="100%"
                                                        direction="right" height="75x">
                                                        <ul class="list-unstyled d-flex">
                                                            <li class="bigfont">American Express</li>
                                                            <li>Goldman Sachs</li>
                                                            <li>GlaxoSmithKline</li>
                                                            <li class="bigfont">VMware</li>
                                                            <li>Accenture</li>
                                                            <li class="bigfont">Dubai Duty Free</li>
                                                            <li>JP Morgan Chase &amp; Co</li>
                                                            <li>Ranbaxy</li>
                                                            <li class="bigfont">WHO</li>
                                                            <li>FedX</li>
                                                            <li>Tata Trusts</li>
                                                            <li>HSBC</li>

                                                        </ul>
                                                    </marquee>
                                                    <marquee behavior="alternate" loop="infinite" width="100%"
                                                        direction="left" height="75px">
                                                        <ul class="list-unstyled d-flex">
                                                            <li class="bigfont">King Faizal Hospital</li>
                                                            <li>ICICI Bank</li>
                                                            <li>Indigo</li>
                                                            <li>Jaslok Hospital</li>
                                                            <li>Hindalco Industries</li>
                                                            <li>Dr. Reddy’s Laboratories</li>
                                                            <li class="bigfont">Novartis</li>
                                                            <li>Accenture</li>
                                                            <li>Infosys</li>
                                                            <li>TCS</li>
                                                            <li>Bayer</li>
                                                            <li>Fortis</li>
                                                            <li>Wipro</li>

                                                        </ul>
                                                    </marquee>
                                                    <marquee behavior="alternate" loop="infinite" width="100%"
                                                        direction="right" height="75px">
                                                        <ul class="list-unstyled d-flex">
                                                            <li class="bigfont">IBM</li>
                                                            <li>Microsoft</li>
                                                            <li>Vibygor Schools</li>
                                                            <li>Well Fargo</li>
                                                            <li>Genpact</li>
                                                            <li class="bigfont">Standard Chartered Bank</li>
                                                            <li>Lagos Airport</li>
                                                            <li>MTN</li>
                                                            <li>Turkish Airline</li>
                                                            <li class="bigfont">Indian Red Cross Society</li>
                                                        </ul>
                                                    </marquee>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



            </div>
        </section> --}}
        <!--Testimonials section end-->

        <!--iso-section start-->
        {{-- <section class="iso-section py-5  d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-md-start justify-content-center">
                        <div class="image-holder">
                            <img
                                src="https://snatikabucket.s3.ap-southeast-1.amazonaws.com/uploads/manage-cms/homepage-images/63866e3291897_iso">
                        </div>
                    </div>
                    <div
                        class="col-md-8 pt-4 pt-md-0 d-flex flex-column justify-content-center align-items-center align-items-md-start">
                        <h4 class="text-md-left text-center main-heading">INTERNATIONAL ORGANIZATION FOR STANDARDS
                        </h4>
                        <p class="text-md-left text-center"></p>
                        <p style="text-align: justify; "><span style="font-size: 1rem;">Learners are guided by
                                SNATIKA at each level to choose the right program, and the final decision to provide
                                admission rests with SNATIKA. SNATIKA’s admission process ensures that only those
                                learners who are apt for the program get admitted to our programs. </span></p>
                        <p style="text-align: justify; "><span style="font-size: 1rem;"><br></span></p>
                        <p style="text-align: justify; "><span style="font-size: 1rem;">Learners are provided with
                                the right resource material, academic support, and timely assistance for them to
                                successfully complete their program. We are able to provide this across genders, races,
                                time zones, and geographies because of a strong academic delivery process, which is
                                aptly supported by our PhD/Doctorate facilitators. </span></p>
                        <p style="text-align: justify; "><span style="font-size: 1rem;"><br></span></p>
                        <p style="text-align: justify; "><span style="font-size: 1rem;">SNATIKA’s academic delivery
                                process ensures this is done flawlessly. SNATIKA is certified for ISO 9001:2015 for
                                "Admission Process &amp; Academic Delivery Process."</span></p>.<p></p>
                        <a class="btn purple-btn iso-btn mt-3" href="https://www.iso.org/home.html">Learn More</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--iso-section end-->


        {{-- <section class="faqs py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">FREQUENTLY ASKED QUESTIONS</h2>
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link  active " data-toggle="tab" href="#program_faq_cat836"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> PROGRAM
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat837"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> ADMISSION
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat838"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> QUALIFICATION
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat839"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> FEE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat840"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> ASSESSMENT
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat841"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> LEARNER SUPPORT
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#program_faq_cat842"
                                    role="tab">
                                    <i class="now-ui-icons objects_umbrella-13"></i> GENERAL
                                </a>
                            </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content mt-4">
                            <div class="tab-pane  active " id="program_faq_cat836" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is SNATIKA’s Masters program in Entrepreneurship and Innovation?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 "></p>
                                                <p style="text-align: left;">SNATIKA’s MBA in Entrepreneurship and
                                                    Innovation is a comprehensive, 180-credit online master’s program
                                                    exclusively designed for entrepreneurs seeking a premium
                                                    qualification. Awarded by ENAE Business School, Spain, and developed
                                                    by SNATIKA for AIC-GIM (Atal Incubation Centre - Goa Institute of
                                                    Management), this program empowers aspiring entrepreneurs with the
                                                    skills, strategies, and insights necessary to launch and scale
                                                    successful ventures within 12 months.</p>
                                                <p style="text-align: justify; ">•<span style="white-space:pre">
                                                    </span>Stage 1 focuses on helping learners identify innovative
                                                    ideas, develop robust business models, secure funding, and market
                                                    their ventures effectively. Learners will also gain essential skills
                                                    in financial management, legal compliance, and ethical
                                                    decision-making, creating a strong foundation for entrepreneurial
                                                    success.</p>
                                                <p style="text-align: justify; ">•<span style="white-space:pre">
                                                    </span>Stage 2 promotes independent research, critical thinking, and
                                                    the integration of theoretical knowledge with practical insights.
                                                    This stage culminates in a comprehensive business plan and funding
                                                    strategy, preparing learners to present their ventures to investors
                                                    confidently.</p>
                                                <p style="text-align: justify; ">This program offers two immersive
                                                    sessions at AIC-GIM in Goa, featuring live workshops, industry
                                                    interactions, and investor pitch events. The learner’s start-up
                                                    experience is leveraged to rapidly advance their learning, with
                                                    hands-on mentorship and guidance provided by industry experts and
                                                    faculty. This structure makes the MBA program ideal for
                                                    entrepreneurs at different stages of their journey, helping them
                                                    turn concepts into viable ventures.<span
                                                        style="font-family: &quot;Courier New&quot;;">﻿</span></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Why is this MBA unique among SNATIKA's other Masters programs?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">This MBA is unique because it includes incubation
                                                    support from AIC-GIM for learners’ startup, hands-on immersion
                                                    experiences at AIC-GIM in Goa, where learners participate in live
                                                    workshops, industry interactions, and investor pitch sessions. The
                                                    program emphasizes practical, real-world applications with guidance
                                                    from expert mentors, focusing specifically on business model
                                                    development, funding strategies, and innovation management, tailored
                                                    for those pursuing entrepreneurship.

                                                    The program allows you with an opportunity for networking,
                                                    mentorship, innovation, and to test your entrepreneurship ideas
                                                    within India's blooming entrepreneurial environment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What role does AIC-GIM play in this MBA program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">AIC-GIM (Atal Incubation Centre - Goa Institute of
                                                    Management), supported by NITI Aayog, is a central partner in
                                                    delivering this program. AIC-GIM provides incubation support for
                                                    learners’ startup, facilitates two immersive sessions that bring
                                                    invaluable real-world experience to learners. The first immersion
                                                    focuses on industry workshops, mentor-guided business planning, and
                                                    interactive sessions with successful entrepreneurs. The second
                                                    immersion includes a Demo Day where learners pitch their business
                                                    plans to a panel of investors and industry leaders. AIC-GIM provides
                                                    a unique, resource-rich environment that encourages learners to
                                                    refine their ideas, engage with experienced professionals, and build
                                                    essential networks that support their entrepreneurial journey.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who is ENAE Business School, and what is its role in this program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">ENAE Business School, based in Spain, is a
                                                    distinguished academic institution known for its focus on practical,
                                                    real-world business education. As the awarding body for this MBA
                                                    program, ENAE provides the academic foundation and validation for
                                                    the degree, ensuring it meets global standards in entrepreneurship
                                                    and innovation. ENAE’s collaboration with SNATIKA allows learners to
                                                    benefit from international academic expertise combined with the
                                                    practical entrepreneurial insights facilitated through AIC-GIM.
                                                    Graduates earn an internationally recognized MBA degree from ENAE,
                                                    enhancing their credibility and positioning them well in the
                                                    competitive global business landscape.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the benefits of this Masters program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 "></p>
                                                <p>The program offers numerous benefits, including:
                                                </p>
                                                <p>●An MBA degree awarded by ENAE Business School, Spain.
                                                </p>
                                                <p>●Incubation support from AIC-GIM
                                                </p>
                                                <p>●Mentorship from industry experts and academic faculty.
                                                </p>
                                                <p>●Comprehensive training in business planning, innovation management,
                                                    and growth hacking.
                                                </p>
                                                <p>●A structured capstone project to develop and pitch a business plan.
                                                </p>
                                                <p>●Immersive networking and investor interactions through AIC-GIM.
                                                </p>
                                                <p>●Resources and support to bring entrepreneurial concepts to life.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How is the Masters degree delivered?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The degree is delivered over a 12-month period,
                                                    divided into two stages. Learners engage in assignment-based
                                                    coursework, real-world project development, and two on-campus
                                                    immersion sessions at AIC-GIM in Goa. The program combines online
                                                    study with practical, in-person experiences, offering flexibility
                                                    while ensuring a comprehensive learning journey. You don’t have to
                                                    write any exams. The rigorous assignments will test your
                                                    understanding and sharpen your academic and professional skills.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How many credits will I earn in this Masters program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program has 180 credits according to the
                                                    Qualifications and Credit Framework (QCF). QCF applies to the UK. In
                                                    the case of ECTS (European Credit Transfer and Accumulation System),
                                                    you will earn 90 credits from the program. ECTS applies to Europe.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is the duration of the MBA in Entrepreneurship and Innovation
                                            program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program spans 12 months and is divided into two
                                                    stages. Stage 1 consists of foundational coursework, while Stage 2
                                                    focuses on the development and presentation of a comprehensive
                                                    business plan and funding strategy.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who awards the degree for this program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The degree is awarded by ENAE Business School,
                                                    Spain, in partnership with SNATIKA and AIC-GIM (Atal Incubation
                                                    Centre - Goa Institute of Management)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What topics will be covered in this program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program covers core topics essential for
                                                    entrepreneurs, including:
                                                    oFoundations of Entrepreneurship
                                                    oInnovation Management
                                                    oBusiness Model Development
                                                    oFinancial Management for Entrepreneurs
                                                    oMarketing and Growth Hacking
                                                    Legal and Ethical Issues in Entrepreneurship</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is unique about the program’s structure?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Stage 2 of the program includes a structured
                                                    capstone experience divided into three phases, each with multiple
                                                    sections. The final project involves preparing a business plan and
                                                    pitch to be presented to a panel of investors during a demo day at
                                                    AIC-GIM. Also, incubation or pre-incubation support for Learners’
                                                    startup will be available from Stage 1.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Are there any immersive experiences included?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 "></p>
                                                <p style="text-align: justify; ">Yes, there are two immersive
                                                    experiences of 5 days each at AIC-GIM in Goa:
                                                </p>
                                                <ul>
                                                    <li style="text-align: justify; ">First Immersion (End of Stage
                                                        1): Workshops, industry interactions, and mentoring sessions.
                                                    </li>
                                                    <li style="text-align: justify; ">Second Immersion (Post-Stage 2):
                                                        Demo day where learners present their business plans to
                                                        investors, followed by a convocation ceremony.</li>
                                                </ul>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who is eligible to enroll in the program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program is open to individuals at different
                                                    stages of their entrepreneurial journey:
                                                    oThose with a business concept in mind.
                                                    oThose in the early stages of a start-up.
                                                    Those without a specific concept but looking to prepare for
                                                    entrepreneurship.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How is the program assessed?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Assessments are entirely project-based, with
                                                    assignments, case studies, and the final business plan presentation.
                                                    There are no traditional exams.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What type of support can I expect during the program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Learners receive incubation support from Stage 1,
                                                    and mentorship from experienced faculty and industry professionals,
                                                    particularly during the immersion phases. They also have access to
                                                    post-demo day networking.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Are there financial aid or installment payment options?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Are there financial aid or installment payment
                                                    options?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How can this MBA program benefit my career?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Graduates gain:
                                                    oAn MBA degree recognized internationally.
                                                    oAccess to incubation support from Stage 1
                                                    oAccess to mentorship from AIC-GIM and ENAE faculty.
                                                    oA comprehensive business plan and funding strategy.
                                                    The skills and confidence to pitch ideas to investors and grow a
                                                    business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is this program suitable for those who are new to entrepreneurship?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, the curriculum and mentorship are designed to
                                                    support individuals at all levels, from beginners to those with
                                                    existing start-up experience as they get access to incubation
                                                    support from Stage 1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What Masters programs does SNATIKA offer?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA offers a diverse range of Masters programs.
                                                    For more details, please refer to our program offerings here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Are programs at SNATIKA self-paced?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, our programs are self-paced. Study materials
                                                    are accessible through the online Learning Management System (LMS)
                                                    from anywhere with an internet connection. However, assignments and
                                                    assessments must be completed within specified deadlines.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) I have never taken an online course before. What should I expect?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Online courses at SNATIKA are similar to traditional
                                                    classroom courses, with the advantage of online delivery and the
                                                    flexibility to learn from your own space. While there are no
                                                    physical classmates, studies indicate that online learners achieve
                                                    comparable learning outcomes in half the time of traditional
                                                    classroom learners. Studies show online students tend to achieve the
                                                    same learning results in half the time as classroom-based students.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What if I can't start or finish the program on time?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA programs are self-paced with definite start
                                                    dates for each stage. If the learner isn’t able to start or finish
                                                    the program as per schedule then the learner can complete his
                                                    program as per the schedule of his next immediate batch start date.
                                                    However please note that access to incubation support from Stage 1
                                                    will not be available.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the benefits of online classes?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Online classes offer convenience and flexibility,
                                                    making them ideal for individuals who want to pursue a Masters
                                                    degree while working. You can tailor your studies to fit your
                                                    schedule.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How much time should I dedicate to studying each week?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">We recommend dedicating 8-10 hours per week to your
                                                    studies.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do I need to purchase course books?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA provides unit-wise learning content through
                                                    the LMS. While some courses may require additional reading
                                                    materials, it's advisable to explore recommended online resources to
                                                    enhance your knowledge.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Will I have access to the e-library?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">All learners gain membership to a leading digital
                                                    library offering a vast collection of ebooks, audiobooks, and more.
                                                    This extensive resource can be accessed through an intuitive app,
                                                    providing access to a range of educational materials.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What learning resources are available on SNATIKA LMS?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 "></p>
                                                <p><b>1.Knowledge Refresher Reading Material:</b>
                                                    This material helps learners review foundational concepts and get up
                                                    to speed with the latest advancements in their field, ensuring they
                                                    are prepared for advanced study.
                                                </p>
                                                <p><b>2.Quizzes:</b>
                                                    Self-assessment quizzes allow learners to gauge their current
                                                    knowledge and identify areas for improvement, enabling them to
                                                    strengthen their understanding before proceeding with assignments.
                                                </p>
                                                <p>
                                                    3.Digital Library Access:
                                                    Learners have access to a comprehensive digital library, providing
                                                    additional learning materials and resources to support their studies
                                                    and research.
                                                </p>
                                                <p><b>4.Assignments</b>:
                                                    SNATIKA follows a fully assignment-based assessment model. Learners
                                                    are provided with:
                                                    oAssignment Briefs: Detailed instructions outlining the requirements
                                                    for each assignment.
                                                    oAssignment Guide: A practical guide offering tips and strategies on
                                                    how to effectively plan, structure, and complete assignments.
                                                    oPlagiarism Policy: Clear guidelines on the importance of submitting
                                                    original work and information about the acceptable limits for
                                                    similarity checks.
                                                </p>
                                                <p><b>5.Program Progress Tracking:</b>
                                                    A progress tracking feature allows learners to monitor their
                                                    academic progress and stay on top of deadlines and milestones
                                                    throughout the program.
                                                </p>
                                                <p><b>6.Dashboard:</b>
                                                    The dashboard provides an at-a-glance overview of key information,
                                                    including program updates, notifications, support requests, and
                                                    academic progress.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat837" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the eligibility criteria for SNATIKA programs?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Program eligibility criteria for any of SNATIKA
                                                    Masters Programs are broadly divided into two audiences:
                                                    Graduate/Post Graduate: Any learner whose highest academic
                                                    qualification is a post-graduation/graduation can apply for the
                                                    desired program.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Am I eligible to apply for SNATIKA’s Masters program in Entrepreneurship
                                            and Innovation – MBA ?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">To be eligible for SNATIKA’s MBA in Entrepreneurship
                                                    and Innovation, applicants must meet the following criteria:
                                                    oEducational Background:
                                                    oA Bachelors degree from a recognized institution in any discipline.
                                                    oPreference for candidates with degrees in business, management,
                                                    commerce, engineering, or related fields.
                                                    oWork Experience:
                                                    oMinimum of 2-3 years of professional experience is preferred,
                                                    particularly in roles related to business, start-ups, or management.
                                                    oEntrepreneurial experience (running a business, working in a
                                                    start-up, or launching a project) will be highly regarded.
                                                    oEntrepreneurial Aptitude:
                                                    oSubmission of a Statement of Purpose (SOP) detailing the
                                                    candidate’s entrepreneurial aspirations, past experiences, and how
                                                    the program aligns with their goals
                                                    oAdditional Requirements:
                                                    oAn interview will be conducted as part of the selection process to
                                                    assess the candidate's entrepreneurial mindset.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who can apply for the program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Who can apply for the program?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is the admission process for SNATIKA?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">It is a 5-step admission process as mentioned below:
                                                    Step 1 – Fill out the Admission Application Form online and upload
                                                    the requested documents including academic transcripts, a CV, and a
                                                    Statement of Purpose (SOP) and submit.
                                                    Step 2 – The application will be scrutinised for suitability by
                                                    SNATIKA.
                                                    Step 3 – If satisfactory, the candidate is invited to an interview
                                                    with the Director of Education (DOE) or an appropriate authority.
                                                    During the interview, the candidate’s motivation, work experience,
                                                    and domain expertise are evaluated, along with their spoken English
                                                    proficiency.
                                                    The interview can lead to one of three outcomes:
                                                    a)The candidate is shortlisted for the program.
                                                    b)The candidate is offered an alternate program better suited to
                                                    their background.
                                                    c)The application is rejected.
                                                    Step 4 – If you are Shortlisted, you will receive the offer letter
                                                    for joining the program.
                                                    Step 5 – You will need to make full payment of the program fee as
                                                    guided in the offer letter. In case you are opting for an instalment
                                                    option then you have to show your preference at the time of filling
                                                    out your application form.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the document (digital copy) requirements for applying for
                                            SNATIKA Programs?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The complete admission application process is
                                                    online. After registering on the SNATIKA website and verifying the
                                                    email ID; applicants can start the process of submitting their
                                                    online application. Before you start filling out the Admission Form
                                                    make sure you have the following documents (digital copy)/details
                                                    ready:
                                                    ●Clear background Passport size photograph
                                                    ●Copy of Passport / Valid photo ID – only the pages that include
                                                    personal information
                                                    ●Copy of Certificates and Transcripts of your last academic
                                                    qualification
                                                    ●Two references – professional
                                                    ●A Statement of Purpose – 300 to 500 words (excluding spaces) -
                                                    summarise your academic interests and your reasons for choosing the
                                                    desired program
                                                    ●An updated CV
                                                    ●For incubation support from AIC-GIM, other details such as Aadhar,
                                                    incorporation certificate (if applicable), PAN number etc will be
                                                    required.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What should be included in the Statement of Purpose?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Statement of Purpose should be 300 to 500 words and
                                                    include information about your past and current academic and
                                                    professional history, your future goals and reasons for pursuing the
                                                    selected program, and other pertinent details that will help us
                                                    evaluate you as a candidate. Applicants are also evaluated on their
                                                    proficiency in written English.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do I have to send a transcript with my application? Where do I send it?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Please submit the transcripts of your last academic
                                                    qualification. You need only digital copies of the same to be
                                                    uploaded during your online admission application submission.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) My transcript is not in English. What should I do?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">If the official transcripts and/or degree
                                                    certificate(s) are not in English, our program requires an official
                                                    English translation for processing your admission form.
                                                    Self-attested copies of original academic documents are accepted.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) English isn’t my 1st language; can I apply for the program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Applicants whose first language is not English must
                                                    demonstrate their English proficiency by submitting scores from a
                                                    standardised English Language Proficiency Test. For more details
                                                    please write to us at admissions@snatika.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do I need to speak English to attend a program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Do I need to speak English to attend a program?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is my admission guaranteed upon submission of the admission application
                                            form?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">No, admission is only assured once you receive your
                                                    admission offer letter post your personal interview with the
                                                    academic committee. Your admission is only guaranteed by making the
                                                    necessary payments as per the agreed schedule.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is an interview required for the application?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, an admissions interview is required of all
                                                    SNATIKA program applicants. This is scheduled after your application
                                                    is accepted by our admission team. You are issued an offer letter
                                                    only after you clear the interview. The interview is done by a
                                                    senior member of the academic committee normally by the Director of
                                                    Education or Head of Department.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What’s the purpose of the interview?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Your interview will be a one-on-one discussion with
                                                    a senior member of the admissions committee. You will share your
                                                    career progression story, and your reasons for pursuing the SNATIKA
                                                    program, and will have an opportunity to learn more about SNATIKA.
                                                    During the interview, your English language skills and your domain
                                                    experience related to the program applied for will be verified. The
                                                    interview typically lasts 30-45 minutes. All such meetings are done
                                                    virtually; applicants needn’t travel anywhere for the same.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Must learners be employed full-time?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">We expect learners to hold full-time employment
                                                    throughout the program. As members of a professional learning
                                                    community, learners bring real-world experience and can immediately
                                                    apply academic concepts gained through assignments/projects in their
                                                    workplaces. However, the Admissions Committee is willing to review
                                                    and consider applicants who currently do not hold full-time
                                                    positions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is financial corporate sponsorship required for admission?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Financial corporate sponsorship is not a factor in
                                                    the admissions process. We have both self-funded and
                                                    corporate-sponsored learners undergoing our programs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What process should I follow if my employer has agreed to provide full or
                                            partial financial sponsorship for my degree?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Candidates who are receiving full or partial
                                                    financial sponsorship from their employers should report this
                                                    information post submitting the online admission application to
                                                    admissions@snatika.com.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is the program open to applicants from all nationalities?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program is open to applicants from all nations.
                                                    However incubation support is only provide to Indian nationals.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are my options if seats for a particular program date are already
                                            filled?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The batch size for our programs is specifically
                                                    limited due to various reasons, regulatory requirements; maximising
                                                    learner experience and interaction with SME/Facilitators, and other
                                                    operational reasons. Due to this limitation, often seats for a
                                                    program date get filled much earlier than the last date. So, it's
                                                    important to enrol early and to pay in full immediately to guarantee
                                                    your seat in the program.
                                                    In case seats are not available for a particular batch then, you can
                                                    be placed on a waitlist for that iteration/program date. If a
                                                    program seat becomes available (e.g. if another participant cancels,
                                                    transfers to a different date, etc), wait-listed individuals will be
                                                    contacted on a first-come, first-served basis. You can take early
                                                    admission to the next drive to avoid such a situation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Can I transfer or defer to a different program start date?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">To transfer or deferral to a different start date,
                                                    an enrolled participant can submit a written request to the email:
                                                    learnersupport@snatika.com. Transfer to the immediate next program
                                                    start date is allowed free of cost only once. Any further transfer
                                                    incurs batch transfer charges. Kindly check our terms &amp;
                                                    conditions section for the updated current charges.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How will I receive an acknowledgement of the application once I apply?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">All applicants will receive an Acknowledgement
                                                    Letter via email at all steps starting from application submission
                                                    to the offer letter. Applicants are requested to respond to such
                                                    trail emails to keep track of their applications. Applicants can
                                                    also write to admissions@snatika.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How will I be notified if accepted?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Acceptance decisions are emailed with instructions
                                                    to confirm acceptance along with the offer letter. The admission
                                                    team will be in touch with you throughout the process.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the next steps after my admission?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">●The learners will be formally inducted into the
                                                    program on the program start date through a digital platform.
                                                    ●After this, learners can begin by reviewing unit-level reading
                                                    materials, after which they can take quizzes to assess their
                                                    understanding.
                                                    ●After completing the quiz, learners proceed to the
                                                    project/assignment phase where they create their assignments.
                                                    ●Upon submission, assignments are evaluated, and feedback is
                                                    provided within 96 hours.
                                                    ●This quick feedback cycle enables learners to make any necessary
                                                    revisions and resubmit if they receive a "Refer" grade.
                                                    ●The process continues until the assignment is successfully passed,
                                                    ensuring ongoing guidance and support.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat838" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What certificates will I earn at the end of this Masters program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Learners are eligible for the following
                                                    certifications after successful completion of the program:
                                                    -Master’s Program Certificate in Entrepreneurship and Innovation
                                                    from SNATIKA
                                                    MBA in Entrepreneurship and Innovation from ENAE Business School,
                                                    Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who awards the Degree?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The degree is awarded by our partner university ENAE
                                                    Business School, Spain. Please visit your respective program page to
                                                    learn more about the awarding university.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Would I get a virtual certificate or a physical certificate?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You will receive a physical certificate. All
                                                    original certificates and academic transcripts would be couriered to
                                                    the learners’ registered postal addresses.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Where can I get a sample certificate/diploma/degree?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Sample copies are displayed in our brochure (please
                                                    go through the same) and they are also displayed on our website.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) As an online student, will I receive the same certificate as the
                                            on-campus students?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, you will receive the same certificate. Whether
                                                    you take the program online or in person, will not be specified on
                                                    the certificate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Will my unit of studies area appear on the certificate?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Will my unit of studies area appear on the
                                                    certificate?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Will my unit of studies area appear on the certificate?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, learners are provided with academic transcripts
                                                    or mark sheets for all programs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How important are academic transcripts?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">A transcript is proof of education. Official
                                                    academic transcripts are your official record and include your
                                                    program/s of study, the units you have undertaken, the grade
                                                    achieved for each unit, the credit achieved for each unit, your
                                                    cumulative credits, and the date your award was conferred. Learners
                                                    who wish to pursue their Masters Degree need to provide the
                                                    admission committee with a set of documents to support their
                                                    previous academic qualifications. As proof of completing your
                                                    post-graduation/ Masters, these documents are mandatory to justify
                                                    your suitability for the program that you aspire to pursue.
                                                    Transcripts are also required if you wish to migrate to countries
                                                    like Canada / USA / Australia / Europe to have your degree
                                                    equivalence from ECA (Education Credential Assessment) organisations
                                                    like WES, ICAS, and IQAS.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Within how many days of course completion, will I get the hardcopy of the
                                            Certificate?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Within 2-3 months you will be receiving all your
                                                    certificates.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat839" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do I have to pay any fees at the time of submission of admission
                                            applications online?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, INR 1,000 needs to be paid at the time of
                                                    submission. Applicant needs to pay the balance program fees only
                                                    once the offer letter is awarded to block his seat for the program.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What’s the currency of payment?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">We accept payments only in INR.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What are the Fee Payment methods?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You can pay your fee dues by either of the following
                                                    modes:

                                                    Online using your Debit / Credit Card or Bank Transfer

                                                    SNATIKA also provides instalment options to its learners. To avail
                                                    of this, you need to show your preference while applying for the
                                                    program.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Are there any payment-related charges?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Learners will incur the following charges:

                                                    Online payment (Credit/Debit Card) - All such payments are made
                                                    through payment gateways. A non-refundable convenience fee and tax
                                                    are charged by the payment gateway to the learner and this amount is
                                                    charged for all card payments.

                                                    SNATIKA does not receive any part of such charges. This convenience
                                                    fee is paid in full and retained by the payment gateway.

                                                    Bank Transfer/Wire Transfer – Banks would charge for the service
                                                    rendered and any such charges need to be borne by the learner. The
                                                    learner has to ensure that SNATIKA has to be paid as per the invoice
                                                    amount in full.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is the URL / Website link for making the Payment?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You can only make payments through your registered
                                                    login.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Who can I contact with questions regarding payment?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">To check on payment status and/or other
                                                    questions/assistance regarding billing, please email us at
                                                    finance@snatika.com.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is the Fee for the program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Please go to the respective Program page to see the
                                                    fee details listed.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do I have to pay the Full Fee for the Program in Advance?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Do I have to pay the Full Fee for the Program in
                                                    Advance?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) If I’m not able to honour my instalment schedule, will my
                                            transcripts/certificate/degree be withheld?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, Non-payment of fees (whether in full or as per
                                                    the instalment option would lead to suspension of services from
                                                    SNATIKA. This will not only halt the pursuit of the program but
                                                    would also lead to holding back transcripts/certificates/degrees
                                                    because of the due amount.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) I am an alumni/existing learner of SNATIKA. What benefits do I receive if
                                            I am interested in doing additional programs from SNATIKA?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">For specific program-related benefits for our
                                                    alumni/existing learners, please reference your details along with
                                                    the program of interest to admissions@snatika.com.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Can I foreclose the loan taken through SNATIKA’s financial partners?
                                            (APPLICABLE ONLY FOR INDIA LEARNERS)
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">For learners who have taken a loan through SNATIKA’s
                                                    financial partners, the financial institution provides the following
                                                    loan foreclosure facilities:
                                                    Loan Tenure availed: 24 months / 48 months
                                                    ●The borrower may either continue to service the EMI as per schedule
                                                    or choose to pre-close the entire loan by paying the entire
                                                    outstanding principal + foreclosure charges (2%+GST on total closure
                                                    amount)*. * Might vary from bank to bank
                                                    ●The borrower also has to pay an accrued interest + any penalties -
                                                    Charges that may have been incurred during the tenure of the
                                                    facility (If applicable in case of any default)
                                                    ●There is no part-prepayment facility, loans can be foreclosed.
                                                    ●Loans can only be foreclosed after a minimum period of 6 months or
                                                    payment of 6 EMIs, whichever is later.

                                                    Loan Tenure availed: 12 months
                                                    ●The borrower may either continue to service the EMI as per schedule
                                                    or choose to pre-close the entire loan by paying the entire
                                                    outstanding principal. There are no foreclosure charges.
                                                    ●The borrower also has to pay an accrued interest + any penalties -
                                                    Charges that may have been incurred during the tenure of the
                                                    facility (If applicable in case of any defaults)
                                                    ●There is no part-prepayment facility, loans can be foreclosed.
                                                    ●Loans can only be foreclosed at any time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat840" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How are the Assessments / Examinations conducted?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Assessment is conducted through, MCQ-based quizzes,
                                                    Assignments and Dissertation Project</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Where do I submit the assignments?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Learners must submit assignments exclusively through
                                                    the LMS. Once submitted, the assignments are evaluated by an
                                                    assessor, who provides feedback and suggestions for improvement, if
                                                    necessary. Facilitators may also arrange virtual meetings or
                                                    chatroom discussions to address widespread issues or common areas of
                                                    difficulty. In cases where a topic raised by multiple learners
                                                    requires clarification, the FAQ section may be updated.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How are my assignments assessed?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Your assignments will be evaluated according to
                                                    SNATIKA’s assessment criterion within 96 hours after submission. If
                                                    the assignment is according to the standards, you are given the
                                                    “Pass” grade and if not, the assignment is given a “Refer” status
                                                    with additional suggestions from your Masters Guide to improve the
                                                    assignment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What if I’m unable to clear my Assignments?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">What if I’m unable to clear my Assignments?
                                                    SNATIKA allows its learners to resubmit the referred assignments.
                                                    You will be required to re-submit the assignment(s). For each
                                                    resubmission, a fee of INR 5,000 (excluding any applicable taxes)
                                                    will be charged.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How do we get to know about the program structure and assessment
                                            criteria?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">All SNATIKA programs are assignment-driven and not
                                                    on assessments. All learners have to submit projects/assignments
                                                    during the program. There aren’t any exams that you have to attend.
                                                    The structure of the program and other details are all there in our
                                                    brochure/syllabus that you may download from our website
                                                    www.snatika.com.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat841" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How do I ensure a high success rate in my (online) program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">We have put together some tips and strategies to
                                                    help you best manage and succeed in your course.
                                                    1. Start light.
                                                    2. Make a workspace for yourself.
                                                    3. Get good at time management.
                                                    4. Stay organised.
                                                    5. Use all your resources.
                                                    6. Technology is your friend.
                                                    7. Get into a routine.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Whom do I contact for any program-related queries?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The program is designed to be self-paced and very
                                                    much digitally guided. However, if you still feel the need you can
                                                    reach us by writing to learnersupport@snatika.com for any syllabus
                                                    or learning-related query.
                                                    Learners can communicate with facilitators via email or phone,
                                                    depending on the nature of the inquiry and the learner’s
                                                    convenience.
                                                    Before reaching out to facilitators, learners are encouraged to
                                                    check the FAQ section, as many common questions are addressed there.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What if I need help during my studies?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You can reach out to us at
                                                    learnersupport@snatika.com or raise a support ticket from your LMS
                                                    log-in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do we get our program-related queries clarified directly by the
                                            university?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Do we get our program-related queries clarified
                                                    directly by the university?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How easy or difficult is it to successfully complete this program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Our programs are developed purely for working
                                                    professionals who want to excel in their respective streams. You
                                                    should be investing 8-10 hrs a week in getting your assignments
                                                    ready/submitted. If you put in your effort then you would surely
                                                    clear the program.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Could you share some Tips for Success that one should follow while
                                            studying Online?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">1. Always strive to complete the course module
                                                    without breaks for a better understanding
                                                    2. Try to finish the assignments as soon as you can after module
                                                    completion as the study is still fresh in your mind.
                                                    3. Maintain your own mind-notes
                                                    4. Practice and revision will help you learn the course better.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What kind of support does SNATIKA offer?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">We have a dedicated support team for you at each
                                                    stage of your association with SNATIKA. We always suggest connecting
                                                    via email to avoid taking time off of our learners who are senior
                                                    professionals. To receive prompt &amp; timely support, you may use
                                                    any of these services for the following stages:
                                                    Stage Email Chat
                                                    Pre Admission admissions@snatika.com On SNATIKA web page
                                                    Post Admission learnersupport@snatika.com On SNATIKA LMS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="program_faq_cat842" role="tabpanel">
                                <div class="accordion">
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Do employers accept online degrees?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">All new learning innovations are met with some
                                                    degree of scrutiny, but scepticism subsides as methods become more
                                                    mainstream. Such is the case for online learning. Studies indicate
                                                    employers who are familiar with online degrees tend to view them
                                                    more favourably, and more employers are acquainted with them than
                                                    ever before. The majority of colleges now offer online degrees,
                                                    including most public, not-for-profit, and Ivy League universities.
                                                    Online learning is also increasingly prevalent in the workplace as
                                                    more companies invest in web-based employee training and development
                                                    programs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What can I do after getting my Qualification?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">1. You can apply for better job Opportunities around
                                                    the world.
                                                    2. You can ask for improved remuneration and position at your
                                                    current organisation.
                                                    3. You can gain direct entry into a doctorate/PhD program</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How do I know that this program’s curriculum is the best?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">The Curriculum at SNATIKA is designed in line with
                                                    the International curriculums for professionals. Our association
                                                    with various large academic institutions not only makes it possible
                                                    for you to pursue a master’s program or excel in your present career
                                                    but also proves that the curriculum design conforms to international
                                                    standards.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) How is the SNATIKA Masters Program better than other Masters programs?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA Masters Programs have been designed
                                                    exclusively for working professionals; wherein due value is given to
                                                    the learner’s knowledge of her/his domain gained through years of
                                                    experience of being in the industry. Our programs also acknowledge
                                                    the time a working professional can spend during her/his busy
                                                    schedule to earn her/his academic qualification. We also have
                                                    considered our working professionals’ need to fast-track her/his
                                                    academic journey. We have incorporated all these needs in our
                                                    programs along with providing globally recognised qualifications.
                                                    Most of the regular Masters programs are general programs that
                                                    haven’t considered the above needs &amp; are developed for the
                                                    common masses. SNATIKA programs are specifically designed for
                                                    working professionals who aspire for a globally recognised
                                                    international qualification in their domain of expertise &amp;
                                                    experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is ENAE Business School, Spain?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">ENAE Business School is a private, for-profit
                                                    teaching university in Spain. It offers a variety of undergraduate
                                                    and postgraduate programs with both blended and online distance
                                                    learning delivery options. Its head office is in Murcia, Spain and
                                                    is ranked #35 in QS International Trade Ranking - Masters and MBA
                                                    2024.
                                                    SNATIKA learners are awarded MBA, MSc, MA, BSc, and BA degrees from
                                                    ENAE Business School.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is SNATIKA an approved partner of ENAE Business School, Spain?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA is an approved partner of ENAE Business
                                                    School, Spain.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) What is AIC-GIM?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">AIC-GIM is the Atal Incubation Centre at Goa
                                                    Institute of Management (GIM). It is supported by Atal Innovation
                                                    Mission (AIM), a flagship initiative of the Government of India,
                                                    established by NITI Aayog, to promote a culture of innovation and
                                                    entrepreneurship across the country. It provides a platform for
                                                    aspiring entrepreneurs to develop their ideas, access resources, and
                                                    receive mentorship.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Does SNATIKA and AIC-GIM have a partnership for this program?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">Yes, SNATIKA and AIC-GIM have partnered for this
                                                    program.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Is SNATIKA Authorised to give a Certificate?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">SNATIKA only provides a course completion
                                                    certificate (which means you have successfully completed the
                                                    program) and doesn’t award a Degree/Diploma.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Can learners visit the ENAE Business School, Spain to collect their
                                            Degree directly and -also collect SNATIKA certificates in person?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You can attend the convocation ceremony at the
                                                    University to receive your Degree in person. Kindly refer to your
                                                    welcome letter to confirm if your university provides you with this
                                                    facility. SNATIKA certificate will be couriered to you. You need not
                                                    visit us.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" style="background: #f6ecdd">
                                        <div class="accordion-item-header question">
                                            Q) Can I meet the instructors and my fellow learners online?
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content answer">
                                                <p class="m-0 ">You would be provided the required support over
                                                    email and online.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    </section>

    <section id="footer-section" class="footer-section">
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-md-6 col-lg-3  pt-md-5 pt-lg-0  d-flex justify-content-center justify-content-md-start align-items-md-end align-items-lg-start ">
                        <div class="footer-box1">
                            <img src="https://snatika.com/public/frontend_assets/img/logo-while.png"
                                alt="logo white">
                        </div>
                    </div>

                    <div
                        class="col-12 col-md-6 col-lg-3 d-flex justify-content-center justify-content-md-start  justify-content-lg-start">
                        <div class="footer-box">
                            <h3 class="">Contact Information</h3>
                            <ul>
                                <li><a href="#"><i class="lni lni-phone"></i></a>
                                    <select name="phoneCall" id="phoneCall" class="d-inline-block">
                                        <option value="+918047183355">+91 8047183355</option>
                                        <option value="+23418880209">+234 1 8880 209</option>
                                        <option value="+27218259877">+27 21 825 9877</option>
                                        <option value="+13478554980">+ 1 347 855 4980</option>
                                        <option value="+442032876900" selected="">+ 44 20 3287 6900</option>
                                    </select>
                                </li>
                                <li><a href="#"><i class="lni lni-envelope mr-2"></i>info@snatika.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-12 col-md-6 col-lg-3 pt-3 pt-md-0 pr-lg-4 pr-xl-5 d-flex justify-content-center justify-content-md-end">
                        <div class="footer-box">
                            <h3 class="pl-2 text-mob-center">Connect with us on</h3>
                            <ul class="social-icons">
                                <li><a href="https://www.linkedin.com/company/snatika/"><i
                                            class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="https://www.facebook.com/snatikaeducation"><i
                                            class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="https://www.instagram.com/snatika_education/"><i
                                            class="lni lni-instagram-filled"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-12 col-md-6 col-lg-3 pt-md-5 pt-lg-0  d-flex  justify-content-center justify-content-md-center justify-content-lg-center Quick-links-footer">
                        <div class="footer-box">
                            <h3 class="text-mob-center">Quick Links</h3>
                            <ul class="quick-links">
                                <li class="text-mob-center"><a
                                        href="https://snatika.com/program-category-all">Programs</a></li>
                                <li class="text-mob-center"><a href="https://snatika.com/faq-categories">FAQ's</a>
                                </li>
                                <li class="text-mob-center"><a href="https://snatika.com/privacy-policy">Privacy
                                        Policy</a></li>
                                <li class="text-mob-center"><a href="https://snatika.com/terms-and-conditions">Terms
                                        &amp;
                                        Conditions</a></li>
                                <li class="text-mob-center"><a
                                        href="https://snatika.com/terms-and-conditions">Sitemap</a>
                                </li>
                                <li class="text-mob-center"><a href="https://snatika.com/contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <style>
                        .footers {
                            position: fixed;
                            left: 0;
                            bottom: 0px;
                            width: 100%;
                            background-color: #fff;
                            padding: 20px 0px;
                            color: #000;
                            text-align: center;
                            z-index: 1;
                        }

                        .leftborder {
                            border-left: 2px solid #444;
                        }
                    </style>


                </div>
            </div>
        </div>
        <div class="footer-notes">
            <p>COPYRIGHT © ALL RIGHTS RESERVED.</p>
        </div>
    </section>

    <script src="https://snatika.com/public/frontend_assets/js/jquery.min.js"></script>
    <script src="https://snatika.com/public/frontend_assets/js/bootstrap.min.js"></script>
    <script src="https://snatika.com/public/frontend_assets/js/script.js"></script>
    <script src="https://snatika.com/public/frontend_assets/js/owl.carousel.min.js"></script>
</body>

</html>
