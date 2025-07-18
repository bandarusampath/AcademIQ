<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms\Business;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Rest\Preview\TrustedComms\Business\Insights\SuccessRateList;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property \Twilio\Rest\Preview\TrustedComms\Business\Insights\SuccessRateList $successRate
 * @method \Twilio\Rest\Preview\TrustedComms\Business\Insights\SuccessRateContext successRate()
 */
class InsightsList extends ListResource {
    protected $_successRate = null;

    /**
     * Construct the InsightsList
     *
     * @param Version $version Version that contains the resource
     * @param string $businessSid A string that uniquely identifies this Business.
     * @return \Twilio\Rest\Preview\TrustedComms\Business\InsightsList
     */
    public function __construct(Version $version, $businessSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('businessSid' => $businessSid, );
    }

    /**
     * Access the successRate
     */
    protected function getSuccessRate() {
        if (!$this->_successRate) {
            $this->_successRate = new SuccessRateList($this->version, $this->solution['businessSid']);
        }

        return $this->_successRate;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get($name) {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
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
        return '[Twilio.Preview.TrustedComms.InsightsList]';
    }
}