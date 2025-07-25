<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class CurrentCallContext extends InstanceContext {
    /**
     * Initialize the CurrentCallContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @return \Twilio\Rest\Preview\TrustedComms\CurrentCallContext
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();

        $this->uri = '/CurrentCall';
    }

    /**
     * Fetch a CurrentCallInstance
     *
     * @return CurrentCallInstance Fetched CurrentCallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new CurrentCallInstance($this->version, $payload);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.TrustedComms.CurrentCallContext ' . \implode(' ', $context) . ']';
    }
}