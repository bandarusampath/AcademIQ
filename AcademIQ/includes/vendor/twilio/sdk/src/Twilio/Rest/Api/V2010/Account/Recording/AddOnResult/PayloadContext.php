<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Recording\AddOnResult;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class PayloadContext extends InstanceContext {
    /**
     * Initialize the PayloadContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     *                           to fetch
     * @param string $referenceSid The SID of the recording to which the
     *                             AddOnResult resource that contains the payload
     *                             to fetch belongs
     * @param string $addOnResultSid The SID of the AddOnResult to which the
     *                               payload to fetch belongs
     * @param string $sid The unique string that identifies the resource to fetch
     * @return \Twilio\Rest\Api\V2010\Account\Recording\AddOnResult\PayloadContext
     */
    public function __construct(Version $version, $accountSid, $referenceSid, $addOnResultSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'referenceSid' => $referenceSid,
            'addOnResultSid' => $addOnResultSid,
            'sid' => $sid,
        );

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Recordings/' . \rawurlencode($referenceSid) . '/AddOnResults/' . \rawurlencode($addOnResultSid) . '/Payloads/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Fetch a PayloadInstance
     *
     * @return PayloadInstance Fetched PayloadInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new PayloadInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['referenceSid'],
            $this->solution['addOnResultSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the PayloadInstance
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
        return '[Twilio.Api.V2010.PayloadContext ' . \implode(' ', $context) . ']';
    }
}