<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 26/12/17
 * Time: 00:10
 */

use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
?>

<h2>Form Yii</h2>
<hr>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'idade') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>