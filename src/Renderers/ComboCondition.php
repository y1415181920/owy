<?php

namespace Yjn\Owy\Renderers;

/**
 * ComboCondition
 * 
 * @author slowlyo
 * @version v2.9.0
 * @since 2023-04-23
 */
class ComboCondition extends BaseRenderer
{
    public function __construct()
    {

    }

    public function items($value = '')
    {
        return $this->set('items', $value);
    }

    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    public function scaffold($value = '')
    {
        return $this->set('scaffold', $value);
    }

    public function test($value = '')
    {
        return $this->set('test', $value);
    }

}
