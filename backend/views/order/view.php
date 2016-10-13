<?php
use navatech\language\Translate;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
$this->title                   = $model->order_number;
$this->params['breadcrumbs'][] = [
	'label' => 'Orders',
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="invoice">
				<div>
					<div class="pull-left">
						<img width="235" height="47" alt="" class="invoice-logo" data-src-retina="assets/img/invoice/squarespace2x.png" data-src="assets/img/invoice/squarespace.png" src="assets/img/invoice/squarespace2x.png">
						<address class="m-t-10">
							<?= $model->shipping_address ?>
						</address>
					</div>
					<div class="pull-right sm-m-t-20">
						<h2 class="font-montserrat all-caps hint-text"><?= Translate::invoice() ?></h2>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>
				<br>
				<div class="container-sm-height">
					<div class="row-sm-height">
						<div class="col-md-9 col-sm-height sm-no-padding">
							<p class="small no-margin"><?= Translate::shipping_address() ?></p>
							<address>
								<?= $model->shipping_address ?>
							</address>
						</div>
						<div class="col-md-3 col-sm-height col-bottom sm-no-padding sm-p-b-20">
							<br>
							<div>
								<div class="pull-left font-montserrat bold all-caps"><?= Translate::order_number() ?></div>
								<div class="pull-right"><?= $model->order_number ?></div>
								<div class="clearfix"></div>
							</div>
							<div>
								<div class="pull-left font-montserrat bold all-caps"><?= Translate::order_date() ?></div>
								<div class="pull-right"><?= $model->created_at ?></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table m-t-50">
						<thead>
						<tr>
							<th class=""><?= Translate::product_name() ?></th>
							<th class="text-center"><?= Translate::price() ?></th>
							<th class="text-center"><?= Translate::quantity() ?></th>
							<th class="text-right"><?= Translate::total_price() ?></th>
						</tr>
						</thead>
						<tbody>
						<?php
						$total = 0;
						foreach ($order_items as $order_item): $total += $order_item->price * $order_item->quantity; ?>
							<tr>
								<td class="">
									<p class="text-black"><?= $order_item->product->name ?></p>
									<p class="small hint-text">
										<?= $order_item->product->description ?>
									</p>
								</td>
								<td class="text-center"><?= number_format($order_item->price) ?> ₫</td>
								<td class="text-center"><?= $order_item->quantity ?></td>
								<td class="text-right"><?= number_format($order_item->price * $order_item->quantity) ?>
									₫
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="container-sm-height">
					<div class="row row-sm-height b-a b-grey">
						<div class="col-sm-2 col-sm-height col-middle p-l-25 sm-p-t-15 sm-p-l-15 clearfix sm-p-b-15">
							<h5 class="font-montserrat all-caps small no-margin hint-text bold"><?= Translate::total() ?></h5>
							<h3 class="no-margin"><?= number_format($total) ?> ₫</h3>
						</div>
						<div class="col-sm-5 col-sm-height col-middle clearfix sm-p-b-15">
							<h5 class="font-montserrat all-caps small no-margin hint-text bold"><?= Translate::discount() . '(' . $model->discount . '%)' ?></h5>
							<h3 class="no-margin"><?= number_format($model->getDiscount($total, $model->discount)); ?>
								₫</h3>
						</div>
						<div class="col-sm-5 text-right bg-black col-sm-height padding-15">
							<h5 class="font-montserrat all-caps small no-margin hint-text text-white bold"><?= Translate::total_price() ?>
								₫</h5>
							<h1 class="no-margin text-white"><?= number_format($total - $model->getDiscount($total, $model->discount)); ?>
								₫</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
