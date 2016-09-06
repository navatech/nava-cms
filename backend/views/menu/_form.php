<?php
use kartik\sortable\Sortable;
use navatech\language\Translate;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="content sm-gutter">
	<div class="container-fluid padding-25 sm-padding-10">
		<div class="menu-form">

			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'max_level')->textInput() ?>

			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>

			<?php ActiveForm::end(); ?>

			<div class="menu-items">
				<div class="row">
					<div class="col-sm-4">
						<?php
						$controllerlist = [];
						if($handle = opendir('../controllers')) {
							while(false !== ($file = readdir($handle))) {
								if($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
									$controllerlist[] = Translate::management() . ' ' . str_replace('Controller.php', '', $file);
								}
							}
							closedir($handle);
						}
						asort($controllerlist);
						?>
						<div class="panel">
							<div class="panel-body">
								<div class="dd" id="basic_example">
									<ol class="dd-list">
										<?php foreach($controllerlist as $controller_item): ?>
											<li class="dd-item" data-id="1">
												<div class="dd-handle dd3-handle">
													Drag
												</div>
												<div class="dd3-content">
													<?= $controller_item ?>
												</div>
											</li>
										<?php endforeach; ?>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="panel">
							<div class="panel-body">
								<div class="dd" id="drag_handler_example">
									<ol class="dd-list">
										<?php
										if(!$model->isNewRecord) {
											foreach($menu_items as $menu_item):
												?>
												<li class="dd-item dd3-item" data-id="13">
													<div class="dd-handle dd3-handle">
														Drag
													</div>
													<div class="dd3-content">
														<div class="col-sm-3">
															<div class="btn-group">
																<button type="button" class="btn btn-primary">Action</button>
																<button type="button" class="icp icp-dd btn btn-primary dropdown-toggle" data-toggle="dropdown">
																	<span class="caret"></span>
																	<span class="sr-only">Toggle Dropdown</span>
																</button>
																<div class="dropdown-menu"></div>
															</div>
														</div>
														<div class="col-sm-6">
															<?= $menu_item->name ?>
														</div>

													</div>
												</li>
												<?php
											endforeach;
										}
										?>

									</ol>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$('.icp-dd').each(function() {
			var $this = $(this);
			$('.icp-dd').iconpicker({
				container: $(' ~ .dropdown-menu:first', $this)
			});
		});
		$('#basic_example').nestable();
		$('#drag_handler_example').nestable();
	});
</script>