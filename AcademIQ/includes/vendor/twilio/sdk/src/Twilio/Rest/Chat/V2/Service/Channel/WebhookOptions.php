<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;

abstract class WebhookOptions {
    /**
     * @param string $configurationUrl The URL of the webhook to call
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     * @return CreateWebhookOptions Options builder
     */
    public static function create($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE) {
        return new CreateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid, $configurationRetryCount);
    }

    /**
     * @param string $configurationUrl The URL of the webhook to call
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     * @return UpdateWebhookOptions Options builder
     */
    public static function update($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE) {
        return new UpdateWebhookOptions($configurationUrl, $configurationMethod, $configurationFilters, $configurationTriggers, $configurationFlowSid, $configurationRetryCount);
    }
}

class CreateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The URL of the webhook to call
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     */
    public function __construct($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
     * The URL of the webhook to call using the `configuration.method`.
     *
     * @param string $configurationUrl The URL of the webhook to call
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl($configurationUrl) {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * The HTTP method used to call `configuration.url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod($configurationMethod) {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     *
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters($configurationFilters) {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     *
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers($configurationTriggers) {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` is `studio`.
     *
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid($configurationFlowSid) {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount($configurationRetryCount) {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
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
        return '[Twilio.Chat.V2.CreateWebhookOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateWebhookOptions extends Options {
    /**
     * @param string $configurationUrl The URL of the webhook to call
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     */
    public function __construct($configurationUrl = Values::NONE, $configurationMethod = Values::NONE, $configurationFilters = Values::NONE, $configurationTriggers = Values::NONE, $configurationFlowSid = Values::NONE, $configurationRetryCount = Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
     * The URL of the webhook to call using the `configuration.method`.
     *
     * @param string $configurationUrl The URL of the webhook to call
     * @return $this Fluent Builder
     */
    public function setConfigurationUrl($configurationUrl) {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }

    /**
     * The HTTP method used to call `configuration.url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $configurationMethod The HTTP method used to call
     *                                    `configuration.url`
     * @return $this Fluent Builder
     */
    public function setConfigurationMethod($configurationMethod) {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }

    /**
     * The events that cause us to call the Channel Webhook. Used when `type` is `webhook`. This parameter takes only one event. To specify more than one event, repeat this parameter for each event. For the list of possible events, see [Webhook Event Triggers](https://www.twilio.com/docs/chat/webhook-events#webhook-event-trigger).
     *
     * @param string $configurationFilters The events that cause us to call the
     *                                     Channel Webhook
     * @return $this Fluent Builder
     */
    public function setConfigurationFilters($configurationFilters) {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }

    /**
     * A string that will cause us to call the webhook when it is present in a message body. This parameter takes only one trigger string. To specify more than one, repeat this parameter for each trigger string up to a total of 5 trigger strings. Used only when `type` = `trigger`.
     *
     * @param string $configurationTriggers A string that will cause us to call the
     *                                      webhook when it is found in a message
     *                                      body
     * @return $this Fluent Builder
     */
    public function setConfigurationTriggers($configurationTriggers) {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }

    /**
     * The SID of the Studio [Flow](https://www.twilio.com/docs/studio/rest-api/flow) to call when an event in `configuration.filters` occurs. Used only when `type` = `studio`.
     *
     * @param string $configurationFlowSid The SID of the Studio Flow to call when
     *                                     an event occurs
     * @return $this Fluent Builder
     */
    public function setConfigurationFlowSid($configurationFlowSid) {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }

    /**
     * The number of times to retry the webhook if the first attempt fails. Can be an integer between 0 and 3, inclusive, and the default is 0.
     *
     * @param int $configurationRetryCount The number of times to retry the webhook
     *                                     if the first attempt fails
     * @return $this Fluent Builder
     */
    public function setConfigurationRetryCount($configurationRetryCount) {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
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
        return '[Twilio.Chat.V2.UpdateWebhookOptions ' . \implode(' ', $options) . ']';
    }
}