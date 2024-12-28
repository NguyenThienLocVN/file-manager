@extends('layouts.app')

@section('content')
<div class="container-login100">
    <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <span class="login100-form-title pb-3">
                Đăng ký tài khoản
            </span>
            
            <div class="wrap-input100 validate-input" data-validate = "Invalid password">
                <input id="email" class="form-control @error('email') is-invalid @enderror input100" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="Email">
                <span class="focus-input100"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Invalid email / username">
                <input id="name" class="form-control @error('name') is-invalid @enderror input100" type="text" name="name" value="{{ old('name') }}" required placeholder="Tên đăng nhập">
                <span class="focus-input100"></span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input100" name="password" required placeholder="Mật khẩu">
                <span class="focus-input100"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input id="password-confirm" type="password" class="form-control input100" name="password_confirmation" required placeholder="Nhập lại mật khẩu">
                <span class="focus-input100"></span>
            </div>

            <div class="row justify-content-between w-100 px-2 pt-2 pb-4 align-items-center">
                <div class="contact100-form-checkbox col-12">
                    <input class="input-checkbox100 form-check-input" required type="checkbox" name="confirm" id="confirm" {{ old('confirm') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="confirm">
                        Đồng ý với Điều khoản, Chính sách bảo mật của chúng tôi
                    </label>
                </div>
            </div>
    

            <div class="row d-flex col-12 justify-content-between ps-3">
                <a href="{{ route('login') }}" class="btn btn-outline-danger col-4 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-arrow-left"></i> &nbsp; QUAY LẠI 
                </a>
                <button type="submit" class="login100-form-btn col-7">
                    ĐĂNG KÝ &nbsp; <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            
        </form>

        <div class="login100-more" style="background-image: url('img/indoor-office.jpg');">
        </div>
    </div>
</div>
@endsection
