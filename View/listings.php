<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ImmoConnect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="public//img/favicon.png" rel="icon">
    <link href="public//img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Property</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="Type">Keyword</label>
                            <input type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <select class="form-control form-control-lg form-control-a" id="Type">
                                <option>All Type</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select class="form-control form-control-lg form-control-a" id="city">
                                <option>All City</option>
                                <option>Agadir</option>
                                <option>Casablanca</option>
                                <option>Errachidia</option>
                                <option>Youssoufia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bedrooms">Bedrooms</label>
                            <select class="form-control form-control-lg form-control-a" id="bedrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="garages">Garages</label>
                            <select class="form-control form-control-lg form-control-a" id="garages">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms</label>
                            <select class="form-control form-control-lg form-control-a" id="bathrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="price">Min Price</label>
                            <select class="form-control form-control-lg form-control-a" id="price">
                                <option>Unlimite</option>
                                <option>50,000 DH</option>
                                <option>100,000 DH</option>
                                <option>150,000 DH</option>
                                <option>200,000 DH</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-a">Search Property</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="home">Immo<span class="color-b">Connect</span></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listings">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single" style="color:#202c8f;">43 Agadir Bay</h1>
                        <span class="color-text-a">Agadir, IL 606543</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="listings">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                43 Agadir Bay
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="public/img/slide-2.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="public/img/slide-3.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="public/img/slide-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">DH</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">1500000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d" style="color:#202c8f;">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>1134</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>Agadir, IL 606543</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>House</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span>For Sale</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>2</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d" style="color:#202c8f;">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    This charming four-bedroom apartment is located in the heart of downtown. The
                                    open-concept living area features
                                    hardwood floors and large windows, providing plenty of natural light. The modern
                                    kitchen is equipped with stainless
                                    steel appliances and granite countertops.
                                    The spacious bedrooms offer ample closet space, and the updated bathroom includes a
                                    luxurious soaking tub.
                                    Enjoy stunning city views from your private balcony.
                                </p>
                                <p class="description color-text-a no-margin">
                                    The building amenities include a fitness center, rooftop terrace, and 24-hour
                                    concierge service. With secure
                                    parking and easy access to major highways, this property combines comfort and
                                    convenience.
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d" style="color:#202c8f;">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <li>Balcony</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Cable Tv</li>
                                    <li>Deck</li>
                                    <li>Tennis Courts</li>
                                    <li>Internet</li>
                                    <li>Parking</li>
                                    <li>Sun Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                                role="tab" aria-controls="pills-video" aria-selected="true"
                                style="color:#202c8f;">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                                aria-controls="pills-plans" aria-selected="false" style="color:#202c8f;">Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                                aria-controls="pills-map" aria-selected="false" style="color:#202c8f;">location</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                            aria-labelledby="pills-video-tab"> <!-- /73221098 -->
                            <iframe src="https://player.vimeo.com/video/221317209" width="100%" height="460"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="public/img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.257567636351!2d-9.587259624583687!3d30.400433374746292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b782e697d3d5%3A0x1cbc6380af2c996f!2sR%C3%A9sidence%20Agadir%20Bay%201!5e0!3m2!1sen!2sus!4v1703885406059!5m2!1sen!2sus"
                                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d" style="color:#202c8f;">Contact Seller</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="public/img/about-21.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <h4 class="title-agent">Anis Jabir</h4>
                                <p class="color-text-a">
                                    I'm Anissa Jabir, a dedicated real estate professional with a passion for connecting
                                    clients with their dream homes.
                                    With years of experience in the industry, I bring a wealth of knowledge and a
                                    commitment to providing
                                    personalized service.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">+212 6 24 56 89 32</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">+212 6 87 37 87 37</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">a.jabir@example.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">Anissa.ma</span>
                                    </li>
                                </ul>
                                <div class="socials-a">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="property-contact">
                                <form class="form-a">
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-a"
                                                    id="inputName" placeholder="Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-a"
                                                    id="inputEmail1" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <textarea id="textMessage" class="form-control" placeholder="Comment *"
                                                    name="message" cols="45" rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b mt-5">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1"> -->
                <div class="title-box-d">
                    <h3 class="title-d" style="color:#202c8f;">Comments (3)</h3>
                </div>
                <div class="box-comments">
                    <ul class="list-comments">
                        <li>
                            <div class="comment-avatar">
                                <img src="public/img/author-1.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Imad Sefrioui</h4>
                                <span>18 Sep 2023</span>
                                <p class="comment-description">
                                    I recently had the pleasure of visiting this amazing property, and I must say,
                                    it exceeded all my expectations!
                                    The attention to detail in the design, the spacious layout, and the stunning
                                    views make it a dream home.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                        <li class="comment-children">
                            <div class="comment-avatar">
                                <img src="public/img/about-22.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Anis Jabir</h4>
                                <span>18 Sep 2023</span>
                                <p class="comment-description">
                                    Thank you so much for your kind words, Imad! It was a pleasure showing you the
                                    property and I'm thrilled to hear
                                    that it resonated with you.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                        <li>
                            <div class="comment-avatar">
                                <img src="public/img/author-1.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Imad Sefrioui</h4>
                                <span>18 Sep 2023</span>
                                <p class="comment-description">
                                    I've been sharing my positive experience with friends and family, and they're
                                    eager to see it for themselves.
                                    Are there upcoming open houses or additional details I can provide them? Also,
                                    I'd love to discuss the next steps in
                                    the buying process.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form-comments">
                    <div class="title-box-d">
                        <h3 class="title-d" style="color:#202c8f;"> Leave a Comment</h3>
                    </div>
                    <form class="form-a">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="inputName">Enter name</label>
                                    <input type="text" class="form-control form-control-lg form-control-a"
                                        id="inputName" placeholder="Name *" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="textMessage">Enter message</label>
                                    <textarea id="textMessage" class="form-control" placeholder="Comment *"
                                        name="message" cols="45" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-a">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

    <!--/ footer Star /-->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand" style="color:#202c8f;">ImmoConnect</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                Join our community of homeowners, investors, and real estate enthusiasts.
                                Discover the
                                perfect property that aligns
                                with your lifestyle and aspirations. Start your real estate adventure with
                                us today.
                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <span class="color-text-a">Phone .</span> contact@example.com
                                </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email .</span> +212 6 59 97 55 37
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand" style="color:#202c8f;">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand" style="color:#202c8f;">International sites</h3>
                        </div>
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">China</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Listings</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" style="color:#202c8f;">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" style="color:#202c8f;">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" style="color:#202c8f;">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" style="color:#202c8f;">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" style="color:#202c8f;">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">ImmoConnect</span> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="public/lib/jquery/jquery.min.js"></script>
    <script src="public/lib/jquery/jquery-migrate.min.js"></script>
    <script src="public/lib/popper/popper.min.js"></script>
    <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="public/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="public/js/main.js"></script>

</body>

</html>