<?php

namespace Zacksleo\LaravelNotificationWechat;

class OfficialAccountTemplateMessage
{
    /**
     * Payload.
     *
     * @var array
     */
    private $payload;

    /**
     * 接收用户.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $openid
     *
     * @return OfficialAccountTemplateMessage
     */
    public function to($openid)
    {
        $this->payload['touser'] = $openid;

        return $this;
    }

    /**
     * 模板ID
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $templateId
     *
     * @return OfficialAccountTemplateMessage
     */
    public function template($templateId)
    {
        $this->payload['template_id'] = $templateId;

        return $this;
    }

    /**
     * 跳转地址.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $url
     *
     * @return OfficialAccountTemplateMessage
     */
    public function url($url)
    {
        $this->payload['url'] = $url;

        return $this;
    }

    /**
     * 跳转小程序.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $appid
     * @param string $pagepath
     *
     * @return OfficialAccountTemplateMessage
     */
    public function miniprogram($appid, $pagepath)
    {
        $this->payload['miniprogram']['appid'] = $appid;
        $this->payload['miniprogram']['pagepath'] = $pagepath;

        return $this;
    }

    /**
     * Target data.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param array $data
     *
     * @return OfficialAccountTemplateMessage
     */
    public function data(array $data)
    {
        $this->payload['data'] = $data;

        return $this;
    }

    /**
     * 消息数据.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }
}
