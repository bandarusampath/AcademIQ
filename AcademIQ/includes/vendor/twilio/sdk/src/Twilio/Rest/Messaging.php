<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Messaging\V1;

/**
 * @property \Twilio\Rest\Messaging\V1 $v1
 * @property \Twilio\Rest\Messaging\V1\ServiceList $services
 * @property \Twilio\Rest\Messaging\V1\SessionList $sessions
 * @property \Twilio\Rest\Messaging\V1\WebhookList $webhooks
 * @method \Twilio\Rest\Messaging\V1\ServiceContext services(string $sid)
 * @method \Twilio\Rest\Messaging\V1\SessionContext sessions(string $sid)
 * @method \Twilio\Rest\Messaging\V1\WebhookContext webhooks()
 */
class Messaging extends Domain {
    protected $_v1 = null;

    /**
     * Construct the Messaging Domain
     *
     * @param \Twilio\Rest\Client $client Twilio\Rest\Client to communicate with
     *                                    Twilio
     * @return \Twilio\Rest\Messaging Domain for Messaging
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://messaging.twilio.com';
    }

    /**
     * @return \Twilio\Rest\Messaging\V1 Version v1 of messaging
     */
    protected function getV1() {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get($name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array(array($this, $method), $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    /**
     * @return \Twilio\Rest\Messaging\V1\ServiceList
     */
    protected function getServices() {
        return $this->v1->services;
    }

    /**
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Messaging\V1\ServiceContext
     */
    protected function contextServices($sid) {
        return $this->v1->services($sid);
    }

    /**
     * @return \Twilio\Rest\Messaging\V1\SessionList
     */
    protected function getSessions() {
        return $this->v1->sessions;
    }

    /**
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Messaging\V1\SessionContext
     */
    protected function contextSessions($sid) {
        return $this->v1->sessions($sid);
    }

    /**
     * @return \Twilio\Rest\Messaging\V1\WebhookList
     */
    protected function getWebhooks() {
        return $this->v1->webhooks;
    }

    /**
     * @return \Twilio\Rest\Messaging\V1\WebhookContext
     */
    protected function contextWebhooks() {
        return $this->v1->webhooks();
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Messaging]';
    }
}