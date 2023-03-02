<div class="header-info-bar">
    <div class="container clearfix">
        <!-- Website Logo -->
        <div class="logo-header logo-dark">
            <a href="{{ route('web.home') }}"><img src="{{ asset('frontend') }}/images/logo.png" alt="logo"></a>
        </div>

        <!-- EXTRA NAV -->
        <div class="extra-nav">
            <div class="extra-cell">
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown profile-dropdown  ms-4">
                        <a class="nav-link" href="javascript:void(0);" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('frontend') }}/images/profile1.jpg" alt="/">
                            <div class="profile-info">
                                <h6 class="title">Brian</h6>
                                <span>info@gmail.com</span>
                            </div>
                        </a>
                        <div class="dropdown-menu py-0 dropdown-menu-end">
                            <div class="dropdown-header">
                                <h6 class="m-0">Brian</h6>
                                <span>info@gmail.com</span>
                            </div>
                            <div class="dropdown-body">
                                <a href="my-profile.html"
                                    class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                            viewBox="0 0 24 24" width="20px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                        </svg>
                                        <span class="ms-2">Profile</span>
                                    </div>
                                </a>
                                <a href="wishlist.html"
                                    class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                            viewBox="0 0 24 24" width="20px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                                        </svg>
                                        <span class="ms-2">Wishlist</span>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a class="btn btn-primary w-100 btnhover btn-sm" href="shop-login.html">Log
                                    Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- header search nav -->
        <div class="header-search-nav">
            <form class="header-item-search">
                <div class="input-group search-input">
                    <select class="default-select">
                        <option>Category</option>
                        <option>Photography </option>
                        <option>Arts</option>
                        <option>Adventure</option>
                        <option>Action</option>
                        <option>Games</option>
                        <option>Movies</option>
                        <option>Comics</option>
                        <option>Biographies</option>
                        <option>Children’s Books</option>
                        <option>Historical</option>
                        <option>Contemporary</option>
                        <option>Classics</option>
                        <option>Education</option>
                    </select>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                        placeholder="Search Books Here">
                    <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
