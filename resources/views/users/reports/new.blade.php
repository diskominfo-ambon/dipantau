@extends('layouts.dashlite')

@section('content')
<div id="app">
  <div class="row">
    <div class="col-md-7">
      <div class="buysell wide-xs">
        <div class="buysell-title">
          <h4 class="title fw-medium">Buat laporanmu menyenangkan!</h4>
        </div>
        <div class="buysell-block">
          <form class="buysell-form" method="POST" action="" @submit.prevent="handleOnSubmit">
            @verbatim

            <h1>Halo {{ form.name }}</h1>

            <!-- submit -->
            <div class="buysell-field form-action">
              <a href="#" class="btn btn-lg btn-block btn-primary w-auto" data-toggle="modal" data-target="#buy-coin">
                <em class="icon ni ni-note-add-fill-c mr-1"></em> Tambahkan laporan
              </a>
            </div>
            <!-- end -->

            <div class="form-note text-base text-center"><strong>Info:</strong> Baca aturan dan kebijakan <a href="#">membuat laporan</a>.</div>

            @endverbatim
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="sticky-top" style="top: 80px; z-index: 0;">
        <a class="btn btn-light text-secondary border">Tambahkan<em class="icon ni ni-clock ml-1"></em> </a>
        <small class="d-block mt-1 text-gray">
          <em>(Opsional)</em> Anda dapat menambahkan laporan waktu pemantauan sesuai kondisi. <a href="#">Baca lebih lanjut apa itu laporan waktu pemantauan.</a>
        </small>

        <div class="card card-bordered mt-5">
          <div class="card-header border-bottom font-nunito fw-bold d-flex align-items-center">
            <em style="font-size: 1.1rem;" class="icon ni ni-clock mr-1"></em>
            Laporan waktu pemantauan
          </div>
          <list-group>
            <list-item class="list-report-times__item">
              <div>
                <div>
                  <span>Lalu lintas</span> • <span>Pukul 02:30 WIT</span>
                </div>
                <span class="badge badge-dim badge-warning border mt-1 badge-sm">Macet</span>
              </div>
              <button href="#" class="btn btn-icon btn-danger btn-sm"><em class="icon ni ni-cross"></em></button>
            </list-item>
          </list-group>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('head')
<script async defer src="{{ mix('js/packs/reports/add.js') }}"></script>
@endsection
