<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APJ | Faculty</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/IIITV_Logo_1x1_small.png">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- Start Your Body Code From here -->
    <div class="wrapper">
        <!-- header starts here -->
        <header id="header" class="">
            <!-- header -->
            <div class="header-wrapper">
                <div class="header-container">
                    <div>
                        <div class="logo-name">
                            <div class="logo">
                                <a href="{!! url('/'); !!}" title=""><img src="img/IIITV_Logo_1x1_small.png" alt="logo"></a>
                            </div>
                            <div class="name">
                                <a href="{!! url('/'); !!}" title="">
                                    <h5>APJ Technical University</h5>
                                    <h5 class="primary-color">Vadodara</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-links">
                        <a href="#" data-toggle="popover" title="Address" data-content="70, Millers Rd, Vasanth Nagar, Bengaluru, Karnataka 560052" data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="popover" title="Phone No." data-content="080 4370 0809" data-placement="bottom"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="popover" title="Email" data-content="helpdesk@apj.ac.in" data-placement="bottom"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <nav>
                <div class="navbar navbar-inverse navbar-custom" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institute <b
                                        class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li><a href="{{ route('AboutPage') }}">About</a></li>
                                        <li><a href="directors_message">Director's Message</a></li>
                                        <li><a href="bog">Board of Governors</a></li>
                                        <li><a href="society_members">Society Members</a></li>
                                        <li><a href="{{ route('academic_council') }}">Academic Council</a></li>
                                        <li><a href="finance_committee">Finance Committee</a></li>
                                        <li><a href="rti">RTI</a></li>
                                        <!-- <li><a href="pdf/MOU.pdf">MOU</a></li> -->
                                        <li class="dropdown-submenu">
                                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Linkages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="linkages/da-iict.html">DA-IICT</a></li>
                                                <li><a href="linkages/gsfc.html">GSFC</a></li>
                                                <li><a href="linkages/germi.html">GERMI</a></li>
                                                <li><a href="linkages/tcs.html">TCS</a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics <b
                                        class="caret"></b></a> -->
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">B.Tech</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="btech_cse">CSE</a></li>
                                                <li><a href="btech_it">IT</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">M.Tech</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="mtech_cse">CSE</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="phd">Ph.D</a></li>
                                        <li><a href="pdf/academic_calendar_autumn_2015_16.pdf">Academic Calender</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b
                                        class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li><a href="btech_admission">B.Tech</a></li>
                                        <li><a href="coming_soon">M.Tech</a></li>
                                        <li><a href="coming_soon">PhD</a></li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">People <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="active"><a href="faculty">Faculty</a></li>
                                        <li><a href="visiting_faculty">Visiting Faculty</a></li>
                                        <li><a href="staff">Staff</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b
                                        class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li><a href="faq">FAQs</a></li>
                                        <!-- <li><a href="student_corner">Student's Corner</a></li> -->
                                        <!-- <li><a href="http://moodle.iiitv.ac.in" target="_blank">Moodle</a></li> -->
                                        <li><a href="library">Library</a></li>
                                        <li><a href="invited_talks">Invited Talks</a></li>
                                    </ul>
                                </li>
                                <li><a href="login">Student's Corner</a></li>
                            <li><a href="career">Career</a></li>
                                <li><a href="gallery">Photo Gallery</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </nav>
        </header>
        <!-- /header -->
        <!-- Content wrapper -->
        <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content faculty-list">
                <h1>Faculty</h1>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3>Dhirendra Sinha</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/DKS.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Physics)
                                <br/> IIT Kanpur
                                <br/>
                                <b>Areas of Interest : </b>Physics of organic semiconductor devices, in particular, organic light-emitting diodes and solar cells. Hybrid devices involving organic materials embedded with inorganic nano-particles. Understanding physical processes such as charge-carrier transport and recombination in the practical devices.
                                <br/> Contact : <b>dhirendra.sinha@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Pratik Shah</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/pratik.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Vision)
                                <br/> DA-IICT
                                <br/>
                                <b>Areas of Interest : </b>Differential Geometry, Signal Processing, Scientific Computing.
                                <br/> Contact : <b>pratik@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Barnali Chetia</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/barnali.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Linguistics)
                                <br/> JNU New Delhi
                                <br/>
                                <b>Areas of Interest : </b>Applied Linguistics, Sociolinguistics, Discourse Analysis, Gender Studies, Technical Communication.
                                <br/> Contact : <b>barnali@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Ajay Nath</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Ajaynath.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Physics)
                                <br/> IIT Patna
                                <br/>
                                <b>Areas of Interest : </b> Cigar-shaped Bose-Einstein condensate, Optical Lattices, Solitons, Many-body physics.
                                <br/> Contact : <b>ajay.nath@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Kamal Kishor Jha</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Kamal.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (VLSI Design)
                                <br/> ABV-IIITM, Gwalior
                                <br/>
                                <b>Areas of Interest : </b> Device-Circuit Co-Design, Hybrid Device-Circuit Interaction, Novel Semiconductor Device Design and Modeling.
                                <br/> Contact : <b>kamal@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Jignesh S. Bhatt</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Jignesh.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Information and Communication Technology)
                                <br/> DA-IICT
                                <br/>
                                <b>Areas of Interest : </b> Signal and image processing, Remote sensing, Inverse problems in imaging.
                                <br/> Contact : <b>jignesh.bhatt@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Ashish Phophalia</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/ashish_phophalia.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Information and Communication Technology)
                                <br/> DA-IICT
                                <br/>
                                <b>Areas of Interest : </b> Image Processing, Pattern Recognition, Medical Image Analysis.
                                <br/> Contact : <b>ashish_p@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Naveen Kumar</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Naveen.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                MTech, Ph.D. (Pursuing)
                                <br/> DA-IICT
                                <br/>
                                <b>Areas of Interest : </b> Information security.
                                <br/> Contact : <b>naveen_kumar@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Swapnil A. Lokhande</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/swapnil.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Mathematics)
                                <br/> IIT Bombay
                                <br/>
                                <b>Areas of Interest : </b> Commutative Algebra.
                                <br/> Contact : <b>swapnil@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Parth Gupta</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Parth.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Pursuing)
                                <br/> Technical University of Valencia (UPV), Spain
                                <br/>
                                <b>Areas of Interest : </b> Information Retrieval, Machine Learning.
                                <br/> Contact : <b>pgupta@apjvadodara.ac.in</b>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <h3><a href="faculty/bca001.html">Bhargab Chattopadhyay</a></h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/no_photo.jpg" style="max-width: 100px;">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D.(Statistics)
                                <br/> University of Connecticut, USA
                                <br/>
                                <b>Areas of Interest : </b>  Statistics.
                                <br/> Contact :
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="footer-wrapper">
                <span class="logo"><img src="img/IIITV_Logo_1x1_small.png" alt=""></span>
                <div class="row">
                    <div class="col-sm-4 address">
                        <strong>Address : </strong>70, Millers Rd, Vasanth Nagar, Bengaluru, Karnataka 560052
                    </div>
                    <div class="col-sm-4 links">
                        <div>
                            <a href="#news">News</a>
                            <i class="seperator"></i>
                            <a href="#announcements">Announcement</a>
                            <i class="seperator"></i>
                            <a href="#events">Events</a>
                        </div>
                        <div>
                            <a href="{!! url('/'); !!}">Home</a>
                            <i class="seperator"></i>
                            <a href="rti">RTI</a>
                            <i class="seperator"></i><!-- <a href="pdf/MOU.pdf">MOU</a> -->
                        </div>
                        <div>
                            <a href="{{ route('admissions') }}">Admission</a>
                            <i class="seperator"></i>
                            <a href="login">Student</a>
                            <i class="seperator"></i>
                            <a href="faculty">Faculty</a>
                        </div>
                    </div>
                    <div class="col-sm-4 footer-social">
                        <a href="#!"><i class="fa fa-facebook" aria-hidden="true"
                                        title="Official Facebook Page"></i></a>
                        <!-- <a href="https://github.com/iiitv"><i class="fa fa-github" aria-hidden="true"
                                                              title="Github Group"></i></a> -->
                        <a href="#!"><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn Profile"></i></a>
                        <!-- <a href="#!" title=""><i class="fa fa-twitter" aria-hidden="true"
                                                 title="Official Twitter Account"></i></a> -->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--Scripts Starts-->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/434d359724.js"></script>
    <script>
    $(document).on('click', function (e) {
    var
        $popover,
        $target = $(e.target);
    //do nothing if there was a click on popover content
    if ($target.hasClass('popover') || $target.closest('.popover').length) {
        return;
    }
    $('[data-toggle="popover"]').each(function () {
        $popover = $(this);
        if (!$popover.is(e.target) &&
            $popover.has(e.target).length === 0 &&
            $('.popover').has(e.target).length === 0)
        {
            $popover.popover('hide');
        } else {
            //fixes issue described above
            $popover.popover('toggle');
        }
    });
})
    </script>
</body>

</html>
