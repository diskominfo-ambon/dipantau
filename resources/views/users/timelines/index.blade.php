@extends('layouts.dashlite')

@section('content')
<section class="d-flex align-items-center justify-content-between position-sticky top-0">
  <div class="flex-fill">
    <h3 class="m-0">Linimasa</h3>
    <p>Kumpulan laporan pemantauan</p>
  </div>
  {{-- search component. --}}
  <form class="border border-light rounded-sm d-flex align-items-center w-50">
    <div class="form-control-wrap flex-fill" data-toggle="tooltip" title="Telusuri lokasi pemantauan">
      <select class="form-select form-select-borderless" name="marker">
        <option value=""> halo dunia </option>
      </select>
    </div>
    <div class="form-control-wrap flex-fill" data-toggle="tooltip" title="Telusuri nama pengguna">
      <select class="form-select form-select-borderless" name="marker">
        <option value=""> halo dunia </option>
      </select>
    </div>
    <button class="btn btn-icon">
      <em class="icon ni ni-search"></em>
    </button>
  </form>

  {{-- end --}}
</section>

<x-timeline class="mt-5">
 <x-post/>
 <x-post/>
</x-timeline>
@endsection
