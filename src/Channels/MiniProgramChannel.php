<?php

namespace Zacksleo\LaravelNotificationWechat;

use EasyWeChat\MiniProgram\Application;
use Illuminate\Notifications\Notification;

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
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @return array
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toWechatMiniProgram($notifiable);
        $data = $message->getPayload();

        return $this->app->template_message->send($data);
    }
}
