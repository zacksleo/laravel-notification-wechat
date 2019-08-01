<?php

namespace Zacksleo\LaravelNotificationWechat\Messages;

class MiniProgramTemplateMessage
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
     * @return MiniProgramTemplateMessage
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
     * @return MiniProgramTemplateMessage
     */
    public function template($templateId)
    {
        $this->payload['template_id'] = $templateId;

        return $this;
    }

    /**
     * 跳转页面.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $page
     *
     * @return MiniProgramTemplateMessage
     */
    public function page($page)
    {
        $this->payload['page'] = $page;

        return $this;
    }

    /**
     * FormId.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param string $formId
     *
     * @return MiniProgramTemplateMessage
     */
    public function formId($formId)
    {
        $this->payload['form_id'] = $formId;

        return $this;
    }

    /**
     * Target data.
     *
     * @author zacksleo <zacksleo@gmail.com>
     *
     * @param array $data
     *
     * @return MiniProgramTemplateMessage
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
