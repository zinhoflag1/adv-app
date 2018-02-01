<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SaidaVendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '-';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saida-venda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Saida Venda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cliente_id',
            'data_venda',
            'total',
            'forma_pgto',
            // 'frete',
            // 'taxa_ml',
            // 'nota',
            // 'tipo',
            // 'desconto_val',
            // 'perc_desc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>