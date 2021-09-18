@php
    $user = auth()->user();
@endphp
<!-- sidebar -->
<div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/crypto/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('vendor/dashlite/img/logo.png') }}" srcset="{{ asset('vendor/dashlite/img/logo2x.png') }} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('vendor/dashlite/img/logo-dark.png') }}" srcset="{{ asset('vendor/dashlite/img/logo-dark2x.png') }} 2x" alt="logo-dark">
                <span class="nio-version">dipantau</span>
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-widget d-none d-xl-block">
                    <div class="user-account-info between-center">
                        <div class="user-account-main">
                            <h6 class="overline-title-alt">Available Balance</h6>
                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                        </div>
                    </div>
                    <ul class="user-account-data gy-1">
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">Profits (7d)</span>
                            </div>
                            <div class="user-account-value">
                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                            </div>
                        </li>
                        <li>
                            <div class="user-account-label">
                                <span class="sub-text">Deposit in orders</span>
                            </div>
                            <div class="user-account-value">
                                <span class="sub-text">0.005400 <span class="currency currency-btc">BTC</span></span>
                            </div>
                        </li>
                    </ul>
                    <div class="user-account-actions">
                        @if ($user->hasRole('user'))
                            <a href="#" class="btn btn-lg btn-primary"><span>Deposit</span></a>
                        @endif
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                        <div class="user-card-wrap">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">{{ str($user->name)->title()->limit(22) }}</span>
                                    <span class="sub-text">{{ str($user->email)->lower()->limit(30) }}</span>
                                </div>
                                <div class="user-action">
                                    <em class="icon ni ni-chevron-down"></em>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                        <div class="user-account-info between-center">
                            <div class="user-account-main">
                                <h6 class="overline-title-alt">Available Balance</h6>
                                <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                            </div>
                            <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                        </div>
                        <ul class="user-account-data">
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">Profits (7d)</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                    <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                </div>
                            </li>
                            <li>
                                <div class="user-account-label">
                                    <span class="sub-text">Deposit in orders</span>
                                </div>
                                <div class="user-account-value">
                                    <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                </div>
                            </li>
                        </ul>
                        <ul class="user-account-links">
                            <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                            <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                        </ul>
                        <ul class="link-list">
                            <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                            <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                            <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                        <ul class="link-list">
                            <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                        </ul>
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-menu">
                    <!-- Menu -->
                    <ul class="nk-menu">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Menu</h6>
                        </li>
                        <li class="nk-menu-item">
                            <x-anchor text="Dashboard"/>
                        </li>

                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->

                <div class="nk-sidebar-footer">
                    <ul class="nk-menu nk-menu-footer">
                        <li class="nk-menu-item">
                            <x-anchor text="Support" icon="ni-help-alt"/>
                        </li>
                    </ul><!-- .nk-footer-menu -->
                </div><!-- .nk-sidebar-footer -->
            </div><!-- .nk-sidebar-content -->
        </div><!-- .nk-sidebar-body -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar -->
