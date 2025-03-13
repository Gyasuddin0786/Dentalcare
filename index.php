<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    session_destroy();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <?php
        include_once("link/link.php");
    ?>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    body {
        background: #eee;
        font-family: 'Ubuntu', sans-serif
    }

    .box {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px
    }

    .our-services {
        margin-top: 75px;
        padding-bottom: 30px;
        padding: 0 60px;
        min-height: 198px;
        text-align: center;
        border-radius: 10px;
        background-color: #fff;
        transition: all .4s ease-in-out;
        box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
    }

    .our-services .icon {
        margin-bottom: -21px;
        transform: translateY(-50%);
    }

    .our-services:hover h4,
    .our-services:hover p {
        color: #fff
    }

    .settings:hover {
        box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
    }
</style>

<body>
    <?php
    include_once("header.php");
    ?>
    <!-- home section starts from here -->
    <div id="carouselExampleCaptions" class="carousel slide-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/home_01.png" class="d-block w-100" class="img-fluid"
                    style="height: 730px;margin-top: 5px;">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-dark">Caring for you & your smile</h2>
                    <p class="text-dark fs-3">With City Dental Care – Dental Clinic in Rajkot take the first
                        step towards a better smile and oral health.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="image/home_03.jpg" class="d-block w-100" class="img-fluid"
                    style="height: 730px;margin-top: 5px;">
                <div class="carousel-caption  d-md-block">
                    <h2 class="text-dark">Book your Appointment</h2>
                    <p class="text-dark fs-3">Take the first step towards a healthy smile, book your appointment
                        today!</p>
                    <button type="button" class="btn btn-outline-primary btn-success text-white"><a
                            href="./hospital/index.php" class="text-decoration-none text-white">Book an
                            Appointment</a></button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="image/home_05.png" class="d-block w-100" class="img-fluid"
                    style="height: 730px;margin-top: 5px;">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-dark">Caring for all your family’s dental needs.</h2>
                    <p class="text-dark fs-3">At City Dental Hospital, the Best Dental Hospital in India, we
                        offer flexible timing, individual attention, affordability, accurate explanation of
                        treatments, and excellent patient care.</p>
                </div>
            </div>

        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>
    <!-- home section ends from here -->

    <!-- about section starts from here -->
    <!-- <div class="album py-5 bg-body-tertiary"> -->
    <div class="container-fluid border border-danger mt-2 bg-light">
        <h3 class="text-dark fs-1 text-center mb-3 mt-3 mb-1 py-3">About Dental Care</h3>
        <hr class="dropdown-divider text-dark fs-1">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
            <div class="col-md-4 col-12 mt-1 bg-light">
                <div class="col-12 d-md-none d-block mt-1">
                    <img src="image/fullmouth.webp" style="height: 400px;width: 1486px;" class="img-fluid">
                </div>
                <h1 class="fs-1">Didn't find The Answer?</h1>
                <h4 class="fs-5">Please, call our customer service or get an appointment with our doctor</h4>
                <p class="fs-5">Dental Hospital is a leading Dental Implant Clinic in Gujarat, India. We focus
                    on
                    providing the
                    very best treatment & protocols for dental implant solutions, full smile makeovers, crowns &
                    bridges
                    almost with all other specializations of dentistry with our expert team & facilities.</p>
                <h4 class="fs-2 text-info">Call<a href="" class="text-info fs-2"
                        style="text-decoration: none;">:+91-81000-42000</a></h4>
                <button type="submit"
                    class="btn btn-outline-success btn-primary col-md-8 col-xs-6 fs-3 mb-2 text-white"><a
                        href="./hospital/index.php" class="text-decoration-none text-white
                                ">Book an
                        Appointment</a></button>
            </div>
            <div class="d-md-block d-none col-md-8 mt-1">
                <img src="image/fullmouth.webp" style="height: 550px;width: 1000px;" class="img-fluid">
            </div>
        </div>
        <hr class="dropdown-divider">
        <div class="container-fluid">
            <div class="container-fluid mb-5">
                <div class="text-center mt-5">
                    </div>
                    <div class="row">
                        <h2 class="text-dark text-center mt-2 mb-3">Our Services</h2>
                        <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/implant.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Dental Implant</h4>
                                <p>A Dental Implant is an artificial tooth and is an ideal
                                    alternativefor
                                    your tooth loss problems. Gain the best dental implants in India at City
                                    Dental
                                    Hospital the
                                    best Dental hospital in India for Dental Implants treatment at the Best
                                    Dental Clinic Dental Hospital</p>
                                    <a href="https://www.adi.org.uk/_userfiles/pages/files/a-dentists-guide-to-implantology.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/full.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Full Rehabilitation</h4>
                                <p>Full Mouth Rehabilitation is a combination of surgical
                                        processes
                                        that
                                        correct imperfections in bite position and magnifies your smile. If you have
                                        short,
                                        worn
                                        teeth or those that are cracked or broken, no difference between Real
                                        teeth and artificial teeth.</p>
                                        <a href="https://egyankosh.ac.in/bitstream/123456789/33288/1/Unit-1.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/invisi.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Invisible Aligners</h4>
                                <p>Invisible aligners take a modern approach to straightening
                                        teeth,
                                        using
                                        a
                                        custom-made series of aligners created for you. Our aligner trays are made of
                                        smooth,
                                        comfortable, and virtually invisible plastic or wear over your teeth.
                                        is the specialist in Providing the best Aligners in India

                                        </p>
                                        <a href="https://jamdsr.com/uploadfiles/11.Invisalign.20151129054758.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/crown.png"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Crowns & Bridges</h4>
                                <p>City Dental Hospital is the top Dental Hospital in Gujarat,
                                        India.
                                        Here, we
                                        offer flexible timing, individualized attention, affordability, accurate
                                        explanation
                                        of
                                        treatments, and excellent patient care.We strictly believe.</p>
                                        <a href="http://dentistry.uokerbala.edu.iq/wp/wp-content/uploads/2018/08/Crown-and-Bridge-2.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/whitening.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Teeth Whitening</h4>
                                <p>Teeth with any other color than white are considered to be
                                        unhealthy
                                        and
                                        unclean. While there are many reasons for that are attributed to teeth
                                        discoloration
                                        the
                                        only fitting solution is teeth whiteningand other methods are used.</p>
                                        <a href="https://www.dentallearning.org/course/ToothWhitening/ToothWhitening.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/pendetric.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Pediatric Dentistry</h4>
                                <p>We all know kids are afraid to visit dentists. It is because
                                        our
                                        elders
                                        have scared them with stories of pain caused due to surgery. City Dental
                                        Hospital -
                                        Dental
                                        Clinic in Rajkot offer a comfortable atmosphere that pacifies the kids.</p>
                                        <a href="https://www.aapd.org/globalassets/media/policies_guidelines/i_overview.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/braces.png"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Braces Treatment</h4>
                                <p>Wearing braces has never been so accessible & comfortable with TheBest
                                        Dental Hospital in India- City Dental Hospital. With modern advances in
                                        technology,braces
                                        treatments can be achieved in a concise periodDentists.</p>
                                        <a href="https://norwestortho.com.au/wp-content/uploads/2020/10/NorwestOrtho-InfoBooklet_Braces-1.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/colorfill.png"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Tooth-Colored Filling</h4>
                                <p>Composite fillings, also known as tooth-colored fillings, are
                                        dental
                                        restorations that are intended to be inconspicuous and natural-looking.
                                        Wearing braces has never been so accessible & comfortable.organic than amalgam fillings.</p>
                                        <a href="https://www.ladnerdental.com/storage/app/media/tooth-colored-filling.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="image/wisdom.webp"
                                        style="width: 60px;height: 80px;border-radius: 10%; background-color:darkgoldenrod;" class="img-fluid"> </div>
                                <h4>Wisdom Tooth Removal</h4>
                                <p>
                                Wisdom Tooth Removal
                                Root canal treatment is administered to get rid of the infected pulp 
                                of a tooth and to protect
                                the decontaminated tooth from future microbial invasion. City Dental Hospital - 
                                Dental Clinic in Rajkot.</p>
                                <a href="https://www.baos.org.uk/wp-content/uploads/2019/03/Removal-of-Wisdom-Teeth-final.pdf" class="btn btn-outline-success text-white btn-primary  col-6 mb-3">Learn more</a>

                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- work process starts from here -->
            <hr class="dropdown-divider text-dark">
            <div class="container-fluid">
                <div class="container-fluid work-process">
                    <div class="row">
                        <h2 class="text-dark text-center mb-4 mt-2">Work process</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                            <div class="col-lg-3 justify-content-evenly">
                                <div class="">
                                    <img src="image/work process-1.png" class="img-fluid mb-2">
                                    <h3 class="text-dark fs-3">Dental Implant</h3>
                                    <p class="text-secondary fs-5">A Dental Implant is an artificial tooth and
                                        is an ideal alternativefor your tooth loss problems Gain the best dental
                                        implants in India for Dental Implants.</p>
                                </div>
                            </div>
                            <div class="">
                                <img src="image/work process-2.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Full Rehabilitation</h3>
                                <p class="text-secondary fs-5">Full Mouth Rehabilitation is a combination of
                                    surgical processes that correct imperfections in bite position and magnifies
                                    your smile.</p>
                            </div>
                            <div class="">
                                <img src="image/work process-3.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Invisible Aligners</h3>
                                <p class="text-secondary fs-5">Invisible aligners take a modern approach to
                                    straightening teeth, using a custom-made series of aligners created for you.
                                </p>
                            </div>
                            <div class="">
                                <img src="image/work process-4.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Crowns & Bridges</h3>
                                <p class="text-secondary fs-5">City Dental Hospital is the top Dental Hospital
                                    in Gujarat, India. Here, we offer flexible timing, individualized attention.
                                </p>
                            </div>
                            <div class="">
                                <img src="image/work process-5.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Teeth Whitening</h3>
                                <p class="text-secondary fs-5">Teeth with any other color than white are
                                    considered to be unhealthy and unclean. While there are many reasons for
                                    that are attributed to teeth discoloration the only fitting solution.</p>
                            </div>
                            <div class="">
                                <img src="image/work process-6.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Pendiatric dentistry</h3>
                                <p class="text-secondary fs-5">We all know kids are afraid to visit dentists. It
                                    is because our elders have scared them with stories of pain caused due to
                                    surgeryDental Clinic in Rajkot offer a comfortable atmosphere.</p>
                            </div>
                            <div class="">
                                <img src="image/work process-7.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Braces Treatment</h3>
                                <p class="text-secondary fs-5">Wearing braces has never been so accessible &
                                    comfortable with TheBest Dental Hospital in India- City Dental Hospital.
                                    With modern advances in technology periodDentists.</p>
                            </div>
                            <div class="">
                                <img src="image/work process-8.png" class="img-fluid mb-2">
                                <h3 class="text-dark fs-3">Tooth-Colored Filling</h3>
                                <p class="text-secondary fs-5">Composite fillings, also known as tooth-colored
                                    fillings, are dental restorations that are intended to be inconspicuous and
                                    natural-looking. They combine in with the teeth organic than amalgam
                                    fillings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work process starts from here -->
    <?php
    include_once("footer.php");
?>

</body>

</html>