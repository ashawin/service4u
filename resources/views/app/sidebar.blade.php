 <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{url('admin/dashboard')}}" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-dashboard')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                  <li class="nk-menu-item">
                                    <a href="{{route('admin-service')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Services</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 <li class="nk-menu-item">
                                    <a href="{{route('admin-service-request')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Service Requests</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                               
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-product')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Products</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-provider')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Providers</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-customer')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Customers</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <!-- <li class="nk-menu-item">
                                    <a href="html/ecommerce/supports.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                        <span class="nk-menu-text">Supports</span>
                                    </a>
                                </li><!-- .nk-menu-item  -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-setting')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-opt-alt-fill"></em></span>
                                        <span class="nk-menu-text">Settings</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-transaction')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">Wallet</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                  <li class="nk-menu-item">
                                    <a href="{{route('admin-wallet-request')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">Wallet Request</span>
                                    </a>
                                </li>

                                  <li class="nk-menu-item">
                                    <a href="{{route('admin-inbox')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">Inbox</span>
                                    </a>
                                </li>
                               
                                <!-- .nk-menu-item -->
                             <!--     <li class="nk-menu-item">
                                    <a href="html/ecommerce/integration.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">Integration</span>
                                    </a>
                                </li> -->
                           
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Return to</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/index.html" class="nk-menu-link" target="_blank">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite-alt"></em></span>
                                        <span class="nk-menu-text">Main Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/components.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                                        <span class="nk-menu-text">All Components</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>