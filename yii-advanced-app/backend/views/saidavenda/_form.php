<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Widget;
use yii\jui\AutoComplete;
use yii\jui\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\SaidaVenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="saida-venda-form">

    <?php $form = ActiveForm::begin();
    
    //$cliente = new Cli

    ?>

	<div class="row">
		<div class='form-group col-xs-6'>
			<?= Html::label('Nome', ['class'=>'form-control'])?>
			<?= AutoComplete::widget(['name'=>'cliente',
									  'id'=>'cliente',
										'options' => [
		            							'class' => 'form-control'
		        						],
										'clientOptions'=>['source' =>['']], 
				]);?>
		</div>
		<div class='form-group col-xs-3'>
			<?= Html::label('CPF', ['class'=>'form-control'])?>
	    	<?= Html::input('text', 'txtCpf', '', ['class'=>'form-control']); ?>
	    </div>
		<div class='form-group col-xs-3'>
			<?= Html::label('Telefone', ['class'=>'form-control'])?>
	    	<?= Html::input('text', 'txtTel', '', ['class'=>'form-control']); ?>
	    </div>
	</div>
	<div class="row">
	    <div class='form-group col-xs-7'>
			<?= Html::label('Endereço', ['class'=>'form-control'])?>
	    	<?= Html::input('text', 'txtEndereço', '', ['class'=>'form-control']); ?>
	    </div>
	    <div class='form-group col-xs-2'>
			<?= Html::label('Data', ['class'=>'form-control'])?>
	    	<?=DatePicker::widget(['name' => 'txtDtVenda',
							       'language' => 'pt',
							       'dateFormat' => 'dd/MM/yyyy',
					    		   'options' => [
					    		   		'class' => 'form-control'
					    		   	],
	    							'value'=> date('d/m/Y'),
							       ]); ?>
	    </div>
	    <div class='form-group col-xs-3'>
			<?= Html::label('Forma Pagto', ['class'=>'form-control'])?>
	    	<?= Html::dropDownList('txtForm', ['pront'=>'Selecione a Forma'], ['0'=>'Dinheiro', '1'=>'Cartão', '2'=> 'Consórcio', '3'=>'Outros'], ['class'=>'form-control']); ?>
	    </div>
    </div>
			

    <!--<?= $form->field($model, 'cliente_id')->textInput() ?>

     <?= $form->field($model, 'data_venda')->textInput() ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forma_pgto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frete')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxa_ml')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desconto_val')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perc_desc')->textInput() ?>-->

    <!-- <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>-->

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJs('
		$(document).on("keydown", function(e) {
	
			if (e.which == 118) {
					alert("aqui");
			};
		
		})
		;');

$this->registerJs('
			$(document).ready(function(){
				$( function() {
				    var availableTags = [
				      "ActionScript",
				      "AppleScript",
				      "Asp",
				      "BASIC",
				      "C",
				      "C++",
				      "Clojure",
				      "COBOL",
				      "ColdFusion",
				      "Erlang",
				      "Fortran",
				      "Groovy",
				      "Haskell",
				      "Java",
				      "JavaScript",
				      "Lisp",
				      "Perl",
				      "PHP",
				      "Python",
				      "Ruby",
				      "Scala",
				      "Scheme"
				    ];
				    $("#cliente").autocomplete({
				      source: availableTags
				    });
				  } );
			});');
