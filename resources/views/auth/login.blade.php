@extends('layouts.app')

@section('content')
<div class="container-login100">
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title pb-3 ">
                ỨNG DỤNG QUẢN LÝ & LƯU TRỮ TÀI LIỆU <br>
                Khoa Công nghệ thông tin
            </span>
            
            
            <div class="wrap-input100 validate-input" data-validate = "Invalid email / username">
                <input id="login" class="form-control @error('login') is-invalid @enderror input100" type="text" name="login" value="{{ old('login') }}" required autocomplete="email" autofocus placeholder="Tên đăng nhập / Email">
                <span class="focus-input100"></span>
                
            </div>
            
            
            <div class="wrap-input100 validate-input" data-validate="Invalid password">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input100" name="password" required autocomplete="current-password" placeholder="Mật khẩu">
                <span class="focus-input100"></span>
                @error('login')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row justify-content-between w-100 px-2 pt-2 pb-4 align-items-center">
                <div class="contact100-form-checkbox col-6">
                    <input class="input-checkbox100 form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="remember">
                        Ghi nhớ
                    </label>
                </div>

                <div class="col-6 text-end">
                    <a class="btn" style="color: #035291" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                </div>
            </div>
    

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn col-12">
                    ĐĂNG NHẬP &nbsp; <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            
        </form>

        <div class="login100-more" style="background-image: url('img/home-office.jpg');">
        </div>
    </div>
</div>
@endsection
