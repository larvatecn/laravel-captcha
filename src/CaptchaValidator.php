<?php

declare(strict_types=1);

/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 */

namespace Larva\Captcha;

/**
 * Class CaptchaValidator
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class CaptchaValidator
{
    public function validate($attribute, $value, $parameters, $validator): bool
    {
        $service = app()->make(CaptchaManager::class);
        if (config('app.env') == 'testing') {
            $service->setFixedVerifyCode(1234);
        }
        if ($service->validate($value, false)) {
            return true;
        }
        return false;
    }
}