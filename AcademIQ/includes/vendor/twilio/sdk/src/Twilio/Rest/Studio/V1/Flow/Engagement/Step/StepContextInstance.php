<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V1\Flow\Engagement\Step;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property array $context
 * @property string $engagementSid
 * @property string $flowSid
 * @property string $stepSid
 * @property string $url
 */
class StepContextInstance extends InstanceResource {
    /**
     * Initialize the StepContextInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $flowSid The SID of the Flow
     * @param string $engagementSid The SID of the Engagement
     * @param string $stepSid Step SID
     * @return \Twilio\Rest\Studio\V1\Flow\Engagement\Step\StepContextInstance
     */
    public function __construct(Version $version, array $payload, $flowSid, $engagementSid, $stepSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'context' => Values::array_get($payload, 'context'),
            'engagementSid' => Values::array_get($payload, 'engagement_sid'),
            'flowSid' => Values::array_get($payload, 'flow_sid'),
            'stepSid' => Values::array_get($payload, 'step_sid'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array(
            'flowSid' => $flowSid,
            'engagementSid' => $engagementSid,
            'stepSid' => $stepSid,
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Studio\V1\Flow\Engagement\Step\StepContextContext Context for this StepContextInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new StepContextContext(
                $this->version,
                $this->solution['flowSid'],
                $this->solution['engagementSid'],
                $this->solution['stepSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a StepContextInstance
     *
     * @return StepContextInstance Fetched StepContextInstance
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
        return '[Twilio.Studio.V1.StepContextInstance ' . \implode(' ', $context) . ']';
    }
}