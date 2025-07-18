<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $sid
 * @property string $friendlyName
 * @property string $machineName
 * @property array $fields
 * @property string $url
 */
class SupportingDocumentTypeInstance extends InstanceResource {
    /**
     * Initialize the SupportingDocumentTypeInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The unique string that identifies the Supporting Document
     *                    Type resource
     * @return \Twilio\Rest\Numbers\V2\RegulatoryCompliance\SupportingDocumentTypeInstance
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'machineName' => Values::array_get($payload, 'machine_name'),
            'fields' => Values::array_get($payload, 'fields'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Numbers\V2\RegulatoryCompliance\SupportingDocumentTypeContext Context for this
     *                                                                                    SupportingDocumentTypeInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new SupportingDocumentTypeContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Fetch a SupportingDocumentTypeInstance
     *
     * @return SupportingDocumentTypeInstance Fetched SupportingDocumentTypeInstance
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
        return '[Twilio.Numbers.V2.SupportingDocumentTypeInstance ' . \implode(' ', $context) . ']';
    }
}