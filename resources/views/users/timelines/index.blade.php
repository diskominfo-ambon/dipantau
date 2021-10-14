@extends('layouts.dashlite')

@section('content')
<section class="bg-white position-sticky sticky-top">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h3 class="m-0">Linimasa</h3>
      <p>Kumpulan laporan pemantauan</p>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="d-flex align-items-center justify-content-end">
        <form class="border border-light rounded-sm d-flex align-items-center w-100">
          <div class="form-control-wrap w-100" data-toggle="tooltip" title="Telusuri lokasi pemantauan">
            <select class="form-select form-select-borderless" name="marker">
              <option value=""> halo dunia </option>
            </select>
          </div>
          <div class="form-control-wrap w-100" data-toggle="tooltip" title="Telusuri nama pengguna">
            <select class="form-select form-select-borderless" name="marker">
              <option value=""> halo dunia </option>
            </select>
          </div>
          <button class="btn btn-icon">
            <em class="icon ni ni-search"></em>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<x-timeline class="mt-5">
 <x-post/>
 <x-post/>
</x-timeline>
@endsection
