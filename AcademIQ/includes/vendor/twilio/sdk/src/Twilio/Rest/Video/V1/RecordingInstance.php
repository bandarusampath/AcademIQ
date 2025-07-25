<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property string $status
 * @property \DateTime $dateCreated
 * @property string $sid
 * @property string $sourceSid
 * @property string $size
 * @property string $url
 * @property string $type
 * @property int $duration
 * @property string $containerFormat
 * @property string $codec
 * @property array $groupingSids
 * @property string $trackName
 * @property string $offset
 * @property array $links
 */
class RecordingInstance extends InstanceResource {
    /**
     * Initialize the RecordingInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Video\V1\RecordingInstance
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'status' => Values::array_get($payload, 'status'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'sid' => Values::array_get($payload, 'sid'),
            'sourceSid' => Values::array_get($payload, 'source_sid'),
            'size' => Values::array_get($payload, 'size'),
            'url' => Values::array_get($payload, 'url'),
            'type' => Values::array_get($payload, 'type'),
            'duration' => Values::array_get($payload, 'duration'),
            'containerFormat' => Values::array_get($payload, 'container_format'),
            'codec' => Values::array_get($payload, 'codec'),
            'groupingSids' => Values::array_get($payload, 'grouping_sids'),
            'trackName' => Values::array_get($payload, 'track_name'),
            'offset' => Values::array_get($payload, 'offset'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Video\V1\RecordingContext Context for this
     *                                                RecordingInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new RecordingContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Fetch a RecordingInstance
     *
     * @return RecordingInstance Fetched RecordingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the RecordingInstance
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
        return '[Twilio.Video.V1.RecordingInstance ' . \implode(' ', $context) . ']';
    }
}