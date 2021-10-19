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
        DIPANTAU
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
          <h6 class="overline-title">Pintasan</h6>
          <div class="user-account-actions mt-2">
            @if ($user->hasRole('user'))
              <a href="{{ route('users.reports.create') }}" class="btn btn-lg btn-primary d-flex justify-content-center align-content-center">
                <em class="icon ni ni-note-add-c"></em>
                <span>Buat laporan</span>
              </a>

              <div class="dropdown mt-1 d-block">
                <a href="#" class="btn btn-dim btn-lg btn-outline-primary d-flex justify-content-center align-content-center" data-toggle="dropdown"><em class="icon ni ni-printer-fill mr-1"></em> Download laporan <em class="icon ni ni-chevron-down"></em></a>

                <div class="dropdown-menu dropdown-menu-auto mt-1">
                  <ul class="link-list-plain d-block">
                    <li class="w-100"><a href="#">Hari ini</a></li>
                    <li class="w-100"><a href="#">1 Minggu</a></li>
                    <li class="w-100"><a href="#">1 Bulan</a></li>
                  </ul>
                </div>
              </div>
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

            <ul class="link-list">
              <li><a href="#"><em class="icon ni ni-user-fill"></em><span>Profil saya</span></a></li>
              @if ($user->hasRole('user'))
              <li>
                <a href="#">
                  <em class="icon ni ni-note-add-fill-c"></em>
                  <span>Buat laporan</span>
                </a>
              </li>
              <li class="dropdown mt-1 d-block">
                <a href="#" data-toggle="dropdown"><em class="icon ni ni-printer-fill mr-1"></em> Download laporan <em class="icon ni ni-chevron-down"></em></a>

                <div class="dropdown-menu dropdown-menu-auto mt-1">
                  <ul class="link-list-plain d-block">
                    <li class="w-100"><a href="#">Hari ini</a></li>
                    <li class="w-100"><a href="#">1 Minggu</a></li>
                    <li class="w-100"><a href="#">1 Bulan</a></li>
                  </ul>
                </div>
              </li>
              @endif
            </ul>
            <ul class="link-list">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="btn btn-white btn-block text-danger"><em class="icon ni ni-signout" style="margin-left: -12px; display: inline-block;"></em><span>Keluar</span></button>
                </form>
              </li>
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
              <x-anchor text="Beranda" to="{{ route('users.dashboard') }}" icon="ni-dashboard-fill"/>
            </li>
            <li class="nk-menu-item">
              <x-anchor text="Linimasa" to="{{ route('users.timeline') }}" icon="ni-masonry-fill"/>
            </li>
            <li class="nk-menu-item">
              <x-anchor text="To do" to="{{ route('users.todos.index') }}" icon="ni ni-list-thumb-fill"/>
            </li>
          </ul><!-- .nk-menu -->
        </div><!-- .nk-sidebar-menu -->

        <div class="nk-sidebar-footer">
          <ul class="nk-menu nk-menu-footer">
            <li class="nk-menu-item">
              <x-anchor text="Butuh bantuan?" to="{{ route('help') }}" icon="ni-help-alt"/>
            </li>
          </ul><!-- .nk-footer-menu -->
        </div><!-- .nk-sidebar-footer -->
      </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-body -->
  </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar -->
