<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Commonpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * where 条件
 *
 * Generated from protobuf message <code>commonpb.WhereCondition</code>
 */
class WhereCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fieldName = 1;</code>
     */
    private $fieldName = '';
    /**
     * Generated from protobuf field <code>string fieldValue = 2;</code>
     */
    private $fieldValue = '';

    public function __construct() {
        \GPBMetadata\Common::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string fieldName = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Generated from protobuf field <code>string fieldName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fieldName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fieldValue = 2;</code>
     * @return string
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * Generated from protobuf field <code>string fieldValue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->fieldValue = $var;

        return $this;
    }

}

