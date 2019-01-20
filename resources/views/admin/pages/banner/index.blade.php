@extends('admin.admin_master')

@section('breadcrumbs_no_url')
    <div class="row">
        <h3 class="txt-color-blueDark"><i class="fa-fw fa fa-user"></i> Banner </h3>
    </div>
    @include('admin.blocks.notify.notify_notice')
@endsection

@section('content')
    @include('admin.layouts.partial.button', array(
        'router_add' => route('banner.create'),
        'total_active' => '',
        'total_inactive' => '',
        'router_status' => route('banner.status'),
        'router_delete' => route('banner.delete'),
        'router_confirm' => route('banner.indexConfirm')

    ))

    @include('admin.layouts.partial.filter', array(
        'status' => array(
            'all' => 'Lọc theo tình trạng',
            'inactive' => 'Không hoạt động',
            'active' => 'Hoạt động'
        ),
        'type' => array(
            'all'   => 'Lọc theo loại',
            0       => 'Normal',
            1       => 'Slide'
        ),
        'action' => route('banner.index')
    ))
    {{--Danh sach--}}
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Danh sách</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link" data-toggle="tooltip" data-placement="bottom"
                               data-original-title="Show/Hide">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings a-center">
                                <th><input type="checkbox" id="check-all" class="flat"></th>
                                <th class="column-title">Tên</th>
                                <th class="column-title">Hình ảnh</th>
                                <th class="column-title">Loại</th>
                                <th class="column-title">Chỉnh sửa</th>
                                <th class="column-title">Tình trạng</th>
                                <th class="column-title">Quản lý</th>
                                <th class="bulk-actions" colspan="5">
                                    <a class="antoo" style="color:#fff; font-weight:500;">
                                        Tổng số ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i>
                                    </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($banners))
                                @foreach ( $banners as $banner )
                                    <tr class="pointer">
                                        <td class="a-center td-content">
                                            <input type="checkbox" class="flat" name="table_records"
                                                   value="{{$banner->id}}">
                                        </td>
                                        <td class="td-content">{{$banner->name}}</td>
                                        <td class="td-content gallery-rebox">
                                            <a href="{{ asset('public/upload/images/banner/' . $banner->image) }}">
                                                <img alt="{{ $banner->name  }}"
                                                     src="{{ asset('public/upload/images/banner/75x50/' . $banner->image) }}"
                                                     class="thumb"/>
                                            </a>
                                        </td>
                                        <td class="td-content">
                                            <?php $labelStatus = ($banner->type == 0) ? 'success' : 'warning'; ?>
                                            <button type="button" class="btn btn-<?php echo $labelStatus; ?> btn-xs">
                                                <?php echo ($banner->type == '0') ? "Normal" : "Slide";?>
                                            </button>
                                        </td>
                                        <td class="td-content">
                                            <p>{{$banner->updated_at}}</p>
                                        </td>
                                        <td class="td-content">
                                            <?php $labelStatus = ($banner->status == 'active') ? 'success' : 'danger'; ?>
                                            <?php $toStatus = ($banner->status == 'active') ? 'to-inactive' : 'to-active'; ?>
                                            <button onclick="changeStatusByIds('{{$banner->id}}', '{{$toStatus}}')"
                                                    type="button" class="btn btn-<?php echo $labelStatus; ?> btn-xs">
                                                <?php echo ($banner->status == 'active') ? "Kích hoạt" : "Không kích hoạt";?>
                                            </button>
                                        </td>
                                        <td class="td-content" role="gridcell" aria-describedby="jqgrid_act">
                                            <a href="{{route('banner.edit', $banner->id)}}" class="btn btn-info btn-xs"
                                               data-toggle="tooltip" data-placement="bottom"
                                               data-original-title="Chỉnh sửa thông tin">
                                                <i class="fa fa-pencil"></i> Sửa
                                            </a>
                                            <a href="javascript:deleteByIds('{{$banner->id}}')"
                                               class="btn btn-danger btn-xs" data-toggle="tooltip"
                                               data-placement="bottom" data-original-title="Xóa phần tử">
                                                <i class="fa fa-trash-o"></i> Xoá
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="pointer">
                                    <td class="td-content" colspan="5">Không có dữ liệu nào</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Phan trang--}}
    @include('admin.layouts.partial.pagination', array('pagination' => $paginator))

@endsection

@section('js_content')
    <script>
        $(document).ready(function () {
            $(".gallery-rebox a").rebox();
        });
    </script>
@endsection