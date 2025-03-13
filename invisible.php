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
         include ('header.php');
    ?>
    <!-- invisible section starts from here -->
        <div class="container-fluid border border-danger bg-light mt-5">
            <h1 class="text-center mt-5 mb-3">Invisible aligners</h1>
            <hr class="dropdown-divider">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/invisible_01.webp" class="img-fluid mb-2" style="width: 600px;height: 400px;">
                    <p>Invisible aligners take a modern approach to straightening teeth, using a custom-made series of
                        aligners created for you. Our aligner trays are made of smooth, comfortable, and virtually
                        invisible plastic that you simply wear over your teeth. Our invisible aligner trays will
                        gradually and gently move your teeth into place, based on the exact movements. There are no
                        metal braces to attach and no wires to tighten.</p>

                    <img src="image/invisible1.webp" class="img-fluid mb-2" style="width: 600px;height: 200px;">
                    <p>Invisible Aligners have been a blessing for fixing crooked teeth. The Invisible Aligners are
                        undetectable, flexible, and reasonably priced! these aligners are made with the help of the
                        latest European innovations to correct irregular teeth.

                        Orthodontists create customized Invisible Aligners for your teeth to achieve the desired dental
                        movements and shifts. They are transparent and designed to be as flexible and comfortable as
                        possible.

                        It is accomplished through digitally capturing and processing the patient’s dental impression
                        using specialized software. Using this impression, a cutting-edge 3D printer and thermoforming
                        machine fabricate the trays according to the treatment design, guaranteeing a perfect fit and
                        feel.</p>

                </div>
                <div class="col-md-6">
                    <form  id="form1" action="smilemake.php" method="post">
                    <div class="col-12 row-cols-md-1 row-cols-sm-1 row-cols-lg-1">
                        <h4 class="text-center text-dark mt-2">GET A CONSULTATION</h4>
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
                            <label for="floatingInput">Password</label>
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
                        <div class="container-fluid border border-info mb-2 bg-white">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Our Dental Services</h3>
                                    <hr class="dropdown-divider">
                                    <h5><a href="implant.php" class="text-decoration-none"><i
                                                class="bi bi-arrow-right"></i> Dental Implant</a></h5>
                                    <h5><a href="fullmouth.php" class="text-decoration-none"><i
                                                class="bi bi-arrow-right"></i> Full Mouth Rehabilitation</a></h5>
                                    <h5><a href="invisible.php" class="text-decoration-none"><i
                                                class="bi bi-arrow-right"></i> Invisible Aligners</a></h5>
                                    <h5><a href="smilemake.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i> Smile
                                            Makeover</a></h5>
                                    <h5><a href="crowns.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i> Crowns
                                            And Bridges</a></h5>
                                    <h5><a href="teeth_white.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i> Teeth
                                            Whitening</a></h5>
                                    <h5><a href="braces.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                            Braces Treatment</a></h5>
                                    <h5><a href="tooth_colored.php" class="text-decoration-none"><i class="bi bi-arrow-right"></i>
                                            Tooth-Colored Filling</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-light mt-3">
                    <hr class="dropdown-divider">

                    <div class="col-12">
                        <h2 class="text-center">How Does Invisible Aligners works?</h2>
                        <img src="image/invisible_02.png" class="img-fluid mb-2" style="width: 1500px;height: 400px;">
                    </div>
                    <div class="row justify-content-evenly">
                        <div class="col-md-6">
                            <ul>
                                <li>After taking a quick 3D scan of your teeth, Our <a href="#"
                                        class="text-decoration-none">Expert Dentists</a> will
                                    comprehend your situation and guide you through the procedure</li>
                                <li>Our expert orthodontist will make a set of plastic aligners customized for you using
                                    the
                                    3D scan of your teeth. Your teeth will gradually shift and move into the desired
                                    positions under the pressure of these aligners.</li>
                                <li>Depending on the instruction given by your orthodontist, you may want to change to a
                                    new
                                    set of aligners every week or two. You will typically need to wear the aligners for
                                    20
                                    to 22 hours.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="image/invisible3.webp" class="img-fluid mb-3" style="width: 600px;height: 200px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr class="dropdown-divider">

                    <h2 class="text-center">Invisible Aligners Vs Conventional Braces</h2>
                    <div class="col-md-6 bg-light">
                        <h3 class="m-2">Invisible Aligners</h3>
                        <ul>
                            <li>In contrast to traditional metal braces, clear plastic Invisible aligners are virtually
                                undetectable from a distance. One of the main reasons why so many people prefer
                                transparent aligners to braces is their discrete design.</li>
                            <li>Clear aligners will be easy to fix and simple to remove, unlike Conventional braces that
                                require the intervention of an orthodontist. They also fit flush against teeth.
                                Invisible aligners generally reduces pain inside the mouth since it virtually does not
                                make a cut or wounds inside the mouth.</li>
                            <li>Aligners require taking them out before eating, so there are comparatively minimum food
                                restrictions during the tenure of the treatment than conventional braces.</li>
                            <li>With aligners, some patients won’t require as many trips to the orthodontist as they
                                would with braces.</li>
                        </ul>
                    </div>
                    <div class="col-md-6 bg-light">
                        <h3 class="m-2">Conventional Braces</h3>
                        <ul>
                            <li>People can easily see braces, especially traditional metal braces. On average, lingual
                                and ceramic braces are less visible than metal aligners, but they are still
                                comparatively noticeable.</li>
                            <li>Metal braces are uncomfortable to wear. They require some getting used to and frequently
                                result in cuts or irritation along the inside of the mouth.</li>
                            <li>Gum, bagels, hard candies, popcorn, and other foods may get stuck in the brackets or
                                even break the brackets or wires, so people with braces should be careful with their
                                food habits.</li>
                            <li>While some users of invisible aligners can manage everything online, braces necessitate
                                frequent orthodontist visits.</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h2>Invisible Aligners cost in India</h2>
                        <p>It is impossible to give an accurate answer without first scheduling a consultation with an
                            expert orthodontist.

                            The orthodontist will examine your teeth and take x-rays during that initial appointment.
                            The orthodontist will be able to provide you with an accurate estimate of the cost of this
                            Invisible Aligners treatment based on this.

                            The final cost of the invisible aligners depends on the complexity of the case, the number
                            of enhancements required, the number of aligners requires, etc. Hence, the cost of the
                            invisible aligners varies from case to case and can goes from 75000 to 4 Lakhs INR.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="image/case1.webp" class="img-fluid mb-2 mb-md-3"
                                    style="width: 600px;height: 200px;">
                            </div>
                            <div class="col-md-6">
                                <img src="image/case2.webp" class="img-fluid mb-2 mb-md-3"
                                    style="width: 600px;height: 200px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="image/expertt_rip.webp" class="img-fluid mb-2"
                                    style="width: 600px;height: 400px;">
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Wearing the aligners for 20 to 22 hours is necessary for Invisible aligners to
                                        function properly.</li>
                                    <li>The only circumstances in which you should take out your aligners are during
                                        having food or drink and Brushing and flossing the Invisible Aligners.</li>
                                    <li>Cleaning your aligners requires caution. The plastic may warp if you use very
                                        hot water, which will affect the fit of the Invisible aligners and might delay
                                        the progress.</li>
                                    <li>will affect the fit of the Invisible aligners and might delay the progress.
                                        The degree to which Invisible Aligners work depends on how complicated your
                                        orthodontic problems are. If you have more complicated spacing or bite problems,
                                        it might take longer for this treatment to take effect.</li>
                                    <li>When you take off the Invisible aligner, you might experience tooth pain. which
                                        may restrict the food you can eat, especially hard foods that need heavy
                                        chewing.</li>
                                    <li>Invisible aligner is more effective for specific movements of teeth. The
                                        orthodontist will recommend additional treatments when there are more
                                        complicated problems.</li>
                                    <li>You must remove your aligners before eating or drinking in order to avoid
                                        Cavities due to the bacteria that grow along your teeth or gums due to the stuck
                                        foods.</li>
                                    <li>Additionally, Aligners will absorb liquid, which could stain both the aligners
                                        and your teeth.</li>
                                </ul>
                            </div>
                            <div class="container-fluid mt-4 m-3 bg-light treatment-process">
                                <hr class="dropdown-divider">

                                <h1 class="text-dark text-center mt-3 mb-3 pt-2">Procedure and Process Treatment</h1>
                                <p class="text-center">We are committed to provide the best quality, comfort and care
                                    when you are
                                    having any dental problems.
                                    <br> We also promise that we will explain what procedures and processes were doing.
                                </p>
                                <div class="row justify-content-evenly ms-2">
                                    <div class="col">
                                        <div class="card mb-3" style="width: 18rem;">
                                            <img src="image/image10.png" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">check up</h5>
                                                <p class="card-text">Our dentists will do a routine checkup for dental
                                                    issue which is
                                                    essential for proper treatment.</p>
                                                <a href="#" class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 " style="width: 18rem;">
                                            <img src="image/image15.png" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">Explanation</h5>
                                                <p class="card-text">City Dental's Expert team of doctors will
                                                    understand your problem
                                                    and give you a customised solution.</p>
                                                <a href="#" class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
                                                    style="border-radius: 20px; width: 60%;">Learn
                                                    more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3" style="width: 18rem;">
                                            <img src="image/image11.png" class="card-img-top" class="img-fluid">
                                            <div class="card-body">
                                                <h5 class="card-title">Treatment</h5>
                                                <p class="card-text">After analyzing patient's dental condition, we
                                                    recommend treatment
                                                    to patient to prevent.</p>
                                                <a href="#" class="btn btn-outline-primary btn-success mb-3 mt-3 text-white"
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
                                    <div class="row">
                                        <hr class="dropdown-divider">

                                        <div class="col-md-6">
                                            <center>
                                            <h2>
                                                Get The Best Deals</h2>
                                            <h3>on Smile makeover</h3>
                                            <h5><a href="#" class="text-decoration-none"><i
                                                        class="bi bi-telephone-fill"></i> Call :+91-81000-42000</a></h5>
                                            <button class="btn btn-outline-primary btn-success mb-3 mt-3 text-white fs-4"
                                                    type="button" style="border-radius: 10px; width: 40%;"><a href="appointment.php"
                                                     class="text-decoration-none text-white">Book an
                                                    Appointment</a></button>
                                            </center>
                                        </div>

                                        <div class="col-md-6">
                                            <img src="image/team2.jpg" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- invisible section starts from here -->

    <?php
        include_once("footer.php");
    ?>
</body>

</html>