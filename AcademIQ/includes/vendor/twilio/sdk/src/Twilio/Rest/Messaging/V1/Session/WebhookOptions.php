<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1\Session;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class WebhookOptions {
    /**
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @param string $configurationTriggers The list of keywords, firing webhook
     *                                      event for the Session
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @param int $configurationRetryCount The number of times to call the webhook
     *                                     request if the first attempt fails
     * @param int $configurationReplayAfter The message index for which and its
     *                                      successors the webhook will be replayed
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @param int $configurationBufferWindow The period to buffer messages
     * @return CreateWebhookOptions Options builder
     */
    public static function create($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE, $configurationReplayAfter = Values::NONE, $configurationBufferMessages = Values::NONE, $configurationBufferWindow = Values::NONE) {
        return new CreateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid, $configurationRetryCount, $configurationReplayAfter, $configurationBufferMessages, $configurationBufferWindow);
    }

    /**
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @param string $configurationTriggers The list of keywords, that trigger a
     *                                      webhook event for the Session
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @param int $configurationRetryCount The number of times to try the webhook
     *                                     request if the first attempt fails
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @param int $configurationBufferWindow The period to buffer messages
     * @return UpdateWebhookOptions Options builder
     */
    public static function update($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE, $configurationBufferMessages = Values::NONE, $configurationBufferWindow = Values::NONE) {
        return new UpdateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid, $configurationRetryCount, $configurationBufferMessages, $configurationBufferWindow);
    }
}

class CreateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @param string $configurationTriggers The list of keywords, firing webhook
     *                                      event for the Session
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @param int $configurationRetryCount The number of times to call the webhook
     *                                     request if the first attempt fails
     * @param int $configurationReplayAfter The message index for which and its
     *                                      successors the webhook will be replayed
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @param int $configurationBufferWindow The period to buffer messages
     */
    public function __construct($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE, $configurationReplayAfter = Values::NONE, $configurationBufferMessages = Values::NONE, $configurationBufferWindow = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        $this->options['configurationReplayAfter'] = $configurationReplayAfter;
        $this->options['configurationBufferMessages'] = $configurationBufferMessages;
        $this->options['configurationBufferWindow'] = $configurationBufferWindow;
    }

    /**
     * The absolute URL the webhook request should be sent to.
     *
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl($configurationUrl) {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * The HTTP method we should use when sending a webhook request to `url`. Can be `POST` or `GET`.
     *
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod($configurationMethod) {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The list of events that trigger a webhook event for the Session.
     *
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters($configurationFilters) {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * The list of keywords, firing webhook event for the Session.
     *
     * @param string $configurationTriggers The list of keywords, firing webhook
     *                                      event for the Session
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers($configurationTriggers) {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the studio flow where the webhook should be sent to.
     *
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid($configurationFlowSid) {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to call the webhook request if the first attempt fails. Can be up to 3 and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to call the webhook
     *                                     request if the first attempt fails
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount($configurationRetryCount) {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        return $this;
    }

    /**
     * The message index for which and its successors the webhook will be replayed. Not set by default.
     *
     * @param int $configurationReplayAfter The message index for which and its
     *                                      successors the webhook will be replayed
     * @return $this Fluent Builder
     */
    public function setConfigurationReplayAfter($configurationReplayAfter) {
        $this->options['configurationReplayAfter'] = $configurationReplayAfter;
        return $this;
    }

    /**
     * Whether buffering should be applied to messages. Not set by default.
     *
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @return $this Fluent Builder
     */
    public function setConfigurationBufferMessages($configurationBufferMessages) {
        $this->options['configurationBufferMessages'] = $configurationBufferMessages;
        return $this;
    }

    /**
     * The period to buffer messages in milliseconds. Default is 3,000 ms.
     *
     * @param int $configurationBufferWindow The period to buffer messages
     * @return $this Fluent Builder
     */
    public function setConfigurationBufferWindow($configurationBufferWindow) {
        $this->options['configurationBufferWindow'] = $configurationBufferWindow;
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
        return '[Twilio.Messaging.V1.CreateWebhookOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @param string $configurationTriggers The list of keywords, that trigger a
     *                                      webhook event for the Session
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @param int $configurationRetryCount The number of times to try the webhook
     *                                     request if the first attempt fails
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @param int $configurationBufferWindow The period to buffer messages
     */
    public function __construct($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE, $configurationBufferMessages = Values::NONE, $configurationBufferWindow = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        $this->options['configurationBufferMessages'] = $configurationBufferMessages;
        $this->options['configurationBufferWindow'] = $configurationBufferWindow;
    }

    /**
     * The absolute URL the webhook request should be sent to.
     *
     * @param string $configurationUrl The absolute URL the webhook request should
     *                                 be sent to
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl($configurationUrl) {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * The HTTP method we should use when sending a webhook request to `url`. Can be `POST` or `GET`.
     *
     * @param string $configurationMethod The HTTP method we should use when
     *                                    sending a webhook request to url
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod($configurationMethod) {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The list of events that trigger a webhook event for the Session.
     *
     * @param string $configurationFilters The list of events that trigger a
     *                                     webhook event for the Session
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters($configurationFilters) {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * The list of keywords that trigger a webhook event for the Session.
     *
     * @param string $configurationTriggers The list of keywords, that trigger a
     *                                      webhook event for the Session
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers($configurationTriggers) {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the studio flow where the webhook should be sent to.
     *
     * @param string $configurationFlowSid The SID of the studio flow where the
     *                                     webhook should be sent to
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid($configurationFlowSid) {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to try the webhook request if the first attempt fails. Can be up to 3 and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to try the webhook
     *                                     request if the first attempt fails
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount($configurationRetryCount) {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        return $this;
    }

    /**
     * Whether buffering should be applied to messages. Not set by default.
     *
     * @param bool $configurationBufferMessages Whether buffering should be applied
     *                                          to messages
     * @return $this Fluent Builder
     */
    public function setConfigurationBufferMessages($configurationBufferMessages) {
        $this->options['configurationBufferMessages'] = $configurationBufferMessages;
        return $this;
    }

    /**
     * The period to buffer messages in milliseconds. Default is 3,000 ms.
     *
     * @param int $configurationBufferWindow The period to buffer messages
     * @return $this Fluent Builder
     */
    public function setConfigurationBufferWindow($configurationBufferWindow) {
        $this->options['configurationBufferWindow'] = $configurationBufferWindow;
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
        return '[Twilio.Messaging.V1.UpdateWebhookOptions ' . \implode(' ', $options) . ']';
    }
}