<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{asset('images/common/avatar.png')}}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{backendGuard()->user()->name}}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header"></li>
			<li class="header"></li>
			<li class="{{getActiveSidebarClass('dashboard')}}">
				<a href="{{route('backend.dashboard.index')}}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="header"></li>
			<li class="treeview {{getActiveSidebarClass('admin')}}">
				<a href="#">
					<i class="fa fa-user"></i> <span>{{transa('admin.name')}}</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{getActiveSidebarClass('admin', 'index')}}"><a href="{{route('backend.admin.index')}}"><i class="fa fa-circle-o"></i> {{transa('list')}}</a></li>
					<li class="{{getActiveSidebarClass('admin', 'create')}}"><a href="{{route('backend.admin.create')}}"><i class="fa fa-circle-o"></i> {{transa('add')}}</a></li>
				</ul>
			</li>
			<li class="header"></li>
			<li class="treeview {{getActiveSidebarClass('categories')}}">
				<a href="#">
					<i class="fa fa-th-list"></i> <span>{{transa('categories.name')}}</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li  class="{{getActiveSidebarClass('categories', 'index')}}"><a href="{{route('backend.categories.index')}}"><i class="fa fa-circle-o"></i> {{transa('list')}}</a></li>
					<li  class="{{getActiveSidebarClass('categories', 'create')}}"><a href="{{route('backend.categories.create')}}"><i class="fa fa-circle-o"></i> {{transa('add')}}</a></li>
				</ul>
			</li>
			<li class="header"></li>
			<li class="treeview  {{getActiveSidebarClass('products')}}">
				<a href="#">
					<i class="fa fa-thumbs-o-up"></i> <span>{{transa('products.name')}}</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="{{getActiveSidebarClass('products', 'index')}}"><a href="{{route('backend.products.index')}}"><i class="fa fa-circle-o"></i> {{transa('list')}}</a></li>
					<li  class="{{getActiveSidebarClass('products', 'create')}}"><a href="{{route('backend.products.create')}}"><i class="fa fa-circle-o"></i> {{transa('add')}}</a></li>
				</ul>
			</li>
			<li class="header"></li>
            <li class="treeview {{getActiveSidebarClass('orders')}}">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>{{transa('orders.name')}}</span>
                    <span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{getActiveSidebarClass('orders', 'index')}}"><a href="{{route('backend.orders.index')}}"><i class="fa fa-circle-o"></i> {{transa('list')}}</a></li>
                    <li class="{{getActiveSidebarClass('orders', 'create')}}"><a href="{{route('backend.orders.create')}}"><i class="fa fa-circle-o"></i> {{transa('add')}}</a></li>
                </ul>
            </li>
            <li class="header"></li>
            <li class="{{getActiveSidebarClass('users')}}">
                <a href="{{route('backend.users.index')}}">
                    <i class="fa fa-users"></i> <span>{{transa('users.name')}}</span>
                </a>
            </li>
            <li class="header"></li>
            <li class="{{getActiveSidebarClass('contacts')}}">
                <a href="{{route('backend.contacts.index')}}">
                    <i class="fa fa-comments"></i> <span>{{transa('contacts.name')}}</span>
                </a>
            </li>
            <li class="header"></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
