<div class="x_panel">
    <div class="x_title">
        <h2>Hàng mới</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="form-group">
            <div class="radio">
                <label>{{ Form::radio('check_item','active', true, ['class' => 'flat']) }} Còn hàng</label>
            </div>
            <div class="radio">
                <label>{{ Form::radio('check_item','inactive', false, ['class' => 'flat']) }} Hết hàng</label>
            </div>
        </div>
    </div>
</div>