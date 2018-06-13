<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Smspb;

/**
 */
class SmsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取验证码
     * @param \Smspb\VerifyCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVerifyCode(\Smspb\VerifyCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/smspb.SmsService/GetVerifyCode',
        $argument,
        ['\Smspb\VerifyCodeReply', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取短信列表
     * @param \Smspb\SmsListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSmsList(\Smspb\SmsListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/smspb.SmsService/GetSmsList',
        $argument,
        ['\Smspb\SmsList', 'decode'],
        $metadata, $options);
    }

}
