<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Entry';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Tu Nombre')->textInput(['placeholder' => 'Escribe tu nombre']) ?>

    <?= $form->field($model, 'email')->label('Tu Correo electrónico')->textInput(['placeholder' => 'Escribe tu correo@mail.com']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <code><?= __FILE__ ?></code>

<?php ActiveForm::end(); ?>


