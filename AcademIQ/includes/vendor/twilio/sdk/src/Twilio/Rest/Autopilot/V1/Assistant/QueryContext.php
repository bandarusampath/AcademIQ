<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class QueryContext extends InstanceContext {
    /**
     * Initialize the QueryContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant that is the parent of
     *                             the resource to fetch
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Autopilot\V1\Assistant\QueryContext
     */
    public function __construct(Version $version, $assistantSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, 'sid' => $sid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Queries/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a QueryInstance
     *
     * @return QueryInstance Fetched QueryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new QueryInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the QueryInstance
     *
     * @param array|Options $options Optional Arguments
     * @return QueryInstance Updated QueryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array('SampleSid' => $options['sampleSid'], 'Status' => $options['status'], ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new QueryInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the QueryInstance
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
        return '[Twilio.Autopilot.V1.QueryContext ' . \implode(' ', $context) . ']';
    }
}