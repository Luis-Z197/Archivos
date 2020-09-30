<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Animales */

$this->title = Yii::t('app', 'Update Animales: {name}', [
    'name' => $model->codigo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Animales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'id' => $model->codigo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="animales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
