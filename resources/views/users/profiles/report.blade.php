@extends('layouts.profile')

@section('menu')
<div class="nk-block">
  <div class="nk-block-head d-flex align-items-center justify-content-between">
    <div>
      <h5 class="title">Informasi laporan pemantuan</h5>
      <p>Berikut informasi lengkap laporan pemantuan yang pernah Anda buat.</p>
    </div>
    <div class="dropdown">
      <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
        Urutkan
        <em class="icon ni ni-filter-alt ml-1"></em>
      </a>
      <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
        <div class="dropdown-head">
          <span class="sub-title dropdown-title">Urutkan bedasarkan</span>
          <div class="dropdown">
            <a href="#" class="btn btn-sm btn-icon">
              <em class="icon ni ni-cross"></em>
            </a>
          </div>
        </div>
        <div class="dropdown-body dropdown-body-rg">
          <div class="row gx-6 gy-3">

            <div class="col-12">
              <div class="form-group">
                <label class="overline-title overline-title-alt">Kategori pemantuan</label>
                <select class="form-select form-select-sm">
                  <option value="any">Any Status</option>
                  <option value="active">Active</option>
                  <option value="pending">Pending</option>
                  <option value="suspend">Suspend</option>
                  <option value="deleted">Deleted</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="overline-title overline-title-alt">Tanggal</label>
                <select class="form-select form-select-sm">
                  <option value="any">Any Status</option>
                  <option value="active">Active</option>
                  <option value="pending">Pending</option>
                  <option value="suspend">Suspend</option>
                  <option value="deleted">Deleted</option>
                </select>
              </div>
            </div>
            <div class="col-8">
              <div class="custom-control custom-control-sm custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="hasKYC">
                <label class="custom-control-label" for="hasKYC"> Tandai bersama beberapa pengguna</label>
              </div>
            </div>
            <div class="col-4 position-relative">
              <div style="position: absolute !important; bottom: .625rem;">
                <div class="form-group">
                  <button type="button" class="btn btn-secondary">Telusuri</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .filter-wg -->
    </div><!-- .dropdown -->
  </div><!-- .nk-block-head -->

  <div class="nk-tb-list nk-tb-ulist">

    @for ($i = 0 ; $i<20; $i++)
    <div class="nk-tb-item">
      <div class="nk-tb-col tb-col-lg">
        <div class="d-flex">
          <x-icon name="reports" style="font-size: 32px;" class="mr-2" />
          <div>
            <h6 class="fs-16px">📍  Pemantauan CCTV Abdulalie · <time datetime="">11 - 12 Januari 2021</h6>
            <ul class="d-flex mt-2">
              <li class="fs-13px font-nunito"><x-icon name="calendar-alt-fill"/> 10 Feb 2020</li>
              <li class="fs-13px font-nunito mx-1">·</li>
              <li class="fs-13px font-nunito"><x-icon name="bookmark-fill"/> Lalu lintas </li>
              <li class="fs-13px font-nunito mx-1">·</li>
              <li class="fs-13px font-nunito">
                <x-icon name="file-check-fill" class="text-info"/> Tersedia pemantuan
              </li>
              <li class="fs-13px font-nunito mx-1">·</li>
              <li class="fs-13px font-nunito">
                <x-icon name="users-fill"/> Ditandai bersama beberapa pengguna
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="nk-tb-col nk-tb-col-tools">
        <ul class="nk-tb-actions gx-1">
          <li>
            <div class="drodown">
              <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                <em class="icon ni ni-more-h"></em>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="link-list-opt no-bdr">
                  <li><a href="#"><em class="icon ni ni-eye-fill"></em><span>Lihat pemantuan</span></a></li>
                  <li><a href="#"><em class="icon ni ni-file-fill"></em><span>Download</span></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Ubah</span></a></li>
                  <li><a href="#" class="text-danger"><em class="icon ni ni-trash-fill"></em><span>Hapus</span></a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div><!-- .nk-tb-item -->
    @endfor
  </div>

</div>
@endsection
