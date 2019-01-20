@extends('admin.admin_master')

@section('breadcrumbs_no_url')
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
            <h3 class="txt-color-blueDark"><i class="fa-fw fa fa-users"></i> Chỉnh sửa bài viết</h3>
        </div>
    </div>
@endsection

@section('content')
    <section id="widget-grid" class="">
        {!! Form::open(array(
            'id' => 'submit_form',
            'class' => 'form-horizontal ',
            'method' => 'PUT',
            'url'=> route('article.update', $data->id),
            'enctype' => 'multipart/form-data'
        )) !!}
        @include('admin.blocks.notify.notify_error')
        <div class="row">
            <div class="col-md-9">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Nhập thông tin bài viết</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Danh mục</label>
                            <div class="col-md-10">
                                {!! Form::select('category_article_id',
                                    $categories,
                                    $data->category_article_id,
                                    array( 'class' => 'form-control select-category' )
                                ) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tên bài viết <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::text('name', $data->name, array('class' => 'form-control', 'placeholder' => 'Tên bài viết')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Slug <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::text('slug', $data->slug, array('class' => 'form-control', 'placeholder' => 'Slug')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Mô tả <span class="required">*</span></label>
                            <div class="col-md-10">
                                {!! Form::textarea('description', $data->description, array('class' => 'form-control', 'rows' => "3")) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nội dung <span class="required">*</span></label>
                            <div class="col-md-10">
                                <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
                                <textarea class="ckeditor form-control" name="content" id="content" rows="1">{{ $data->content }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @php
                    $status = $data->status;
                    $image = "article/" . $data->image;
                @endphp
                @include('admin.blocks.box.submit')
                @include('admin.blocks.box.edit.image')
                @include('admin.blocks.box.edit.status')
            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection

@section('js_content')
    <script>
        $(document).ready(function(){
            $("input[name='name']").keyup((event) => {
                $("input[name='slug']").val(string_to_slug(event.target.value));
            });
        });
    </script>
@endsection
