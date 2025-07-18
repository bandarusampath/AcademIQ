<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Recording;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class TranscriptionContext extends InstanceContext {
    /**
     * Initialize the TranscriptionContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     *                           to fetch
     * @param string $recordingSid The SID of the recording that created the
     *                             transcriptions to fetch
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Api\V2010\Account\Recording\TranscriptionContext
     */
    public function __construct(Version $version, $accountSid, $recordingSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'recordingSid' => $recordingSid,
            'sid' => $sid,
        );

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Recordings/' . \rawurlencode($recordingSid) . '/Transcriptions/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Fetch a TranscriptionInstance
     *
     * @return TranscriptionInstance Fetched TranscriptionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new TranscriptionInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['recordingSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the TranscriptionInstance
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
        return '[Twilio.Api.V2010.TranscriptionContext ' . \implode(' ', $context) . ']';
    }
}