<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel Client Feedback Form

## How to Install

- Rename __.env.example__ file to __.env__
- Run __composer install__ or __composer update__
- Run __php artisan key:generate__
- You need to change the .env file, enter from email address and password.
MAIL_MAILER=smtp<br>
MAIL_HOST=smtp.googlemail.com <br>
MAIL_PORT=465 <br>
MAIL_USERNAME=//your email address//<br>
MAIL_PASSWORD=//your email password//<br>
MAIL_ENCRYPTION=ssl<br>
MAIL_FROM_ADDRESS=//your email address//<br>
MAIL_FROM_NAME="${APP_NAME}"
- Turn on your Gmail <strong>Less secure app access</strong>
- php artisan serve
