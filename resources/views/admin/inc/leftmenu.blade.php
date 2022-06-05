

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{ url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Member Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="{{ url('/member/entry')}}">Member Entry</a>
                                </li> -->
                                <li>
                                    <a href="{{ url('/member/manage')}}">Member Manage</a>
                                </li>
                                <li>
                                    <a href="{{ url('/showMember')}}">Member Request</a>
                                </li>                               
                                <!-- <li>
                                    <a href="{{ url('/readMember')}}">Delete Request</a>
                                </li> -->
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Donation Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="{{ url('/showDonation')}}">Donations Request</a>
                                </li> 
                                <li>
                                    <a href="{{ url('/donation/manage')}}">Donations Given</a>
                                </li>                              
                                <li>
                                    <a href="{{ url('/listdonations')}}">Incoming Donations</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Activity Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/item/entry')}}">Activity Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/item/manage')}}">Activity Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Staff Directory Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/staff/entry')}}">Staff Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/staff/manage')}}">Staff Manage</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <!-- <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Event Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/exhi/entry')}}">Event  Entry</a>
                                </li>
                                <li>
                                    <a href="{{ url('/exhi/manage')}}">Event  Manage</a>
                                </li>
                               
                            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/showMsg')}}">Unread Messages</a>
                                </li>                               
                                <li>
                                    <a href="{{ url('/readMsg')}}">Read Messages</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i>Contact Us Control <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                                               
                                <li>
                                    <a href="{{ url('/info2')}}">Contact</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i> About Us Control <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/about/entry')}}">About Entry</a>
                                </li>                               
                                <li>
                                    <a href="{{ url('/about/manage')}}">About Manage</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i> Lecture Control <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/lecture/entry')}}">Lecture Video Entry</a>
                                </li>                               
                                <li>
                                    <a href="{{ url('/lecture/manage')}}">Lecture Video Manage</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-erase"></i>Website Theme Control <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                                  
                                <li>
                                    <a href="{{ url('/theme/manage')}}">Theme Control</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
