<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Marketplace;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Preview\Marketplace\AvailableAddOn\AvailableAddOnExtensionList;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property \Twilio\Rest\Preview\Marketplace\AvailableAddOn\AvailableAddOnExtensionList $extensions
 * @method \Twilio\Rest\Preview\Marketplace\AvailableAddOn\AvailableAddOnExtensionContext extensions(string $sid)
 */
class AvailableAddOnContext extends InstanceContext {
    protected $_extensions = null;

    /**
     * Initialize the AvailableAddOnContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid The SID of the AvailableAddOn resource to fetch
     * @return \Twilio\Rest\Preview\Marketplace\AvailableAddOnContext
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('sid' => $sid, );

        $this->uri = '/AvailableAddOns/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a AvailableAddOnInstance
     *
     * @return AvailableAddOnInstance Fetched AvailableAddOnInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new AvailableAddOnInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Access the extensions
     *
     * @return \Twilio\Rest\Preview\Marketplace\AvailableAddOn\AvailableAddOnExtensionList
     */
    protected function getExtensions() {
        if (!$this->_extensions) {
            $this->_extensions = new AvailableAddOnExtensionList($this->version, $this->solution['sid']);
        }

        return $this->_extensions;
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
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Marketplace.AvailableAddOnContext ' . \implode(' ', $context) . ']';
    }
}