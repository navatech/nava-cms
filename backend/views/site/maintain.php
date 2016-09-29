<?php
use navatech\language\Translate;

$this->title = Translate::maintain();
?>
<div class="row single-post-description">
	<div class="col-sm-12">
		<h1><?= Translate::maintain(); ?></h1>
	</div>

</div>
<div class="single-post-content">
	<?= Yii::$app->setting->get('web_active_content'); ?>
</div>
