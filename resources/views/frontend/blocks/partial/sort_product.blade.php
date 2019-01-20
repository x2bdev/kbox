<div class="toolbar-shorter">
    <select class="wide nice-select" onchange="redirectUrl(this)">
        <option data-display="Sắp xếp sản phẩm" value="">Nothing</option>
        <option value="{{ 'sortP=nameasc' }}">Tên A-Z</option>
        <option value="{{ 'sortP=namedesc' }}">Tên Z-A</option>
        <option value="{{ 'sortP=priceasc' }}">Giá tăng dần</option>
        <option value="{{ 'sortP=pricedesc' }}">Giá giảm dần</option>
    </select>
</div>