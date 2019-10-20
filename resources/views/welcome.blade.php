<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to APJ</title>
    <link rel="icon" type="image/png" href="img/IIITV_Logo_1x1_small.png">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="home">
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
    <header id="header" class="">
        <!-- header -->
        <div class="header-wrapper">
            <div class="header-container">
                <div>
                    <div class="logo-name">
                        <div class="logo"><a href="{!! url('/'); !!}" title=""><img src="img/IIITV_Logo_1x1_small.png"
                                                                             alt="logo"></a></div>
                        <div class="name">
                            <a href="{!! url('/'); !!}" title="">
                                <h5>APJ Technical University</h5>
                                <h5 class="primary-color">Vadodara</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-links">
                    <a href="#" data-toggle="popover" title="Address"
                       data-content="70, Millers Rd, Vasanth Nagar, Bengaluru, Karnataka 560052"
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

                                        <!--                                         <!- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Linkages</a>
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
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="faq">FAQs</a></li>
                                    <!-- <!-- <li><a href="student_corner">Student's Corner</a></li> -->
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

                </div>
            </div>
        </nav>
    </header>
    <!-- /header -->

    <!-- carousel -->
    <div class="carousel-wrapper">
        <div class="carousel" style="margin: 0 auto">
            <div class="carousel-items">
                <img height="400px" src="img/gallery/faculty.jpg" alt="Faculty">
                <div></div>
            </div>
            <div class="carousel-items">
                <img height="400px" src="img/gallery/gallery.jpg" alt="Gallery">
                <div></div>
            </div>
            <div class="carousel-items">
                <img height="400px" src="img/gallery/students.jpg" alt="Students">
                <div></div>
            </div>
            <!-- <div class="carousel-items">
                <img height="400px" src="img/gallery/talk.jpg" alt="Talk">
                <div></div>
            </div> -->
            <div class="carousel-items">
                <img height="400px" src="img/gallery/winners.jpg" alt="Winners">
                <div></div>
            </div>
        </div>
    </div>

    <!--
