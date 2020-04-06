<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

$this->title = 'about';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <code><?= __FILE__ ?></code>
</div>
