<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Workflow;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property array $cumulative
 * @property array $realtime
 * @property string $workflowSid
 * @property string $workspaceSid
 * @property string $url
 */
class WorkflowStatisticsInstance extends InstanceResource {
    /**
     * Initialize the WorkflowStatisticsInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $workspaceSid The SID of the Workspace that contains the
     *                             Workflow
     * @param string $workflowSid Returns the list of Tasks that are being
     *                            controlled by the Workflow with the specified SID
     *                            value
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Workflow\WorkflowStatisticsInstance
     */
    public function __construct(Version $version, array $payload, $workspaceSid, $workflowSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'cumulative' => Values::array_get($payload, 'cumulative'),
            'realtime' => Values::array_get($payload, 'realtime'),
            'workflowSid' => Values::array_get($payload, 'workflow_sid'),
            'workspaceSid' => Values::array_get($payload, 'workspace_sid'),
            'url' => Values::array_get($payload, 'url'),
        );

        $this->solution = array('workspaceSid' => $workspaceSid, 'workflowSid' => $workflowSid, );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\Workflow\WorkflowStatisticsContext Context for this
     *                                                                                 WorkflowStatisticsInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new WorkflowStatisticsContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['workflowSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch a WorkflowStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkflowStatisticsInstance Fetched WorkflowStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch($options = array()) {
        return $this->proxy()->fetch($options);
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Taskrouter.V1.WorkflowStatisticsInstance ' . \implode(' ', $context) . ']';
    }
}