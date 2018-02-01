<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SaidaVendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="saida-venda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cliente_id') ?>

    <?= $form->field($model, 'data_venda') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'forma_pgto') ?>

    <?php // echo $form->field($model, 'frete') ?>

    <?php // echo $form->field($model, 'taxa_ml') ?>

    <?php // echo $form->field($model, 'nota') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'desconto_val') ?>

    <?php // echo $form->field($model, 'perc_desc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
