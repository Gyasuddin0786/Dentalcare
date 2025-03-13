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
    <!-- contact section starts from here -->
        <div class="container-fluid mt-5 border border-danger bg-light">
            <form id="form1" method="post" action="contact.php">
            <h3 class="text-dark fs-1 text-center mt-5">Contact Us</h3>
            <hr class="dropdown-divider">
            <div class="row justify-content-evenly">
                <div class="col-md-5 mt-3">
                    <h4>Contact Us</h4>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="fn" placeholder="Fullname" name="fn">
                        <label for="floatingInput">Fullname</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pswd">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <input type="number" class="form-control" id="mn" placeholder="mobile no" name="mn">
                        <label for="floatingInput">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <textarea class="form-control" placeholder="Fill address here" id="cn"
                            style="height: 80px" name="cn"></textarea>
                        <label for="floatingTextarea2">City</label>
                        <button type="submit" class="btn btn-outline-success btn-primary 
                        col-md-12 col-12 col-lg-12 text-white mt-3" name="contact">Submit</button>&nbsp;&nbsp;
                    </div>
                </div>
            </form>
                <div class="col-md-5 mt-3">
                    <h5 class="mt-1">Our Location</h5>
                    <h6 class="mt-0 pb-0">City:<span>Rajkot,RKU University</span></h6>
                    <h6 class="mt-0 pb-0">State:<span>Gujarat</span></h6>
                    <h6 class="mt-0 pb-0">Monday to Saturday: <span>8:00 AM - 8:00 PM</span></h6>
                    <h6 class="mt-0 pb-0">Sunday: <span>10:00 AM - 7:00 PM(All day Open)</span></h6>
                    <h6 class="mt-0 pb-0"><i class="bi bi-telephone-plus-fill"></i> :<span> 9263605357</span></h6>


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.82106511467!2d70.73889449311714!3d22.27346616666724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1708235797672!5m2!1sen!2sin"
                        style="width: 100%;" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="mb-5" class="iframe-fluid"></iframe>
                </div>
            </div>
        <!-- contact section ends from here -->

    <!-- contact database starts from here -->
    <?php
include_once("config.php");
if (isset($_POST['contact'])) {
    // Retrieve form data
    $fn = $_POST['fn'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $mn = $_POST['mn'];
    $cn = $_POST['cn'];
    // Insert data into the database
    $sql = "INSERT INTO contact (fn, email, pswd,mn,cn) VALUES ('$fn', '$email', '$pswd','$mn','$cn')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <strong>Contact us Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        echo "error in Consultation";
    }
}
?>
</div>

    <!-- contact database ends from here -->



<?php
        include_once("footer.php");
?>

<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if(isset($_POST['contact']))
// {
//     $mail=new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = "smtp.gmail.com";
//     $mail->SMTPAuth = true;
//     $mail->Username = "khushboogupta5426@gmail.com";
//     $mail->Password = "xwuh vlzo mtsh nxpt";
//     $mail->SMTPSecure= "ssl";
//     $mail->Port = 465;
//     $mail->setFrom($_POST["email"]);
//     $mail->addAddress("khushboogupta5426@gmail.com");
//     $mail->isHTML(true);
//     $mail->Body = $_POST["cn"];
//     $mail->send();
//     // header("Location: index.php");
// }
?></body>
</html>