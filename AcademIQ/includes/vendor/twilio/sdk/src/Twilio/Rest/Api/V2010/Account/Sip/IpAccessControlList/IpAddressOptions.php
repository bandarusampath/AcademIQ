<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList;

use Twilio\Options;
use Twilio\Values;

abstract class IpAddressOptions {
    /**
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     * @return CreateIpAddressOptions Options builder
     */
    public static function create($cidrPrefixLength = Values::NONE) {
        return new CreateIpAddressOptions($cidrPrefixLength);
    }

    /**
     * @param string $ipAddress An IP address in dotted decimal notation from which
     *                          you want to accept traffic. Any SIP requests from
     *                          this IP address will be allowed by Twilio. IPv4
     *                          only supported today.
     * @param string $friendlyName A human readable descriptive text for this
     *                             resource, up to 64 characters long.
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     * @return UpdateIpAddressOptions Options builder
     */
    public static function update($ipAddress = Values::NONE, $friendlyName = Values::NONE, $cidrPrefixLength = Values::NONE) {
        return new UpdateIpAddressOptions($ipAddress, $friendlyName, $cidrPrefixLength);
    }
}

class CreateIpAddressOptions extends Options {
    /**
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     */
    public function __construct($cidrPrefixLength = Values::NONE) {
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
    }

    /**
     * An integer representing the length of the CIDR prefix to use with this IP address when accepting traffic. By default the entire IP address is used.
     *
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     * @return $this Fluent Builder
     */
    public function setCidrPrefixLength($cidrPrefixLength) {
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
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
        return '[Twilio.Api.V2010.CreateIpAddressOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateIpAddressOptions extends Options {
    /**
     * @param string $ipAddress An IP address in dotted decimal notation from which
     *                          you want to accept traffic. Any SIP requests from
     *                          this IP address will be allowed by Twilio. IPv4
     *                          only supported today.
     * @param string $friendlyName A human readable descriptive text for this
     *                             resource, up to 64 characters long.
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     */
    public function __construct($ipAddress = Values::NONE, $friendlyName = Values::NONE, $cidrPrefixLength = Values::NONE) {
        $this->options['ipAddress'] = $ipAddress;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
    }

    /**
     * An IP address in dotted decimal notation from which you want to accept traffic. Any SIP requests from this IP address will be allowed by Twilio. IPv4 only supported today.
     *
     * @param string $ipAddress An IP address in dotted decimal notation from which
     *                          you want to accept traffic. Any SIP requests from
     *                          this IP address will be allowed by Twilio. IPv4
     *                          only supported today.
     * @return $this Fluent Builder
     */
    public function setIpAddress($ipAddress) {
        $this->options['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
     * A human readable descriptive text for this resource, up to 64 characters long.
     *
     * @param string $friendlyName A human readable descriptive text for this
     *                             resource, up to 64 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * An integer representing the length of the CIDR prefix to use with this IP address when accepting traffic. By default the entire IP address is used.
     *
     * @param int $cidrPrefixLength An integer representing the length of the CIDR
     *                              prefix to use with this IP address when
     *                              accepting traffic. By default the entire IP
     *                              address is used.
     * @return $this Fluent Builder
     */
    public function setCidrPrefixLength($cidrPrefixLength) {
        $this->options['cidrPrefixLength'] = $cidrPrefixLength;
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
        return '[Twilio.Api.V2010.UpdateIpAddressOptions ' . \implode(' ', $options) . ']';
    }
}