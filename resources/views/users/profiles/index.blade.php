@extends('layouts.profile')

@section('menu')
<div class="nk-block">
  <div class="nk-block-head">
    <h5 class="title">Informasi pengguna</h5>
    <p>Berikut informasi lengkap pengguna.</p>
  </div><!-- .nk-block-head -->
  <form method="post" action="{{ route('profile.update') }}" id="profile-form" class="d-block">
    <div class="profile-ud-list">
      @csrf
      @method('PUT')
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <p class="profile-ud-label">Nama lengkap</p>
          <div class="profile-ud-value align-items-end justify-content-center d-flex flex-column">
            <input readonly name="name" class="form-control w-auto form-control-sm" type="text" value="{{ Auth::user()->name }}"/>
            @error('name')
              <x-error :message="$message"/>
            @enderror
          </div>
        </div>
      </div>
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <span class="profile-ud-label">Jenis kelamin</span>
          <div class="profile-ud-value align-items-end justify-content-center d-flex flex-column">
            <select name="gender" class="form-control w-auto" disabled>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
            @error('gender')
              <x-error :message="$message"/>
            @enderror
          </div>
        </div>
      </div>
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <span class="profile-ud-label">Alamat email</span>
          <div class="profile-ud-value align-items-end justify-content-center d-flex flex-column">
            <input readonly class="form-control w-auto form-control-sm" type="email" name="email" value="{{ Auth::user()->email }}"/>
            @error('email')
              <x-error :message="$message"/>
            @enderror
          </div>
        </div>
      </div>
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <span class="profile-ud-label">Status jabatan</span>
          <div class="profile-ud-value align-items-end justify-content-center d-flex flex-column">
            <select name="job_title" class="form-control w-auto" disabled>
              <option value="laki-laki">Sistem Analisis</option>
              <option value="perempuan">Programmer Web</option>
            </select>
            @error('job_title')
              <x-error :message="$message"/>
            @enderror
          </div>
        </div>
      </div>
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <span class="profile-ud-label">Kata sandi baru</span>
          <div class="profile-ud-value align-items-end justify-content-center d-flex flex-column">
            <input readonly class="form-control w-auto form-control-sm" type="password" name="password" readonly/>
            <span class="text-gray mt-1 fs-13px">Setel untuk masukan kata sandi baru.</span>
            @error('password')
              <x-error :message="$message"/>
            @enderror
          </div>
        </div>
      </div>
      <div class="profile-ud-item">
        <div class="profile-ud wider">
          <span class="profile-ud-label">Status</span>
          <span class="profile-ud-value text-success">Aktif</span>
        </div>
      </div>
    </div><!-- .profile-ud-list -->
  </form>
</div><!-- .nk-block -->
<div class="nk-divider divider md"></div>
<div class="nk-block">
  <div class="nk-block-head nk-block-head-sm nk-block-between">
    <h5 class="title">Pedoman Pengguna</h5>
  </div><!-- .nk-block-head -->
  <div class="bq-note">
    <div class="bq-note-item">
      <div class="bq-note-text">
        <p>
          Kami memastikan segala informasi dalam platform ini tidak disebarkan luaskan.
        </p>
      </div>
      <div class="bq-note-meta">
        <span class="bq-note-added">Ditambahkan pada <span class="date">November 18, 2021</span> at <span class="time">5:34 PM</span></span>
        <span class="bq-note-sep sep">|</span>
        <span class="bq-note-by">By <span>Admin</span></span>
      </div>
    </div><!-- .bq-note-item -->
  </div><!-- .bq-note -->
</div><!-- .nk-block -->
@endsection


@section('script')
<script>
  $(document).ready(main);

  function main() {
    $('#btn-edit__profile-form').on('click', function () {
      $(this).addClass('d-none');

      $('#btn-submit__profile-form')
        .removeAttr('disabled')
        .removeClass('d-none');

        // aktfikan semua bidang [inputs].
        $('input, select')
          .removeAttr('disabled')
          .removeAttr('readonly');
    });


    $('#btn-submit__profile-form').on('click', () => {
      $('#profile-form').submit();
    });
  }
</script>
@endsection
