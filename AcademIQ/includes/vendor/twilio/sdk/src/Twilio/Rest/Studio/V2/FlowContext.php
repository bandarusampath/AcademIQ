<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Studio\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Rest\Studio\V2\Flow\FlowRevisionList;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 *
 * @property \Twilio\Rest\Studio\V2\Flow\FlowRevisionList $revisions
 * @method \Twilio\Rest\Studio\V2\Flow\FlowRevisionContext revisions(string $revision)
 */
class FlowContext extends InstanceContext {
    protected $_revisions = null;

    /**
     * Initialize the FlowContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $sid The SID that identifies the resource to fetch
     * @return \Twilio\Rest\Studio\V2\FlowContext
     */
    public function __construct(Version $version, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('sid' => $sid, );

        $this->uri = '/Flows/' . \rawurlencode($sid) . '';
    }

    /**
     * Update the FlowInstance
     *
     * @param string $status The status of the Flow
     * @param array|Options $options Optional Arguments
     * @return FlowInstance Updated FlowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($status, $options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'Status' => $status,
            'FriendlyName' => $options['friendlyName'],
            'Definition' => Serialize::jsonObject($options['definition']),
            'CommitMessage' => $options['commitMessage'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new FlowInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Fetch a FlowInstance
     *
     * @return FlowInstance Fetched FlowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new FlowInstance($this->version, $payload, $this->solution['sid']);
    }

    /**
     * Deletes the FlowInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Access the revisions
     *
     * @return \Twilio\Rest\Studio\V2\Flow\FlowRevisionList
     */
    protected function getRevisions() {
        if (!$this->_revisions) {
            $this->_revisions = new FlowRevisionList($this->version, $this->solution['sid']);
        }

        return $this->_revisions;
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
        return '[Twilio.Studio.V2.FlowContext ' . \implode(' ', $context) . ']';
    }
}