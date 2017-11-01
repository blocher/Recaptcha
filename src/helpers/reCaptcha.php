<?php

class reCaptcha {
    public static function display() {
        require_once(__DIR__.'/../recaptchalib.php');
        $publicKey = \Config::get('Recaptcha::publickey');
        echo recaptcha_get_html($publicKey, null, true);
    }
}