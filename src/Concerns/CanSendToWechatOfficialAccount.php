<?php

namespace Zacksleo\LaravelNotificationWechat\Concerns;

use Zacksleo\LaravelNotificationWechat\Messages\OfficialAccountTemplateMessage;

interface CanSendToOfficialAccount
{
    public function toWechatOfficialAccount() : OfficialAccountTemplateMessage;
}
