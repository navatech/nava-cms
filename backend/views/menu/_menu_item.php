<?php
/**
 * Created by Navatech.
 * @project yii2-cms
 * @author  Thuc
 * @email   thuchm92[at]gmail.com
 * @date    9/22/2016
 * @time    4:57 PM
 */
use kartik\widgets\SwitchInput;

?>
<li class="dd-item dd3-item" data-id="<?= $data->id ?>">
	<div class="dd-handle dd3-handle"></div>
	<div class="dd3-content">
		<div class="col-sm-3">
			<div class="btn-group">
				<button type="button" class="btn btn-primary iconpicker-component">
					<i class=" fa <?= $data->icon ?>"></i>
				</button>
				<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-selected="<?= $data->icon ?>" data-toggle="dropdown">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu iconpicker-container"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<?= $data->name ?>
		</div>
		<div class="col-sm-3">
			<input type="hidden" name="MenuItem[<?= $data->id ?>][id]" value="<?= $data->id ?>">
			<input type="hidden" name="MenuItem[<?= $data->id ?>][parent_id]" value="<?= $data->parent_id ?>" class="parent-menu">
			<input type="hidden" name="MenuItem[<?= $data->id ?>][icon]" value="<?= $data->icon ?>" class="icon-menu">
			<?= SwitchInput::widget([
				'name'        => 'MenuItem[' . $data->id . '][status]',
				'inlineLabel' => false,
				'options'     => [
					'class' => 'menu-status',
				],
				'value'       => $data->status,
			]); ?>
		</div>
	</div>
</li>
