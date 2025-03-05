<div>
    <div class="iq-sidebar  sidebar-default  ">
        <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
            <a href="index.html" class="header-logo">
                {{-- <img src="{{ asset('assets/images/logo.png')}}" class="img-fluid rounded-normal " alt="logo"> --}}
                <span>Datum</span>
            </a>
            <div class="side-menu-bt-sidebar-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none"
                    viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="side-menu">
                    <li class="active sidebar-layout">
                        <a href="{{ route('admin-dashboard') }}" class="svg-icon">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Dashboard</span>
                            <p class="mb-0 w-10 badge bg-primary">6</p>
                        </a>
                    </li>
                    <li class="px-3 pt-3 pb-2 ">
                        <span class="text-uppercase small fw-bold">Application</span>
                    </li>
                    <li class=" sidebar-layout">
                        <a href="customer.html" class="svg-icon ">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Customer</span>
                        </a>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app1" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Lead</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                width="15" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                        <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" sidebar-layout">
                                <a href="{{ route('add_lead') }}" class="svg-icon">
                                    <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Add lead</span>
                                </a>
                            </li>
                            <li class=" sidebar-layout">
                                <a href="{{ route('manage_lead') }}" class="svg-icon">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                            </path>
                                        </svg>
                                    </i><span class="">lead</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app2" class="collapsed svg-icon" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Account</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                width="15" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" sidebar-layout">
                                <a href="{{ route('add_accounts') }}" class="svg-icon">
                                    <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Add Account</span>
                                </a>
                            </li>
                            <li class=" sidebar-layout">
                                <a href="{{ route('manage_accounts') }}" class="svg-icon">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Manage Account</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#app3" class="collapsed svg-icon" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Deals</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                width="15" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" sidebar-layout">
                                <a href="{{ route('add_lead') }}" class="svg-icon">
                                    <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Add Deals</span>
                                </a>
                            </li>
                            <li class=" sidebar-layout">
                                <a href="{{ route('manage_deals') }}" class="svg-icon">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Manage Deals</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#app4" class="collapsed svg-icon" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                    viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </i>
                            <span class="ms-2">Contacts</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"
                                width="15" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <ul id="app4" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class=" sidebar-layout">
                                <a href="{{ route('add_lead') }}" class="svg-icon">
                                    <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Add Contacts</span>
                                </a>
                            </li>
                            <li class=" sidebar-layout">
                                <a href="{{ route('manage_contacts') }}" class="svg-icon">
                                    <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                            </path>
                                        </svg>
                                    </i><span class="">Manage Contacts</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                    <li class="sidebar-layout">
                        <a href="#app4" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </i>
                            <span class="ms-2">Setting</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <ul id="app4" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.settings') }}" class="svg-icon">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                        </svg>
                                    </i>
                                    <span class="">Manage Setting</span>
                                </a>
                            </li>
                        </ul>
                    </li>

            </nav>
            <div class="pt-5 pb-5"></div>
        </div>
    </div>
</div>
