<?php
/**
 * Created by PhpStorm.
 * User: tenowg
 * Date: 5/13/14
 * Time: 6:40 PM
 */

namespace helpers;


class reCaptcha {
    public static function reCaptcha() {
        require_once('../recaptchalib.php');
        $publicKey = 'some public key';
        echo recaptcha_get_html($publicKey);
    }
} 