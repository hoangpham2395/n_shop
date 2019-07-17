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
			<li>
				<a href="{{route('backend.dashboard.index')}}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="header"></li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-user"></i> <span>Admin</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="fa fa-circle-o"></i> {{transa('list')}}</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> {{transa('add')}}</a></li>
				</ul>
			</li>
			<li class="header"></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>