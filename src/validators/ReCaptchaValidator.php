<?php

use Illuminate\Translation\Translator;

class ReCaptchaValidator extends Illuminate\Validation\Validator {

    public function __construct(Translator $translator, $data, $rules, $messages = array()) {
        $messages = \Lang::get('Recaptcha::recaptcha');

        parent::__construct($translator, $data, $rules, $messages);
    }

    public function validateRecaptcha($attribute, $value, $parameters)
    {
        echo $attribute . '  ' . $value . '  ' . $parameters;
        return false;
    }
} 