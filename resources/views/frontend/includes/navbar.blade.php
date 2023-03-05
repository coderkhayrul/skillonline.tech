<div class="sticky-header main-bar-wraper navbar-expand-lg">
    <div class="main-bar clearfix">
        <div class="container clearfix">
            <!-- Website Logo -->
            <div class="logo-header logo-dark">
                <a href="index.html"><img src="{{ asset('frontend') }}/images/logo.png" alt="logo"></a>
            </div>

            <!-- Nav Toggle Button -->
            <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- EXTRA NAV -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <a href="#" class="btn btn-primary btnhover">Request For Course</a>
                </div>
            </div>

            <!-- Main Nav -->
            <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                <div class="logo-header logo-dark">
                    <a href="index.html"><img src="{{ asset('frontend') }}/images/logo.png" alt=""></a>
                </div>
                <form class="search-input">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button"
                            placeholder="Search Books Here">
                        <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                    </div>
                </form>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('web.home') }}"><span>Home</span></a></li>
                    <li class="sub-menu-down"><a href="javascript:void(0);"><span>Smart Device</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.smart.phone') }}">Smart Phone</a></li>
                            <li><a href="{{ route('web.smart.band') }}">Smart Band</a></li>
                            <li><a href="{{ route('web.smart.watch') }}">Smart Watch</a></li>
                            <li><a href="{{ route('web.feature.device') }}">Feature Device</a></li>
                            <li><a href="{{ route('web.smart.tablet') }}">Tablet</a></li>
                            <li><a href="{{ route('web.upcoming.smart.device') }}">Upcoming Device</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu-down"><a href="javascript:void(0);"><span>Tutorials</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.tutorials') }}">IT & Software</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Office Productivity</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Javascript</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Php</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Python</a></li>
                            <li><a href="{{ route('web.tutorials') }}">C#</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Java</a></li>
                            <li><a href="{{ route('web.tutorials') }}">React</a></li>
                            <li><a href="{{ route('web.tutorials') }}">NodeJs</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Web Development</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Game Development</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Data Science</a></li>
                            <li><a href="{{ route('web.tutorials') }}">Programming Language</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu-down"><a href="javascript:void(0);"><span>Books</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.books') }}">Trending Books</a></li>
                            <li><a href="{{ route('web.books') }}">Programming</a></li>
                            <li><a href="{{ route('web.books') }}">Action & Adventure</a></li>
                            <li><a href="{{ route('web.books') }}">Bio & History</a></li>
                            <li><a href="{{ route('web.books') }}">Science Fiction</a></li>
                            <li><a href="{{ route('web.books') }}">Non-Fiction</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu-down"><a href="javascript:void(0);"><span>News</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('web.news') }}">Technology</a></li>
                            <li><a href="{{ route('web.news') }}">Education</a></li>
                            <li><a href="{{ route('web.news') }}">Sports</a></li>
                            <li><a href="{{ route('web.news') }}">Business</a></li>
                            <li><a href="{{ route('web.news') }}">World</a></li>
                            <li><a href="{{ route('web.news') }}">Politics</a></li>
                            <li><a href="{{ route('web.news') }}">Crime</a></li>
                        </ul>
                    </li>
                    <li><a href="tutorials.html"><span>Giveaway</span></a></li>
                    <li><a href="#"><span>Disclaimer</span></a></li>
                </ul>
                <div class="dz-social-icon">
                    <ul>
                        <li><a class="fab fa-facebook-f" target="_blank"
                                href="https://www.facebook.com/dexignzone"></a></li>
                        <li><a class="fab fa-twitter" target="_blank"
                                href="https://twitter.com/dexignzones"></a></li>
                        <li><a class="fab fa-linkedin-in" target="_blank"
                                href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                        <li><a class="fab fa-instagram" target="_blank"
                                href="https://www.instagram.com/website_templates__/"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
