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
            <select class="form-select form-select-borderless" name="marker_id">
              @foreach($marker_points as $point)
                <option value="{{ $point->id }}"> {{ ucfirst($point->name) }} </option>
              @endforeach
            </select>
          </div>
          <div class="form-control-wrap w-100" data-toggle="tooltip" title="Telusuri nama pengguna">
            <select class="form-select form-select-borderless" name="user_id">
              @foreach($users as $user)
                <option value="{{ $user->id }}"> {{ ucfirst($user->name) }} </option>
              @endforeach
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
  @forelse ($reports as $report)
    <x-post/>
  @empty
    <div class="d-flex flex-column align-items-center justify-content-center">
      <img src="{{ asset('img/empty.png') }}" alt="empty"/>
      <h4>Laporan pemantuan belum tersedia.</h4>
    </div>
  @endforelse

</x-timeline>
@endsection
