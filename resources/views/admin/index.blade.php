@extends('admin.main')
@section('content')
<div id="content">
    <!-- top-bar -->
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
          
            <h3>Save People - Bangladeshi Patient Database</h3>
            <ul class="top-icons-agileits-w3layouts float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="far fa-bell"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu top-grid-scroll drop-1">
                        <h3 class="sub-title-w3-agileits">User notifications</h3>
                        <a href="#" class="dropdown-item mt-3">
                            <div class="notif-img-agileinfo">
                                <img src="{{ URL::asset('/') }}images/clone.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="notif-content-wthree">
                                <p class="paragraph-agileits-w3layouts py-2">
                                    <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                <h6>4 mins ago</h6>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <div class="notif-img-agileinfo">
                                <img src="{{ URL::asset('/') }}images/clone.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="notif-content-wthree">
                                <p class="paragraph-agileits-w3layouts py-2">
                                    <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                <h6>6 mins ago</h6>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <div class="notif-img-agileinfo">
                                <img src="{{ URL::asset('/') }}images/clone.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="notif-content-wthree">
                                <p class="paragraph-agileits-w3layouts py-2">
                                    <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                <h6>12 mins ago</h6>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <div class="notif-img-agileinfo">
                                <img src="{{ URL::asset('/') }}images/clone.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="notif-content-wthree">
                                <p class="paragraph-agileits-w3layouts py-2">
                                    <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                <h6>1 days ago</h6>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">view all notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-spinner"></i>
                    </a>
                    <div class="dropdown-menu top-grid-scroll drop-2">
                        <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="fas fa-chart-pie mr-3"></i>Sed feugiat</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="fab fa-connectdevelop mr-3"></i>Aliquam sed</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="fas fa-tasks mr-3"></i>Lorem ipsum</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="fab fa-superpowers mr-3"></i>Cras rutrum</h4>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu drop-3">
                        <div class="profile d-flex mr-o">
                            <div class="profile-l align-self-center">
                                <img src="{{ URL::asset('/') }}images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                            </div>
                            <div class="profile-r align-self-center">
                                <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="far fa-user mr-3"></i>My Profile</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="fas fa-link mr-3"></i>Activity</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="far fa-envelope mr-3"></i>Messages</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="far fa-question-circle mr-3"></i>Faq</h4>
                        </a>
                        <a href="#" class="dropdown-item mt-3">
                            <h4>
                                <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--// top-bar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Stats -->
            <div class="outer-w3-agile col-xl">
                <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                    <div class="s-l">
                        <h5>Projects</h5>
                        <p class="paragraph-agileits-w3layouts text-white">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>340
                            <i class="far fa-edit"></i>
                        </h6>
                    </div>
                </div>
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                    <div class="s-l">
                        <h5>Clients</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>250
                            <i class="far fa-smile"></i>
                        </h6>
                    </div>
                </div>
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                    <div class="s-l">
                        <h5>Tasks</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>232
                            <i class="fas fa-tasks"></i>
                        </h6>
                    </div>
                </div>
                <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                    <div class="s-l">
                        <h5>Employees</h5>
                        <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                    </div>
                    <div class="s-r">
                        <h6>190
                            <i class="fas fa-users"></i>
                        </h6>
                    </div>
                </div>
            </div>
            <!--// Stats -->
            <!-- Pie-chart -->
            <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                <div id="chartdiv"></div>
            </div>
            <!--// Pie-chart -->
        </div>
    </div>
    <!-- Simple-chart -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Graph</h4>
        <div id="Hybridgraph" class="simple-chart1">
        </div>
    </div>
    <!--// Simple-chart -->

    <!--// Bar-Chart -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
        <div id="chart-1"></div>
    </div>
    <!--// Bar-Chart -->

    <!--// three-grids -->
    <div class="container-fluid">
        <div class="row">
            <!-- Calender -->
            <div class="outer-w3-agile col-xl mt-3">
                <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                <div class="multi-select-calender"></div>
                <div class="box"></div>
            </div>
            <!--// Calender -->
            <!-- Profile -->
            <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                <div class="header">
                    <div class="text">
                        <img src="{{ URL::asset('/') }}images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                        <h2>Matthew Scott</h2>
                        <a href="mailto:info@example.com">
                            <p>@Lorem ipsum</p>
                        </a>
                    </div>
                </div>
                <div class="container-flud">
                    <div class="followers row">
                        <div class="f-left col">
                            <a href="#">
                                <i class="far fa-comments"></i>
                            </a>
                        </div>
                        <div class="f-left col border-left border-right">
                            <a href="#">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="f-left col">
                            <a href="#">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="prof-widgt-content">
                    <li class="menu">
                        <ul>
                            <li class="button">
                                <a href="#">
                                    <i class="fas fa-envelope"></i> Messages
                                    <span>13</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <ul class="icon-navigation">
                                    <li>
                                        <a href="#">Inbox
                                            <span class="float-right">[09]</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Outbox
                                            <span class="float-right">[01]</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Sent messages
                                            <span class="float-right">[03]</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <ul>
                            <li class="button">
                                <a href="#">
                                    <i class="fas fa-user"></i> Profile</a>
                            </li>
                            <li class="dropdown">
                                <ul class="icon-navigation">
                                    <li>
                                        <a href="#">Change your pic</a>
                                    </li>
                                    <li>
                                        <a href="#">Change your username</a>
                                    </li>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact me</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--// Profile -->
            <!-- Browser stats -->
            <div class="outer-w3-agile col-xl mt-3">
                <h4 class="tittle-w3-agileits mb-4">Browser Stats</h4>
                <div class="stats-info stats-body">
                    <ul class="list-unstyled">
                        <li class="pb-3">GoogleChrome
                            <span class="float-right">85%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar green" style="width:85%;"></div>
                            </div>
                        </li>
                        <li class="py-md-4 py-3">Firefox
                            <span class="float-right">35%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar yellow" style="width:35%;"></div>
                            </div>
                        </li>
                        <li class="py-md-4 py-3">Internet Explorer
                            <span class="float-right">78%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar red" style="width:78%;"></div>
                            </div>
                        </li>
                        <li class="py-md-4 py-3">Safari
                            <span class="float-right">50%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar blue" style="width:50%;"></div>
                            </div>
                        </li>
                        <li class="py-md-4 py-3">Opera
                            <span class="float-right">80%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar light-blue" style="width:80%;"></div>
                            </div>
                        </li>
                        <li class="last py-md-4 py-3">Others
                            <span class="float-right">60%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar orange" style="width:60%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--// Browser stats -->
        </div>
    </div>
    <!--// Three-grids -->
    <!-- Countdown -->
    <div class="outer-w3-agile mt-3 outer-w3-agile-bg">
        <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
        <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
    </div>
    <!--// Countdown -->
    <!-- Copyright -->
    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
        <p>© 2018 Modernize . All Rights Reserved | Design by
            <a href="http://w3layouts.com/"> W3layouts </a>
        </p>
    </div>
    <!--// Copyright -->
</div>
@endsection