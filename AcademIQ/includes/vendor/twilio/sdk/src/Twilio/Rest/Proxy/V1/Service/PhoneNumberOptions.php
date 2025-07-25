<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class PhoneNumberOptions {
    /**
     * @param string $sid The SID of a Twilio IncomingPhoneNumber resource
     * @param string $phoneNumber The phone number in E.164 format
     * @param bool $isReserved Whether the new phone number should be reserved
     * @return CreatePhoneNumberOptions Options builder
     */
    public static function create($sid = Values::NONE, $phoneNumber = Values::NONE, $isReserved = Values::NONE) {
        return new CreatePhoneNumberOptions($sid, $phoneNumber, $isReserved);
    }

    /**
     * @param bool $isReserved Whether the new phone number should be reserved
     * @return UpdatePhoneNumberOptions Options builder
     */
    public static function update($isReserved = Values::NONE) {
        return new UpdatePhoneNumberOptions($isReserved);
    }
}

class CreatePhoneNumberOptions extends Options {
    /**
     * @param string $sid The SID of a Twilio IncomingPhoneNumber resource
     * @param string $phoneNumber The phone number in E.164 format
     * @param bool $isReserved Whether the new phone number should be reserved
     */
    public function __construct($sid = Values::NONE, $phoneNumber = Values::NONE, $isReserved = Values::NONE) {
        $this->options['sid'] = $sid;
        $this->options['phoneNumber'] = $phoneNumber;
        $this->options['isReserved'] = $isReserved;
    }

    /**
     * The SID of a Twilio [IncomingPhoneNumber](https://www.twilio.com/docs/phone-numbers/api/incomingphonenumber-resource) resource that represents the Twilio Number you would like to assign to your Proxy Service.
     *
     * @param string $sid The SID of a Twilio IncomingPhoneNumber resource
     * @return $this Fluent Builder
     */
    public function setSid($sid) {
        $this->options['sid'] = $sid;
        return $this;
    }

    /**
     * The phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format.  E.164 phone numbers consist of a + followed by the country code and subscriber number without punctuation characters. For example, +14155551234.
     *
     * @param string $phoneNumber The phone number in E.164 format
     * @return $this Fluent Builder
     */
    public function setPhoneNumber($phoneNumber) {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Whether the new phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
     *
     * @param bool $isReserved Whether the new phone number should be reserved
     * @return $this Fluent Builder
     */
    public function setIsReserved($isReserved) {
        $this->options['isReserved'] = $isReserved;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.CreatePhoneNumberOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdatePhoneNumberOptions extends Options {
    /**
     * @param bool $isReserved Whether the new phone number should be reserved
     */
    public function __construct($isReserved = Values::NONE) {
        $this->options['isReserved'] = $isReserved;
    }

    /**
     * Whether the phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
     *
     * @param bool $isReserved Whether the new phone number should be reserved
     * @return $this Fluent Builder
     */
    public function setIsReserved($isReserved) {
        $this->options['isReserved'] = $isReserved;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Proxy.V1.UpdatePhoneNumberOptions ' . \implode(' ', $options) . ']';
    }
}