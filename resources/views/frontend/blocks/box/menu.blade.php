<div class="col-md-9" style="margin-top: 40px">
    <!--Header Menu Start-->
    <div class="header-menu-area">
        <nav>
            <ul class="main-menu">
                <li class="{{ Active::checkRoute(['trang-chu'], 'active', '') }}"><a href="/">Trang chủ</a></li>
                <li class="{{ Active::checkRoute(['gioi-thieu'], 'active', '') }}"><a href="{{ url('/gioi-thieu.html') }}">Giới thiệu</a></li>
                <li class="{{ Active::checkRoute(['lien-he'], 'active', '') }}"><a href="{{ url('/lien-he.html') }}">Liên hệ</a></li>
                <li class="{{ Active::checkRoute(['sanpham.list', 'sanpham.byCatetory', 'sanpham.detail'], 'active', '') }}"><a href="{{ url('/san-pham.html') }}">Sản phẩm</a></li>
                <li class="{{ Active::checkRoute(['bai-viet.list', 'baiviet.detail'], 'active', '') }}"><a href="{{ url('/bai-viet.html') }}">Bài viết</a></li>

            </ul>
        </nav>
    </div>
    <!--Header Menu End-->
    <div class="header-phone">
        <p>Gọi ngay: <br><span>{{ $contactConfig->phone }}</span></p>
    </div>
</div>