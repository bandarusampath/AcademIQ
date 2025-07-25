<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $authToken
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $friendlyName
 * @property string $ownerAccountSid
 * @property string $sid
 * @property string $status
 * @property array $subresourceUris
 * @property string $type
 * @property string $uri
 */
class AccountInstance extends InstanceResource {
    protected $_addresses = null;
    protected $_applications = null;
    protected $_authorizedConnectApps = null;
    protected $_availablePhoneNumbers = null;
    protected $_balance = null;
    protected $_calls = null;
    protected $_conferences = null;
    protected $_connectApps = null;
    protected $_incomingPhoneNumbers = null;
    protected $_keys = null;
    protected $_messages = null;
    protected $_newKeys = null;
    protected $_newSigningKeys = null;
    protected $_notifications = null;
    protected $_outgoingCallerIds = null;
    protected $_queues = null;
    protected $_recordings = null;
    protected $_signingKeys = null;
    protected $_sip = null;
    protected $_shortCodes = null;
    protected $_tokens = null;
    protected $_transcriptions = null;
    protected $_usage = null;
    protected $_validationRequests = null;

    /**
     * Initialize the AccountInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid Fetch by unique Account Sid
     * @return \Twilio\Rest\Api\V2010\AccountInstance
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'authToken' => Values::array_get($payload, 'auth_token'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'ownerAccountSid' => Values::array_get($payload, 'owner_account_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'status' => Values::array_get($payload, 'status'),
            'subresourceUris' => Values::array_get($payload, 'subresource_uris'),
            'type' => Values::array_get($payload, 'type'),
            'uri' => Values::array_get($payload, 'uri'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Api\V2010\AccountContext Context for this
     *                                               AccountInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AccountContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Fetch a AccountInstance
     *
     * @return AccountInstance Fetched AccountInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AccountInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AccountInstance Updated AccountInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Access the addresses
     *
     * @return \Twilio\Rest\Api\V2010\Account\AddressList
     */
    protected function getAddresses() {
        return $this->proxy()->addresses;
    }

    /**
     * Access the applications
     *
     * @return \Twilio\Rest\Api\V2010\Account\ApplicationList
     */
    protected function getApplications() {
        return $this->proxy()->applications;
    }

    /**
     * Access the authorizedConnectApps
     *
     * @return \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList
     */
    protected function getAuthorizedConnectApps() {
        return $this->proxy()->authorizedConnectApps;
    }

    /**
     * Access the availablePhoneNumbers
     *
     * @return \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList
     */
    protected function getAvailablePhoneNumbers() {
        return $this->proxy()->availablePhoneNumbers;
    }

    /**
     * Access the balance
     *
     * @return \Twilio\Rest\Api\V2010\Account\BalanceList
     */
    protected function getBalance() {
        return $this->proxy()->balance;
    }

    /**
     * Access the calls
     *
     * @return \Twilio\Rest\Api\V2010\Account\CallList
     */
    protected function getCalls() {
        return $this->proxy()->calls;
    }

    /**
     * Access the conferences
     *
     * @return \Twilio\Rest\Api\V2010\Account\ConferenceList
     */
    protected function getConferences() {
        return $this->proxy()->conferences;
    }

    /**
     * Access the connectApps
     *
     * @return \Twilio\Rest\Api\V2010\Account\ConnectAppList
     */
    protected function getConnectApps() {
        return $this->proxy()->connectApps;
    }

    /**
     * Access the incomingPhoneNumbers
     *
     * @return \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList
     */
    protected function getIncomingPhoneNumbers() {
        return $this->proxy()->incomingPhoneNumbers;
    }

    /**
     * Access the keys
     *
     * @return \Twilio\Rest\Api\V2010\Account\KeyList
     */
    protected function getKeys() {
        return $this->proxy()->keys;
    }

    /**
     * Access the messages
     *
     * @return \Twilio\Rest\Api\V2010\Account\MessageList
     */
    protected function getMessages() {
        return $this->proxy()->messages;
    }

    /**
     * Access the newKeys
     *
     * @return \Twilio\Rest\Api\V2010\Account\NewKeyList
     */
    protected function getNewKeys() {
        return $this->proxy()->newKeys;
    }

    /**
     * Access the newSigningKeys
     *
     * @return \Twilio\Rest\Api\V2010\Account\NewSigningKeyList
     */
    protected function getNewSigningKeys() {
        return $this->proxy()->newSigningKeys;
    }

    /**
     * Access the notifications
     *
     * @return \Twilio\Rest\Api\V2010\Account\NotificationList
     */
    protected function getNotifications() {
        return $this->proxy()->notifications;
    }

    /**
     * Access the outgoingCallerIds
     *
     * @return \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList
     */
    protected function getOutgoingCallerIds() {
        return $this->proxy()->outgoingCallerIds;
    }

    /**
     * Access the queues
     *
     * @return \Twilio\Rest\Api\V2010\Account\QueueList
     */
    protected function getQueues() {
        return $this->proxy()->queues;
    }

    /**
     * Access the recordings
     *
     * @return \Twilio\Rest\Api\V2010\Account\RecordingList
     */
    protected function getRecordings() {
        return $this->proxy()->recordings;
    }

    /**
     * Access the signingKeys
     *
     * @return \Twilio\Rest\Api\V2010\Account\SigningKeyList
     */
    protected function getSigningKeys() {
        return $this->proxy()->signingKeys;
    }

    /**
     * Access the sip
     *
     * @return \Twilio\Rest\Api\V2010\Account\SipList
     */
    protected function getSip() {
        return $this->proxy()->sip;
    }

    /**
     * Access the shortCodes
     *
     * @return \Twilio\Rest\Api\V2010\Account\ShortCodeList
     */
    protected function getShortCodes() {
        return $this->proxy()->shortCodes;
    }

    /**
     * Access the tokens
     *
     * @return \Twilio\Rest\Api\V2010\Account\TokenList
     */
    protected function getTokens() {
        return $this->proxy()->tokens;
    }

    /**
     * Access the transcriptions
     *
     * @return \Twilio\Rest\Api\V2010\Account\TranscriptionList
     */
    protected function getTranscriptions() {
        return $this->proxy()->transcriptions;
    }

    /**
     * Access the usage
     *
     * @return \Twilio\Rest\Api\V2010\Account\UsageList
     */
    protected function getUsage() {
        return $this->proxy()->usage;
    }

    /**
     * Access the validationRequests
     *
     * @return \Twilio\Rest\Api\V2010\Account\ValidationRequestList
     */
    protected function getValidationRequests() {
        return $this->proxy()->validationRequests;
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
        return '[Twilio.Api.V2010.AccountInstance ' . \implode(' ', $context) . ']';
    }
}