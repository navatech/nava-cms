<?php
use common\models\Product;
use common\models\ProductImage;
use common\web\View;
use yii\helpers\Html;

/**
 * @var   View $this
 * @var  Product $model
 * @var ProductImage $product_image
 */
$this->title                   = 'Create Product';
$this->params['breadcrumbs'][] = [
	'label' => 'Products',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model'         => $model,
		'product_image' => $product_image,
	]) ?>

</div>
