<?php

class RecaptchaFilter {
    protected $rules = array(
        'recaptcha_response_field'      => 'required',
        'recaptcha_challenge_field'     => 'required'
    );

    public function filter() {
        $valid = Validator::make(Input::all(), $this->rules);

        if ($valid->fails()) {
            throw new \Exception('Missing Recaptcha Values');
        }

        require_once(__DIR__.'/../recaptchalib.php');
        $privateKey = \Config::get('Recaptcha::privatekey');

        $response = recaptcha_check_answer($privateKey, Request::getClientIp(), Input::get('recaptcha_challenge_field'), Input::get('recaptcha_response_field'));

        if (!$response->is_valid) {
            throw new \Exception('Invalid Recaptcha Response');
        }
    }
}