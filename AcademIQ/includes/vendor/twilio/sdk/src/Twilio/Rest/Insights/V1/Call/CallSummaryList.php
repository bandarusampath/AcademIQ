<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Insights\V1\Call;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class CallSummaryList extends ListResource {
    /**
     * Construct the CallSummaryList
     *
     * @param Version $version Version that contains the resource
     * @param string $callSid The call_sid
     * @return \Twilio\Rest\Insights\V1\Call\CallSummaryList
     */
    public function __construct(Version $version, $callSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('callSid' => $callSid, );
    }

    /**
     * Constructs a CallSummaryContext
     *
     * @return \Twilio\Rest\Insights\V1\Call\CallSummaryContext
     */
    public function getContext() {
        return new CallSummaryContext($this->version, $this->solution['callSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Insights.V1.CallSummaryList]';
    }
}