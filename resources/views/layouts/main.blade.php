{{--Подключние шапки--}}
@include('include.head')

<section id="blog-section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                {{--Вывод контента--}}
                @yield('content')
            </div>
            <!--           // RECENT POST===========-->
            <div class="col-lg-4">

                {{-- Подключение сайдбара --}}
                {{ Widget::run('recent_news') }}

                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// ARCHIVES</h2>
                    <div class="last-post">
                        <button class="accordion">21/4/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">5/7/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">15/9/2016</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">2/3/2017</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                            </li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>

                <!--=====================
                       CATEGORIES
                  ======================-->
                {{-- Подключение сайдбара --}}
                {{ Widget::run('sidebar_terms') }}

                <!--=====================
                      NEWSLATTER
               ======================-->
                {{-- Подключение подписки --}}
                {{ Widget::run('subscription_widget') }}

            </div>
        </div>
    </div>

</section>

{{--Подклчючение подвала--}}
@include('include.footer')
