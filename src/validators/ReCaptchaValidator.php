<?php

class ReCaptchaValidator extends Illuminate\Validation\Validator {
    public function validateRecaptcha($attribute, $value, $parameters)
    {
        return $value == 'foo';
    }
} 