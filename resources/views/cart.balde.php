@extends('front')

@section('content')

@if (session('cart'))

<div>
    <div>
        <a class="btn btn-danger" href="{{url('batal')}}">Batal</a>
    </div>
    @php
        $no=1;
        $total = 0;
    @endphp    
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach (session('cart')as $idmenu=>$menu)
                <tr>
                    <td>{{ 1 }}</td>
                    <td>{{ $menu('Menu') }}</td>
                    <td>{{ $menu('Harga') }}</td>
                    <td>
                        <span><a href="{{url('kurang/'.$menu['idmenu'])}}"> [-] </a></span>
                        {{ $menu('Jumlah') }}
                        <span><a href="{{url('tambah/'.$menu['idmenu'])}}"> [+] </a></span>
                    </td>
                    <td>{{ $menu['Jumlah'] * $menu['harga'] }}</td>
                    <td><a href="{{url('hapus/'.$menu['idmenu'])}}">Hapus</a></td>
                   
                </tr>
                @php 
               
                $total = $total + ($menu['Jumlah'] * $menu['harga']);
            @endphp
            @endforeach
           
            <tr>
                <td colspan="4">Total Pembayaran</td>
                <td>{{$total}}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <a class="btn btn-success" href="{{url('checout')}}">Checkout</a>
    </div>
</div>

@else
    <script>
        window.location.href="/";
    </script>
@endif

@endsection

