<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Wireless\V1;

/**
 * @property \Twilio\Rest\Wireless\V1 $v1
 * @property \Twilio\Rest\Wireless\V1\UsageRecordList $usageRecords
 * @property \Twilio\Rest\Wireless\V1\CommandList $commands
 * @property \Twilio\Rest\Wireless\V1\RatePlanList $ratePlans
 * @property \Twilio\Rest\Wireless\V1\SimList $sims
 * @method \Twilio\Rest\Wireless\V1\CommandContext commands(string $sid)
 * @method \Twilio\Rest\Wireless\V1\RatePlanContext ratePlans(string $sid)
 * @method \Twilio\Rest\Wireless\V1\SimContext sims(string $sid)
 */
class Wireless extends Domain {
    protected $_v1 = null;

    /**
     * Construct the Wireless Domain
     *
     * @param \Twilio\Rest\Client $client Twilio\Rest\Client to communicate with
     *                                    Twilio
     * @return \Twilio\Rest\Wireless Domain for Wireless
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://wireless.twilio.com';
    }

    /**
     * @return \Twilio\Rest\Wireless\V1 Version v1 of wireless
     */
    protected function getV1() {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get($name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
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
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array(array($this, $method), $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    /**
     * @return \Twilio\Rest\Wireless\V1\UsageRecordList
     */
    protected function getUsageRecords() {
        return $this->v1->usageRecords;
    }

    /**
     * @return \Twilio\Rest\Wireless\V1\CommandList
     */
    protected function getCommands() {
        return $this->v1->commands;
    }

    /**
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Wireless\V1\CommandContext
     */
    protected function contextCommands($sid) {
        return $this->v1->commands($sid);
    }

    /**
     * @return \Twilio\Rest\Wireless\V1\RatePlanList
     */
    protected function getRatePlans() {
        return $this->v1->ratePlans;
    }

    /**
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Wireless\V1\RatePlanContext
     */
    protected function contextRatePlans($sid) {
        return $this->v1->ratePlans($sid);
    }

    /**
     * @return \Twilio\Rest\Wireless\V1\SimList
     */
    protected function getSims() {
        return $this->v1->sims;
    }

    /**
     * @param string $sid The SID of the Sim resource to fetch
     * @return \Twilio\Rest\Wireless\V1\SimContext
     */
    protected function contextSims($sid) {
        return $this->v1->sims($sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Wireless]';
    }
}