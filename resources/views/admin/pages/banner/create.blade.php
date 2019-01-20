@extends('admin.admin_master')

@section('breadcrumbs_no_url')
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
            <h3 class="txt-color-blueDark"><i class="fa-fw fa fa-users"></i> Thêm mới banner</h3>
        </div>
    </div>
@endsection

@section('content')
    <section id="widget-grid" class="">
        {!! Form::open(array(
            'id' => 'submit_form',
            'class' => 'form-horizontal',
            'method' => 'POST',
            'url'=> route('banner.store'),
            'enctype' => 'multipart/form-data'
        )) !!}
        @include('admin.blocks.notify.notify_error')
        <div class="row">
            <div class="col-md-9">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Nhập thông tin banner</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <strong style="color: red">Kích thước
                                    chuẩn : ( Slider: 870x450px ) - ( Banner: 570x250px )</strong>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tên banner <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Tên banner')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">URL <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::text('url', '', array('class' => 'form-control', 'placeholder' => 'URL')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Loại <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!!
                                    Form::select('type', [
                                        0 => 'Normal',
                                        1 => 'Slide'
                                    ],
                                    '',
                                    array('class' => 'form-control')
                                    )
                                 !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('admin.blocks.box.submit')
                @include('admin.blocks.box.add.image')
                @include('admin.blocks.box.add.status')
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection
