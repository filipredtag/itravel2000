{{-- <header class="main-header ">
    <div class="container">
        <a href="/">
            <img src="https://s3.amazonaws.com/itravel2000/img/branding/itravel2000-logo.svg" alt="itravel2000 Logo" class="logo">
        </a>
    </div>
    <nav class="navbar navbar-dark bg-primary">
        <ul class="nav navbar-nav container">
            <a class="nav-link" href="{{ trans('nav.header.home.url') }}">{{ trans('nav.header.home.name') }}</a>
            <li class="nav-item active"><a class="nav-link" href="{{ trans('nav.header.vacations.url') }}">{{ trans('nav.header.vacations.name') }} <span class="sr-only">(</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.hotels.url') }}">{{ trans('nav.header.hotels.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.cars.url') }}">{{ trans('nav.header.cars.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.cruises.url') }}">{{ trans('nav.header.cruises.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.groups.url') }}">{{ trans('nav.header.groups.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.promotions.url') }}">{{ trans('nav.header.promotions.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.mexico.url') }}">{{ trans('nav.header.mexico.name') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ trans('nav.header.trip_ideas.url') }}">{{ trans('nav.header.trip_ideas.name') }}</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </nav>
</header> --}}
<header class="main-header">
    <div class="container">
        <div class="row justify-content-between">
            <a href="{{ \App::getLocale() === 'fr' ? '/fr' : '/' }}">
                <img src="https://s3.amazonaws.com/itravel2000/img/branding/itravel2000-logo{{ (\App::getLocale() == 'fr') ? '-fr':'' }}.svg" alt="itravel2000 Logo" class="logo">
            </a>
            <div class="main-header-info row gutter-10">
                <div class="col-12 col-md-6 gutter-10 main-header-login hidden-sm-down">
                    <div class="popover-wrapper">
                        <a id="account-link" href="#">
                            <svg class="icon user" role="" title="">
                                <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-user"></use>
                            </svg>
                            <span class="ellipsis">@if ($signedInUser) {{ title_case($signedInUser->FullName) }} @else @lang('common.account') @endif</span>
                        </a>
                        @if (! $signedInUser)
                        <div id="account-popover" class="popover popover-bottom menu-popover fade d-none">
                            <div class="row">
                                <div class="col-sm-7 p-0">
                                    <a class="p-0" href="/best-price-calendar">
                                        <img src="https://s3.amazonaws.com/itravel2000/img/misc/bestpricecalendar{{\App::getLocale() === 'fr' ? '-FR' : ''}}.jpg">
                                    </a>
                                </div>
                                <div class=" col-sm-5 ">
                                    <ul class="list-unstyled">
                                        <li><a href="#" data-toggle="modal" data-target="#modal-sign-in">@lang('profile.signin')</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal-register">@lang('profile.signup')</a></li>
                                        <li><a href="{{ trans('nav.footer.edocuments.url') }}">{{ trans('nav.footer.edocuments.name') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="account-popover" class="popover popover-bottom menu-popover fade d-none">
                            @if(\App::getLocale() == 'en')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('dashboard') }}">@lang('common.dashboard')</a></li>
                                            <li><a href="{{ route('view-profile') }}">@lang('common.personal_info')</a></li>
                                            <li><a href="{{ route('change-password-profile') }}">@lang('common.change_password')</a></li>
                                            <li><a href="{{ route('logout') }}">@lang('common.sign_out')</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('member-price-alerts') }}">@lang('common.price_alerts')</a></li>
                                            {{-- <li><a href="#">Flight Status</a></li>
                                            <li><a href="#">Manage Bookings</a></li>
                                            <li><a href="#">Promo Code</a></li>
                                            <li><a href="#">My Scratchpad</a></li> --}}
                                        </ul>
                                    </div>
                                </div>



                            @else
                                {{-- full width for French - longer links --}}
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('dashboard') }}">@lang('common.dashboard')</a></li>
                                    <li><a href="{{ route('view-profile') }}">@lang('common.personal_info')</a></li>
                                    <li><a href="{{ route('change-password-profile') }}">@lang('common.change_password')</a></li>
                                    <li><a href="{{ route('member-price-alerts') }}">@lang('common.price_alerts')</a></li>
                                    <li><a href="{{ route('logout') }}">@lang('common.sign_out')</a></li>
                                </ul>


                            @endif
                        </div>
                        @endif
                    </div>
                    <div id="featured-menu-popover" class="popover popover-bottom featured-menu-popover menu-popover hide">
                        <div class="featured-img">
                            <img src="https://s3.amazonaws.com/itravel2000/img/travelideas/2017-04-28-18-13-28-all-inclusives-travel-idea-350x750.jpg" alt="">
                            <div class="featured-text">Featured Destination: Cancun</div>
                        </div>
                        <div class="row">
                            <div class=" col-12 ">
                                <h5>Popular Destinations</h5>
                                <ul class="list-unstyled list-grid-two">
                                    <li><a href="/vacation-deals/cuba">Cuba</a></li>
                                    {{-- <li><a href="/vacation-deals/cuba">The Caribbean</a></li> --}}
                                    <li><a href="/vacation-deals/mexico">Mexico</a></li>
                                    {{-- <li><a href="/vacation-deals/cuba">Europe</a></li> --}}
                                    <li><a href="/vacation-deals/dominican-republic">Dominican Republic</a></li>
                                    <li><a href="/vacation-deals/las-vegas">Las Vegas</a></li>
                                    <li><a href="/vacation-deals/jamaica">Jamaica</a></li>
                                    {{-- <li><a href="/vacation-deals/cuba">See all destinations</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="@lang('nav.header.newsletter.url')">
                        <svg class="icon mail" role="" title="">
                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-mail"></use>
                        </svg>@lang('common.newsletter')
                    </a>
                    @if (isset($header))
                    <a  href="@if (\App::getLocale() === 'fr') {{ $header->fullUrl->en }} @else {{ $header->fullUrl->fr }}  @endif">
                        <svg class="icon mail" role="" title="">
                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-earth"></use>
                        </svg>@if (\App::getLocale() === 'fr') English @else Français @endif
                    </a>
                    @else
                    <a  href="{{ \App::getLocale() === 'fr' ? '/' : '/fr' }}">
                        <svg class="icon mail" role="" title="">
                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/icons/icon-defs.svg#icon-earth"></use>
                        </svg>{{ \App::getLocale() === 'fr' ? 'English' : 'Français' }}
                    </a>
                    @endif
                </div>
                <div class="col-md-6 text-md-right border-left">
                    <div class="phone-number">1.866.<span class="orange-text">WOW.DEAL</span>(969.3325)</div>
                    <div class="hidden-sm-down operation-time"><span>@lang('common.hours_of_operation1')</span><span>@lang('common.hours_of_operation2')</span></div>
                </div>
            </div>
            <button id="hamburger" class="navbar-toggler hidden-md-up" type="button" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <section id="navbar-mobile" role="navigation" class="navbar">
        <div class="nav navbar-nav container justify-content-between" role="menubar">


            {{-- <h4 class="mobile-nav-header hidden-md-up" style="background: black; padding: 1rem; text-align: center;">Menu</h4> --}}
            


            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "vacations" && (count($header->urlSegments) == 1 || (count($header->urlSegments) > 1 && $header->urlSegments[1] != 'mexico'))) ? 'active':'' }}" href="@lang('nav.header.vacations.url')" role="menuitem"><span class="nav-title">@lang('nav.header.vacations.name')</span></a>
            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "flights") ? 'active':'' }}" href="@lang('nav.header.flights.url')" role="menuitem"><span class="nav-title">@lang('nav.header.flights.name')</span></a>
            <a class="nav-link" href="@lang('nav.header.hotels.url')" role="menuitem"><span class="nav-title">@lang('nav.header.hotels.name')</span></a>
            <a class="nav-link" href="@lang('nav.header.cars.url')" role="menuitem"><span class="nav-title">@lang('nav.header.cars.name')</span></a>
            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "cruises") ? 'active':'' }}" href="@lang('nav.header.cruises.url') " role="menuitem"><span class="nav-title">@lang('nav.header.cruises.name')</span></a>
            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "groups") ? 'active':'' }}" href="@lang('nav.header.groups.url')" role="menuitem"><span class="nav-title">@lang('nav.header.groups.name')</span></a>
            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "promotions") ? 'active':'' }}" href="@lang('nav.header.promotions.url')" role="menuitem"><span class="nav-title">@lang('nav.header.promotions.name')</span></a>
            <a class="nav-link {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "vacations" && count($header->urlSegments) > 1 && $header->urlSegments[1] === 'mexico') ? 'active':'' }}" href="@lang('nav.header.mexico.url') " role="menuitem"><span class="nav-title">@lang('nav.header.mexico.name')</span></a>
            <a class="nav-link" href="@lang('nav.header.trip_ideas.url') " role="menuitem"><span class="nav-title">@lang('nav.header.trip_ideas.name')</span></a>

            
            <a class="nav-link hidden-md-up" href="//www.itravel2000.com/edocuments.aspx?cmpid=hometools_edocs" role="menuitem"><span class="nav-title">@lang('common.e_documents')</span></a>
            <a class="nav-link hidden-md-up {{ (isset($header) && isset($header->activeMenu) && $header->activeMenu == "content" && $header->urlSegments[0] == 'newsletter') ? 'active':'' }}" href="#" role="menuitem"><span class="nav-title">@lang('common.newsletter')</span></a>

                    


            {{-- <a class="nav-link hidden-md-up" href="@lang('nav.header.home.url')" role="menuitem">@lang('nav.header.home.name')</a> --}}


            @if ($signedInUser)

                {{-- <h4 class="mobile-nav-header hidden-md-up" style="background: black; padding: 1rem; text-align: center;">My Profile</h4> --}}
                <div class="hidden-md-up horizontal-divider" ></div>


                <a class="nav-link hidden-md-up" href="{{ route('dashboard') }}" role="menuitem">@lang('common.dashboard')</a>
                {{-- <a class="nav-link hidden-md-up" href="{{ route('view-profile') }}" role="menuitem">@lang('common.personal_info')</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('change-password-profile') }}" role="menuitem">@lang('common.change_password')</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('member-price-alerts') }}" role="menuitem">@lang('common.price_alerts')</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('edit') }}" role="menuitem">Flight Status</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('edit') }}" role="menuitem">Manage Bookings</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('edit') }}" role="menuitem">Promo Code</a> --}}
                {{-- <a class="nav-link hidden-md-up" href="{{ route('edit') }}" role="menuitem">My Scratchpad</a> --}}
                <a class="nav-link hidden-md-up" href="{{ route('logout') }}" role="menuitem">@lang('common.sign_out')</a>


            @else


                <a class="nav-link hidden-md-up" href="#" role="menuitem" data-toggle="modal" data-target="#modal-sign-in">@lang('common.sign_in')</a>
                <a class="nav-link hidden-md-up" href="#" data-toggle="modal" data-target="#modal-register" role="menuitem">@lang('common.sign_up')</a>


            @endif
        </div>
    </section>
</header>
