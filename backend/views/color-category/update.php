<?php

use common\models\Product;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ColorCategory $model */

$this->title = 'Tahrirlash Color Category: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ranglar kategoriyasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="color-category-update">


    <?= /** @var TYPE_NAME $modelCustomer */
    $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]) ?>

</div>
