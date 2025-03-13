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
        <!-- crown section start from here -->
            <div class="container-fluid mt-5  border border-danger">
                <h1 class="text-dark text-center mt-4 mb-2 bg-light p-4">Crowns And Bridges</h1>
                <hr class="dropdown-divider">
                <div class="row row-cols-md-2 row-cols-lg-6 row-cols-sm-12 col-12">
                    <div class="col-6 row-cols-md-1 row-cols-sm-1 row-cols-lg-1">
                        <h1>Crowns And Bridges</h1>
                        <p>Crowns and most bridges are both fixed prosthetic devices. Unlike removable devices such as
                            dentures, which can be removed and cleaned on a daily basis, crowns and bridges are cemented
                            onto existing teeth or implants and can only be removed by a dentist.</p>
                        <h4>How do Crowns Work?</h4>
                        <p>A crown is a dental restoration that completely covers or “caps” a damaged tooth. A crown can
                            be used to improve the appearance, shape, or alignment of a damaged tooth in addition to
                            strengthening it.</p>
                        <h4>How do Bridges Work?</h4>
                        <p>If your mouth is missing one or more teeth, a bridge may be recommended. Missing teeth leave
                            gaps that eventually cause the remaining teeth to rotate or shift into the empty spaces,
                            resulting in a bad bite. Gum disease and temporomandibular joint (TMJ) disorders can result
                            from the imbalance caused by missing teeth.</p>
                        <img src="image/crowna-n-bridges.webp" class="img-fluid mb-2" style="width: 700px;height: 350px;">
                    </div>
                    <div class="col-6 row-cols-md-1 row-cols-sm-1 row-cols-lg-1">
                        <form action="smilemake.php" id="form1" method="post">
                        <h4 class="text-center text-dark mt-2">GET A CONSULTATION</h4>
                        <div class="form-floating mb-3 d-block-md-col-12 d-block-lg-col-8">
                            <input type="text" class="form-control" id="fn" placeholder="Fullname" name="fn">
                            <label for="floatingInput">Fullname</label>
                        </div>
                        <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                            <input type="email" class="form-control" id="email" placeholder="Username" name="email">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                        <input type="password" class="form-control" id="floatingPassword"
                            placeholder="Password" name="pswd">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3 d-block-md-col-8 d-block-lg-col-8">
                            <input type="number" class="form-control" id="mn" placeholder="Mobile no" name="mn">
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
                                <h5><a href="implant.php" class="text-decoration-none"><i
                                            class="bi bi-arrow-right"></i> Dental Implant</a></h5>
                                <h5><a href="fullmouth.php" class="text-decoration-none"><i
                                            class="bi bi-arrow-right"></i> Full Mouth Rehabilitation</a></h5>
                                <h5><a href="invisible.php" class="text-decoration-none"><i
                                            class="bi bi-arrow-right"></i> Invisible Aligners</a></h5>
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
                <div class="container-fluid bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center mt-2 mb-2">Crowns and Bridges Treatment Planning</h2>
                            <p>Getting a bridge usually requires three dental visits at City Dental Hospital. While the
                                teeth are numb, the two anchoring teeth are prepared by removing a portion of the enamel
                                to accommodate the crown. Next, our professionals make a highly accurate impression that
                                is sent to the dental laboratory where the bridge will be fabricated. In addition, we
                                make a temporary bridge and worn for about three weeks until our dentists plan for your
                                next appointment.
                                At your second visit, the bridge foundation, known as the framework, will be carefully
                                checked to ensure a proper fit by our experts. A shade is decided in order to secure an
                                appropriate match of the porcelain with your adjacent teeth. The temporary bridge is
                                cemented back in your mouth.
                                At the third visit, we insert the permanent bridge. It is inserted, adjusted, polished,
                                and inserted with permanent cement.
                                We provide you with the necessary instructions at the conclusion of your treatment that
                                include proper brushing, flossing, and regular dental visits that will aid in the life
                                of your new permanent bridge.</p>
                            <div class="row">
                                <div class="col-md-12 text-center bg-info">
                                    <h5><i class="bi bi-telephone-fill"></i> <a href="#" class="text-decoration-none">Call:+91-81000-42000</a></h5>
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
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                                            <div class="col">
                                                <div class="card mb-3" style="width: 18rem;">
                                                    <img src="image/checkup.webp" class="card-img-top" alt="...">
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
                                                    <img src="image/explanation.webp" class="card-img-top" alt="...">
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
                                                    <img src="image/treatment.webp" class="card-img-top" alt="...">
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
                                                    <img src="image/follow-up.webp" class="card-img-top" alt="...">
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
         <!-- crown section ends from here -->
    <?php
        include_once("footer.php");
    ?>
</body>

</html>