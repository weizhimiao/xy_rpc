<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sms.proto

namespace Smspb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>smspb.SmsInfo</code>
 */
class SmsInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string phone = 2;</code>
     */
    private $phone = '';
    /**
     * Generated from protobuf field <code>.smspb.Marks mark = 3;</code>
     */
    private $mark = 0;
    /**
     * Generated from protobuf field <code>string content = 4;</code>
     */
    private $content = '';
    /**
     * Generated from protobuf field <code>.smspb.SmsStatus status = 5;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>int32 sendTime = 6;</code>
     */
    private $sendTime = 0;

    public function __construct() {
        \GPBMetadata\Sms::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 2;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.smspb.Marks mark = 3;</code>
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Generated from protobuf field <code>.smspb.Marks mark = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkEnum($var, \Smspb\Marks::class);
        $this->mark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content = 4;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>string content = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.smspb.SmsStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.smspb.SmsStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Smspb\SmsStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sendTime = 6;</code>
     * @return int
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * Generated from protobuf field <code>int32 sendTime = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSendTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->sendTime = $var;

        return $this;
    }

}
