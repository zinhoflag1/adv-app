<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SaidaVenda */

//$this->title = 'create-';
//$this->params['breadcrumbs'][] = ['label' => 'Saida Vendas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saida-venda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>