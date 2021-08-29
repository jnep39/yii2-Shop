
<?php
    use app\components\DebugPrint;
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
<?php // DebugPrint::debug($form_f);?>
<div class="col-md-12">
    <h2>Страница с формой</h2>
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <div class="row">
        <div class="col-md-6">
            <?php $myForm = ActiveForm::begin()?>

                <?= $myForm->field($form_f, 'name')?>
                <?= $myForm->field($form_f, 'email')?>
                <?= $myForm->field($form_f, 'text')?>
                <?= Html::button('Отправить', ['class' => 'btn btn-default', 'type' => 'submit'])?>

            <?php ActiveForm::end()?>
        </div>
    </div>
    <div><?php echo $form_f->conte()?></div>
</div>
