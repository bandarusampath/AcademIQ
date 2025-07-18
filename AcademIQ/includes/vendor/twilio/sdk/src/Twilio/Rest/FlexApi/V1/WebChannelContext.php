<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class WebChannelContext extends InstanceContext {
    /**
     * Initialize the WebChannelContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid The SID of the WebChannel resource to fetch
     * @return \Twilio\Rest\FlexApi\V1\WebChannelContext
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('sid' => $sid, );

        $this->uri = '/WebChannels/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a WebChannelInstance
     *
     * @return WebChannelInstance Fetched WebChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new WebChannelInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Update the WebChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WebChannelInstance Updated WebChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'ChatStatus' => $options['chatStatus'],
            'PostEngagementData' => $options['postEngagementData'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new WebChannelInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Deletes the WebChannelInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
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
        return '[Twilio.FlexApi.V1.WebChannelContext ' . \implode(' ', $context) . ']';
    }
}