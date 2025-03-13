<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <?php
        include_once("link/link.php");
    ?>
</head>

<body>
<?php
    include_once("header.php");
    ?>    
    <!-- teeth_white section start from here -->
    <div class="container-fluid mt-5  border border-danger">
        <h1 class="text-dark text-center mt-4 mb-2 bg-light py-4">Tooth-Colored Filling​</h1>
        <hr class="dropdown-divider">
        <div class="row row-cols-md-2 row-cols-lg-6 row-cols-sm-12 col-12">
            <div class="col-6 row-cols-md-1 row-cols-sm-1 row-cols-lg-1">
                <h1>Tooth-Colored Filling​​</h1>
                <p>Composite fillings, also known as tooth-colored fillings, are dental restorations that are
                    intended to be inconspicuous and natural-looking. They combine in with the teeth and appear
                    more organic than amalgam fillings, which are darker and more noticeable to others.

                    Composite fillings are made of ceramic and plastic compounds that bond to the teeth
                    chemically. They can be used to repair chipped or broken teeth as well as to fill in decayed
                    areas of the teeth. Composite restorations are commonly used by dentists to treat teeth near
                    the front of the mouth because they are more visible when patients smile.

                    Broken teeth, stained teeth, black gums, hideous gaps, or crooked teeth; our cosmetic
                    dentistry can fix it all in a flash.</p>

                <img src="image/tooth_colored.webp" class="img-fluid mb-2" style="width: 700px;height: 300px;">
                <h3>Tooth-Colored Filling​​ Treatment Planning</h3>
                <ol>
                    <li>Porcelain laminates</li>
                    <li>Whitening the teeth</li>
                    <li>Tooth-colored fillings, that combine with the natural color of teeth.</li>
                </ol>
                <p>We know that getting a cavity filled can be a stressful experience for many adults and
                    children, but we do our best to accommodate you with a safe, friendly, and comfortable
                    atmosphere. At City Dental Hospital, we have many options accessible to treat anxious
                    patients.</p><br>
                <p>You can rely on our professionals for an effective and long-lasting filling. We use the most
                    advanced state-of-the-art equipment and materials, so your teeth get the highest quality
                    care they deserve.

                    If your tooth has become more sensitive or you think it is time for a filling to be
                    replaced, visit us.</p>
            </div>  
            <div class="col-6 row-cols-md-1 row-cols-sm-1 row-cols-lg-1">
                <form action="smilemake.php" id="form1" method="post">
                    <h3 class="text-center text-dark mt-2">GET A CONSULTATION</h3>
                    <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                        <input type="text" class="form-control" id="fn" placeholder="Fullname" name="fn">
                        <label for="floatingInput">Fullname</label>
                    </div>
                    <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                        <input type="email" class="form-control" id="email" placeholder="Username" name="email">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                        <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pswd">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                        <input type="number" class="form-control" id="mn" placeholder="Phone no" name="mn">
                        <label for="floatingInput">Mobile Number</label>
                    </div>

                    <div class="form-floating d-block-md-col-8 d-block-lg-col-8">
                        <input type="text" class="form-control" id="cn_err" placeholder="City" name="cn">
                        <label for="floatingInput">City</label>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="./hospital/index.php" class="btn btn-outline-primary 
                        btn-success mb-3 mt-3 text-white col-12 text-decoration-none text-white">BOOK A CONSULTATION </a>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12 border border-info mt-2 mb-2 ms-2 bg-light">
                        <h3 class="text-center bg-light">Our Dental Services</h3>
                        <hr class="dropdown-divider">
                        <h5><a href="implant.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i> Dental
                                Implant</a></h5>
                        <h5><a href="fullmouth.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i> Full
                                Mouth Rehabilitation</a></h5>
                        <h5><a href="invisible.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Invisible Aligners</a></h5>
                        <h5><a href="smilemake.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Smile Makeover</a></h5>
                        <h5><a href="crowns.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Crowns And Bridges</a></h5>
                        <h5><a href="teeth_white.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Teeth Whitening</a></h5>
                        <h5><a href="braces.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Braces Treatment</a></h5>
                        <h5><a href="tooth_colored.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                Tooth-Colored Filling</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <hr class="dropdown-divider">
        <div class="container-fluid">
            <h2 class="text-center">Before and After Filling Colored Treatment</h2>
            <div class="row justify-content-evenly">
                <div class="col-md-12 mt-2 mb-3">
                    <img src="image/braces1.webp" class="img-fluid" style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces2.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces3.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces4.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces5.webp" class="img-fluid" style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces6.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces7.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">
                    <img src="image/braces8.webp" class="img-fluid " style="width: 350px;height: 200px;margin: 6px;">

                </div>
                <hr class="dropdown-divider">

            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-center bg-info">
                            <h5><i class="bi bi-telephone-fill"></i> <a href="#"
                                    class="text-decoration-none">Call:+91-81000-42000</a></h5>
                            <button type="button" class="btn btn-outline-primary btn-success btn-lg mb-2"><a
                                    href="./hospital/index.php" class="text-decoration-none text-white">Book an
                                    Appointment</a></button>
                        </div>
                    </div>
                </div>
                <div class="album py-5 bg-body-tertiary">
                    <div class="container-fluid mt-4  bg-light">
                        <div class="container-fluid treatment-process">
                            <div class="row">
                                <h1 class="text-dark text-center mt-3 mb-3">Procedure and Process Treatment
                                </h1>
                                <p class="text-center">We are committed to provide the best quality, comfort and
                                    care when
                                    you are
                                    having any dental problems.
                                    <br> We also promise that we will explain what procedures and processes were
                                    doing.
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <div class="card mb-3" style="width: 18rem;">
                                            <img src="image/checkup.webp" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">check up</h5>
                                                <p class="card-text">Our dentists will do a routine checkup for
                                                    dental issue
                                                    which
                                                    is
                                                    essential for proper treatment.</p>
                                                <a href="#"
                                                    class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 " style="width: 18rem;">
                                            <img src="image/explanation.webp" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">Explanation</h5>
                                                <p class="card-text">City Dental's Expert team of doctors will
                                                    understand
                                                    your
                                                    problem
                                                    and give you a customised solution.</p>
                                                <a href="#"
                                                    class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3" style="width: 18rem;">
                                            <img src="image/treatment.webp" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">Treatment</h5>
                                                <p class="card-text">After analyzing patient's dental condition,
                                                    we
                                                    recommend
                                                    treatment
                                                    to patient to prevent.</p>
                                                <a href="#"
                                                    class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3" style="width: 18rem;">
                                            <img src="image/follow-up.webp" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">Follow-Up</h5>
                                                <p class="card-text">We want all our patients to be 100%
                                                    satisfied, our team
                                                    will be
                                                    in
                                                    touch with you for any queries.</p>
                                                <a href="#"
                                                    class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- teeth_colored section ends from here -->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>