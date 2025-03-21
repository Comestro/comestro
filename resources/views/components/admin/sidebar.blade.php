<div>
    <div class="iq-sidebar sidebar-default">
        <div class="data-scrollbar" data-scroll="1">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="side-menu">
                    <li class="active sidebar-layout mt-2">
                        <a href="{{ route('admin-dashboard') }}" class="svg-icon">
                            <i class="">
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10" />
                                </svg>
                            </i>
                            <span class="ms-2">Dashboard</span>
                         {{-- <p class="mb-0 w-10 badge bg-primary">6</p>  --}}
                        </a>
                    </li>
                    <li class="px-3 pt-3 pb-2">
                        <span class="text-uppercase small fw-bold">Application</span>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app1" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </i>
                            <span class="ms-2">Lead</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('add_lead') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Lead</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('manage_lead') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Lead</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app2" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </i>
                            <span class="ms-2">Account</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('add_accounts') }}" class="svg-icon">
                                    <i class="">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Account</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('manage_accounts') }}" class="svg-icon">
                                    <i class="">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app3" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </i>
                            <span class="ms-2">Deals</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('add_deal') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Deals</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('manage_deals') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Deals</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app4" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                </svg>
                            </i>
                            <span class="ms-2">Contacts</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app4" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('create') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Contacts</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('manage_contacts') }}" class="svg-icon">
                                    <i class="">
                                     
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Contacts</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app5" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37 1 .608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </i>
                            <span class="ms-2">Setting</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.settings') }}" class="svg-icon">
                                    <i>
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Setting</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app6" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </i>
                            <span class="ms-2">Blogs</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.blogs.create') }}" class="svg-icon">
                                    <i class="">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Blog</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.blogs.manage-blog') }}" class="svg-icon">
                                    <i class="">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#about" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                               
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 1.857h10M9 6a3 3 0 11-6 0 3 3 0 016 0zm12 0a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </i>
                            <span class="ms-2">About</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="about" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.about.create') }}" class="svg-icon">
                                    <i class="">
                                     
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                        </svg>
                                    </i>
                                    <span class="">Add About</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{route('admin.about.manage-about')}}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Manage About</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#team" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </i>
                            <span class="ms-2">Team</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="team" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.team.create') }}" class="svg-icon">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Team Member</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{route('admin.team.manage-team')}}" class="svg-icon">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 1.857h10M9 6a3 3 0 11-6 0 3 3 0 016 0zm12 0a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Team</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#services" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                                <!-- SVG for Services (e.g., a "tools" icon symbolizing service) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.83-5.83M11.42 15.17l2.83-2.83m0 0L21 5.66A2.652 2.652 0 0017.25 2l-6.58 6.58m0 0L5 11.42a2.652 2.652 0 000 3.75l1.41 1.41a2.652 2.652 0 003.75 0l1.26-1.41z" />
                                </svg>
                            </i>
                            <span class="ms-2">Services</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="services" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.service.create') }}" class="svg-icon">
                                    <i>
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </i>
                                    <span class="">Add Service</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{route('admin.service.manage-service')}}" class="svg-icon">
                                    <i>
                                        <!-- SVG for Manage Services (e.g., a "list" icon) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Services</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-layout">
                        <a href="#app7" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                             
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253" />
                                </svg>
                            </i>
                            <span class="ms-2">Course</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app7" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.course.create') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Course</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.course.manage-course') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Course</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app8" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                              
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </i>
                            <span class="ms-2">Customer</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app8" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.customers.create') }}" class="svg-icon">
                                    <i class="">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </i>
                                    <span class="">Add Customer</span>
                                </a>
                            </li>
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.customers.manage-customer') }}" class="svg-icon">
                                    <i class="">
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Customer</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app9" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                            <i>
                               
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </i>
                            <span class="ms-2">Comment</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <ul id="app9" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="sidebar-layout">
                                <a href="{{ route('admin.comments') }}" class="svg-icon">
                                    <i>
                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                        </svg>
                                    </i>
                                    <span class="">Manage Comment</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-layout">
                        <a href="#app10" class="collapsed svg-icon" data-bs-toggle="collapse" aria-expanded="false">
                           
                            <livewire:auth.logout/>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="pt-5 pb-5"></div>
        </div>
    </div>
    <style>
        .iq-sidebar {
            background-color: #2c3e50;
            color: #ffffff;
        }
    </style>
</div>