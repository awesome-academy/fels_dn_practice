@extends('admin.master')

@section('title', 'FELS Admin')

@section('body')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- total -->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h4>{{ trans('admin/home.user') }}</h4>
                    <h3>{{ $userTotal }}</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-bar-chart" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                    <h4>{{ trans('admin/home.cat') }}</h4>
                        <h3>{{ $categoryTotal }}</h3>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-leanpub"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('admin/home.les') }}</h4>
                        <h3>{{ $lessionTotal }}</h3>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('admin/home.word') }}</h4>
                        <h3>{{ $wordTotal }}</h3>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>
        <!-- //total -->
        <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-6 agile-calendar">
                <div class="calendar-widget">
                    <div class="panel-heading ui-sortable-handle">
                        <span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                        <span class="panel-title"> Calendar Widget</span>
                    </div>
                    <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">

                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">

                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //calendar -->
            <div class="col-md-6 w3agile-notifications">
                <div class="notifications">
                    <!--notification start-->

                    <header class="panel-heading">
                        Notification
                    </header>
                    <div class="notify-w3ls">
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                    <li class="pull-right notification-time">1 min ago</li>
                                </ul>
                                <p>
                                    Urgent meeting for next proposal
                                </p>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> followed <a href="#">Jonathan Smith</a> </li>
                                    <li class="pull-right notification-time">7 Hours Ago</li>
                                </ul>
                                <p>
                                    Very cool photo jack
                                </p>
                            </div>
                        </div>
                        <div class="alert alert-success ">
                            <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> follower <a href="#">Jonathan Smith</a> </li>
                                    <li class="pull-right notification-time">1 min ago</li>
                                </ul>
                                <p>
                                    <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                                </p>
                            </div>
                        </div>
                        <div class="alert alert-warning ">
                            <span class="alert-icon"><i class="fa fa-leanpub"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> completed the lesson <a href="#">1</a> </li>
                                    <li class="pull-right notification-time">5 Days Ago</li>
                                </ul>
                                <p>
                                    100%
                                </p>
                            </div>
                        </div>
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-leanpub"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                    <li class="pull-right notification-time">1 min ago</li>
                                </ul>
                                <p>
                                    Urgent meeting for next proposal
                                </p>
                            </div>
                        </div>

                    </div>

                    <!--notification end-->
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </section>
</section>
<!-- footer -->
<div class="footer">
    <div class="wthree-copyright">
        <p style="text-align: center;">© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- / footer -->
</section>
<!--main content end-->
</section>
@endsection
