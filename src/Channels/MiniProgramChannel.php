<?php

namespace Zacksleo\LaravelNotificationWechat;

use EasyWeChat\MiniProgram\Application;
use Zacksleo\LaravelNotificationWechat\Concerns\CanSendToMiniProgram;

/**
 * 小程序消息发送通道
 *
 * @property EasyWeChat\MiniProgram\Application $app
 */
class MiniProgramChannel
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
            $this->app = \EasyWeChat::miniProgram();
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
     * @param Zacksleo\LaravelNotificationWechat\Concerns\CanSendToMiniProgram $notification
     *
     * @return array
     */
    public function send($notifiable, CanSendToMiniProgram $notification)
    {
        $message = $notification->toWechatMiniProgram($notifiable);
        $data = $message->getPayload();

        return $this->app->template_message->send($data);
    }
}
