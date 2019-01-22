<form class="form-inline" action="">
    <div class="form-group selectpicker-wrapper">
        <select class="selectpicker input-price" data-live-search="true"
                data-width="100%"
                data-toggle="tooltip" title="Select" onchange="redirectUrl(this)">
            <option>Phổ biến</option>
            <option value="{{ 'sortP=nameasc' }}">Tên A-Z</option>
            <option value="{{ 'sortP=namedesc' }}">Tên Z-A</option>
            <option value="{{ 'sortP=priceasc' }}">Giá tăng dần</option>
            <option value="{{ 'sortP=pricedesc' }}">Giá giảm dần</option>
        </select>
    </div>
</form>