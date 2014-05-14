## What is ReCaptcha

## Installation
add `tenowg/recaptcha` to your requirements in composer.json

    "require": {
        "tenowg/recaptcha": "1.0.*"
    }

Don't forget to `composer update`
### Requirements
Recaptcha is completely self supporting, other than needing `Laravel 4` there are no other requirements.

### Configuration
You will need to create a ReCaptcha Account on [Google Recaptcha](https://www.google.com/recaptcha/admin#whyrecaptcha)
Once you have your public and private keys generated, you can finish setting up reCaptcha.

    php artisan config:publish tenowg/recaptcha

This will export the config file to `app/config/packages/tenowg/recaptcha` as `config.php` edit this file and enter the required information. (public and private keys)

Thats it, and you are ready to rock... simple.


## Usage
Using Recaptcha couldn't be easier, just use some of the methods below and you will be all set.
### Generating Recaptcha
Simply call `reCaptcha::display()` where you wish to display the recaptcha form. This should always be in your
form.

    {{ Form::open(blah) }}
    	{{ reCaptcha::display() }}
    {{ Form::close() }}

### Verifying Recaptcha
Verifying the recaptcha is "Almost automatic", you can either use validation methods, or filters.

#### Filter
Controller filter in `__construct()`

    $this->beforeFilter('recaptcha', array('only' => array('postForm')));

#### Validation
Using the `Validator`

    $rules = array(
        'recaptcha_response_field'] = 'required|recaptcha:' . Input::get('recaptcha_challenge_field')
    );

## TroubleShooting

## Author/Credits

