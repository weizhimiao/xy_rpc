<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Demopb;

/**
 * 定义Hello服务
 */
class DemoServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 定义SayHello方法
     * @param \Demopb\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SayHello(\Demopb\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/demopb.DemoService/SayHello',
        $argument,
        ['\Demopb\HelloReply', 'decode'],
        $metadata, $options);
    }

}
