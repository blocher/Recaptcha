<?php

use Illuminate\Translation\Translator;

class ReCaptchaValidator extends Illuminate\Validation\Validator {

    public function __construct(Translator $translator, $data, $rules, $messages = array()) {
        $messages = \Lang::get('Recaptcha::validation.recaptcha');

        parent::__construct($translator, $data, $rules, $messages);
    }

    public function validateRecaptcha($attribute, $value, $parameters)
    {
        echo $attribute . ' --- ' . $value;
        var_dump($parameters);
        return false;
    }
} 