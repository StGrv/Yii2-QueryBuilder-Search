<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url ;

    <?php $form = ActiveForm::begin([
    'action' => Url::to('@web/categories/index')
    ]); ?>

    <input type="text" name="search" placeholder="Search..">
    <button type="submit" name="submitSearch"> SEARCH </button>

    <?php $form = ActiveForm::end() ; ?>
?>
