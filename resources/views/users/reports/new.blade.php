@extends('layouts.dashlite')

@section('content')
<div class="row">
  <div class="col-md-7">
    <div class="buysell wide-xs">
      <div class="buysell-title">
        <h4 class="title fw-medium">Buat laporanmu menyenangkan!</h4>
      </div><!-- .buysell-title -->
      <div class="buysell-block">
        <form action="#" class="buysell-form">
          <div class="buysell-field form-group">
            <div class="form-label-group">
              <label class="form-label">Judul</label>
            </div>
            <input type="text" name="title" autocomplete="off" autofocus required placeholder="Contoh: Pemantuan lokasi ...." class="form-control form-control-lg form-control-number">
            <div class="form-note-group">
              <span class="form-note-alt">Pasktikan menggunakan judul yang jelas untuk kemudahan pencarian.</span>
            </div>
          </div>
          <div class="buysell-field form-group">
            <div class="form-label-group">
              <label for="" class="form-label">Lokasi CCTV</label>
            </div>
            <div class="form-control-wrap form-select-lg">
              <select name=""  data-search="on" data-ui="lg" class="form-select form-select-lg form-control form-control-lg form-control-number">
                <option value="abdullalie">CCTV Pertigaan Abdulallie</option>
              </select>
            </div>
          </div>
          <div class="buysell-field form-group mt-5">
            <div class="form-label-group">
              <label class="form-label">Kategori</label>
            </div>
            <div class="form-pm-group">
              <ul class="buysell-pm-list">
                <li class="buysell-pm-item">
                  <input class="buysell-pm-control" type="checkbox" name="bs-method" id="pm-paypal" />
                  <label class="buysell-pm-label" for="pm-paypal">
                    <span class="pm-name">Lalu lintas</span>
                  </label>
                </li>
                <li class="buysell-pm-item">
                  <input class="buysell-pm-control" type="checkbox" name="bs-method" id="pm-bank" />
                  <label class="buysell-pm-label" for="pm-bank">
                    <span class="pm-name">Sampah</span>
                  </label>
                </li>
                <li class="buysell-pm-item">
                  <input class="buysell-pm-control" type="checkbox" name="bs-method" id="pm-card" />
                  <label class="buysell-pm-label" for="pm-card">
                    <span class="pm-name">Sungai</span>
                  </label>
                </li>
                <li class="buysell-pm-item">
                  <input class="buysell-pm-control" type="checkbox" name="bs-method" id="pm-card" />
                  <label class="buysell-pm-label" for="pm-card">
                    <span class="pm-name">Bendungan</span>
                  </label>
                </li>
                <li class="buysell-pm-item">
                  <input class="buysell-pm-control" type="checkbox" name="bs-method" id="pm-card" />
                  <label class="buysell-pm-label" for="pm-card">
                    <span class="pm-name">Taman</span>
                  </label>
                </li>
              </ul>
              <div class="form-note-group">
                <span class="form-note-alt">Laporan dapat memiliki lebih dari satu ketegori pemantauan.</span>
              </div>
            </div>
          </div><!-- .buysell-field -->
          <div class="buysell-field form-group">
            <div class="form-label-group">
              <label class="form-label">Deskripsi</label>
            </div>
            <textarea placeholder="......" name="description" id="description" required autofocus autocomplete="off" class="form-control form-control-lg form-control-number"></textarea>
            <div class="form-note-group">
              <span class="form-note-alt">
                Masukan informasi lengkap tentang pemantauan (masalah & solusi).
              </span>
            </div>
          </div><!-- .buysell-field -->

          <div class="buysell-field form-group">
            <div class="form-label-group">
              <label for="" class="form-label">Upload berkas</label>
            </div>
            <div class="upload-box">
                <div  class="upload-box__field upload-box__item">
                    <em class="icon ni ni-plus-c"></em>
                </div>
                <input type="file" class="d-none" />
            </div>
            <div class="form-note-group">
              <span class="form-note-alt">
                Upload berkas laporan Anda, format yang disahkan <strong>pdf</strong> dan memiliki max <strong>5mb</strong>.
              </span>
            </div>
          </div>
          <div class="buysell-field form-action">
            <a href="#" class="btn btn-lg btn-block btn-primary w-auto" data-toggle="modal" data-target="#buy-coin"><em class="icon ni ni-note-add-fill-c mr-1"></em> Tambahkan laporan</a>
          </div><!-- .buysell-field -->
          <div class="form-note text-base text-center"><strong>Info:</strong> Baca aturan dan kebijakan <a href="#">membuat laporan</a>.</div>
        </form><!-- .buysell-form -->
      </div><!-- .buysell-block -->
    </div><!-- .buysell -->
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
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-report-times__item">
            <div>
              <div>
                <span>Lalu lintas</span> • <span>Pukul 02:30 WIT</span>
              </div>
              <span class="badge badge-dim badge-warning border mt-1 badge-sm">Macet</span>
            </div>
            <button href="#" class="btn btn-icon btn-danger btn-sm"><em class="icon ni ni-cross"></em></button>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>


@verbatim
<div id="app">
  <h1>Form</h1>

  <form method="POST" action="" @submit.prevent="handleOnSubmit">

    <report-fields
      v-model="form"
      submit-text="Tambahkan"
    />

  </form>

</div>
@endverbatim

@endsection

@section('head')
<script defer src="{{ asset('js/add.js') }}"></script>
@endsection

@section('script')
<script>
  $(document).ready(main);


  function main() {
    // Auto-resize text input [textarea] description.
    $('#description').on('input', function (e) {
      const target = e.target;
      target.setAttribute('style', 'height: auto;');
      target.setAttribute('style', `height: ${target.scrollHeight}px !important;`);

      console.log(target.scrollHeight);
    });
  }
</script>
@endsection
