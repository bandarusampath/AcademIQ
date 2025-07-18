<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing\V1\Messaging;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $country
 * @property string $isoCountry
 * @property string $outboundSmsPrices
 * @property string $inboundSmsPrices
 * @property string $priceUnit
 * @property string $url
 */
class CountryInstance extends InstanceResource {
    /**
     * Initialize the CountryInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $isoCountry The ISO country code
     * @return \Twilio\Rest\Pricing\V1\Messaging\CountryInstance
     */
    public function __construct(Version $version, array $payload, $isoCountry = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'country' => Values::array_get($payload, 'country'),
            'isoCountry' => Values::array_get($payload, 'iso_country'),
            'outboundSmsPrices' => Values::array_get($payload, 'outbound_sms_prices'),
            'inboundSmsPrices' => Values::array_get($payload, 'inbound_sms_prices'),
            'priceUnit' => Values::array_get($payload, 'price_unit'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array('isoCountry' => $isoCountry ?: $this->properties['isoCountry'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Pricing\V1\Messaging\CountryContext Context for this
     *                                                          CountryInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new CountryContext($this->version, $this->solution['isoCountry']);
        }

        return $this->context;
    }

    /**
     * Fetch a CountryInstance
     *
     * @return CountryInstance Fetched CountryInstance
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
        return '[Twilio.Pricing.V1.CountryInstance ' . \implode(' ', $context) . ']';
    }
}