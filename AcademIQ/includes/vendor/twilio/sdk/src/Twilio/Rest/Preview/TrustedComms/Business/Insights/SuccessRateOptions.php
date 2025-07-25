<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms\Business\Insights;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class SuccessRateOptions {
    /**
     * @param string $brandSid Brand Sid.
     * @param string $brandedChannelSid Branded Channel Sid.
     * @param string $phoneNumberSid Phone Number Sid.
     * @param string $country Country 2-letter ISO 3166 code.
     * @param \DateTime $start The start date that for this Success Rate.
     * @param \DateTime $end The end date that for this Success Rate.
     * @param string $interval The Interval of this Success Rate.
     * @return FetchSuccessRateOptions Options builder
     */
    public static function fetch($brandSid = Values::NONE, $brandedChannelSid = Values::NONE, $phoneNumberSid = Values::NONE, $country = Values::NONE, $start = Values::NONE, $end = Values::NONE, $interval = Values::NONE) {
        return new FetchSuccessRateOptions($brandSid, $brandedChannelSid, $phoneNumberSid, $country, $start, $end, $interval);
    }
}

class FetchSuccessRateOptions extends Options {
    /**
     * @param string $brandSid Brand Sid.
     * @param string $brandedChannelSid Branded Channel Sid.
     * @param string $phoneNumberSid Phone Number Sid.
     * @param string $country Country 2-letter ISO 3166 code.
     * @param \DateTime $start The start date that for this Success Rate.
     * @param \DateTime $end The end date that for this Success Rate.
     * @param string $interval The Interval of this Success Rate.
     */
    public function __construct($brandSid = Values::NONE, $brandedChannelSid = Values::NONE, $phoneNumberSid = Values::NONE, $country = Values::NONE, $start = Values::NONE, $end = Values::NONE, $interval = Values::NONE) {
        $this->options['brandSid'] = $brandSid;
        $this->options['brandedChannelSid'] = $brandedChannelSid;
        $this->options['phoneNumberSid'] = $phoneNumberSid;
        $this->options['country'] = $country;
        $this->options['start'] = $start;
        $this->options['end'] = $end;
        $this->options['interval'] = $interval;
    }

    /**
     * The unique SID identifier of the Brand to filter by.
     *
     * @param string $brandSid Brand Sid.
     * @return $this Fluent Builder
     */
    public function setBrandSid($brandSid) {
        $this->options['brandSid'] = $brandSid;
        return $this;
    }

    /**
     * The unique SID identifier of the Branded Channel to filter by.
     *
     * @param string $brandedChannelSid Branded Channel Sid.
     * @return $this Fluent Builder
     */
    public function setBrandedChannelSid($brandedChannelSid) {
        $this->options['brandedChannelSid'] = $brandedChannelSid;
        return $this;
    }

    /**
     * The unique SID identifier of the Phone Number to filter by.
     *
     * @param string $phoneNumberSid Phone Number Sid.
     * @return $this Fluent Builder
     */
    public function setPhoneNumberSid($phoneNumberSid) {
        $this->options['phoneNumberSid'] = $phoneNumberSid;
        return $this;
    }

    /**
     * The 2-letter ISO 3166 code of the Country to filter by.
     *
     * @param string $country Country 2-letter ISO 3166 code.
     * @return $this Fluent Builder
     */
    public function setCountry($country) {
        $this->options['country'] = $country;
        return $this;
    }

    /**
     * The start date that for this Success Rate, given in ISO 8601 format. Default value is 30 days ago.
     *
     * @param \DateTime $start The start date that for this Success Rate.
     * @return $this Fluent Builder
     */
    public function setStart($start) {
        $this->options['start'] = $start;
        return $this;
    }

    /**
     * The end date that for this Success Rate, given in ISO 8601 format. Default value is current timestamp.
     *
     * @param \DateTime $end The end date that for this Success Rate.
     * @return $this Fluent Builder
     */
    public function setEnd($end) {
        $this->options['end'] = $end;
        return $this;
    }

    /**
     * The Interval of this Success Rate. One of `minute`, `hour`, `day`, `week` or `month`.
     *
     * @param string $interval The Interval of this Success Rate.
     * @return $this Fluent Builder
     */
    public function setInterval($interval) {
        $this->options['interval'] = $interval;
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
        return '[Twilio.Preview.TrustedComms.FetchSuccessRateOptions ' . \implode(' ', $options) . ']';
    }
}