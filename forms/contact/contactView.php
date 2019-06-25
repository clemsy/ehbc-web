<?php

/**
 * @var $model app\forms\contactForm
 * @var $handle string
 */

use yii\widgets\ActiveForm;
use yii\widgets\Pjax;


?>

<div class="container">

    <h3 class="title is-4">Contact form</h3>

<?php

// Start ajax handling of the form
Pjax::begin(['enablePushState' => false, 'id' => 'pjax-'.$handle]);

// Start active form
$form = ActiveForm::begin([

    'enableClientValidation' => true,
    'action' => \craft\helpers\UrlHelper::actionUrl('dolphiq-craft3-forms/main/index', ['handle' => $handle]),
    'method' => 'POST',
    'options' => [
        'data-pjax' => false,
    ],
]);

?>


    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">From</label>
        </div>
        <div class="field-body">
            <div class="field is-expanded">
                <?= $form->field($model, 'fullname')->textInput(['class'=>'input  control field', 'placeholder'=>'Your name', 'required'=>'required'])->label(false); ?>
                <p class="control is-expanded has-icons-left">
                </p>
            </div>
            <div class="field">
                <?= $form->field($model, 'email')->textInput(['class'=>'input  control field', 'placeholder'=>'Your email address', 'required'=>'required'])->label(false); ?>
                <p class="control is-expanded has-icons-left has-icons-right">
                </p>
            </div>
        </div>
    </div>

    <?php /*
    <div class="field is-horizontal">
        <div class="field-label"></div>
        <div class="field-body">
            <div class="field is-expanded">
                <div class="field">
                    <p class="control is-expanded">
                        <?= $form->field($model, 'phone')->textInput(['class'=>'input', 'placeholder'=>'Your telephone number'])->label(false); ?>
                    </p>
                </div>
                <p class="help">ex: +34 123 456 789</p>
            </div>
        </div>
    </div>
    */ ?>

    <div class="field is-horizontal" style="margin-bottom:2rem">
        <div class="field-label is-normal">
            <label class="label">Subject category</label>
        </div>
        <div class="field-body">
            <div class="field is-expanded">

                        <?= $form->field($model, 'subject',     ['template' => '<div class=" control field select is-fullwidth">{input}{error}{hint}</div>']

                        )->dropDownList(
                                [
                                    'General Info'=>'General Info',
                                    'Accomodation'=>'Accomodation',
                                    'Rules'=>'Rules / Reffing',
                                    'Volunteering'=>'Volunteering',
                                    'Tokens PreOrder'=>'Tokens PreOrder',
                                    'Tee Shirt PreOrder'=>'Tee Shirt PreOrder'
                                ],
                                [
                                        'prompt'=>'Choose...',
                                        'class'=>'select is-fullwidth',
                                        'required'=>'required'
                                    ]
                        )->label(false); ?>
                <p class="control is-expanded has-icons-left has-icons-right">
                </p>
            </div>
        </div>
    </div>


    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Message</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <?= $form->field($model, 'message')->textarea(['class'=>'textarea', 'rows'=>12, 'required'=>'required'])->label(false); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control has-text-right">
                    <button type="submit" class="button is-primary">
                        <?= Craft::t('site', 'Send message'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <p>
        <br>
    </p>





<?php

  // End active form
  ActiveForm::end();

  // End ajax handling
  Pjax::end();

  ?>
</div>
