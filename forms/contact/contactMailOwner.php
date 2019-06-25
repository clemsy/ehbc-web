<?php

use yii\widgets\DetailView;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */
/* @var $model \app\forms\contactForm */

?>
<h2>A contact request has been filled in</h2>
<p>
    We received the following details:<br>
</p>


<p>
    From : <?=$model->fullname;?> (<a href="<?=$model->email;?>"><?=$model->email;?></a>)
</p>
<p>
    Date : <?= Yii::$app->formatter->asDatetime(time());?>
</p>
<p>
    Subject : <?=$model->subject;?>
</p>
<p>
    Message :
</p>

<?=Yii::$app->formatter->asNtext($model->message);?>