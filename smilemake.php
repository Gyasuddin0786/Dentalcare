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
    <!-- smile makeover section stars from here -->
    <div class="container-fluid border mt-5 border-danger bg-light">
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center mb-2 py-3 bg-light">Smile Makeover</h1>
                        <hr class="dropdown-divider">
                    </div>
                    
                </div>
            </div>

            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <h2 class="mb-1 m-3">What is Smile Makeover</h2>
                            <img src="image/smilemake.webp" class="img-fluid mt-2" style="width: 800px;height: 400px;">
                            <p class="mt-2">Smile Makeover is a process that enhances and improves the aesthetics of
                                your smile with cosmetic dentistry procedures.
                                A smile makeover combines dental procedures meant to repair aesthetic problems that
                                impair the appearance of your teeth.</p>
                            <h4>These procedures are done to correct issues with teeth such as:</h4>
                            <ol>
                                <li>
                                    <h5>Unevenness</h5>
                                    <ul>
                                        <li>Orthodontic treatments like Braces and Invisalign can help straighten and
                                            align uneven, crooked, overlapping teeth. And it can even be improved using
                                            veneers.</li>
                                    </ul>
                                </li>

                                <li>
                                    <h5>Missing teeth</h5>
                                    <ul>
                                        <li>One or more missing teeth unattended over time can lead to complications
                                            like tooth
                                            decay, misalignment of the jaw bone, degrade the smile aesthetics, and more.
                                        </li>
                                </li>
                                </ul>
                                <li>
                                    <h5>Discoloration (or) Yellow Teeth</h5>
                                    <ul>
                                        <li>Getting professional Teeth Whitening is the best solution for discoloration
                                            and yellow teeth.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Tooth shape</h5>
                                    <ul>
                                        <li>Certain teeth have somewhat different shapes from their neighboring teeth,
                                            such as peg laterals, which give them an unsightly aspect. Veneers or crowns
                                            can alter the size and shape of teeth.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Best Smile Makeover in India</h5>
                                    <ul>
                                        <li>Your smile is how you present yourself to the world. Smile Makeover is an
                                            art that can give you a bright, dazzling smile. It consists of a series of
                                            procedures that improve the appearance of the smile, including dental
                                            veneers, smile correction, teeth whitening, composite bonding, and gum
                                            reshaping.

                                            The specialists examine your smile and offer you several options for making
                                            your beautiful smile more dazzling and elegant.</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="smilemake.php" id="form1" method="post">
                        <div class="col-md-10 mt-3">
                            <h3 class="text-center">GET A CONSULTATION</h3>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="fn" placeholder="Fullname" name="fn">
                                <label for="floatingInput">Fullname</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInput">Username</label>
                            </div>

                            <div class="form-floating">
                                <input type="password" class="form-control" id="pwd1"
                                    placeholder="Password" name="pswd">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3 mt-4">
                                <input type="number" class="form-control" id="mn" placeholder="Mobile no" name="mn">
                                <label for="floatingInput">Mobile Number</label>
                            </div>

                            <div class="form-floating mb-3 mt-4">
                                <textarea class="form-control" placeholder="Fill address here" id="cn_err"
                                    style="height: 80px" name="cn"></textarea>
                                <label for="floatingTextarea2">City</label>
                                <div class="d-grid gap-2 d-md-block">
                        <a href="./hospital/index.php" class="btn btn-outline-primary 
                        btn-success mb-3 mt-3 text-white col-12 text-decoration-none text-white">BOOK A CONSULTATION </a>
                                </div>
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
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light p-3">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3><a href="#" class="text-decoration-none"><i class="bi bi-telephone-fill text-dark"> Call
                                    :</i>+91-81000-42000</a></h3>
                        <button class="btn btn-outline-primary btn-success mb-3 mt-3 text-white fs-4">
                            <a href="./hospital/index.php" class="text-decoration-none
                            text-white">Book An Appointment</a></button>

                    </div>
                </div>
            </div>
            <div class="row m-2">
                <h3 class="text-center mt-3">Smile Makeover before and after</h3>
                <div class="col-md-12 col-lg-6 col-xm-12">
                    <img src="image/smile1.webp" class="img-fluid mt-2 d-xs-block w-100" style="width: 350px;height: 200px;">
                    <img src="image/smile1.webp" class="img-fluid mt-2 mx-2 d-xs-block w-100" style="width: 350px;height: 200px;">
                </div>
                <div class="col-md-12 col-lg-6 col-xm-12">
                    <img src="image/smile3.webp" class="img-fluid mt-2 d-xs-block w-100" style="width: 350px;height: 200px;">
                    <img src="image/smile5.webp" class="img-fluid mt-2 mx-2 d-xs-block w-100" style="width: 350px;height: 200px;">

                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="container-fluid bg-light mt-4">
                <div class="row">
                    <h2 class="text-center mt-4 mb-2">PROCEDURES INVOLVED IN SMILE MAKEOVER</h2>
                    <div class="col-md-8">
                        <h3>Dental Implants</h3>
                        <p>A dental implant is a structure that helps to replace one or more missing teeth. The surgeon
                            places an implant, a screw-like component, in the jawbone. The implant helps in holding the
                            artificial tooth called a crown.</p>
                        <h3>Braces and orthodontic Treatments</h3>
                        <p>Orthodontic treatment involves straightening teeth to enhance their aesthetics and
                            functionality. Braces and aligners are the popular orthodontic treatments available.</p>
                        <h3>Teeth Whitening</h3>
                        <p>Teeth whitening can be a very efficient approach to lightening the natural color of your
                            teeth without removing any of the tooth surfaces.</p>
                        <h3>Crowns and Veneers</h3>
                        <p>Dental crowns and veneers will enhance the aesthetic and functionality of degrading or
                            sensitive teeth. A veneer is a thin coating of porcelain or another material glued to the
                            front face of your natural tooth. A crown covers the entire tooth. It could be made entirely
                            of porcelain, entirely of metal alloy, or porcelain fused to a metal alloy (PFM).</p>
                    </div>
                    <div class="col-md-4 d-md-block col-lg-4">
                        <img src="image/proce1.webp" class="img-fluid mt-1 d-sm-block w-100" style="width: 300px;height: 120px;">
                        <img src="image/proce2.webp" class="img-fluid mt-2 d-sm-block w-100" style="width: 300px;height:120px;">
                        <img src="image/proce3.webp" class="img-fluid mt-2 d-xs-block w-100" style="width: 300px;height:120px;">
                        <img src="image/proce4.webp" class="img-fluid mt-2 d-xs-block w-100" style="width: 300px;height:120px;">
                    </div>

                </div>
            </div>
            <!-- smile makeover section stars from here -->
            <?php
include_once("config.php");
// Check if form is submitted
if (isset($_POST['smilemake'])) {
    // Retrieve form data
    $fn = $_POST['fn'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $mn = $_POST['mn'];
    $cn = $_POST['cn'];
    // Insert data into the database
    $sql = "INSERT INTO smilemake (fn, email, pswd,mn,cn) VALUES ('$fn', '$email', '$pswd','$mn','$cn')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <strong>Consultation Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        echo "error in Consultation";
    }
}
?>
</div>
</body>
<?php
    include_once("footer.php");
    ?>
</html>
