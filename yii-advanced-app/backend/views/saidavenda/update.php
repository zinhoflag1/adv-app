<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaidaVenda */

$this->title = 'Update Saida Venda: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Saida Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="saida-venda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
