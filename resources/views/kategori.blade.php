{{-- @extends('front')

@section('content')
<div class="row">
    @foreach($menus as $menu)
        <div class="card mx-2 mb-2" style="width: 18rem;">
            <img src="{{ asset('gambar/' . $menu -> gambar) }}" class="card-img-top img-fluid"  style="height: 200px;" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$menu -> menu}}</h5>
            <p class="card-text">{{$menu -> deskripsi}}</p>
            <h5 class="card-title mt-3">{{$menu -> harga}}</h5>
            <a href="#" class="btn btn-primary">Beli</a>
            </div>
        </div>
    @endforeach
</div>
@endsection --}}

@extends('front')

@section('content')
<div class="row">
    @foreach($menus as $menu)
        <div class="card mx-2 mb-2" style="width: 18rem;">
            <img src="{{ asset('gambar/' . $menu -> gambar) }}" class="card-img-top img-fluid"  style="height: 200px;" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$menu -> menu}}</h5>
            <p class="card-text">{{$menu -> deskripsi}}</p>
            <h5 class="card-title mt-3">{{$menu -> harga}}</h5>
            <a href="{{url('beli/' . $menu -> idmenu)}}" class="btn btn-primary">Beli</a>
            </div>
        </div>
    @endforeach
<div class="mt-3 justify-content-center d-flex">
    {{$menus->links()}}
</div>
</div>
@endsection
