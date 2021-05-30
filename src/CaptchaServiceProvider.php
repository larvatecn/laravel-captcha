<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 */

namespace Larva\Captcha;

use Illuminate\Support\ServiceProvider;

/**
 * Class CaptchaServiceProvider
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class CaptchaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/captcha.php' => config_path('captcha.php'),
            ], 'captcha-config');

            $this->publishes([
                __DIR__ . '/../resources/fonts' => resource_path('fonts'),
            ], 'captcha-fonts');
        }
        $this->app['router']->get('captcha', CaptchaAction::class)->middleware('web');
        $this->app['validator']->extend('captcha', "\Larva\Captcha\CaptchaValidator@validate");
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (!$this->app->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__ . '/../config/captcha.php', 'captcha');
        }

        $this->app->singleton(CaptchaManager::class, function ($app) {
            return new CaptchaManager($app);
        });
    }

}