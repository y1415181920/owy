<?php

namespace Yjn\Owy\Renderers;

/**
 * InputTimeRange 时间范围
 * 
 * @author slowlyo
 * @version v2.9.0
 * @since 2023-04-23
 */
class InputTimeRange extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'input-time-range');

    }

    /**
     * 数据录入配置，自动填充或者参照录入
     */
    public function autoFill($value = '')
    {
        return $this->set('autoFill', $value);
    }

    /**
     * 表单最外层类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否可清除。
     */
    public function clearable($value = true)
    {
        return $this->set('clearable', $value);
    }

    /**
     * 表单项描述
     */
    public function description($value = '')
    {
        return $this->set('description', $value);
    }

    /**
     * 是否禁用
     */
    public function disabled($value = true)
    {
        return $this->set('disabled', $value);
    }

    /**
     * 当前表单项是否禁用的条件
     */
    public function disabledOn($value = '')
    {
        return $this->set('disabledOn', $value);
    }

    /**
     * 是否内联模式。
     */
    public function embed($value = true)
    {
        return $this->set('embed', $value);
    }

    /**
     * 时间范围选择器值格式
     */
    public function format($value = '')
    {
        return $this->set('format', $value);
    }

    /**
     * 是否内联
     */
    public function inline($value = true)
    {
        return $this->set('inline', $value);
    }

    /**
     * 表单控制器类名
     */
    public function inputClassName($value = '')
    {
        return $this->set('inputClassName', $value);
    }

    /**
     * 时间范围选择器显示格式
     */
    public function inputFormat($value = '')
    {
        return $this->set('inputFormat', $value);
    }

    /**
     * 表单项标签
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 表单项标签对齐方式，默认右对齐，仅在 mode为horizontal 时生效
     */
    public function labelAlign($value = '')
    {
        return $this->set('labelAlign', $value);
    }

    /**
     * label 的类名
     */
    public function labelClassName($value = '')
    {
        return $this->set('labelClassName', $value);
    }

    /**
     * 表单项标签描述
     */
    public function labelRemark($value = '')
    {
        return $this->set('labelRemark', $value);
    }

    /**
     * 字段名，指定该表单项提交时的 key
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 占位文本
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 是否必填
     */
    public function required($value = true)
    {
        return $this->set('required', $value);
    }

    /**
     * 通过表达式来配置当前表单项是否为必填。
     */
    public function requiredOn($value = '')
    {
        return $this->set('requiredOn', $value);
    }

    /**
     * 是否该表单项值发生变化时就提交当前表单。
     */
    public function submitOnChange($value = true)
    {
        return $this->set('submitOnChange', $value);
    }

    /**
     * 时间范围选择器值格式
     */
    public function timeFormat($value = '')
    {
        return $this->set('timeFormat', $value);
    }

    /**
     * 指定为 input-time-range 渲染器。
     */
    public function type($value = 'input-time-range')
    {
        return $this->set('type', $value);
    }

    /**
     * 表单校验接口
     */
    public function validateApi($value = '')
    {
        return $this->set('validateApi', $value);
    }

    /**
     * 表单项值格式验证，支持设置多个，多个规则用英文逗号隔开。
     */
    public function validations($value = '')
    {
        return $this->set('validations', $value);
    }

    /**
     * 表单默认值
     */
    public function value($value = '')
    {
        return $this->set('value', $value);
    }

    /**
     * 是否可见
     */
    public function visible($value = true)
    {
        return $this->set('visible', $value);
    }

    /**
     * 当前表单项是否禁用的条件
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }

}
