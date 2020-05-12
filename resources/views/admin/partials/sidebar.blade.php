<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>{{ trans('admin/partials/sidebar.dash') }}</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>{{ trans('admin/partials/sidebar.cat') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('categories.index') }}">{{ trans('admin/partials/sidebar.list_cat') }}</a></li>
                        <li><a href="{{ route('categories.create') }}">{{ trans('admin/partials/sidebar.add_cat') }}</a></li>
                        <li><a href="#">{{ trans('admin/partials/sidebar.edit_cat') }}</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>{{ trans('admin/partials/sidebar.les') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('lessions')}}">{{ trans('admin/partials/sidebar.list_les') }}</a></li>
                        <li><a href="{{url('lessions/add')}}">{{ trans('admin/partials/sidebar.add_les') }}</a></li>
                        <li><a href="{{url('lessions/edit')}}">{{ trans('admin/partials/sidebar.edit_les') }}</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>{{ trans('admin/partials/sidebar.word') }}</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('words.index')}}">{{ trans('admin/partials/sidebar.list_word') }}</a></li>
                        <li><a href="{{route('words.create')}}">{{ trans('admin/partials/sidebar.add_word') }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{{url('admin/login')}}}">
                        <i class="fa fa-user"></i>
                        <span>{{ trans('admin/partials/sidebar.login') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
