<?php

namespace TgTech\WxCorp;

interface WxAccessToken{

    /**
     * @param $force boolean
     * @return string
     */
    public function getAccessToken($force = false);
}