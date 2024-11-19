@extends ('layout.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

<style>
    body {
        background: cyan;

    }

    .card-body {
        text-align: center;
        padding: 40px;
    }

     .btn-purple {
        border: 2px solid blue;
        width: 100%;
        color: darkblue ;
        border-radius: 50px;
        background-color: aqua;
    }    

    .btn-purple:hover {
        color: blue;
        text-decoration: underline;
        font-weight: 600;
        
    }

   .card {
    background-color: whitesmoke;
   }

   .btn {
    width: 100%;
    
   }

</style>
@endsection

@section('title', 'Register Page')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>

            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="nik" class="formcontrol">
                        </div>

                            <div class="form-group">
                                 <input type="text" nama="nama" placeholder="nama" class="formcontrol">
                              </div>
                              
                        <div class="form-group">
                             <input type="text" nama="username" placeholder="username" class="formcontrol">
                        </div>

                        <div class="form-group">
                             <input type="password" nama="password" placeholder="password" class="formcontrol">
                        </div>

                        <button type="submit" class="btn btn-purple">Register</button>
                    </form>
                </div>
            </div>

            @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{Session::get('pesan')}}
                </div>
            @endif

            <a href="{{route('ereporthub.index')}}" class="btn btn-warning text-white mt-3">Back To Home</a>
        </div>
    </div>
</div>

@endsection