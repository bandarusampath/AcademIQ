<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Voice\V1\DialingPermissions;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class SettingsList extends ListResource {
    /**
     * Construct the SettingsList
     *
     * @param Version $version Version that contains the resource
     * @return \Twilio\Rest\Voice\V1\DialingPermissions\SettingsList
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();
    }

    /**
     * Constructs a SettingsContext
     *
     * @return \Twilio\Rest\Voice\V1\DialingPermissions\SettingsContext
     */
    public function getContext() {
        return new SettingsContext($this->version);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Voice.V1.SettingsList]';
    }
}