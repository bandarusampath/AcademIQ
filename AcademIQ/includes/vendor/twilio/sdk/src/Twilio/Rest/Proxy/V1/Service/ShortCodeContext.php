<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class ShortCodeContext extends InstanceContext {
    /**
     * Initialize the ShortCodeContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $serviceSid The SID of the parent Service to fetch the
     *                           resource from
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Proxy\V1\Service\ShortCodeContext
     */
    public function __construct(Version $version, $serviceSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('serviceSid' => $serviceSid, 'sid' => $sid, );

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/ShortCodes/' . \rawurlencode($sid) . '';
    }

    /**
     * Deletes the ShortCodeInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Fetch a ShortCodeInstance
     *
     * @return ShortCodeInstance Fetched ShortCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the ShortCodeInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ShortCodeInstance Updated ShortCodeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array('IsReserved' => Serialize::booleanToString($options['isReserved']), ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
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
        return '[Twilio.Proxy.V1.ShortCodeContext ' . \implode(' ', $context) . ']';
    }
}