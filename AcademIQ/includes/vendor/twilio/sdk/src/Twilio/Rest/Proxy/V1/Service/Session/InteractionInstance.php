<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1\Service\Session;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 *
 * @property string $sid
 * @property string $sessionSid
 * @property string $serviceSid
 * @property string $accountSid
 * @property string $data
 * @property string $type
 * @property string $inboundParticipantSid
 * @property string $inboundResourceSid
 * @property string $inboundResourceStatus
 * @property string $inboundResourceType
 * @property string $inboundResourceUrl
 * @property string $outboundParticipantSid
 * @property string $outboundResourceSid
 * @property string $outboundResourceStatus
 * @property string $outboundResourceType
 * @property string $outboundResourceUrl
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 */
class InteractionInstance extends InstanceResource {
    /**
     * Initialize the InteractionInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the resource's parent Service
     * @param string $sessionSid The SID of the resource's parent Session
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Proxy\V1\Service\Session\InteractionInstance
     */
    public function __construct(Version $version, array $payload, $serviceSid, $sessionSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'sid' => Values::array_get($payload, 'sid'),
            'sessionSid' => Values::array_get($payload, 'session_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'data' => Values::array_get($payload, 'data'),
            'type' => Values::array_get($payload, 'type'),
            'inboundParticipantSid' => Values::array_get($payload, 'inbound_participant_sid'),
            'inboundResourceSid' => Values::array_get($payload, 'inbound_resource_sid'),
            'inboundResourceStatus' => Values::array_get($payload, 'inbound_resource_status'),
            'inboundResourceType' => Values::array_get($payload, 'inbound_resource_type'),
            'inboundResourceUrl' => Values::array_get($payload, 'inbound_resource_url'),
            'outboundParticipantSid' => Values::array_get($payload, 'outbound_participant_sid'),
            'outboundResourceSid' => Values::array_get($payload, 'outbound_resource_sid'),
            'outboundResourceStatus' => Values::array_get($payload, 'outbound_resource_status'),
            'outboundResourceType' => Values::array_get($payload, 'outbound_resource_type'),
            'outboundResourceUrl' => Values::array_get($payload, 'outbound_resource_url'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array(
            'serviceSid' => $serviceSid,
            'sessionSid' => $sessionSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Proxy\V1\Service\Session\InteractionContext Context for
     *                                                                  this
     *                                                                  InteractionInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new InteractionContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sessionSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a InteractionInstance
     *
     * @return InteractionInstance Fetched InteractionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the InteractionInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
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
        return '[Twilio.Proxy.V1.InteractionInstance ' . \implode(' ', $context) . ']';
    }
}