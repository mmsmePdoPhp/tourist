@extends('layouts.layoutPoor')

@section('content')
@if(session()->get('error'))
    <x-package-alert type="danger" title="Sorry !!" message="{{ session()->get('error') }}" />
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <x-package-alert type="danger" title="error" message="{{ $error }}" />
                @endforeach
            @endif
            <div class="card dir-rtl">
                <div class="card-header">{{ __('صفحه ی ورود') }}

                   @include('partials.enteryNavbar')
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-center">{{ __('ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-center">{{ __('رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-center">{{ __('تصویر امنیتی') }}</label>

                            <div class="col-md-6 text-center">

                                <p> {!!captcha_img()!!} </p>
                                <p><input type="text" name="captcha"></p>



                                @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="submit"
                                class="col-md-4 col-form-label text-center"></label>

                            <div class="col-md-6">
                                <input id="submit" type="submit" value="ورود" class="form-control btn btn-primary">


                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
{{-- show automatically modal status --}}
<script>
    $('#modalStatus').modal('show')

</script>
@endsection
