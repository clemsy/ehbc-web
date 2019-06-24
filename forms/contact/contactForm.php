<?php

namespace app\forms;

use Craft;
use plugins\dolphiq\form\models\Form;

class contactForm extends Form {

    public $fullname = "";
    public $firstname = "";
    public $lastname = "";
    public $subject = "";
    public $phone = "";
    public $email = "";
    public $message = "";

    public function rules()
    {
        return [
            [['fullname', 'subject', 'email', 'message'], 'required'],
            ['email', 'email'],
            ['phone', 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'fullname' => Craft::t('site', 'Name'),
            'lastname' => Craft::t('site', 'Lastname'),
            'phone' => Craft::t('site', 'Phone'),
            'email' => Craft::t('site', 'Email'),
            'subject' => Craft::t('site', 'Subject'),
            'message' => Craft::t('site', 'Message'),
        ];
    }
}
