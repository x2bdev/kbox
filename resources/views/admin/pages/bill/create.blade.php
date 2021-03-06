@extends('admin.admin_master')

@section('breadcrumbs_no_url')
    <div class="page-title">
        <div class="title_left">
            <h3>Thêm mới mã khuyến mãi</h3>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

@section('content')
    <section id="widget-grid" class="">
        {!! Form::open(array(
            'id' => 'submit_form',
            'class' => 'form-horizontal ',
            'method' => 'POST',
            'url'=> route('coupon.store')
        )) !!}
        @include('admin.blocks.notify.notify_error')
        <div class="row">
            <div class="col-md-9">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Nhập thông tin mã khuyến mãi</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Mã khuyến mãi <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::text('coupon_code', '', array('class' => 'form-control', 'placeholder' => 'Mã khuyến mãi')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Loại giá trị <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::select('amount_type',
                                    array(
                                        ''          => 'Chọn loại giá trị',
                                        'percent'   => 'Theo phần trăm',
                                        'amount'    => 'Theo giá tiền'
                                    ),
                                    '',
                                    array( 'class' => 'form-control select-category')
                                ) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Số tiền <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::number('amount', 1, array('class' => 'form-control', 'min' => 1)) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Ngày bắt đầu <span class="required">*</span></label>
                            <div class="col-md-10">
                                <input name="start_date" type="text" class="form-control has-feedback-left" id="start_date" aria-describedby="input_start_date">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="input_start_date" class="sr-only">(success)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Ngày hết hạn <span class="required">*</span></label>
                            <div class="col-md-10">
                                <input name="end_date" type="text" class="form-control has-feedback-left" id="end_date" aria-describedby="input_end_date">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="input_end_date" class="sr-only">(success)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @include('admin.blocks.box.submit')
                @include('admin.blocks.box.add.status')
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection

@section('js_content')
    <script>
        $(document).ready(function(){
            $('#start_date').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2",
                minDate: 0,
                locale: {
                    format: 'YYYY-MM-DD'
                },
            }, function(start, end, label) {
            });

            $('#end_date').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2",
                minDate: 0,
                locale: {
                    format: 'YYYY-MM-DD'
                },
            }, function(start, end, label) {
            });
        });
    </script>
@endsection
