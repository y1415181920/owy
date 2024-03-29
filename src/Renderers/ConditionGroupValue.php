<?php

namespace Yjn\Owy\Renderers;

/**
 * ConditionGroupValue
 * 
 * @author slowlyo
 * @version v2.9.0
 * @since 2023-04-23
 */
class ConditionGroupValue extends BaseRenderer
{
    public function __construct()
    {
        $this->set('conjunction', 'and');

    }

    public function children($value = '')
    {
        return $this->set('children', $value);
    }

    /**
     *  可选值: and | or
     */
    public function conjunction($value = '')
    {
        return $this->set('conjunction', $value);
    }

    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    public function not($value = true)
    {
        return $this->set('not', $value);
    }

}
