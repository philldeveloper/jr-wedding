@extends('layouts.wedding')

<style>
    body, html {
        height: 100%;
        margin: 0;
        position: relative;
        /* opacity: 0.90; */
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.959), rgb(17 36 44 / 75%)), url('../img/jr7.jpg') !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        font-family: 'Outfit', sans-serif !important;
    }
    label, .card-header{
        color: #fff;
        font-size: 20px !important;
    }
    /* .card{
        border: 1px solid rgb(116 61 25) !important;
    } */
    p{
        font-size: 13pt;
    }
    input#email, input#password{
        border-bottom: 1px solid#fff !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        background: none !important;
        font-size: 20px !important;
        color: white !important;
    }
</style>

@section('content')

<div class="container" style="position: relative; top: 30px">
    <div class="row justify-content-center">
        
        <div class="col-md-5 mt-3 col-sm-12 col-xs-12">
            <div class="text-center">
                <a href="{{asset('/')}}" class="nav-link text-white">
                    <img src="{{asset('img/jr-weeding-w.png')}}" alt="" width="75%">
                </a>
            </div>

            <div class="card bg-transparent border-0 rounded-0 shadow mt-2" style="background-color: rgb(255 255 255 / 100%);"> <!--style="background-color: rgb(255 255 255 / 10%);-->

                <div class="card-body rounded-0 border-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                {{-- <label for="email" class="col-form-label text-md-right">{{ __('Email') }}</label> --}}
                                <input id="email" placeholder="{{ __('Email') }}" type="email" class="rounded-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-12">
                                {{-- <label for="password" class="col-form-label text-md-right">{{ __('Senha') }}</label> --}}
                                <input placeholder="{{ __('Senha') }}" id="password" type="password" class="rounded-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block bg-wedding wed-button mt-3 p-3" style="width: 100% !important">
                                    {{ __('FAZER LOGIN') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <p class="col-md-6 pt-5 text-center text-white w-100">
            <b>
                <i class="fa fa-exclamation-circle pr-2"></i> INFORMAÇÕES IMPORTANTES:
            </b>
            <br>
            Para acessar o sistema, use seu primeiro nome seguido de @jr
            <br>
            <br>
            EX: Login: <span class="bg-light text-dark p-1"><b>ramon@jr</b></span> e senha <span class="bg-light text-dark p-1"><b>ramon@jr</b></span>
        </p>
    </div>

</div>
@endsection
