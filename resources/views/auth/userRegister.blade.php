@extends('layouts.layoutPoor')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="app" v-cloak>

    <div class="container-fluid">
        <div class="row  justify-content-center">
            <div class="col-md-8 ">

                <div class="card dir-rtl bg-indigo">
                    <div class="card-header">{{ __('Register') }}
                        @include('partials.enteryNavbar')

                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- firstName and lastName --}}
                            <div class="form-group row justify-content-center">
                                <div class="col-5">
                                    {{-- first name --}}
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-4 col-form-label text-center">{{ __('نام') }}</label>

                                        <div class="col-md-6">
                                            <input id="fname" type="text"
                                                class="form-control @error('fname') is-invalid @enderror" name="fname"
                                                value="{{ old('fname') }}" required autocomplete="fname"
                                                autofocus>

                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-5">
                                    {{-- first lname --}}
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-md-4 col-form-label text-center">{{ __('نام خانوادگی') }}</label>

                                        <div class="col-md-6">
                                            <input id="lname" type="text"
                                                class="form-control @error('lname') is-invalid @enderror" name="lname"
                                                value="{{ old('lname') }}" required autocomplete="lname"
                                                autofocus>

                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>


                             {{-- state and city --}}
                             <div class="form-group row justify-content-center">
                                <div class="col-5">
                                    {{--  state --}}
                                    <div class="form-group row">
                                        <label for="state"
                                            class="col-md-4 col-form-label text-center">{{ __('استان') }}</label>

                                        <div class="col-md-6">
                                            <input id="state" type="text"
                                                class="form-control @error('state') is-invalid @enderror" state="state"
                                                value="{{ old('state') }}" required autocomplete="state"
                                                autofocus name="state">

                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-5">
                                    {{--  city --}}
                                    <div class="form-group row">
                                        <label for="city"
                                            class="col-md-4 col-form-label text-center">{{ __('شهر ') }}</label>

                                        <div class="col-md-6">
                                            <input id="city" type="text"
                                                class="form-control @error('city') is-invalid @enderror" city="city"
                                                value="{{ old('city') }}" required autocomplete="city"
                                                autofocus name="city">

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>



                            {{-- complete address --}}
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-center">{{ __('آدرس دقیق') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" address="address"
                                        value="{{ old('address') }}" required autocomplete="address"
                                        autofocus name="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            {{-- complete postCode --}}
                            <div class="form-group row">
                                <label for="postCode"
                                    class="col-md-4 col-form-label text-center">{{ __(' کد پستی') }}</label>

                                <div class="col-md-6">
                                    <input id="postCode" type="number"
                                        class="form-control @error('postCode') is-invalid @enderror" postCode="postCode"
                                        value="{{ old('postCode') }}" required autocomplete="postCode"
                                        autofocus name="postCode">

                                    @error('postCode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            {{-- email address --}}
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-center">{{ __('ادرس ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- FixedNumber number --}}
                            <div class="form-group row">
                                <label for="FixedNumber"
                                    class="col-md-4 col-form-label text-center">{{ __('شماره ثابت') }}</label>

                                <div class="col-md-6">
                                    <input id="FixedNumber" type="tel"
                                        class="form-control @error('FixedNumber') is-invalid @enderror" name="FixedNumber"
                                        value="{{ old('FixedNumber') }}" required autocomplete="FixedNumber"
                                        required>

                                    @error('FixedNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                             {{-- phone number --}}
                             <div class="form-group row">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-center">{{ __('شماره موبایل') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone"
                                        required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- رمز عبور --}}
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-center">{{ __('رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- تکرار رمز عبور --}}
                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-center">{{ __('تکرار رمزعبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            {{-- select box user roles --}}
                            <div class="form-group row">
                                <label for="roles"
                                    class="col-md-4 col-form-label text-center">{{ __('نقش کاربر') }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select id="my-select" class="custom-select userType custom-select-lg mb-3"
                                            name="roles">
                                            <option value=""
                                                {{ old('roles') ? '' : 'selected' }}>
                                                ثبت نام به عنوان</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {!!
                                                    \App\Http\Controllers\UserController::hanyMethod($role->id,
                                                    $roles=null, old('roles')) !!}> {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- section for show just for wholesaler --}}
                            <div class="wholesaler d-none">
                                {{-- companyName --}}
                                <div class="form-group row">
                                    <label for="companyName"
                                        class="col-md-4 col-form-label text-center">{{ __('نام شرکت') }}</label>

                                    <div class="col-md-6">
                                        <input id="companyName" type="text"
                                            class="form-control @error('companyName') is-invalid @enderror"
                                            name="companyName" value="{{ old('companyName') }}"
                                            required autocomplete="companyName" autofocus>

                                        @error('companyName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- section for show just for wholesaler --}}


                            {{-- national card image --}}
                            <div class="form-group row">
                                <label for="nationalCode"
                                    class="col-md-4 col-form-label text-center">{{ __('تصویر کارت ملی') }}</label>

                                <div class="col-md-6 text-center">

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="" id="customFileLang" lang="es">
                                        <label class="custom-file-label" for="customFileLang">آپلود عکس</label>
                                    </div>

                                </div>
                            </div>


                            {{-- Contract form image --}}
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-center">{{ __('تصویر فرم قرارداد') }}</label>

                                <div class="col-md-6 text-center">
                                    <div class="input-group-prepend">
                                        <div class="">
                                            <a href="#" class="btn btn-link btn-sm text-danger">دانلود فرم قرارداد</a>
                                        </div>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                        <label class="custom-file-label" for="customFileLang"> آپلود عکس</label>
                                    </div>

                                </div>
                            </div>

                            {{-- captcha picture --}}
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


                            {{-- submit button --}}
                            <div class="form-group row">

                                <div class="col-md-6 m-auto">
                                    <input id="submit" type="submit" value="ثبت نام"
                                        class="form-control btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
