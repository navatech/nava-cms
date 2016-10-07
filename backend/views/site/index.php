<?php
/**
 * @var \common\web\View $this
 */
use backend\widgets\LineChart;
use backend\widgets\Table;

$this->title = \navatech\language\Translate::dashboard();
?>
<!-- START CONTAINER FLUID -->
<div class="container-fluid padding-25 sm-padding-10">
	<!-- START ROW -->
	<div class="row">
		<div class="col-md-4 col-lg-3 col-xlg-2 ">
			<div class="row">
				<div class="col-md-12 m-b-10">
					<?= LineChart::widget() ?>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4 hidden-xlg m-b-10">
			<?= Table::widget() ?>
		</div>
	</div>

</div>
<!-- END CONTAINER FLUID -->
