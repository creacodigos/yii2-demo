<?php
use yii\helpers\Html;
use app\models\Country;

$this->title = 'Base de Datos';
$this->params['breadcrumbs'][] = $this->title;

Yii::$app->session->setFlash('success', 'This is the message');
Yii::$app->session->setFlash('info', 'This is the message');
Yii::$app->session->setFlash('error', ['Error 1', 'This is the message 2']);

?>

<div>
        <?php     

        // obtiene todos los registros de la tabla country ordenándolos por "name"
        $countries = Country::find()->orderBy('name')->all();

        ?>

        <ul>

        <?php foreach ($countries as $country): ?>
            
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>:
            <?= $country->population ?>
        </li>

        <?php endforeach; ?>

        </ul>
</div>

<code><?= __FILE__ ?></code>


