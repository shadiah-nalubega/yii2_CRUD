<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\University;


$form = ActiveForm::begin();
$universities = ArrayHelper::map(
    University::find()->all(),
    'id',
    'uni_name'
);
//var_dump($universities); return;

/** @var yii\web\View $this */
/** @var app\models\Interns $model */
/** @var ActiveForm $form */
?>
<div class="interns-create">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-6">
      <?= $form->field($model, 'first_name') ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'last_name') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
           <?= $form->field($model, 'email') ?>
        </div>
        <div class="col-sm-6">
                

        <?= $form->field($model, 'university_id')
            ->dropDownList(
                $universities,
                ['prompt' => 'Select University']
            )
            ->label('University') ?>
        </div>
    </div>
        
        
       

        <!-- <?= $form->field($model, 'created_on') ?> -->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- interns-create -->
