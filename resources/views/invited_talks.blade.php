<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APJ | Invited Talks</title>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/IIITV_Logo_1x1_small.png">
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
                    <a id="loc_icon" href="#" data-toggle="popover" title="Address"
                       data-content="70, Millers Rd, Vasanth Nagar, Bengaluru, Karnataka 560052"
                       data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
                    <a id="phone_icon" href="#" data-toggle="popover" title="Phone No." data-content="080 4370 0809"
                       data-placement="bottom"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></a>
                    <a id="email_icon" href="#" data-toggle="popover" title="Email"
                       data-content="helpdesk@apj.ac.in" data-placement="bottom"><i
                            class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
        <nav>
            <div class="navbar navbar-inverse navbar-custom" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
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
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">People <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="faculty">Faculty</a></li>
                                    <li><a href="visiting_faculty">Visiting Faculty</a></li>
                                    <li><a href="staff">Staff</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="faq">FAQs</a></li>
                                    <!-- <li><a href="student_corner">Student's Corner</a></li> -->
                                    <!-- <li><a href="http://moodle.iiitv.ac.in" target="_blank">Moodle</a></li> -->
                                    <li><a href="library">Library</a></li>
                                    <li class="active"><a href="invited_talks">Invited Talks</a></li>
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
        <div class="content">
            <h1>Invited Talks</h1>
            <br/>
            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : April 19, 2016<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Randomized Algorithms</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Prof. Subramanian, IMSc Chennai
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : March 4, 2016<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Introduction to Computational Intelligence</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Prof. Sushmita Mitra
                    </div>
                    <!-- <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            <a href="http://www.isical.ac.in/~sushmita/">http://www.isical.ac.in/~sushmita/</a>
                        </p>
                    </div> -->
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : February 2, 2016<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>From Vision-Realistic Rendering to Vision Correcting Displays</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Prof. Brian Barsky, Professor of Computer Science and Affiliate Professor
                        of Optometry, at the University of California Berkeley, USA
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            Present research on simulating human vision and on vision correcting displays that
                            compensate for the optical aberrations in the viewer's eyes will be discussed. The
                            simulation is not an abstract model but incorporates real measurements of a particular
                            individual's entire optical system.In its simplest form, these measurements can be the
                            individual's eyeglasses prescription; beyond that, more detailed measurements can be
                            obtained using an instrument that captures the individual's wavefront aberrations. Using
                            these measurements, synthetics images are generated. This process modifies input images
                            to simulate the appearance of the scene for the individual. Examples will be shown of
                            simulations using data measured from individuals with high myopia (near-sightedness),
                            astigmatism, and keratoconus, as well as simulations based on measurements obtained
                            before and after corneal refractive (LASIK) surgery.
                        </p>
                        <p>
                            Recent work on vision-correcting displays will also be discussed. Given the measurements
                            of the optical aberrations of a user's eye, a vision correcting display will present a
                            transformed image that when viewed by this individual will appear in sharp focus. This
                            could impact computer monitors, laptops, tablets, and mobile phones. Vision correction
                            could be provided in some cases where spectacles are ineffective. One of the potential
                            applications of possible interest is a heads-up display that would enable a driver or
                            pilot to read the instruments and gauges with his or her lens still focused for the far
                            distance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : January 8, 2016<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Digital Five Forces and their impact on IT industry</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Gaurav Gandhi, Academic Relationship Manager, TCS
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : November 4, 2015<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Delegation games: Choosing strategy over Tactics</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Dr. Ratnik Gandhi, Ahmedabad University
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            Market games between firms - producing similar goods - are (typically) played with
                            production levels or market prices as firms' strategies.
                        </p>
                        <p>
                            In this talk, I will first introduce basics of game theory: games, equilibrium and
                            related computational problems. Subsequently, I will talk about equilibria in market
                            delegation games and show how firms benefit by delegating their games.
                        </p>
                        <p>
                            This talk will not assume any background in Mathematical Economics and will be self
                            contained.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : October 28, 2015<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>A Card Trick - Protocol, Graph model, and extensions</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Prof. Shailesh Tipnis, Professor Emeritus (Department of Mathematics), Illinois State
                        University
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            We will perform a card trick and reveal its protocol for you to impress your friends. We
                            will see how a Graph Theory model of the trick enhances understanding of the trick and
                            helps in generalizations. The talk is meant to be accessible to all students on campus.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : September 28, 2015<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Property-Driven Fence Insertion using Reorder Bounded Model Checking</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Dr. Saurabh Joshi, IITG
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            Modern processor architectures employ optimizations such as store buffers. Such an
                            optimization, however, may result in program executions that violate Sequential
                            Consistency. In other words, program statements may appear to have been reordered
                            violating the program order. Some of these executions may result in safety property
                            (assertion) violation. Architectures provide fence instructions(memory barriers) that
                            can be inserted to avoid any unwanted reordering. Too many fences may degrade
                            performance drastically whereas too few fences may result in a buggy behaviour. Due to
                            non-determinism in scheduling and reordering, it may be very difficult for even an
                            expert programmer to insert fences in an optimal manner.
                        </p>
                        <p>
                            Automated techniques have been proposed for property-driven fence insertion that repairs
                            a concurrent program through fence insertion by suggesting optimalfence placement for a
                            given architecture.In this talk, I will introduce a technique we call "Reorder Bounded
                            Model-Checking" (ROBMC). ROBMC introduces a new parameter in the world of bounded model
                            checking. We show that ROBMC based approach outperforms traditional property-driven
                            fence insertion techniques. This work has been presented and published in FM 2015.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : September 18, 2015<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>Zero Knowledge Proof</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Dr. Bireswar Das, IITGn
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <p>
                            Wizard Merlin wants to convince king Arthur that a mathematical statement is true, but
                            Merlin does not want reveal anything other than the validity of the statement. Can he do
                            that? In 1989, Goldwasser, Micali and Racoff introduced the notion of Zero Knowledge Proofs.
                            These are proofs that are convincing and yet does not reveal anything other than the
                            validity of the statement. In this talk we discuss zero knowledge proofs and its importance
                            in computer science. Zero Knowledge Proof is one of the concepts for which Goldwasser and
                            Micali received Turing Award in 2012. If time permits we will discuss a recent connection
                            between zero knowledge proofs and minimum circuit size problem This part is based on a joint
                            work with Eric Allender.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-group-item" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        <b>Date</b> : August 21, 2015<br/>
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                        <b>No-where Differentiable Functions</b><br/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-4">
                        Prof. Samaresh Chatterji, IIIT Delhi
                    </div>
                    <div class="col-sm-7 col-md-8 col-lg-8">
                    </div>
                </div>
            </div>

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
                    <a href="#!"><i class="fa fa-facebook" aria-hidden="true" title="Official Facebook Page"></i></a>
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
                    $('.popover').has(e.target).length === 0) {
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
