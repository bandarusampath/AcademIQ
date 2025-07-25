<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Lookups;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Lookups\V1\PhoneNumberList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Lookups\V1\PhoneNumberList $phoneNumbers
 * @method \Twilio\Rest\Lookups\V1\PhoneNumberContext phoneNumbers(string $phoneNumber)
 */
class V1 extends Version {
    protected $_phoneNumbers = null;

    /**
     * Construct the V1 version of Lookups
     *
     * @param \Twilio\Domain $domain Domain that contains the version
     * @return \Twilio\Rest\Lookups\V1 V1 version of Lookups
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * @return \Twilio\Rest\Lookups\V1\PhoneNumberList
     */
    protected function getPhoneNumbers() {
        if (!$this->_phoneNumbers) {
            $this->_phoneNumbers = new PhoneNumberList($this);
        }
        return $this->_phoneNumbers;
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
        return '[Twilio.Lookups.V1]';
    }
}