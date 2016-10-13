<?php
use common\models\Product;
use common\models\ProductImage;
use common\web\View;
use navatech\language\Translate;
use yii\helpers\Html;

/**
 * @var   View       $this
 * @var  Product     $model
 * @var ProductImage $product_image
 */
$this->title                   = Translate::update_x(Translate::product() . ': ' . $model->name);
$this->params['breadcrumbs'][] = [
	'label' => Translate::product(),
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = [
	'label' => $model->id,
	'url'   => [
		'view',
		'id' => $model->id,
	],
];
$this->params['breadcrumbs'][] = Translate::update();
?>
<div class="product-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model'         => $model,
		'product_image' => $product_image,
	]) ?>

</div>
