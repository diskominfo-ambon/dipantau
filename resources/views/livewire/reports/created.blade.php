<div>
  <div class="row">
    <div class="col-md-8 offset-2">
      <div class="buysell-title">
        <h4 class="title fw-bold">Buat laporanmu menyenangkan!</h4>
        <p class="text-base d-block">Sebelum membuat laporan silahkan baca aturan dan kebijakan <a href="#">membuat laporan</a>.</p>
      </div>
      <div class="mt-5">
        <form method="POST" action="">
          @csrf
          @include('livewire.reports.form')

          <button class="btn btn-lg btn-primary">Selanjutnya <em class="ml-1 icon ni ni-arrow-right-c"></em></button>
        </form>
      </div>
    </div>
  </div>
</div>
