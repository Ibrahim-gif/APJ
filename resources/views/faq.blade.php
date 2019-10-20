<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to APJ</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="img/IIITV_Logo_1x1_small.png">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
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
                                        <li class="active"><a href="faq">FAQs</a></li>
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
            <div class="content">
                <h1>FAQs</h1>
                <p class="small">
                    APJ Technical University is an institute established by the Government of India under Public Private Partnership (PPP) mode. The partners in this project are Government of India, Government of Gujarat, Tata Consultancy Services, Gujarat Energy Research and Management Institute and Gujarat State Fertilizers and Chemicals. The Institute was established in the year 2013. The first batch that was admitted in the year 2013-14 is in its 3rd year now. The Institute is presently functioning from Block Number 9 of Government Engineering College Gandhinagar. The second batch was admitted in the academic year 2014-15. Both the batches put together have 168 students. The Institute does not have its own hostel building, therefore, a private premises has been hired to house the hostel of the institute. Students are transported by bus to the Institute. The mess facility is available at hostel.
                </p>
                <br/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            While the name of the University is APJ Technical University,
                            why it is located at Gandhinagar and not at Vadodara?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        The Institute will be allotted land in Vadodara by the Government of Gujarat. Thereafter the institute activities will be moved to Vadodara. Till such time the institute will keep functioning from the temporary location in Gandhinagar.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            How do I get admission in APJ?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        Admissions are through the Joint Seat Allocation Authority
                    2015 constituted by the Government of India. The Institute does not conduct its own entrance examination. The admissions are purely based on All India Ranking (AIR) announced by the Central Board for Secondary Education (CBSE). There is no quota for Home State or for NRI. The only reservation available is for Scheduled Castes, Scheduled Tribes, Other Backward Classes featuring in the list of Government of India and for the PH category.
                        <br/>
                        <!-- <a href="http://iiitvadodara.ac.in/PDF/27-06-2015%20CSAB%20Press%20Release_to_PI.pdf">Here </a>is the latest advertisement by CSAB. -->
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            What is the facility of hostels?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        Since the institute does not have any permanent infrastructure in Gandhinagar, a private premises is rented for the purpose of housing the hostel facility. The facility has rooms which can accommodate 4 students per room. The hostel is about 4 kms away from the Institue. Buses, on regular basis run between the Hostel and the Institute. It is proposed to have the mess facility in the hostel premises and in near future tender for operating the mess will be floated.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            What is the role of the Mentor Institute?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        The role of mentoring institute is mainly to ensure that the academic activity of IIITV continues efficiently. Institute is having few faculty members on its own rolls. Apart from these regular faculty the mentoring institute that is DA-IICT faculty members teach some courses as visiting faculty.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            What about Placements?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        The institute is in its 3rd year and it does not have any placement records as of now. It is expected that the private partners will help the Institute in placement efforts.
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            What were the closing ranks for the last year?
                        </b>
                    </h3>
                    </div>
                    <div class="panel-body">
                        <img src="img/Ranks.jpg" style="width: 100%" />
                    </div>
                </div>
                <!-- <div class="panel panel-default"> -->
                    <!-- <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            What is the Fees?
                        </b>
                    </h3>
                    </div> -->
                    <!-- <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="btech_admission">B. Tech.</a>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="http://pgadmissions.iiitvadodara.ac.in/fees-assistance">M. Tech.</a>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <a href="http://pgadmissions.iiitvadodara.ac.in/fees-assistance">Ph. D.</a>
                            </div>
                        </div>
                    </div> -->
                <!-- </div> -->
                <br></br>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <b>
                            How to pay fees online?
                        </b>
                    </h3>
                    </div> -->
                    <!-- <div class="panel-body">
                        <br/>
                        <! <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/u7mUWySOwIQ" allowfullscreen></iframe>
                        </div> -->
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
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });$(document).on('click', function (e) {
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