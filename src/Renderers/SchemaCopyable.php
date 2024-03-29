<?php

namespace Yjn\Owy\Renderers;

/**
 * SchemaCopyable
 * 
 * @author slowlyo
 * @version v2.9.0
 * @since 2023-04-23
 */
class SchemaCopyable extends BaseRenderer
{
    public function __construct()
    {

    }

    /**
     * 配置复制时的内容模板。
     */
    public function content($value = '')
    {
        return $this->set('content', $value);
    }

    /**
     * 可以配置图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 提示文字内容
     */
    public function tooltip($value = '')
    {
        return $this->set('tooltip', $value);
    }

}
