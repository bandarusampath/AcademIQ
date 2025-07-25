<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressList $ipAddresses
 * @method \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressContext ipAddresses(string $sid)
 */
class IpAccessControlListContext extends InstanceContext {
    protected $_ipAddresses = null;

    /**
     * Initialize the IpAccessControlListContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @param string $sid A string that identifies the resource to fetch
     * @return \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlListContext
     */
    public function __construct(Version $version, $accountSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'sid' => $sid, );

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/IpAccessControlLists/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Fetch a IpAccessControlListInstance
     *
     * @return IpAccessControlListInstance Fetched IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the IpAccessControlListInstance
     *
     * @param string $friendlyName A human readable description of this resource
     * @return IpAccessControlListInstance Updated IpAccessControlListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($friendlyName) {
        $data = Values::of(array('FriendlyName' => $friendlyName, ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new IpAccessControlListInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the IpAccessControlListInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Access the ipAddresses
     *
     * @return \Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList\IpAddressList
     */
    protected function getIpAddresses() {
        if (!$this->_ipAddresses) {
            $this->_ipAddresses = new IpAddressList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->_ipAddresses;
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
        return '[Twilio.Api.V2010.IpAccessControlListContext ' . \implode(' ', $context) . ']';
    }
}