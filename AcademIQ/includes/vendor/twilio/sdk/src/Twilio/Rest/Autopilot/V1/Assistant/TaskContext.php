<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Rest\Autopilot\V1\Assistant\Task\FieldList;
use Twilio\Rest\Autopilot\V1\Assistant\Task\SampleList;
use Twilio\Rest\Autopilot\V1\Assistant\Task\TaskActionsList;
use Twilio\Rest\Autopilot\V1\Assistant\Task\TaskStatisticsList;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property \Twilio\Rest\Autopilot\V1\Assistant\Task\FieldList $fields
 * @property \Twilio\Rest\Autopilot\V1\Assistant\Task\SampleList $samples
 * @property \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskActionsList $taskActions
 * @property \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskStatisticsList $statistics
 * @method \Twilio\Rest\Autopilot\V1\Assistant\Task\FieldContext fields(string $sid)
 * @method \Twilio\Rest\Autopilot\V1\Assistant\Task\SampleContext samples(string $sid)
 * @method \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskActionsContext taskActions()
 * @method \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskStatisticsContext statistics()
 */
class TaskContext extends InstanceContext {
    protected $_fields = null;
    protected $_samples = null;
    protected $_taskActions = null;
    protected $_statistics = null;

    /**
     * Initialize the TaskContext
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $assistantSid The SID of the Assistant that is the parent of
     *                             the resource to fetch
     * @param string $sid The unique string that identifies the resource to fetch
     * @return \Twilio\Rest\Autopilot\V1\Assistant\TaskContext
     */
    public function __construct(Version $version, $assistantSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('assistantSid' => $assistantSid, 'sid' => $sid, );

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/Tasks/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch a TaskInstance
     *
     * @return TaskInstance Fetched TaskInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new TaskInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the TaskInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TaskInstance Updated TaskInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'UniqueName' => $options['uniqueName'],
            'Actions' => Serialize::jsonObject($options['actions']),
            'ActionsUrl' => $options['actionsUrl'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new TaskInstance(
            $this->version,
            $payload,
            $this->solution['assistantSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the TaskInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Access the fields
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\FieldList
     */
    protected function getFields() {
        if (!$this->_fields) {
            $this->_fields = new FieldList(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['sid']
            );
        }

        return $this->_fields;
    }

    /**
     * Access the samples
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\SampleList
     */
    protected function getSamples() {
        if (!$this->_samples) {
            $this->_samples = new SampleList(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['sid']
            );
        }

        return $this->_samples;
    }

    /**
     * Access the taskActions
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskActionsList
     */
    protected function getTaskActions() {
        if (!$this->_taskActions) {
            $this->_taskActions = new TaskActionsList(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['sid']
            );
        }

        return $this->_taskActions;
    }

    /**
     * Access the statistics
     *
     * @return \Twilio\Rest\Autopilot\V1\Assistant\Task\TaskStatisticsList
     */
    protected function getStatistics() {
        if (!$this->_statistics) {
            $this->_statistics = new TaskStatisticsList(
                $this->version,
                $this->solution['assistantSid'],
                $this->solution['sid']
            );
        }

        return $this->_statistics;
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
        return '[Twilio.Autopilot.V1.TaskContext ' . \implode(' ', $context) . ']';
    }
}