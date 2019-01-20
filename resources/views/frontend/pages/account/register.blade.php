@extends('frontend.frontend_master')
@section('contents')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h1 class="breadmome-name">Đăng ký</h1>
                        <ul>
                            <li><a href=".">Trang chủ</a></li>
                            <li class="active">Đăng ký</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-area mt-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-form">
                                {!! Form::open(array(
                                    'id' => 'submit_form',
                                    'method' => 'POST',
                                    'url'=> route('taikhoan.register.post'),
                                    'enctype' => 'multipart/form-data'
                                )) !!}
                                    @if(Session::has('noticeMassage'))
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="alert alert-success">
                                                    {{ Session::get('noticeMassage') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <input type="hidden" value="{{ csrf_token() }}" />
                                    <p>Đã có tài khoản! <a href="/dang-nhap.html">Đăng nhập!</a></p>
                                    <label>Họ tên</label>
                                    <input name="name" type="text" value="{{ old('name') }}">
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                    <label>Email</label>
                                    <input name="email" type="email" value="{{ old('email') }}">
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    <label>Mật khẩu</label>
                                    <input name="password" type="password">
                                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                    <label>Số điện thoại</label>
                                    <input name="phone" type="text" value="{{ old('phone') }}">
                                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                    <label>Địa chỉ</label>
                                    <input name="address" type="text" value="{{ old('address') }}">
                                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                    <div class="button-box">
                                        <button type="submit" class="default-btn">Đăng ký</button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop