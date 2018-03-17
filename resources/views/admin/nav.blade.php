<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">

            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            <li class="sidebar-search-wrapper">
            </li>
            <li class="nav-item {{ (Request::is('admin/posts/*')) ? 'open' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-address-book-o"></i>
                    <span class="title">Quản lý bài viết</span>
                    <span class="arrow {{ (Request::is('admin/posts/*')) ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu" {{ (Request::is('admin/posts/*')) ? 'style=display:block' : '' }} >
                    <li class="nav-item {{ (Request::is('admin/posts/')) ? 'active' : '' }} ">
                        <a href="{{url('admin/posts')}}" class="nav-link">
                            <span class="title">Danh sách bài viết</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (Request::is('admin/posts/add')) ? 'active' : '' }} ">
                        <a href="{{url('admin/posts/add')}}" class="nav-link">
                            <span class="title">Thêm bài viết</span>
                        </a>
                    </li>


                </ul>
            </li>

        </ul>

    </div>

</div>