@php
 $user = auth()->user();
@endphp

<!-- main header @s -->
<div class="nk-header nk-header-fluid nk-header-fixed is-light">
  <div class="container-fluid">
    <div class="nk-header-wrap">
      <div class="nk-menu-trigger d-xl-none ml-n1">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
      </div>
      <div class="nk-header-brand d-xl-none">
        <a href="{{ route('users.dashboard') }}" class="logo-link">
          <span class="text-primary fs-20px">🔎 🚙 Pantau</span>
        </a>
      </div>
      <div class="nk-header-news d-none d-xl-block">
        <div class="nk-news-list">
          <a class="nk-news-item" href="{{ route('help') }}">
            <div class="nk-news-icon">
              <em class="icon ni ni-card-view"></em>
            </div>
            <div class="nk-news-text">
              <p>Baca informasi lengkap mengenai kententuan dan kebijakan dalam penggunaan aplikasi</p>
              <em class="icon ni ni-external"></em>
            </div>
          </a>
        </div>
      </div>
      <div class="nk-header-tools">
        <ul class="nk-quick-nav">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <div class="user-toggle">
                <div class="user-avatar sm">
                  <em class="icon ni ni-user-fill"></em>
                </div>
                <div class="user-info d-none d-md-block">
                  <div class="user-status user-status-unverified">Pengguna</div>
                  <div class="user-name dropdown-indicator">{{ str($user->name)->title()->limit(22) }}</div>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
              <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                <div class="user-card">
                  <div class="user-avatar">
                    <em class="icon ni ni-user-fill"></em>
                  </div>
                  <div class="user-info">
                    <span class="lead-text">{{ str($user->name)->title()->limit(22) }}</span>
                    <span class="sub-text">{{ str($user->email)->lower()->limit(30)  }}</span>
                  </div>
                </div>
              </div>
              <div class="dropdown-inner">
                <ul class="link-list">
                  <li><a href="{{ route('profile') }}"><em class="icon ni ni-user-fill"></em><span>Profile saya</span></a></li>
                  <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                </ul>
              </div>
              <div class="dropdown-inner">
                <ul class="link-list">
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @method('POST')
                      @csrf
                      <button class="btn btn-block"><em class="icon ni ni-signout" style="margin-left: -12px; display: inline-block;"></em><span>Keluar</span></button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="dropdown notification-dropdown mr-n1">
            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
              <div class="icon-status icon-status-info"><em class="icon ni ni-bell-fill"></em></div>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
              <div class="dropdown-head">
                <span class="sub-title nk-dropdown-title">Pemberitahuan</span>
              </div>
              <div class="dropdown-body">
                <div class="nk-notification">
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                  <div class="nk-notification-item dropdown-inner">
                    <div class="nk-notification-icon">
                      <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                    </div>
                    <div class="nk-notification-content">
                      <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                      <div class="nk-notification-time">2 hrs ago</div>
                    </div>
                  </div><!-- .dropdown-inner -->
                </div>
              </div><!-- .nk-dropdown-body -->
              <div class="dropdown-foot center">
                <a href="#">Muat lebih</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- main header @e -->
