@extends('frontend.frontend_master')
@section('contents')
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="block-title"><span>Đăng nhập</span></h3>
                        {!! Form::open(array(
                            'id' => 'submit_form',
                            'method' => 'POST',
                            'url'=> route('taikhoan.login.post'),
                            'class' => 'create-account'
                        )) !!}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <input type="hidden" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input value="{{ old('email') }}" class="form-control" type="text" placeholder="Email" name="email">
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input value="{{ old('password') }}" class="form-control" type="password" placeholder="Mật khẩu" name="password">
                                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-theme btn-theme-dark btn-create" type="submit">Đăng nhập</button>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-block btn-theme btn-theme-dark btn-create" href="/dang-ky.html">Đăng ký</a>
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