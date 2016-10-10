<?php
use common\models\Product;
use common\models\ProductImage;
use common\web\View;
use yii\helpers\Html;

/**
 * @var   View       $this
 * @var  Product     $model
 * @var ProductImage $product_image
 */
$this->title                   = 'Update Product: ' . $model->name;
$this->params['breadcrumbs'][] = [
	'label' => 'Products',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = [
	'label' => $model->id,
	'url'   => [
		'view',
		'id' => $model->id,
	],
];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model'         => $model,
		'product_image' => $product_image,
	]) ?>

</div>
