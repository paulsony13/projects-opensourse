<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Antique Shop | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body bgcolor="grey">

    <div class="main-content-wrapper d-flex clearfix">

        <?php include("header.php"); ?>

        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid mt-30">

                <section class="breadcrumb breadcrumb_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb_iner">
                                    <div class="breadcrumb_iner_item text-center">
                                        <h2 style="color: #fbb710;" >Contact Us</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-section">
                    <div class="container">
                        <div class="d-none d-sm-block mb-5 pb-4">
                            <div id="map" style="height: 480px;"></div>
                            <script>
                                function initMap() {
                                    var uluru = {
                                        lat: -25.363,
                                        lng: 131.044
                                    };
                                    var grayStyles = [{
                                        featureType: "all",
                                        stylers: [{
                                            saturation: -90
                                        }, {
                                            lightness: 50
                                        }]
                                    }, {
                                        elementType: 'labels.text.fill',
                                        stylers: [{
                                            color: '#ccdee9'
                                        }]
                                    }];
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {
                                            lat: -31.197,
                                            lng: 150.744
                                        },
                                        zoom: 9,
                                        styles: grayStyles,
                                        scrollwheel: false
                                    });
                                }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                            </script>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                                    <div class="media-body">
                                        <p>If there are any questions regarding this organization or products  you may contact us using the information below:</p>

                                    <h3 style="color: #fbb710;">Registered Office
                                     Bizzy Ladies Boutique Pvt. Ltd.,H1, Heavenly Plaza,Civil Line Road,Vazhakkala,Kakkanad, Ernakulam ,Kerala, India-682021</h3>
                                        <p>For communication</p>
                                    </div>
                                </div>
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                    <div class="media-body">
                                        <h3 style="color: #fbb710;">Tel: +91 484 2332288, +91-9895242841</h3>
                                        <p>Mon to Fri 9am to 6pm</p>
                                    </div>
                                </div>
                                <div class="media contact-info">
                                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                                    <div class="media-body">
                                        <h3 style="color: #fbb710;">E-mail: info@buzzywomen.com</h3>
                                        <p>Send us your query anytime!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

  <?php include("footer.php"); ?>


    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>