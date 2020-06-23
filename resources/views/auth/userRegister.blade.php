@extends('layouts.layoutPoor')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="register" v-cloak>

    <div class="container-fluid">
        <div class="row  justify-content-center">
            <div class="col-md-8 ">

                <div class="card dir-rtl bg-indigo">
                    <div class="card-header">{{ __('Register') }}
                        @include('partials.enteryNavbar')

                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- firstName and lastName --}}
                            <div class="form-group row justify-content-center">
                                <div class="col-5">
                                    {{-- first name --}}
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-md-4 col-form-label text-center">{{ __('نام') }}</label>

                                        <div class="col-md-6">
                                            <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') ?? 'mohammad' }}" required autocomplete="fname" autofocus >

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
                                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') ?? 'ravand' }}" required autocomplete="lname"  autofocus>

                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- state --}}
                            <div class="form-group row ">

                                <label for="address" class="col-md-4 col-form-label text-center">{{ __('آدرس دقیق') }}</label>

                                <div class="col-md-6 dir-ltr">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <select name="" class="custom-select mr-sm-2 dir-rtl open" ref="cities" id="">
                                              <option value="" v-if="userCity.length==0">استان ها</option>
                                              <option  v-for="(city,index) in fCities" :key="index" :value="city.id" @click="selectCity(city)">@{{city.city}}</option>
                                          </select>
                                        </div>
                                        <input type="text" @keyup="filterCities" v-model="userCity" class="form-control" aria-label="Text input with dropdown button">
                                      </div>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- state --}}
                            <div class="form-group row ">
                                <label for="address" class="col-md-4 col-form-label text-center">{{ __('آدرس دقیق') }}</label>

                                <div class="col-md-6 dir-ltr">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <select name="" class="custom-select mr-sm-2 dir-rtl open" ref="states" id="">
                                              <option value="" v-if="userState.length==0">استان ها</option>
                                              <option  v-for="(state,index) in fStates" :key="index" :value="state.id" @click="selectState(state)">@{{state.state}}</option>
                                          </select>
                                        </div>
                                        <input type="text" @keyup="filterStates" v-model="userState" class="form-control" aria-label="Text input with dropdown button">
                                      </div>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            {{-- complete address --}}
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-center">{{ __('آدرس دقیق') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" address="address" value="{{ old('address') }}" required autocomplete="address"  autofocus name="address" value="marivan-ardalan street">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            {{-- complete postCode --}}
                            <div class="form-group row">
                                <label for="postCode" class="col-md-4 col-form-label text-center">{{ __(' کد پستی') }}</label>

                                <div class="col-md-6">
                                    <input id="postCode" type="number" class="form-control @error('postCode') is-invalid @enderror" postCode="postCode"  value="{{ old('postCode') }}" required autocomplete="postCode" autofocus name="postCode" value="1234567890">

                                    @error('postCode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            {{-- email address --}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-center">{{ __('ادرس ایمیل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" value="computer@gmail.com" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- FixedNumber number --}}
                            <div class="form-group row">
                                <label for="FixedNumber"  class="col-md-4 col-form-label text-center">{{ __('شماره ثابت') }}</label>

                                <div class="col-md-6">
                                    <input id="FixedNumber" type="tel" class="form-control @error('FixedNumber') is-invalid @enderror" name="FixedNumber"  value="{{ old('FixedNumber') }}" required autocomplete="FixedNumber"  required value="0876543213">

                                    @error('FixedNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                             {{-- phone number --}}
                             <div class="form-group row">
                                <label for="phone"  class="col-md-4 col-form-label text-center">{{ __('شماره موبایل') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" required value="0988765432">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- رمز عبور --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-center">{{ __('رمز عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="mohammad">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- تکرار رمز عبور --}}
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-center">{{ __('تکرار رمزعبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"  name="password_confirmation"  value="mohammad" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- select box user roles --}}
                            <div class="form-group row">
                                <label for="roleId"  class="col-md-4 col-form-label text-center">{{ __('نقش کاربر') }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select ref="roleId" @change="changeRoleId"  id="roleId" name="roleId" class="custom-select @error('roleId') is-invalid @enderror userType custom-select-lg mb-3">
                                            <option value="" {{ old('roleId') ? '' : 'selected' }}>ثبت نام به عنوان</option>
                                            @foreach($roles as $role)
                                                <option value="{{(old('roleId') !=null && old('roleId')==$role->id ) ?  old('roleId')  : $role->id }}" {{old('roleId') !=null ? (old('roleId')==$role->id ? 'selected' : '') : ('')}}> {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('roleId')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- section for show just for wholesaler --}}
                            <div class="wholesaler" v-if="isWholesaler">
                                {{-- companyName --}}
                                <div class="form-group row">
                                    <label for="companyName" class="col-md-4 col-form-label text-center">{{ __('نام شرکت') }}</label>

                                    <div class="col-md-6">
                                        <input id="companyName" type="text"  class="form-control @error('companyName') is-invalid @enderror" name="companyName" value="{{ old('companyName') }}"
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
                                        <input type="file" class="custom-file-input @error('nationalCardImage') is-invalid @enderror" name="nationalCardImage" id="customFileLang" lang="es">
                                        <label class="custom-file-label" for="customFileLang">آپلود عکس</label>
                                        @error('nationalCardImage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>


                            {{-- Contract form image --}}
                            <div class="form-group row">
                                <label for="contractImage"  class="col-md-4 col-form-label text-center">{{ __('تصویر فرم قرارداد') }}</label>

                                <div class="col-md-6 text-center">
                                    <div class="input-group-prepend">
                                        <div class="">
                                            <a href="#" class="btn btn-link btn-sm text-danger">دانلود فرم قرارداد</a>
                                        </div>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('contractImage') is-invalid @enderror" name="contractImage" id="customFileLang" lang="en">
                                        <label class="custom-file-label" for="customFileLang"> آپلود عکس</label>
                                        @error('contractImage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- captcha picture --}}
                            <div class="form-group row">
                                <label for="captcha" class="col-md-4 col-form-label text-center">{{ __('تصویر امنیتی') }}</label>

                                <div class="col-md-6 text-center">

                                    <p> {!!captcha_img()!!} </p>
                                    <p><input type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror"></p>



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

@section('script')
    <script>
        var roleId;

        @if(old('roleId'))

         roleId = {{(old("roleId")) }};
        @endif
    </script>
@endsection
