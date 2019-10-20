<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APJ | Visting Faculty</title>
    <!--Style Starts-->
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
                                    <h5 class="primary-color">Bangalore</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-links">
                        <a href="#" data-toggle="popover" title="Address" data-content="70, Millers Rd, Vasanth Nagar,Bangalore, Karnataka 560052" data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
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
                                        <li><a href="faculty">Faculty</a></li>
                                        <li class="active"><a href="visiting_faculty">Visiting Faculty</a></li>
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
            <div class="content visiting-faculty">
                <h1>Mentor Institute Faculty Members</h1>
                <br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3>R Nagaraj (Director)</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Professor-R-Nagaraj-2.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Fault Tolerant Flight Controllers using Artificial Neural Network)
                                <br/> Visvesvaraya Technological University
                                <br/>
                                <b>Areas of Interest : </b>Fault tolerant control, Non linear control systems, neural networks and reconfigurable control systems.
                                <!-- <br/> Contact : <b>director@apjBangalore.ac.in</b> --> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Das, Manik Lal</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/maniklal_das.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Information Technology)
                                <br/> IIT Bombay
                                <br/>
                                <b>Areas of Interest : </b>Information Security, Cryptography, System Design and Analysis
                                <!-- <br/> Contact : <b>maniklal.das@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Dubey, Rahul </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/rahul_dubey.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Electrical Engineering)
                                <br/> IIT Roorkee
                                <br/>
                                <b>Areas of Interest : </b> Design and Prototyping of Digital systems, Factory Automation
                                <!-- <br/> Contact : <b>rahul_dubey@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Garg, Gagan </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/GARG-GAGAN.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Science and Automation)
                                <br/> IISC Bangalore, India
                                <br/>
                                <b>Areas of Interest : </b> Information theory, cryptography, number theory
                                <!-- <br/> Contact : <b>gagan_garg@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Jat, Pokhar Mal </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/pm_jat.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Science and Engineering)
                                <br/> ML Sukhadia University, Udaipur
                                <br/>
                                <b>Areas of Interest : </b> Databases, Data Mining, Web of Data, Software Design
                                <!-- <br/> Contact : <b>pm_jat@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Majumder, Prasenjit</h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/prasenjit_majumder.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph. D. (Computer Science))
                                <br/> Jadavpur University, Kolkata
                                <br/>
                                <b>Areas of Interest : </b> Information Retrieval, Natural Language processing, Digital Libraries
                                <!-- <br/> Contact : <b>p_majumder@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Banerjee, Asim </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/asim_banerjee.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Electrical Engineering)
                                <br/> IIT Bombay
                                <br/>
                                <b>Areas of Interest : </b> Pattern Recognition, Medical Imaging, Image Processing, Digital Signal Processing, Speech Coding, Software Engineering, Software Quality Assurance and Project Management
                                <!-- <br/> Contact : <b></b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Garg, Shweta </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Garg-Shweta.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D (English)
                                <br/> IIT Roorkee
                                <br/>
                                <b>Areas of Interest : </b> Food and Cultural Studies, Performance Studies, Creative Writing, Literature of the Indian Diaspora
                                <!-- <br/> Contact : <b></b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mathuria, Anish  </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/anish_mathuria.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Science)
                                <br/> University of Wollongong, Australia
                                <br/>
                                <b>Areas of Interest : </b> Computer Security
                                <!-- <br/> Contact : <b></b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mishra, Biswajit </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/mishra_biswajit.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Electrical & Electronics Engineering)
                                <br/> University of Southampton, UK
                                <br/>
                                <b>Areas of Interest : </b> Ultra Low Power and Sub-threshold Circuit Methodologies, Very Low Voltage Circuits for Wireless Sensor Networks, Digital IC Design, Power Management for Energy Harvesters, Signal Processing Hardware for Color Image Processing, Geometric Algebra and Novel Hardware
                                <!-- <br/> Contact : <b></b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Mitra, Suman Kumar </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/suman_mitra.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Science)
                                <br/> ISI Calcutta
                                <br/>
                                <b>Areas of Interest : </b> Image Processing, Pattern Recognition, Fractal, Bayesian Network and Digital Image Watermarking
                                <!-- <br/> Contact : <b>suman_mitra@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Muthu, Rahul </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Muthu_Rahul.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Computer Science)
                                <br/> Homi Bhabha National Institute, Mumbai
                                <br/>
                                <b>Areas of Interest : </b> Graph theory and algorithms
                                <!-- <br/> Contact : <b>rahul_muthu@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Parikh, Alka  </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/alka_parikh.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Agriculture and Allied Economic)
                                <br/> Cornell University, USA
                                <br/>
                                <b>Areas of Interest : </b> Rural development and the related issues like Agriculture, Poverty, Unemployment and Wages, Rural Finance, Environment and Development, Disaster Management
                                <!-- <br/> Contact : <b>alka_parikh@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Sahu, Nabin Kumar </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/Sahu-Nabin-Kumar.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                Ph.D. (Mathematics)
                                <br/> IIT Kharagpur
                                <br/>
                                <b>Areas of Interest : </b> Applied Functional Analysis, Operator Theory, Variational Inequality, Variational Inclusion Problems
                                <!-- <br/> Contact : <b></b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Patil, Hemant   </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/hemant_patil.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                PhD (Signal Processing)
                                <br/> IIT Kharagpur
                                <br/>
                                <b>Areas of Interest : </b> Speaker recognition and wavelet signal processing
                                <!-- <br/> Contact : <b> hemant_patil@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h3>Bhise, Minal  </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/minal_bhise.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                PhD (Computer Science)
                                <br/> BITS Pilani
                                <br/>
                                <b>Areas of Interest : </b> Semantic Web, Distributed Databases, Software System Analysis and Design
                                <!-- <br/> Contact : <b>minal_bhise@apjBangalore.ac.in</b> -->
                            </div>
                        </div>
                    </li>
                    <!-- <li class="list-group-item">
                        <h3>Banerjee, Nandini  </h3>
                        <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <img src="img/no_photo.jpg">
                            </div>
                            <div class="col-sm-10 col-md-10 col-lg-10">
                                M.Phil., PhD
                                <br/> R D University, Jabalpur
                                <br/>
                                <b>Areas of Interest : </b> Economics & General Management
                                <br/> Contact : <b> nandini_banerjee@apjBangalore.ac.in</b>
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
                        <strong>Address : </strong>70, Millers Rd, Vasanth Nagar,Bangalore, Karnataka 560052
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
