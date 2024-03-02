@extends('front')

@section('content')

<div>
    <div>
        <form action="">

            <div class="mt-2">
                <label class="form-label" for="">Pelanggan</label>
                <input class="form-control" type="text" name="pelanggan" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Telp</label>
                <input class="form-control" type="text" name="telp" id="">
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
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="mt-2">
                <label class="form-label" for="">Password</label>
                <input class="form-control" type="text" name="password" id="">
            </div>
            <div class="mt-2">
               
               <Button class="btn btn-primary">Register</Button>
            </div>


        </form>
    </div>
</div>

@endsection