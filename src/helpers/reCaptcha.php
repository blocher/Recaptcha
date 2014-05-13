<?php

class reCaptcha {
    public static function display() {
        require_once('../recaptchalib.php');
        $publicKey = 'some public key';
        echo recaptcha_get_html($publicKey);
    }
} 