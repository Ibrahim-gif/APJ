<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>APJ | Library</title>
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
                                <h5 class="primary-color">Bangalore</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-links">
                    <a href="#" data-toggle="popover" title="Address"
                       data-content="70, Millers Rd, Vasanth Nagar,Bangalore, Karnataka 560052"
                       data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="popover" title="Phone No." data-content="080 4370 0809"
                       data-placement="bottom"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="popover" title="Email" data-content="helpdesk@apj.ac.in"
                       data-placement="bottom"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
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
                            <!-- <li>
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
                            </li> -->
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
                                    <li class="active"><a href="library">Library</a></li>
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
        <div class="content">
            <h1>Library</h1>
            <br/><br/>
            <p>
                The primary aim of APJ Library is to support research, teaching and learning of the institute
                community. The Library is one of the central support services of APJ. The mission of the
                Library is to provide information services and access to full text digital and printed resources to
                support the scholarly and informational needs of faculty, students and staff. The Library is in fast
                growing stage. It was started in December 2015 with approximately 350 books. In March 2016 Library
                subscribed online ACM Digital library database. During this short span
                of time, the library has acquired a good number of books and electronic resources. The library has a good
                collection of books on Computer Science, Information Technology, Physics, Mathematics, Humanities &
                Social Sciences and also technical and general print magazines. The collection includes reference books,
                text books, CDs etc. We are constantly in a process of increasing our collection of books further.
            </p>
            <p>
                Students must follow the rules and regulations mentioned in the
                Library
                    Circulation Policy</a>.
            </p>
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
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>
</body>

</html>
