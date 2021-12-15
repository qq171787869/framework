<?php

namespace think\captcha;

use think\Captcha;
use think\facade\Config;

class CaptchaController
{
    public function index($id = "")
    {
        $captcha = new Captcha((array) Config::pull('captcha'));
        return $captcha->entry($id);
    }
}