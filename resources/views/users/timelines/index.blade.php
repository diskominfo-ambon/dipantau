@extends('layouts.dashlite')

@section('content')
<section class="bg-white">
  <div class="row">
    <div class="col-sm-6">
      <h3 class="m-0">Linimasa</h3>
      <p>Kumpulan laporan pemantauan</p>
    </div>
    <div class="col-sm-6">
      <div class="d-flex align-items-center justify-content-end">
        <div class="dropdown mt-2">
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
                    <label class="overline-title overline-title-alt">Pengguna</label>
                    <select class="form-select form-select-sm" data-search="on">
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
                    <label class="overline-title overline-title-alt">Kategori pemantuan</label>
                    <select class="form-select form-select-sm" data-search="on">
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
                    <input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="Opsional: Pilih semua waktu"/>
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
                      <button type="button" class="btn btn-primary">Telusuri</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- .filter-wg -->
        </div><!-- .dropdown -->
      </div>
    </div>
  </div>
</section>

<x-timeline class="mt-5">
  @forelse ($reports as $report)
    <x-post/>
  @empty
    <div class="d-flex flex-column align-items-center justify-content-center">
      <img src="{{ asset('img/empty.png') }}" alt="empty"/>
      <h4>Pemantuan belum tersedia.</h4>
    </div>
  @endforelse

</x-timeline>
@endsection
