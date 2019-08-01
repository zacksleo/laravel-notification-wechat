<h1 align="center"> laravel-notification-wechat </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require zacksleo/laravel-notification-wechat -vvv
```

## Usage

### 公众号模板消息

```php

use Illuminate\Notifications\Notification;
use Zacksleo\LaravelNotificationWechat\OfficialAccountChannel;
use Zacksleo\LaravelNotificationWechat\Messages\OfficialAccountTemplateMessage;

class OrderPaidSuccess extends Notification
{
    public function via($notifiable)
    {
        return [OfficialAccountChannel::class];
    }

    public function toWechatOfficialAccount($notifiable): OfficialAccountTemplateMessage
    {
        return (new OfficialAccountTemplateMessage)
        ->to('接收用户的 openid')
        ->template('模板 ID')
        ->url('网页地址，如 https://demo.com')
        ->miniprogram('小程序app_id', '小程序页面路径')
        ->data([
            'keyword1' => '关键词1',
            'keyword2' => '关键词2',
        ]);
    }
}
```

### 小程序模板消息

```php

use Illuminate\Notifications\Notification;
use Zacksleo\LaravelNotificationWechat\MiniProgramChannel;
use Zacksleo\LaravelNotificationWechat\Messages\MiniProgramTemplateMessage;

class OrderPaidSuccess extends Notification implements ShouldQueue
{

    public function via($notifiable)
    {
        return [MiniProgramChannel::class];
    }

    public function toWechatMiniProgram($notifiable): MiniProgramTemplateMessage
    {
        return (new MiniProgramTemplateMessage)
        ->to('接收用户的 openid')
        ->template('模板 ID')
        ->formId('formId 或者 prepay_id')
        ->page('小程序页面路径')
        ->data([
            'keyword1' => '关键词1',
            'keyword2' => '关键词2',
        ]);
    }
}
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zacksleo/laravel-notification-wechat/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zacksleo/laravel-notification-wechat/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT