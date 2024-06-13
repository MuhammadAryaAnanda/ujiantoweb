<?php
use yii\bootstrap5\Alert;
use yii\bootstrap5\Html;

$this->title = 'Quiz Submitted';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-submit-quiz">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => Yii::$app->session->getFlash('success'),
        ]) ?>
    <?php endif; ?>
</div>