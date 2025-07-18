<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing\V2\Voice;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class CountryContext extends InstanceContext {
    /**
     * Initialize the CountryContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $isoCountry The ISO country code of the pricing information to
     *                           fetch
     * @return \Twilio\Rest\Pricing\V2\Voice\CountryContext
     */
    public function __construct(Version $version, $isoCountry) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('isoCountry' => $isoCountry, );

        $this->uri = '/Voice/Countries/' . \rawurlencode($isoCountry) . '';
    }

    /**
     * Fetch a CountryInstance
     *
     * @return CountryInstance Fetched CountryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new CountryInstance($this->version, $payload, $this->solution['isoCountry']);
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
        return '[Twilio.Pricing.V2.CountryContext ' . \implode(' ', $context) . ']';
    }
}