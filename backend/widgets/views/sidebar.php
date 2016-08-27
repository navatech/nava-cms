<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
	<!-- BEGIN SIDEBAR MENU HEADER-->
	<div class="sidebar-header">
		<a href="<?= Yii::$app->request->BaseUrl;?>">
			<img src="<?= Yii::$app->request->BaseUrl ;?>/img/logo_white.png" alt="logo" class="brand"  width="78" height="22">
		</a>

		<div class="sidebar-header-controls">
			<button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
			</button>
		</div>
	</div>
	<!-- END SIDEBAR MENU HEADER-->
	<!-- START SIDEBAR MENU -->
	<div class="sidebar-menu">
		<!-- BEGIN SIDEBAR MENU ITEMS-->
		<ul class="menu-items">
			<li class="m-t-30 ">
				<a href="index.html" class="detailed">
					<span class="title">Dashboard</span>
					<span class="details">12 New Updates</span>
				</a>
				<span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
			</li>
			<li class="">
				<a href="http://pages.revox.io/dashboard/latest/html/widget.html" class="detailed">
					<span class="title">Widgets</span>
					<span class="details">22 items</span>
				</a>
				<span class="icon-thumbnail">W</span>
			</li>
			<li class="">
				<a href="email.html" class="detailed">
					<span class="title">Email</span>
					<span class="details">234 New Emails</span>
				</a>
				<span class="icon-thumbnail"><i class="pg-mail"></i></span>
			</li>
			<li class="">
				<a href="social.html"><span class="title">Social</span></a>
				<span class="icon-thumbnail"><i class="pg-social"></i></span>
			</li>
			<li>
				<a href="javascript:;"><span class="title">Calendar</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-calender"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="calendar.html">Basic</a>
						<span class="icon-thumbnail">c</span>
					</li>
					<li class="">
						<a href="calendar_lang.html">Languages</a>
						<span class="icon-thumbnail">L</span>
					</li>
					<li class="">
						<a href="calendar_month.html">Month</a>
						<span class="icon-thumbnail">M</span>
					</li>
					<li class="">
						<a href="calendar_lazy.html">Lazy load</a>
						<span class="icon-thumbnail">La</span>
					</li>
					<li class="">
						<a href="http://pages.revox.io/dashboard/2.1.0/doc/#calendar" target="_blank">Documentation</a>
						<span class="icon-thumbnail">D</span>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="builder.html">
					<span class="title">Builder</span>
				</a>
				<span class="icon-thumbnail"><i class="pg-layouts"></i></span>
			</li>
			<li>
				<a href="javascript:;"><span class="title">Layouts</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="default_layout.html">Default</a>
						<span class="icon-thumbnail">dl</span>
					</li>
					<li class="">
						<a href="secondary_layout.html">Secondary</a>
						<span class="icon-thumbnail">sl</span>
					</li>
					<li class="">
						<a href="boxed_layout.html">Boxed</a>
						<span class="icon-thumbnail">bl</span>
					</li>
					<li class="">
						<a href="sidemenu_and_horizontal_menu.html">Horizontal Menu</a>
						<span class="icon-thumbnail">hm</span>
					</li>
					<li class="">
						<a href="rtl_layout.html">RTL</a>
						<span class="icon-thumbnail">rl</span>
					</li>
					<li class="">
						<a href="builder.html#tabContent">Columns</a>
						<span class="icon-thumbnail">cl</span>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;"><span class="title">UI Elements</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail">Ui</span>
				<ul class="sub-menu">
					<li class="">
						<a href="color.html">Color</a>
						<span class="icon-thumbnail">c</span>
					</li>
					<li class="">
						<a href="typography.html">Typography</a>
						<span class="icon-thumbnail">t</span>
					</li>
					<li class="">
						<a href="icons.html">Icons</a>
						<span class="icon-thumbnail">i</span>
					</li>
					<li class="">
						<a href="buttons.html">Buttons</a>
						<span class="icon-thumbnail">b</span>
					</li>
					<li class="">
						<a href="notifications.html">Notifications</a>
						<span class="icon-thumbnail">n</span>
					</li>
					<li class="">
						<a href="modals.html">Modals</a>
						<span class="icon-thumbnail">m</span>
					</li>
					<li class="">
						<a href="progress.html">Progress &amp; Activity</a>
						<span class="icon-thumbnail">pa</span>
					</li>
					<li class="">
						<a href="tabs_accordian.html">Tabs &amp; Accordions</a>
						<span class="icon-thumbnail">ta</span>
					</li>
					<li class="">
						<a href="sliders.html">Sliders</a>
						<span class="icon-thumbnail">s</span>
					</li>
					<li class="">
						<a href="tree_view.html">Tree View</a>
						<span class="icon-thumbnail">tv</span>
					</li>
					<li class="">
						<a href="nestables.html">Nestable</a>
						<span class="icon-thumbnail">ns</span>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
					<span class="title">Forms</span>
					<span class=" arrow"></span>
				</a>
				<span class="icon-thumbnail"><i class="pg-form"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="form_elements.html">Form Elements</a>
						<span class="icon-thumbnail">fe</span>
					</li>
					<li class="">
						<a href="form_layouts.html">Form Layouts</a>
						<span class="icon-thumbnail">fl</span>
					</li>
					<li class="">
						<a href="form_wizard.html">Form Wizard</a>
						<span class="icon-thumbnail">fw</span>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="portlets.html">
					<span class="title">Portlets</span>
				</a>
				<span class="icon-thumbnail"><i class="pg-grid"></i></span>
			</li>
			<li class="">
				<a href="views.html">
					<span class="title">Views</span>
				</a>
				<span class="icon-thumbnail"><i class="pg pg-ui"></i></span>
			</li>
			<li>
				<a href="javascript:;"><span class="title">Tables</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-tables"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="tables.html">Basic Tables</a>
						<span class="icon-thumbnail">bt</span>
					</li>
					<li class="">
						<a href="datatables.html">Data Tables</a>
						<span class="icon-thumbnail">dt</span>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;"><span class="title">Maps</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-map"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="google_map.html">Google Maps</a>
						<span class="icon-thumbnail">gm</span>
					</li>
					<li class="">
						<a href="vector_map.html">Vector Maps</a>
						<span class="icon-thumbnail">vm</span>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="charts.html"><span class="title">Charts</span></a>
				<span class="icon-thumbnail"><i class="pg-charts"></i></span>
			</li>
			<li>
				<a href="javascript:;"><span class="title">Extra</span>
					<span class=" arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-bag"></i></span>
				<ul class="sub-menu">
					<li class="">
						<a href="invoice.html">Invoice</a>
						<span class="icon-thumbnail">in</span>
					</li>
					<li class="">
						<a href="404.html">404 Page</a>
						<span class="icon-thumbnail">pg</span>
					</li>
					<li class="">
						<a href="500.html">500 Page</a>
						<span class="icon-thumbnail">pg</span>
					</li>
					<li class="active">
						<a href="blank_template.html">Blank Page</a>
						<span class="icon-thumbnail">bp</span>
					</li>
					<li class="">
						<a href="login.html">Login</a>
						<span class="icon-thumbnail">l</span>
					</li>
					<li class="">
						<a href="register.html">Register</a>
						<span class="icon-thumbnail">re</span>
					</li>
					<li class="">
						<a href="lock_screen.html">Lockscreen</a>
						<span class="icon-thumbnail">ls</span>
					</li>
					<li class="">
						<a href="gallery.html">Gallery</a>
						<span class="icon-thumbnail">gl</span>
					</li>
					<li class="">
						<a href="timeline.html">Timeline</a>
						<span class="icon-thumbnail">t</span>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;"><span class="title">Menu Levels</span>
					<span class="arrow"></span></a>
				<span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
				<ul class="sub-menu">
					<li>
						<a href="javascript:;">Level 1</a>
						<span class="icon-thumbnail">L1</span>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Level 2</span>
							<span class="arrow"></span></a>
						<span class="icon-thumbnail">L2</span>
						<ul class="sub-menu">
							<li>
								<a href="javascript:;">Sub Menu</a>
								<span class="icon-thumbnail">Sm</span>
							</li>
							<li>
								<a href="ujavascript:;">Sub Menu</a>
								<span class="icon-thumbnail">Sm</span>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->
<!-- END SIDEBPANEL-->