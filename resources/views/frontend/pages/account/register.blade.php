@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="block-title"><span>Đăng ký tài khoản</span></h3>
                        {!! Form::open(array(
                            'id' => 'submit_form',
                            'method' => 'POST',
                            'url'=> route('taikhoan.register.post'),
                            'class' => 'create-account'
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input value="{{ old('email') }}" class="form-control" type="text" placeholder="Email" name="email">
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input value="{{ old('password') }}" class="form-control" type="password" placeholder="Mật khẩu" name="password">
                                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input value="{{ old('name') }}" class="form-control" type="text" placeholder="Họ và tên" name="name">
                                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="col-md-6">
                                    <input value="{{ old('phone') }}" class="form-control" type="text" placeholder="Số điện thoại" name="phone">
                                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input value="{{ old('address') }}" class="form-control" type="text" placeholder="Địa chỉ" name="address">
                                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-theme btn-theme-dark btn-create" type="submit">Đăng ký</button>
                                </div>
                            </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-gift"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Buy 1 Get 1</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-comments"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Call to Free</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                    <h4 class="media-heading">Money Back!</h4>
                                    Proin dictum elementum velit. Fusce euismod consequat ante.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
@stop