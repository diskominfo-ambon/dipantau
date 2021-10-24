<div>
  <x-form-group label="Pilih lokasi pemantuan">
    <x-inputs.select searchable size="lg" :items="[]"/>
    <div class="form-note-group">
      <span class="form-note-alt">
        Pilih salah satu lokasi pemantuan laporan saat ini.
      </span>
    </div>
  </x-form-group>

  <x-form-group label="Kategori">
    <x-inputs.select searchable multiple size="lg" :items="[]"/>
    <div class="form-note-group mt-3">
      <span class="form-note-alt">
        Pilih kategori yang sesuai dengan kondisi laporan pemantuan kamu saat ini.
      </span>
    </div>
  </x-form-group>

  <x-form-group label="Deskripsi pesan">
    <x-inputs.textarea/>
    <div class="form-note-group">
      <span class="form-note-alt">
        Masukan informasi deskripsi mengenai pemantauan (masalah & solusi).
      </span>
    </div>
  </x-form-group>

  <x-form-group label="Upload berkas laporan">
    <div class="form-note-group">
      <span class="form-note-alt">
        Upload berkas laporan Anda, format yang disahkan <b>pdf</b> dan memiliki max <b>2MB</b>.
      </span>
    </div>
    <div class="alert alert-warning mt-2 alert-xs py-1 d-flex align-content-center mb-2">
      <span class="d-block"><em class="icon ni ni-alert-circle"></em></span>
      <span class="d-block ml-1 fs-13px">Baca aturan jika berkas saya melebihi kapasitas ukuran <a href="#">disini</a>.</span>
    </div>
    <!-- FilePond Instance -->
    <input type="file" name="file" class="my-pond"/>
  </x-form-group>
</div>


@section('head')
<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css"/>
@endsection

@section('script')
<script src="{{ asset('js/report.js') }}"></script>
@endsection
