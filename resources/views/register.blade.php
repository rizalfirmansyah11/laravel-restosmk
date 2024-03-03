@extends('front')

@section('content')

<div class="row">
    <div class="col-6">
        <form action="{{ url('/postregister') }}" method="post">
            @csrf
            <div class="mt-2">
                <label class="form-label" for="">Pelanggan</label>
                <input class="form-control" value="{{ old('pelanggan') }}" type="text" name="pelanggan" id="">
                <span class="text-danger">
                    @error('pelanggan')
                        {{ '$massage' }}
                    @enderror
                </span>

            </div>
            <div class="mt-2">
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" value="{{ old('alamat') }} type="text" name="alamat" id="">
                <span class="text-danger">
                    @error('alamat')
                        {{ '$massage' }}
                    @enderror
                </span>
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Telp</label>
                <input class="form-control" value="{{ old('telp') }} type="text" name="telp" id="">
                <span class="text-danger">
                    @error('telp')
                        {{ '$massage' }}
                    @enderror
                </span>
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Jenis Kelamin</label>
                <select class="form-select" name="jeniskelamin" id="">
                    <option value="1"></option>
                    <option value="p" selected>P</option>
                </select>
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Email</label>
                <input class="form-control" value="{{ old('email') }} type="email" name="email" id="">
                <span class="text-danger">
                    @error('email')
                        {{ '$massage' }}
                    @enderror
                </span>
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
                <span class="text-danger">
                    @error('password')
                        {{ '$massage' }}
                    @enderror
                </span>

            </div>
            <div class="mt-2">
               
               <Button class="btn btn-primary">Register</Button>
            </div>


        </form>
    </div>
</div>

@endsection