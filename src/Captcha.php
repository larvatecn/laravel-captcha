<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Captcha;

use Illuminate\Support\Facades\Facade;

/**
 * Class Captcha
 * @mixin CaptchaManager
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Captcha extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CaptchaManager::class;
    }
}