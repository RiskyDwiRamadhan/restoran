<header class="u-clearfix u-header u-header" id="sec-9d87">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
            <img src="/template/images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                    href="#">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    @if (Auth::user()->role == 'kasir')
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('home.home') }}" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('transaksi.index') }}" style="padding: 10px 20px;">Transaksi</a>
                        </li>
                    @else
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('home.homeCustomer') }}" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('home.menu') }}" style="padding: 10px 20px;">Menu</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('home.meja') }}" style="padding: 10px 20px;">Meja</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('detailorder.index') }}" style="padding: 10px 20px;">Keranjang</a>
                        </li>
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                              href="/dorder" style="padding: 10px 20px;">Detail Order</a>
                      </li>
                    @endif

                    <li class="u-nav-item">
                        {{-- <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Profile.html" style="padding: 10px 20px;">Profile</a> --}}

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html"
                                    style="padding: 10px 20px;">Home</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Menu.html"
                                    style="padding: 10px 20px;">Menu</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Meja.html"
                                    style="padding: 10px 20px;">Meja</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Transaksi.html"
                                    style="padding: 10px 20px;">Transaksi</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.html"
                                    style="padding: 10px 20px;">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
