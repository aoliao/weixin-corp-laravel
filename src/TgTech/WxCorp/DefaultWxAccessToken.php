<?php

namespace TgTech\WxCorp;

use TgTech\WxCorp\WxAccessToken;

class DefaultWxAccessToken implements  WxAccessToken{

    /**
     * @param $force boolean
     * @return string
     */
    public function getAccessToken($force = false)
    {
        return 'ok';
    }
}