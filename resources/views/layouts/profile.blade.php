@extends('layouts.dashlite')

@section('content')
<div class="nk-content-body">
  <div class="nk-block-head nk-block-head-sm">
  <div class="g-3">
    <div class="nk-block-head-content">
      <a href="html/user-list-regular.html" class="btn bg-white p-0 d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Kembali</span></a>
      <a href="html/user-list-regular.html" class="btn btn-icon bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
    </div>
    <div class="nk-block-head-content">
      <h3 class="nk-block-title page-title">Profil / <strong class="text-primary small">{{ str(Auth::user()->name)->title()->limit(20) }}</strong></h3>
      <div class="nk-block-des text-soft">
        <ul class="list-inline">
          <li>Terakhir Login: <span class="text-base">15 Feb, 2019 01:02 PM</span></li>
        </ul>
      </div>
    </div>
  </div>
  </div><!-- .nk-block-head -->
  <div class="nk-block">
  <div class="card card-bordered">
    <div class="card-aside-wrap">
      <div class="card-content">
        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('active') && 'active' }}" href="{{ route('profile') }}"><em class="icon ni ni-user-circle-fill"></em><span>Pengguna</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('users.profile.report') && 'active' }}" href="{{ route('users.profiles.report') }}"><em class="icon ni ni-file-text-fill"></em><span>Pemantuan</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><em class="icon ni ni-bell-fill"></em><span>Pemberitahuan</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><em class="icon ni ni-todo-fill"></em><span>To-do</span></a>
          </li>
          @if (request()->routeIs('profile'))
          <li class="nav-item nav-item-trigger">
            <button id="btn-submit__profile-form" type="button" disabled class="d-none toggle btn btn-dim btn-outline-primary" data-target="userAside">Simpan perubahan <em
            class="ml-1 icon ni ni-check-fill-c"></em></button>

            <button id="btn-edit__profile-form" type="button" href="#" class="toggle btn btn-dim btn-outline-info" data-target="userAside"><em class="icon ni ni-edit-fill"></em></button>
          </li>
          @endif
        </ul><!-- .nav-tabs -->
        <div class="card-inner">
          @yield('menu')
        </div><!-- .card-inner -->
      </div><!-- .card-content -->
    </div><!-- .card-aside-wrap -->
  </div><!-- .card -->
  </div><!-- .nk-block -->
</div>


@endsection
