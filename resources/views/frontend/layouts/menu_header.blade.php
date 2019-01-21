<div class="navigation-wrapper">
    <div class="container">
        <!-- Navigation -->
        <nav class="navigation closed clearfix">
            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
            <ul class="nav sf-menu">
                <li class="active"><a href="{{ url('/') }}">Trang chủ</a></li>
                <li><a href="category.html">Danh mục</a>
                    <ul>
                        @foreach($categoriesHeaderLv1 as $key => $value)
                            <li><a href="category.html">{{ $value->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ url('/bai-viet.html') }}">Bài viết</a></li>
                <li><a href="/lien-he.html">Liên hệ</a></li>
                <li class="sale"><a href="category.html">Sale</a></li>
            </ul>
        </nav>
        <!-- /Navigation -->
    </div>
</div>
