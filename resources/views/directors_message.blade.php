<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APJ | Director's Message</title>
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
                                <li class="active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Institute <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li><a href="{{ route('AboutPage') }}">About</a></li>
                                        <li class="active"><a href="directors_message">Director's Message</a></li>
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
                                    <!-- <! <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics <b class="caret"></b></a> -->
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
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
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
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
        <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="content dir-msg">
                <div class="dir-detail">
                    <img class="responsive-img circle" src="img/Professor-R-Nagaraj.jpg">
                    <div>Dr. R Nagaraj</div>
                    <div>
                        Director DA-IICT
                    </div>
                    <div>
                        Mentor Director APJ
                    </div>
                </div>
                <div class="dir-text">
                    <p>
                        Dr. R Nagaraj obtained his PhD from Visvesvaraya Technological University in the field of Fault Tolerant Flight Controllers using Artificial Neural Network (ANN). His areas of interest include fault tolerant control, Non linear control systems, neural networks and reconfigurable control systems. Dr. Nagaraj has twenty five years of experience in research, teaching and academic administration. Prior to joining DA-IICT, he was the Principal of The Oxford College of Engineering; Bangalore where he held positions of Vice-Principal, Professor and Head of the Department of Electronics & Communication Engineering. He was the national merit scholar and received academic excellence award from RSST and mentorship award from RV VLSI Design Center, Bangalore. Dr. Nagaraj is IEEE Senior Member, Life Member of Institution of Electronics & Telecommunication Engineers, and Indian Society for Technical Education and Computer Society of India.
                    </p>
                    <blockquote>
                        <p>“I can't change the direction of the wind, but I can adjust my sails to always reach the destination.” -Jimmy Dean</p>
                    </blockquote>
                    <p>
                        You have infinite potential. Your attitude can make or break you, so turn your attitude into one of gratitude, faith, trust, and above all optimism. A warm welcome to APJ,Vadodara. Current environment is characterized by the need to constantly innovate and to reinvent oneself in order to sustain and grow one's stature in the industry. We, at APJ believe that today's engineers need to inculcate in them the quality to adapt to the changing environment and to possess an action oriented approach. The primary goal of APJ is to provide an environment that helps our students - future engineers and leaders of the country - to realize their potential in full. Along with expertise in core subject knowledge we aim to improve their communication skills, critical thinking abilities, problem solving skills, creativity, moral values and sense of responsibility. Our educational and training programmes are anchored around the same philosophy. Though still at its nascent stage, APJ has started fostering a vision of becoming a leading Institution of the country. As an institute, we are committed towards creating a community which is vibrant and provides a lifetime learning experience both professionally and personally.
                    </p>
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