cements, Events, News -->
    <div class="widgets-wrapper">
        <div class="widgets-container">

            <!-- Edit this section for important announcements.-->
            <!-- <div class="alert alert-warning text-center">
                Institute invites applications for <a class="alert-link" href="{{ url('image') }}" target="_blank">and PhD programs.</a>
            </div> -->

            <!-- Announcements -->
            <div class="col-sm-4" id="announcements">
                <div class='announcement-content '>
                    <div class="widgets-title"><h2>Announcements</h2></div>
                    <ul id="announcement-list">
                        <li>
                            Admissions to <b>M.Tech. and Ph.D.</b> programs starting soon.
                                                  </li>
                        <li>
                            For queries related to <b>B.Tech. programs </b>contact the office.
                        </li>
                        <li>
                          To mark the 154 year Celebration of “World
                          Telecommunication and Information Society Day”, two day
                          national conference on “Communication Standards and
                          Systems” is organized during 17th and 18th May.
                        </li>
                    </ul>
                    <!-- <div id="announcement-list-pagination">
                        <a id="announcement-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="announcement-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>

                        </a>
                    </div> -->
                </div>
            </div>

            <!-- Events -->
            <div class="col-sm-4" id="events">
                <div class="events-content">
                    <div class="widgets-title"><h2>Events</h2></div>
                    <ul id="events-list">

                      <li>
                          <div class="event-container">
                              <!-- Date -->
                              <div class="date">
                                          <span>
                                              <!-- Day -->
                                              <div class="day">14</div>
                                              <!-- Month Short Form (first three letters) -->
                                              <div class="month">Jan</div>
                                          </span>
                              </div>
                              <!-- Event-Description -->
                              <div class="event-text">Nabhyaan: A festival of kite</div>
                          </div>
                      </li>
                      <li>
                          <div class="event-container">
                              <!-- Date -->
                              <div class="date">
                                          <span>
                                              <!-- Day -->
                                              <div class="day">26</div>
                                              <!-- Month Short Form (first three letters) -->
                                              <div class="month">Jan</div>
                                          </span>
                              </div>
                              <!-- Event-Description -->
                              <div class="event-text">Republic Day</div>
                          </div>
                      </li>
                      <li>
                          <div class="event-container">
                              <!-- Date -->
                              <div class="date">
                                          <span>
                                              <!-- Day -->
                                              <div class="day">5</div>
                                              <!-- Month Short Form (first three letters) -->
                                              <div class="month">Mar</div>
                                          </span>
                              </div>
                              <!-- Event-Description -->
                              <div class="event-text">Sports Festival Ventura </div>
                          </div>
                      </li>
                      <li>
                          <div class="event-container">
                              <!-- Date -->
                              <div class="date">
                                          <span>
                                              <!-- Day -->
                                              <div class="day">12</div>
                                              <!-- Month Short Form (first three letters) -->
                                              <div class="month">Mar</div>
                                          </span>
                              </div>
                              <!-- Event-Description -->
                              <div class="event-text">Hackathon</div>
                          </div>
                      </li>



                        <li>
                            <!-- Events -->
                            <div class="event-container">
                                <!-- Date -->
                                <div class="date">
                                        <span>
                                            <!-- Day -->
                                            <div class="day">9</div>
                                            <!-- Month Short Form (first three letters) -->
                                            <div class="month">Apr</div>
                                        </span>
                                </div>
                                <!-- Event-Description -->
                                <div class="event-text">First Annual Institute Day</div>
                            </div>
                        </li>



                    </ul>
                    <div id="events-list-pagination">
                        <a id="events-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a>
                        <a id="events-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-sm-4" id="news">
                <div class='news-content '>
                    <div class="widgets-title"><h2>News</h2></div>
                    <ul id="news-list">
                        <li>
                            Mr. Avi Aryan got selected in Google Summer
                            of Code 2016.

                        </li>
                    </ul>
                    <div id="news-list-pagination">
                        <!-- <a id="news-list-previous" href="#">
                            <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>

                        </a> -->
                        <!-- <a id="news-list-next" href="#">
                            <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                        </a> -->
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
                    <strong>Address : </strong>70, Millers Rd, Vasanth Nagar, Bengaluru, Karnataka 560052.
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
                        <a href="#">Home</a>
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
                    <!-- <!-- <a href="https://github.com/iiitv"><i class="fa fa-github" aria-hidden="true"
                                                          title="Github Group"></i></a> -->
                    <a href="#!"><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn Profile"></i></a>
                    <!-- <!-- <a href="#!" title=""><i class="fa fa-twitter" aria-hidden="true"
                                             title="Official Twitter Account"></i></a> -->
                </div>
            </div>
        </div>
    </footer>
</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.paginate.min.js "></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>


<!--
/********************************
**Contributors for this Website**
*********************************

The website has been designed and developed from scratch by the Students of APJ

--Designed by--
Mofid Ansari (ansarimofid@gmail.com)
Pratyush Singh (singh.pratyush96@gmail.com)

--Core Developers--
Mofid Ansari (ansarimofid@gmail.com)
Pratyush Singh (singh.pratyush96@gmail.com)
Saurabh Jain (saurabhjn76@gmail.com)

--Supporting Developers--
RajuKoushik (g.rajukoushik@gmail.com)
Kamal Awasthi (kamalawasthi97@gmail.com)
Avi Aryan (avi.aryan123@gmail.com)

--Contribution through reporting issues--
Harish Krupo (harishkrupo@gmail.com)
Shalinee Singh (shalinee43@gmail.com)
Mayank Maurya (mayankm522@gmail.com)
Navneet Nandan (navneet.nandan8@gmail.com)
Prem Chand Saini (premchandsaini779@gmail.com)
Unni Rajendra (unni332265@gmail.com)
Ravi Kishan Jha (ravikishan77@gmail.com)
Ankit Kumar (ankit.kumar071460@yahoo.com)

-->
</body>

</html>
