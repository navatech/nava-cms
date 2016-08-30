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
                                if ($handle = opendir('../controllers')) {
                                    while (false !== ($file = readdir($handle))) {
                                        if ($file != "." && $file != ".." && substr($file, strrpos($file, '.') - 10) == 'Controller.php') {
                                            $controllerlist[]['content'] = Translate::management().' '.str_replace('Controller.php','',$file);
                                        }
                                    }
                                    closedir($handle);
                                }
                                asort($controllerlist);
                                echo Sortable::widget([
                                    'connected'=>true,
                                    'items'=>$controllerlist
                                ]);
                            ?>
                        </div>
                        <div class="col-sm-8">
                            <?php
                            $list_menu = [];
                            if(!$model->isNewRecord){
                                foreach($menu_items as $menu_item):
                                    $list_menu[]['content']= $menu_item->name;
                                endforeach;
                            }
                            echo Sortable::widget([
                                'connected'=>true,
                                'itemOptions'=>['class'=>'alert alert-warning'],
                                'items'=>$list_menu
                            ]);
                            ?>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>
