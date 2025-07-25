<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property string $apiVersion
 * @property string $callSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $errorCode
 * @property string $log
 * @property \DateTime $messageDate
 * @property string $messageText
 * @property string $moreInfo
 * @property string $requestMethod
 * @property string $requestUrl
 * @property string $requestVariables
 * @property string $responseBody
 * @property string $responseHeaders
 * @property string $sid
 * @property string $uri
 */
class NotificationInstance extends InstanceResource {
    /**
     * Initialize the NotificationInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Api\V2010\Account\NotificationInstance
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'callSid' => Values::array_get($payload, 'call_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'errorCode' => Values::array_get($payload, 'error_code'),
            'log' => Values::array_get($payload, 'log'),
            'messageDate' => Deserialize::dateTime(Values::array_get($payload, 'message_date')),
            'messageText' => Values::array_get($payload, 'message_text'),
            'moreInfo' => Values::array_get($payload, 'more_info'),
            'requestMethod' => Values::array_get($payload, 'request_method'),
            'requestUrl' => Values::array_get($payload, 'request_url'),
            'requestVariables' => Values::array_get($payload, 'request_variables'),
            'responseBody' => Values::array_get($payload, 'response_body'),
            'responseHeaders' => Values::array_get($payload, 'response_headers'),
            'sid' => Values::array_get($payload, 'sid'),
            'uri' => Values::array_get($payload, 'uri'),
        );

        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Api\V2010\Account\NotificationContext Context for this
     *                                                            NotificationInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new NotificationContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a NotificationInstance
     *
     * @return NotificationInstance Fetched NotificationInstance
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
        return '[Twilio.Api.V2010.NotificationInstance ' . \implode(' ', $context) . ']';
    }
}