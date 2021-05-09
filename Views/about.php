<?PHP
include "../Controller/offer1.php";


$offer1=new offer1();
$list=$offer1->afficherOffer();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css1/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css1/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css1/style.css">
    <meta charset="UTF-8">
    <!-- Site favicon -->

    <!-- Google Font -->





    <script type="text/javascript">

    </script>

    <style>

        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #dd3d36;
            color:#4d84a4;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap{
            padding: 10px;
            margin: 0 0 20px 0;
            background: #4d84a4;
            color:#4d84a4;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        table {
            border-collapse: collapse;
            width: 100%;
            table-layout: auto;
        }
        th {
            background-color: #4e9693;
            color: white;
            padding: 8px
        }
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 6px solid #4d84a4;
        }

    </style>


    <script type="text/javascript">
    </script>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ">
                    <div class="site-logo">
                        <a href="index.html" class="font-weight-bold">
                            <img src="images1/logo.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li><a href="index.html" class="nav-link">Home</a></li>
                            <li class="active"><a href="about.html" class="nav-link">About The Offers</a></li>
                            <li><a href="trips.php" class="nav-link">About The Promotions</a></li>
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('images1/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-5" >
                        <h1 class="mb-3 text-white">About Our Offers</h1>
                        <p>We provide for our community amazing offers to experience camping at its finest</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading-39101 mb-5">
                        <span class="backdrop">Story</span>
                        <span class="subtitle-39191">Discover Story</span>
                        <h3>Our Story</h3>
                    </div>
                    <p>we always try during national holidays or anything that celebrates life to draw a smile on our costumers with our big offers </p>
                    <p> with every offer comes a story and let the costumer experience the true joy of camping</p>
                </div>

                <div class="col-md-6" >
                    <img src="images1/traveler.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="site-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 order-2 ml-auto">
                    <div class="heading-39101 mb-5">
                        <span class="backdrop">Mission</span>
                        <span class="subtitle-39191">Our Mission</span>
                        <h3>Our Mission</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quae expedita fugiat quo incidunt, possimus temporibus aperiam eum, quaerat sapiente.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis enim a pariatur molestiae.</p>
                </div>
                <div class="col-md-6 order-1" >
                    <img src="trips-master/images/hero_1.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

<div class="ts-main-content">


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">


                <hr>

                <div class="hr-dashed"></div>
                <div class="well row pt-2x pb-3x bk-light text-center">
                    <form  method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                        <div class="form-group">


                            <div class="content-wrapper">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="page-title">List of All The Offers</h2>
                                            <!-- basic table  Start -->
                                            <div class="pd-20 card-box mb-30">
                                                <div class="clearfix mb-20">
                                                    <div class="pull-center">

                                                        <div class="pull-center">

                                                            <table class="center" >

                                                                <tr>
                                                                    <th class="table-plus datatable-nosort">Offer ID</th>
                                                                    <th>Offer Name</th>
                                                                    <th>Offer Type</th>
                                                                    <th>Offer Date</th>
                                                                    <th>Offer Duration</th>

                                                                </tr>

                                                                <?php
                                                                foreach($list as $offer){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $offer['id_offer']; ?></td>
                                                                    <td><?php echo $offer['nom_offer']; ?></td>
                                                                    <td><?php echo $offer['type_offer']; ?></td>
                                                                    <td><?php echo $offer['date_offer']; ?></td>
                                                                    <td><?php echo $offer['duree_offer']; ?></td>







<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>


</body>

</html>
<?php
    }
    ?>