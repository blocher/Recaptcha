<?php

class reCaptcha {
    public static function display() {
        require_once(__DIR__.'../recaptchalib.php');
        $publicKey = 'some public key';
        echo recaptcha_get_html($publicKey);
    }
} 