<?php

class ReCaptchaValidator extends Illuminate\Validation\Validator {

    public function __construct(TranslatorInterface $translator, $data, $rules, $messages = array()) {
        $messages = \Lang::get('Recaptcha::recaptcha');

        parent::__construct($translator, $data, $rules, $messages);
    }

    public function validateRecaptcha($attribute, $value, $parameters)
    {
        echo $attribute . '  ' . $value . '  ' . $parameters;
        return false;
    }
} 