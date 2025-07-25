<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1\Assistant\Task;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class TaskActionsOptions {
    /**
     * @param array $actions The JSON string that specifies the actions that
     *                       instruct the Assistant on how to perform the task
     * @return UpdateTaskActionsOptions Options builder
     */
    public static function update($actions = Values::NONE) {
        return new UpdateTaskActionsOptions($actions);
    }
}

class UpdateTaskActionsOptions extends Options {
    /**
     * @param array $actions The JSON string that specifies the actions that
     *                       instruct the Assistant on how to perform the task
     */
    public function __construct($actions = Values::NONE) {
        $this->options['actions'] = $actions;
    }

    /**
     * The JSON string that specifies the [actions](https://www.twilio.com/docs/autopilot/actions) that instruct the Assistant on how to perform the task.
     *
     * @param array $actions The JSON string that specifies the actions that
     *                       instruct the Assistant on how to perform the task
     * @return $this Fluent Builder
     */
    public function setActions($actions) {
        $this->options['actions'] = $actions;
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
        return '[Twilio.Autopilot.V1.UpdateTaskActionsOptions ' . \implode(' ', $options) . ']';
    }
}