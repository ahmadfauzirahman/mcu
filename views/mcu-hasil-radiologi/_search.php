<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\McuHasilRadiologiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mcu-hasil-radiologi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_hasil_radiologi') ?>

    <?= $form->field($model, 'id_data_pelayanan') ?>

    <?= $form->field($model, 'no_rekam_medik') ?>

    <?= $form->field($model, 'no_registrasi') ?>

    <?= $form->field($model, 'no_mcu') ?>

    <?php // echo $form->field($model, 'kode_debitur') ?>

    <?php // echo $form->field($model, 'kode_pemeriksa') ?>

    <?php // echo $form->field($model, 'result_pemeriksaan') ?>

    <?php // echo $form->field($model, 'hasil') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
