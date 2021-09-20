@extends('layouts.dashlite')



@section('breadcrumb')
<div class="nk-block-head">
  <div class="nk-block-head-sub"><span>Dashboard</span> </div>
  <div class="nk-block-between-md g-4">
    <div class="nk-block-head-content">
      <h2 class="nk-block-title fw-normal">@azmanabdlh / Dashboard</h2>
      <div class="nk-block-des">
        <p>Berikut semua daftar aset pengunaan Anda!</p>
      </div>
    </div>
    <div class="nk-block-head-content">
      <ul class="nk-block-tools gx-3">
        <li class="opt-menu-md dropdown">
          <a href="#" class="btn btn-dim btn-outline-primary" data-toggle="dropdown"><em class="icon ni ni-printer-fill mr-1"></em> Download laporan <em class="icon ni ni-chevron-down"></em></a>
          <div class="dropdown-menu  dropdown-menu-xs dropdown-menu-right">
            <ul class="link-list-plain sm">
              <li><a href="#">Hari ini</a></li>
              <li><a href="#">1 Minggu</a></li>
              <li><a href="#">1 Bulan</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="nk-block nk-block-lg">
  <div class="nk-block-head-sm">
    <div class="nk-block-head-content">
      <h5 class="nk-block-title title">Informasi pengguna</h5>
    </div>
  </div>

  <div class="row g-gs">
    <div class="col-md-6 col-lg-4">
      <div class="card card-bordered is-dark">
        <div class="nk-wgw">
          <div class="nk-wgw-inner">
            <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
              <div class="nk-wgw-icon is-default">
                <em class="icon ni ni-reports"></em>
              </div>
              <h5 class="nk-wgw-title title">Laporan</h5>
            </a>
            <div class="nk-wgw-balance">
              <div class="amount">30k<span class="currency currency-usd">Jumlah minggu ini</span></div>
              <div class="amount-sm">20 <span class="currency currency-usd">Jumlah laporan untuk hari ini</span></div>
            </div>
          </div>
          <div class="nk-wgw-more dropdown">
            <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
              <ul class="link-list-plain sm">
                <li><a href="#">Minggu ini</a></li>
                <li><a href="#">Bulan ini</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card card-bordered">
        <div class="nk-wgw">
          <div class="nk-wgw-inner">
            <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
              <div class="nk-wgw-icon bg-info">
                <em class="icon ni ni ni-list-thumb-fill text-white"></em>
              </div>
              <h5 class="nk-wgw-title title">To-do</h5>
            </a>
            <div class="nk-wgw-balance">
              <div class="amount">329k<span class="currency currency-usd">Jumlah</span></div>
              <div class="amount-sm">Terdapat 29k yang belum terselesaikan</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card card-bordered">
        <div class="nk-wgw">
          <div class="nk-wgw-inner">
            <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
              <div class="nk-wgw-icon bg-light">
                <em class="icon ni ni-heart-fill text-danger"></em>
              </div>
              <div>
                <h5 class="nk-wgw-title title">Kategori langgananmu</h5>
                <div class="nk-wgw-subtitle">Daftar kategori laporan langgananmu</div>
              </div>
            </a>
            <div class="badge-overflow">
              <div class="badge-overflow__container">
                <div class="badge-overflow__item">Halo dunia 1</div>
                <div class="badge-overflow__item">Halo indonesia 2</div>
                <div class="badge-overflow__item">Halo batak 3</div>
                <div class="badge-overflow__item">Halo amerika 4</div>
                <div class="badge-overflow__item">Halo japan 5</div>

                <div class="badge-overflow__item">Halo hongkong 1</div>
                <div class="badge-overflow__item">Halo dunia 2</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
