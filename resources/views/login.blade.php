@extends('front')

@section('content')

<div class="row">
    <div class="col-6">
        <form action="{{ url('/postlogin') }}" method="post">
            @csrf

            @if (Session::has('pesan'))
                <div class="alert alert-danger">
                    {{ Session::get('pesan') }}
                </div>    
            
                
            @endif           
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
            <div class="mt-4">
               
               <Button class="btn btn-primary" type="submit">login</Button>
            </div>


        </form>
    </div>
</div>

@endsection