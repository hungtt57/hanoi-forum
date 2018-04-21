<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">


            @if(auth('backend')->user()->type == \App\Models\User::ADMIN)
                <li class=" treeview {{ (Request::is('admin') ||  Request::is('admin/add')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Manager Admins</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin')) ? 'active' : '' }}"><a href="{{url('admin/')}}"><i
                                        class="fa fa-circle-o"></i> List Admins</a></li>
                        <li class="{{ (Request::is('admin/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/add')}}"><i class="fa fa-user-secret"></i> Add New Admin</a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview {{ (Request::is('admin/posts/*') ||  Request::is('admin/posts')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Manager Posts</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin/posts')) ? 'active' : '' }}"><a href="{{url('admin/posts')}}"><i
                                        class="fa fa-newspaper-o"></i> List Posts</a></li>
                        <li class="{{ (Request::is('admin/posts/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/posts/add')}}"><i class="fa fa-newspaper-o"></i> Add New Post</a>
                        </li>
                    </ul>
                </li>

                <li class=" treeview {{ (Request::is('admin/articles/*') ||  Request::is('admin/articles')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Manager Articles</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin/articles')) ? 'active' : '' }}"><a href="{{url('admin/articles')}}"><i
                                        class="fa fa-newspaper-o"></i> List Articles</a></li>
                        <li class="{{ (Request::is('admin/articles/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/articles/add')}}"><i class="fa fa-newspaper-o"></i> Add New Article</a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview {{ (Request::is('admin/reviewer/*') ||  Request::is('admin/reviewer')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-user-times"></i> <span>Manager Reviewers</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin/reviewer')) ? 'active' : '' }}"><a
                                    href="{{url('admin/reviewer')}}"><i
                                        class="fa fa-user-times"></i> List Reviewers</a></li>
                        <li class="{{ (Request::is('admin/reviewer/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/reviewer/add')}}"><i class="fa fa-user-times"></i> Add New Reviewer</a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview {{ (Request::is('admin/banners/*') ||  Request::is('admin/banners')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-image"></i> <span>Manager Banners</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin/banners')) ? 'active' : '' }}"><a href="{{url('admin/banners')}}"><i
                                        class="fa fa-file-image-o"></i> List Banners</a></li>
                        <li class="{{ (Request::is('admin/banners/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/banners/add')}}"><i class="fa fa-file-image-o"></i> Add New Banner</a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview {{ (Request::is('admin/subcommittee/*') ||  Request::is('admin/subcommittee')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Manager Subcommittee</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ (Request::is('admin/subcommittee')) ? 'active' : '' }}"><a
                                    href="{{url('admin/subcommittee')}}"><i
                                        class="fa fa-circle-o"></i> List Subcommittee</a></li>
                        <li class="{{ (Request::is('admin/subcommittee/add')) ? 'active' : '' }}"><a
                                    href="{{url('admin/subcommittee/add')}}"><i class="fa fa-circle-o"></i> Add New Subcommittee</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (Request::is('admin/documents')) ? 'active' : '' }}"><a
                            href="{{url('admin/documents')}}"><i class="fa fa-folder"></i>
                        <span> Abstract submission  </span></a></li>
                <li class="{{ (Request::is('admin/contact-us')) ? 'active' : '' }}"><a
                            href="{{url('admin/contact-us')}}"><i class="fa fa-question-circle"></i>
                        <span>Online questions </span></a></li>
                <li class="{{ (Request::is('admin/participants')) ? 'active' : '' }}"><a
                            href="{{url('admin/participants')}}"><i class="fa  fa-user-plus"></i>
                        <span>Manage Delegates </span></a></li>

            @endif

            @if(auth('backend')->user()->type == \App\Models\User::REVIEWER)
                    <li class="{{ (Request::is('admin/review-participants')) ? 'active' : '' }}"><a
                                href="{{url('admin/review-participants')}}"><i class="fa  fa-user-plus"></i>
                            <span>List Delegates</span></a></li>
            @endif

            @if(auth('backend')->user()->type == \App\Models\User::PARTNER)
                    <li class="{{ (Request::is('admin/partner/edit')) ? 'active' : '' }}"><a
                                href="{{url('admin/partner/edit')}}"><i class="fa   fa-user-circle"></i>
                            <span>Manage your profile</span></a></li>
                    <li class="{{ (Request::is('admin/submit')) ? 'active' : '' }}"><a
                                href="{{url('admin/submit')}}"><i class="fa   fa-cloud-upload"></i>
                            <span>Submit abstract</span></a></li>
                    <li class=""><a
                                href="{{url('contact-us')}}"><i class="fa  fa-question-circle"></i>
                            <span>Contact us</span></a></li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>