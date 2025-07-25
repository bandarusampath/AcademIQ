<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Conversations\V1\ConversationList;
use Twilio\Rest\Conversations\V1\WebhookList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Conversations\V1\ConversationList $conversations
 * @property \Twilio\Rest\Conversations\V1\WebhookList $webhooks
 * @method \Twilio\Rest\Conversations\V1\ConversationContext conversations(string $sid)
 */
class V1 extends Version {
    protected $_conversations = null;
    protected $_webhooks = null;

    /**
     * Construct the V1 version of Conversations
     *
     * @param \Twilio\Domain $domain Domain that contains the version
     * @return \Twilio\Rest\Conversations\V1 V1 version of Conversations
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * @return \Twilio\Rest\Conversations\V1\ConversationList
     */
    protected function getConversations() {
        if (!$this->_conversations) {
            $this->_conversations = new ConversationList($this);
        }
        return $this->_conversations;
    }

    /**
     * @return \Twilio\Rest\Conversations\V1\WebhookList
     */
    protected function getWebhooks() {
        if (!$this->_webhooks) {
            $this->_webhooks = new WebhookList($this);
        }
        return $this->_webhooks;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get($name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
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
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Conversations.V1]';
    }
}