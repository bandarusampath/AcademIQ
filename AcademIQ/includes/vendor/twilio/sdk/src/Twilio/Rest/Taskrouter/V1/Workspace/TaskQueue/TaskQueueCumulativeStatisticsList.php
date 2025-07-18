<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue;

use Twilio\ListResource;
use Twilio\Version;

class TaskQueueCumulativeStatisticsList extends ListResource {
    /**
     * Construct the TaskQueueCumulativeStatisticsList
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace that contains the
     *                             TaskQueue
     * @param string $taskQueueSid The SID of the TaskQueue from which these
     *                             statistics were calculated
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueCumulativeStatisticsList
     */
    public function __construct(Version $version, $workspaceSid, $taskQueueSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('workspaceSid' => $workspaceSid, 'taskQueueSid' => $taskQueueSid, );
    }

    /**
     * Constructs a TaskQueueCumulativeStatisticsContext
     *
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueCumulativeStatisticsContext
     */
    public function getContext() {
        return new TaskQueueCumulativeStatisticsContext(
            $this->version,
            $this->solution['workspaceSid'],
            $this->solution['taskQueueSid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Taskrouter.V1.TaskQueueCumulativeStatisticsList]';
    }
}