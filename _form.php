<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url ;

    <?php $form = ActiveForm::begin([
    'action' => Url::to('@web/categories/index') // If we want to navigate to an existing page
    // 'action' => Url::to('@web/categories/search') // If we want to navigate to a controller Action dynamic page (public function actionSearch())  
    ]); ?>

    <input type="text" name="search" placeholder="Search..">
    <button type="submit" name="submitSearch"> SEARCH </button>

    <?php $form = ActiveForm::end() ; ?>
?>
