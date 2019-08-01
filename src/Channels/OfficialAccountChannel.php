<?php

namespace Zacksleo\LaravelNotificationWechat;

use EasyWeChat\OfficialAccount\Application;
use Zacksleo\LaravelNotificationWechat\Concerns\CanSendToOfficialAccount;

class OfficialAccountChannel
{
    /**
     * 公众账号.
     *
     * @var app
     */
    protected $app;

    /**
     * Bootstrap.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param Application $app
     */
    public function __construct(Application $app = null)
    {
        if ($app == null) {
            $this->app = \EasyWeChat::officialAccount();
        } else {
            $this->app = $app;
        }
    }

    /**
     * Send the given notification.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param mixed        $notifiable
     * @param Zacksleo\LaravelNotificationWechat\Concerns\CanSendToOfficialAccount $notification
     *
     * @return array
     */
    public function send($notifiable, CanSendToOfficialAccount $notification)
    {
        $message = $notification->toWechatOfficialAccount($notifiable);
        $data = $message->getPayload();

        return $this->app->template_message->send($data);
    }
}
