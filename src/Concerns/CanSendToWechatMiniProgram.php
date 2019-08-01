<?php

namespace Zacksleo\LaravelNotificationWechat\Concerns;

use Zacksleo\LaravelNotificationWechat\Messages\MiniProgramTemplateMessage;

interface CanSendToWechatMiniProgram
{
    public function toWechatMiniProgram() : MiniProgramTemplateMessage;
}
