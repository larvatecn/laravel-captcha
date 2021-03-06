<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Captcha;

/**
 * Class CaptchaValidator
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class CaptchaValidator
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $service = CaptchaManager::make();
        if (config('app.env') == 'testing') {
            $service->setFixedVerifyCode(1234);
        }
        if ($service->validate($value, false)) {
            return true;
        }
        return false;
    }
}