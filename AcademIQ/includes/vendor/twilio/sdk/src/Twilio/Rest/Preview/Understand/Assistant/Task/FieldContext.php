<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant\Task;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class FieldContext extends InstanceContext {
    /**
     * Initialize the FieldContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The unique ID of the Assistant.
     * @param string $taskSid The unique ID of the Task associated with this Field.
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     * @return \Twilio\Rest\Preview\Understand\Assistant\Task\FieldContext
     */
    public function __construct(Version $version, $assistantSid, $taskSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, 'taskSid' => $taskSid, 'sid' => $sid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($taskSid) . '/Fields/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a FieldInstance
     *
     * @return FieldInstance Fetched FieldInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new FieldInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['taskSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the FieldInstance
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
        return '[Twilio.Preview.Understand.FieldContext ' . \implode(' ', $context) . ']';
    }
}