<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Sms extends TwiML {
    /**
     * Sms constructor.
     *
     * @param string $message Message body
     * @param array $attributes Optional attributes
     */
    public function __construct($message, $attributes = array()) {
        parent::__construct('Sms', $message, $attributes);
    }

    /**
     * Add To attribute.
     *
     * @param string $to Number to send message to
     * @return static $this.
     */
    public function setTo($to) {
        return $this->setAttribute('to', $to);
    }

    /**
     * Add From attribute.
     *
     * @param string $from Number to send message from
     * @return static $this.
     */
    public function setFrom($from) {
        return $this->setAttribute('from', $from);
    }

    /**
     * Add Action attribute.
     *
     * @param string $action Action URL
     * @return static $this.
     */
    public function setAction($action) {
        return $this->setAttribute('action', $action);
    }

    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     * @return static $this.
     */
    public function setMethod($method) {
        return $this->setAttribute('method', $method);
    }

    /**
     * Add StatusCallback attribute.
     *
     * @param string $statusCallback Status callback URL
     * @return static $this.
     */
    public function setStatusCallback($statusCallback) {
        return $this->setAttribute('statusCallback', $statusCallback);
    }
}