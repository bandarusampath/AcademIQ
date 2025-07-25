<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property string $accountSid
 * @property string $assistantSid
 * @property \DateTime $dateCreated
 * @property string $status
 * @property int $errorCode
 * @property string $url
 * @property array $schema
 */
class ExportAssistantInstance extends InstanceResource {
    /**
     * Initialize the ExportAssistantInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantSid The SID of the Assistant to export.
     * @return \Twilio\Rest\Autopilot\V1\Assistant\ExportAssistantInstance
     */
    public function __construct(Version $version, array $payload, $assistantSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'assistantSid' => Values::array_get($payload, 'assistant_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'status' => Values::array_get($payload, 'status'),
            'errorCode' => Values::array_get($payload, 'error_code'),
            'url' => Values::array_get($payload, 'url'),
            'schema' => Values::array_get($payload, 'schema'),
        );

        $this->solution = array('assistantSid' => $assistantSid, );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\ExportAssistantContext Context
     *                                                                    for this
     *                                                                    ExportAssistantInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ExportAssistantContext($this->version, $this->solution['assistantSid']);
        }

        return $this->context;
    }

    /**
     * Fetch a ExportAssistantInstance
     *
     * @return ExportAssistantInstance Fetched ExportAssistantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Autopilot.V1.ExportAssistantInstance ' . \implode(' ', $context) . ']';
    }
}