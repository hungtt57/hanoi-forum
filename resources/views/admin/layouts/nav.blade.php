<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">

            <li class=" treeview {{ (Request::is('admin/posts/*') ||  Request::is('admin/posts')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Manager Post</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                <ul class="treeview-menu">
                    <li class="{{ (Request::is('admin/posts')) ? 'active' : '' }}"><a href="{{url('admin/posts')}}"><i class="fa fa-circle-o"></i> List Post</a></li>
                    <li class="{{ (Request::is('admin/posts/add')) ? 'active' : '' }}"><a href="{{url('admin/posts/add')}}"><i class="fa fa-circle-o"></i> Add New Post</a></li>
                </ul>
            </li>

            <li class="{{ (Request::is('admin/contact-us')) ? 'active' : '' }}"><a href="{{url('admin/contact-us')}}"><i class="fa fa-address-card"></i> <span>Contact us</span></a></li>
            {{--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>