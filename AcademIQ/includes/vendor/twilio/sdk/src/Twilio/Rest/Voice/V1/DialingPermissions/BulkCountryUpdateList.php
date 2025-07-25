<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Voice\V1\DialingPermissions;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class BulkCountryUpdateList extends ListResource {
    /**
     * Construct the BulkCountryUpdateList
     *
     * @param Version $version Version that contains the resource
     * @return \Twilio\Rest\Voice\V1\DialingPermissions\BulkCountryUpdateList
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();

        $this->uri = '/DialingPermissions/BulkCountryUpdates';
    }

    /**
     * Create a new BulkCountryUpdateInstance
     *
     * @param string $updateRequest URL encoded JSON array of update objects
     * @return BulkCountryUpdateInstance Newly created BulkCountryUpdateInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create($updateRequest) {
        $data = Values::of(array('UpdateRequest' => $updateRequest, ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new BulkCountryUpdateInstance($this->version, $payload);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Voice.V1.BulkCountryUpdateList]';
    }
}