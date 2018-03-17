<?php
/**
 * Created by PhpStorm.
 * User: ADKi
 * Date: 2016/4/6 0006
 * Time: 15:20
 */?>
        <!-- User Info, Notifications and Menu Bar -->
<nav class="navbar user-info-navbar" role="navigation">

    <!-- Left links for user info navbar -->
    <ul class="user-info-menu left-links list-inline list-unstyled">

        <li class="hidden-sm hidden-xs">
            <a href="#" data-toggle="sidebar">
                <i class="fa-bars"></i>
            </a>
        </li>

     {{--   <li class="dropdown hover-line">
            <a href="#" data-toggle="dropdown">
                <i class="fa-envelope-o"></i>
                <span class="badge badge-green">15</span>
            </a>

            <ul class="dropdown-menu messages">
                <li>

                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">

                        <li class="active"><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                            </a>
                        </li>

                        <!-- Repeated -->

                        <li class="active"><!-- "active" class means message is unread -->
                            <a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>

											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>

											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>

											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>

											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="external">
                    <a href="blank-sidebar.html">
                        <span>All Messages</span>
                        <i class="fa-link-ext"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li class="dropdown hover-line">
            <a href="#" data-toggle="dropdown">
                <i class="fa-bell-o"></i>
                <span class="badge badge-purple">7</span>
            </a>

            <ul class="dropdown-menu notifications">
                <li class="top">
                    <p class="small">
                        <a href="#" class="pull-right">Mark all Read</a>
                        You have <strong>3</strong> new notifications.
                    </p>
                </li>

                <li>
                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                        <li class="active notification-success">
                            <a href="#">
                                <i class="fa-user"></i>

											<span class="line">
												<strong>New user registered</strong>
											</span>

											<span class="line small time">
												30 seconds ago
											</span>
                            </a>
                        </li>

                        <li class="active notification-secondary">
                            <a href="#">
                                <i class="fa-lock"></i>

											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>

											<span class="line small time">
												3 hours ago
											</span>
                            </a>
                        </li>

                        <li class="notification-primary">
                            <a href="#">
                                <i class="fa-thumbs-up"></i>

											<span class="line">
												<strong>Someone special liked this</strong>
											</span>

											<span class="line small time">
												2 minutes ago
											</span>
                            </a>
                        </li>

                        <li class="notification-danger">
                            <a href="#">
                                <i class="fa-calendar"></i>

											<span class="line">
												John cancelled the event
											</span>

											<span class="line small time">
												9 hours ago
											</span>
                            </a>
                        </li>

                        <li class="notification-info">
                            <a href="#">
                                <i class="fa-database"></i>

											<span class="line">
												The server is status is stable
											</span>

											<span class="line small time">
												yesterday at 10:30am
											</span>
                            </a>
                        </li>

                        <li class="notification-warning">
                            <a href="#">
                                <i class="fa-envelope-o"></i>

											<span class="line">
												New comments waiting approval
											</span>

											<span class="line small time">
												last week
											</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="external">
                    <a href="#">
                        <span>View all notifications</span>
                        <i class="fa-link-ext"></i>
                    </a>
                </li>
            </ul>
        </li>--}}

    </ul>


    <!-- Right links for user info navbar -->
    <ul class="user-info-menu right-links list-inline list-unstyled">

        <li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

           {{-- <form method="get" action="extra-search.html">
                <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

                <button type="submit" class="btn btn-link">
                    <i class="linecons-search"></i>
                </button>
            </form>--}}

            <a href="{{ url('/') }}" target="_blank"><i class="fa-home"></i></a>

        </li>

        <li class="dropdown user-profile">
            <a href="#" data-toggle="dropdown">
                <img src="@if(!$userSelf->avatar){{ asset('assets/images/user-4.png') }}@else{{ asset($userSelf->avatar) }}@endif" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								{{ $userSelf->name }}
								<i class="fa-angle-down"></i>
							</span>
            </a>

            <ul class="dropdown-menu user-profile-menu list-unstyled">
                @if(Auth::user()->auth != 0)
                <li>
                    <a href="{{ url('admin/postadd') }}">
                        <i class="fa-edit"></i>
                        发表文章
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ url('admin/profile') }}">
                        <i class="fa-wrench"></i>
                        设置
                    </a>
                </li>
                @if(Auth::user()->auth != 0)
                <li>
                    <a href="{{ url('admin/uploadFile') }}">
                        <i class="fa-user"></i>
                        发布摄影
                    </a>
                </li>
                @endif
                <li class="last">
                    <a href="{{ url('/logout') }}">
                        <i class="fa-lock"></i>
                        退出
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</nav>
<script>
    jQuery(document).ready(function($)
    {
        $('a[href="#layout-variants"]').on('click', function(ev)
        {
            ev.preventDefault();

            var win = {top: $(window).scrollTop(), toTop: $("#layout-variants").offset().top - 15};

            TweenLite.to(win, .3, {top: win.toTop, roundProps: ["top"], ease: Sine.easeInOut, onUpdate: function()
            {
                $(window).scrollTop(win.top);
            }
            });
        });
    });
</script>
