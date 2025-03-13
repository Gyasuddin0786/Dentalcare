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
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    margin-top: 30px;
    background-color:#eee;
}
.card {
    width: 280px;
    height: 520px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: #fff;
    transition: all 0.5s ease;
    cursor: pointer;
    user-select: none;
    z-index: 10;
    overflow: hidden
}
.card .backgroundEffect {
    bottom: 0;
    height: 0px;
    width: 100%
}

.card:hover {
    color: black;
    transform: scale(1.025);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px
}

.card:hover .backgroundEffect {
    bottom: 0;
    height: 320px;
    width: 100%;
    position: absolute;
    z-index: -1;
    background: #1b9ce3;
    animation: popBackground 0.3s ease-in
}

@keyframes popBackground {
    0% {
        height: 20px;
        border-top-left-radius: 50%;
        border-top-right-radius: 50%
    }

    50% {
        height: 80px;
        border-top-left-radius: 75%;
        border-top-right-radius: 75%
    }

    75% {
        height: 160px;
        border-top-left-radius: 85%;
        border-top-right-radius: 85%
    }

    100% {
        height: 320px;
        border-top-left-radius: 100%;
        border-top-right-radius: 100%
    }
}
</style>
<body>
<?php
    include_once("header.php");
    ?>    
    <!-- ourteam section stars from here -->
    <div class="container-fluid border border-danger mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <h1 class="text-center mt-4 bg-light py-4">Our Team</h1>
                    <hr class="dropdown-divider">
                    <div class="col-md-6">
                        <img src="image/ourteam_01.jpg" class="img-fluid mt-2" style="width: 800px;height: 300px;">
                        <div class="box">
                            <h2 class="text-center mt-2">Dr. Anand Jasani</h2>
                            <h4>Consultant Dental Surgeon & Implantologist</h4>
                            <ul>
                                <li>Bachelor Of Dental Surgery - B.D.S.</li>
                                <li>Master certificate in oral Surgery-CCOS (Delhi-Academy of dental excellence
                                    2005)</li>
                                <li>Implantology- Apsun Dental Implant Centre (AIC)-Bombay under mentorships of
                                    Dr.Ajay Kakker.</li>
                                <li>Advance and extensive training with Dr.Jeon on soft & hard tissue management for
                                    Dental Implant procedure-AIC-Mumbai.</li>
                                <li>Certificate in Advance Implantology-ICOI</li>
                                <li>Experience of 13 years with lots of oral surgery.</li>
                                <li>Active participation and sharing dental implant technique to follow dentist
                                    across India.</li>
                                <li>Taken lots of pt education program on implant.
                                    Working on dental implant since 2002.</li>
                                <li>Taken extensive training in Bone graft & soft tissue graft from Dr. Jeon (S.
                                    Korea).</li>
                                <li>Attended regularly all the implant conferences In India and abroad to keep
                                    update current.</li>
                                <li>He was holding post president of Indian Dental Association, Junagadh 2005</li>
                                <li>Member of BNI "UNNATI" Rajkot, India</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="image/ourteam1.jpg" class="img-fluid mt-2" style="width: 800px;height: 300px;">
                        <h2 class="text-center mt-2">Dr. Rashmi Jasani</h2>
                        <h4>Consultant Dental Surgeon & C. Orthodontist</h4>
                        <ul>
                            <li>Bachelor in Dental Surgery - B.D.S.</li>
                            <li>Master certificate in advance orthodentist-CCOO-Academy of dental
                                excellence-2004</li>
                            <li>Master certificate in pediatric dentistry from Dr.Meenakshi Kher at Mumbai in
                                2011.</li>
                            <li>Life member of Academy of Aesthetic and Cosmetic Dentistry.</li>
                            <li>Very much focus on child dentistry(Believe that every child is unique and
                                precious)</li>
                            <li>Apart from all these, she applies an array of management skills that help and
                                support the entire team. She strongly believes in team building. She is profound
                                in her abilities to seek out skills in people.</li>
                            <li>communicate effectively, and to organise and direct complex tasks. She is commited to
                                teaching and improving freshly graduated dentists and dental assistants to further the
                                quality of national healthcare.</li>
                            <li>learnings from her several sources like Santosh Nair for the growth mind set. She also
                                keeps herself updated on good principles through her hobby of reading books such as
                                biographies and life lessons of great writers.</li>
                        </ul>
                    </div>
                    <div class="col-md-12 text-center bg-light mb-3">
                        <h3><a href="#" class="text-decoration-none"><i class="bi bi-telephone-fill text-primary"> Call
                                    :</i>+91-81000-42000</a></h3>
                        <button class="btn btn-outline-primary btn-success mb-3 mt-3 text-white fs-4"><a
                                href="./hospital/index.php" class="text-decoration-none
                        text-white">Book An Appointment</a></button>

                    </div>
                    <div class="container-fluid  bg-light ">
                        <div class="row">
                            <h2 class="text-center mt-3">Meet Our Doctors</h2>
                            <h4 class="text-center">Helping you smile.</h4>
                            <p class="text-center">Our Highly Skilled Professionals Encourage Better Oral Health And
                                Assist People To Feel Good, Look Good, And Be More Confident.</p>
                            <div class="col-md-4 mb-3 col-sm-12">
                                <div class="card bg-light border border-info" style="width: 20rem; height: 30rem;">
                                    <img src="image/doc1.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Sakshi Doshi</h5>
                                        <h6 class="text-secondary text-center">(B.D.S. and M.D.S. in Prosthodontics and
                                            Implantologist)</h6>
                                        <p class="card-text">MDS - Prosthodontics and Crown& Bridge and Oral
                                            Implantologist She has completed her BDS from Manipal University, Karnataka
                                            and masters from BBD University , Lucknow. She excels in her field of
                                            Prosthodontics by giving her best to her patients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light  border border-info" style="width: 20rem; height: 30rem;">
                                    <img src="image/doc2.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Nayneishwariba Rana</h5>
                                        <h6 class="text-secondary text-center">Bachelor of Dental Surgery</h6>
                                        <p class="card-text">Dr. Nayneishwariba Rana has received her bachelors of
                                            dental surgery from college of Dental science CODS- Bhavnagar. she has
                                            worked for a year at CODS, government hospital of sihore and songadh
                                            Bhavnagar, during internship.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc3.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Krishna Daka</h5>
                                        <h6 class="text-center text-secondary">M.D.S (Periodontics)</h6>
                                        <p class="card-text">Dr. Krishna Daka has pursued M.D.S. in Periodontics and
                                            Oral Implantology. She topped among all the MDS students in her college and
                                            stood 5th in the Gujarat University. Dr. Krishna proficiently is trained in
                                            all aspects of Periodontics and surgical treatment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc4.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Rahul Panelia</h5>
                                        <h6 class="text-center text-secondary">M.D.S. (Orthodontics & Dentofacial
                                            Orthopedic)</h6>
                                        <p class="card-text">Doctor Rahul Panelia specializes in Orthodontics and
                                            Dentofacial Orthopaedics He is known for designing beautiful smiles that
                                            last a life-time. His achievements include articles and case reports that
                                            are published in national and international journals</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc5.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Meera Bhanvadia</h5>
                                        <h6 class="text-center text-secondary">Bachelor of Dental Surgery</h6>
                                        <p class="card-text">Dr. Meera Bhanvadia has completed her BDS. With 15 years of
                                            experience, she has treated more than 12000 root canal cases and 17500
                                            restorative procedures with 97. 5% success rate. She is especially
                                            interested in digital smile designing and aesthetic procedures. She owns
                                            membership in IDA and RDA. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc6.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Tejasvini Prajapati</h5>
                                        <h6 class="text-center text-secondary">(B.D.S. and M.D.S. in Conservative and
                                            Endodontics)</h6>
                                        <p class="card-text">Dr. Tejasvini Prajapati has completed her B.D.S. from CODS,
                                            Bhavnagar, and her M.D.S. in Conservative and Endodontics from Manubhai
                                            Patel dental college Vadodara. She has experience of 3 years in dentistry.
                                            She holds excellent working capacity with great accuracy
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc7.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Dhara Vaghela</h5>
                                        <h6 class="text-center text-secondary">Bachelor of Dental Surgery</h6>
                                        <p class="card-text">Dr. Dhara Vaghela has completed her BDS from government
                                            dental college and hospital jamnagar, gujarat in 2018. She has good patient
                                            consultant skills. she is proficiently trained in all aspects of dentistry
                                            and her speciality in crown and bridges of tooth, restorative and esthetic
                                            dentistry, pediatric dentistry. 
                                             </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc8.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Vandana Detroja</h5>
                                        <h6 class="text-center text-secondary">Bachelor of Dental Surgery</h6>
                                        <p class="card-text">Dr. Vandana Detroja has pursued her bachelor of dental
                                            surgery from Ahmedabad dental college & hospital. She has experience of 8
                                            years in dentistry. She is interested in all aspects of dentistry &
                                            especially interested in smile designing and esthetic procedures. she has
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card bg-light border border-info" style="width: 20rem;height: 30rem;">
                                    <img src="image/doc9.webp" class="card-img-top img-fluid" style="height:35%;
                                    border-radius:50%;width:90%;margin-left:18px; margin-top:10px;">
                                    <div class="card-body">
                                        <h5 class="text-center">Dr. Manashree Bhuva</h5>
                                            <h6 class="text-center text-secondary">Bachelor of Dental Surgery</h6>
                                            <p class="card-text">Dr Manshree Bhuva is a dedicated general dentist at
                                                City Dental Hospital. She earned her doctorate degree from College of
                                                Dental Science and Research Center- Ahmedabad. She has been working with
                                                City Dental Hospital to provide comprehensive,
                                                She has been working with
                                                City Dental Hospital
                                                </p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <hr class="dropdown-divider">
                            <div class="container-fluid bg-light">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>PROFESSIONAL TEAM</h5>
                                        <h1>Let us take care of you and your smile.</h1>
                                        <p>Implant</p>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" 
                                            style="width: 97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>Full Mouth Rehabilitation</p>
                                          <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" 
                                            style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>Cosmetic Dentistry</p>
                                          <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" 
                                            style="width: 94%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <p>General Dental</p>
                                          <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" 
                                            style="width: 97%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          
                                    </div>
                                    <div class="col-md-6">
                                        <img src="image/Alignment Specialist.png" class="img-fluid mb-2"
                                         style="width: 800px;height: 400px;">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- ourteam section ends from here -->

    <?php
        include_once("footer.php");
    ?>
</body>

</html> 