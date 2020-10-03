<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\helpers\Url ;

    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Categories', 'url' => ['/categories/index']],
        ['label' => 'Problems', 'url' => ['/problems/index']],
    ];

    ?>

    <?php $form = ActiveForm::begin([
    'action' => Url::to('@web/categories/index')
    ]); ?>

    <input type="text" name="search" placeholder="Search..">
    <!--  Html::submitButton('Search', ['class' => 'btn btn-primary', 'name' => 'submit']) -->
    <button type="submit" name="submitSearch"> SEARCH </button>

    <?php $form = ActiveForm::end() ; ?>

    <?php
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();

?>