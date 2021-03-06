# laravel-captcha
适用于 Laravel 的验证码服务。

<p align="center">
<a href="https://packagist.org/packages/larva/laravel-captcha"><img src="https://poser.pugx.org/larva/laravel-captcha/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/larva/laravel-captcha"><img src="https://poser.pugx.org/larva/laravel-captcha/v/unstable.svg" alt="Latest Unstable Version"></a>
</p>

## 环境需求

- PHP >= 7.3.0

## Installation

```bash
composer require larva/laravel-captcha -vv
```


## 使用

路由

```php

GET /captcha

```

该路由输出的是图片，自行在表单组织。

表单中验证
```php
$validatedData = $request->validate([
    'captcha' => 'required|string|min:6|max:7',
]);
```
