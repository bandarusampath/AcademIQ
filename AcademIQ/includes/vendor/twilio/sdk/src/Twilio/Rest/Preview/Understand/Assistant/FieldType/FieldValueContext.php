<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant\FieldType;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class FieldValueContext extends InstanceContext {
    /**
     * Initialize the FieldValueContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The assistant_sid
     * @param string $fieldTypeSid The field_type_sid
     * @param string $sid The sid
     * @return \Twilio\Rest\Preview\Understand\Assistant\FieldType\FieldValueContext
     */
    public function __construct(Version $version, $assistantSid, $fieldTypeSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array(
            'assistantSid' => $assistantSid,
            'fieldTypeSid' => $fieldTypeSid,
            'sid' => $sid,
        );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/FieldTypes/' . \rawurlencode($fieldTypeSid) . '/FieldValues/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a FieldValueInstance
     *
     * @return FieldValueInstance Fetched FieldValueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new FieldValueInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['fieldTypeSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the FieldValueInstance
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
        return '[Twilio.Preview.Understand.FieldValueContext ' . \implode(' ', $context) . ']';
    }
}