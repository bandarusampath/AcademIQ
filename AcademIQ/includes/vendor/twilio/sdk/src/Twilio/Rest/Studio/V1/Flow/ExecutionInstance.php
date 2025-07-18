<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V1\Flow;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $sid
 * @property string $accountSid
 * @property string $flowSid
 * @property string $contactSid
 * @property string $contactChannelAddress
 * @property array $context
 * @property string $status
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 * @property array $links
 */
class ExecutionInstance extends InstanceResource {
    protected $_steps = null;
    protected $_executionContext = null;

    /**
     * Initialize the ExecutionInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $flowSid The SID of the Flow
     * @param string $sid The SID of the Execution resource to fetch
     * @return \Twilio\Rest\Studio\V1\Flow\ExecutionInstance
     */
    public function __construct(Version $version, array $payload, $flowSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'flowSid' => Values::array_get($payload, 'flow_sid'),
            'contactSid' => Values::array_get($payload, 'contact_sid'),
            'contactChannelAddress' => Values::array_get($payload, 'contact_channel_address'),
            'context' => Values::array_get($payload, 'context'),
            'status' => Values::array_get($payload, 'status'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array('flowSid' => $flowSid, 'sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Studio\V1\Flow\ExecutionContext Context for this
     *                                                      ExecutionInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ExecutionContext(
                $this->version,
                $this->solution['flowSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a ExecutionInstance
     *
     * @return ExecutionInstance Fetched ExecutionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the ExecutionInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Access the steps
     *
     * @return \Twilio\Rest\Studio\V1\Flow\Execution\ExecutionStepList
     */
    protected function getSteps() {
        return $this->proxy()->steps;
    }

    /**
     * Access the executionContext
     *
     * @return \Twilio\Rest\Studio\V1\Flow\Execution\ExecutionContextList
     */
    protected function getExecutionContext() {
        return $this->proxy()->executionContext;
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
        return '[Twilio.Studio.V1.ExecutionInstance ' . \implode(' ', $context) . ']';
    }
}