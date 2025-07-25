<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

class EndUserContext extends InstanceContext {
    /**
     * Initialize the EndUserContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Numbers\V2\RegulatoryCompliance\EndUserContext
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('sid' => $sid, );

        $this->uri = '/RegulatoryCompliance/EndUsers/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a EndUserInstance
     *
     * @return EndUserInstance Fetched EndUserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new EndUserInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Update the EndUserInstance
     *
     * @param array|Options $options Optional Arguments
     * @return EndUserInstance Updated EndUserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'Attributes' => Serialize::jsonObject($options['attributes']),
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new EndUserInstance($this->version, $payload, $this->solution['sid']);
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
        return '[Twilio.Numbers.V2.EndUserContext ' . \implode(' ', $context) . ']';
    }
}