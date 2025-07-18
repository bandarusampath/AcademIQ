<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Options;
use Twilio\Values;

abstract class FeedbackOptions {
    /**
     * @param string $issue Issues experienced during the call
     * @return CreateFeedbackOptions Options builder
     */
    public static function create($issue = Values::NONE) {
        return new CreateFeedbackOptions($issue);
    }

    /**
     * @param string $issue Issues experienced during the call
     * @return UpdateFeedbackOptions Options builder
     */
    public static function update($issue = Values::NONE) {
        return new UpdateFeedbackOptions($issue);
    }
}

class CreateFeedbackOptions extends Options {
    /**
     * @param string $issue Issues experienced during the call
     */
    public function __construct($issue = Values::NONE) {
        $this->options['issue'] = $issue;
    }

    /**
     * A list of one or more issues experienced during the call. Issues can be: `imperfect-audio`, `dropped-call`, `incorrect-caller-id`, `post-dial-delay`, `digits-not-captured`, `audio-latency`, `unsolicited-call`, or `one-way-audio`.
     *
     * @param string $issue Issues experienced during the call
     * @return $this Fluent Builder
     */
    public function setIssue($issue) {
        $this->options['issue'] = $issue;
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
        return '[Twilio.Api.V2010.CreateFeedbackOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateFeedbackOptions extends Options {
    /**
     * @param string $issue Issues experienced during the call
     */
    public function __construct($issue = Values::NONE) {
        $this->options['issue'] = $issue;
    }

    /**
     * One or more issues experienced during the call. The issues can be: `imperfect-audio`, `dropped-call`, `incorrect-caller-id`, `post-dial-delay`, `digits-not-captured`, `audio-latency`, `unsolicited-call`, or `one-way-audio`.
     *
     * @param string $issue Issues experienced during the call
     * @return $this Fluent Builder
     */
    public function setIssue($issue) {
        $this->options['issue'] = $issue;
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
        return '[Twilio.Api.V2010.UpdateFeedbackOptions ' . \implode(' ', $options) . ']';
    }
}