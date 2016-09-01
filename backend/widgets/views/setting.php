<?php
use navatech\language\Translate;
?>
<!-- START SECONDARY SIDEBAR MENU-->
<nav class="secondary-sidebar padding-30">
	<p class="menu-title">Setting</p>
	<ul class="main-menu">
		<li class="active">
			<a href="#">
				<span class="title"><i class="fa fa-info-circle"></i> <?= Translate::x_setting(Translate::general());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-fw fa-list-alt"></i> <?= Translate::x_setting(Translate::menu());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-globe"></i> <?= Translate::x_setting(Translate::translate());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-envelope"></i> <?= Translate::x_setting(Translate::email());?></span>
			</a>
		</li>
		<li class="">
			<a href="#">
				<span class="title"><i class="fa fa-envelope-o"></i> <?= Translate::x_setting(Translate::email_template());?></span>
			</a>
		</li>
	</ul>
</nav>
<!-- END SECONDARY SIDEBAR MENU -->