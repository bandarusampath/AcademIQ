<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Sync\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions {
    /**
     * @param string $friendlyName A string that you assign to describe the resource
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     * @return CreateServiceOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        return new CreateServiceOptions($friendlyName, $webhookUrl, $reachabilityWebhooksEnabled, $aclEnabled, $reachabilityDebouncingEnabled, $reachabilityDebouncingWindow, $webhooksFromRestEnabled);
    }

    /**
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @param string $friendlyName A string that you assign to describe the resource
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     * @return UpdateServiceOptions Options builder
     */
    public static function update($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        return new UpdateServiceOptions($webhookUrl, $friendlyName, $reachabilityWebhooksEnabled, $aclEnabled, $reachabilityDebouncingEnabled, $reachabilityDebouncingWindow, $webhooksFromRestEnabled);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param string $friendlyName A string that you assign to describe the resource
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     */
    public function __construct($friendlyName = Values::NONE, $webhookUrl = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * A string that you assign to describe the resource.
     *
     * @param string $friendlyName A string that you assign to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The URL we should call when Sync objects are manipulated.
     *
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     *
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     *
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @return $this Fluent Builder
     */
    public function setAclEnabled($aclEnabled) {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     *
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled($reachabilityDebouncingEnabled) {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the `webhook_url` is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the call to `webhook_url`.
     *
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow($reachabilityDebouncingWindow) {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     *
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled($webhooksFromRestEnabled) {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
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
        return '[Twilio.Sync.V1.CreateServiceOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @param string $friendlyName A string that you assign to describe the resource
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     */
    public function __construct($webhookUrl = Values::NONE, $friendlyName = Values::NONE, $reachabilityWebhooksEnabled = Values::NONE, $aclEnabled = Values::NONE, $reachabilityDebouncingEnabled = Values::NONE, $reachabilityDebouncingWindow = Values::NONE, $webhooksFromRestEnabled = Values::NONE) {
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        $this->options['aclEnabled'] = $aclEnabled;
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
    }

    /**
     * The URL we should call when Sync objects are manipulated.
     *
     * @param string $webhookUrl The URL we should call when Sync objects are
     *                           manipulated
     * @return $this Fluent Builder
     */
    public function setWebhookUrl($webhookUrl) {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * A string that you assign to describe the resource.
     *
     * @param string $friendlyName A string that you assign to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether the service instance should call `webhook_url` when client endpoints connect to Sync. The default is `false`.
     *
     * @param bool $reachabilityWebhooksEnabled Whether the service instance should
     *                                          call webhook_url when client
     *                                          endpoints connect to Sync
     * @return $this Fluent Builder
     */
    public function setReachabilityWebhooksEnabled($reachabilityWebhooksEnabled) {
        $this->options['reachabilityWebhooksEnabled'] = $reachabilityWebhooksEnabled;
        return $this;
    }

    /**
     * Whether token identities in the Service must be granted access to Sync objects by using the [Permissions](https://www.twilio.com/docs/sync/api/sync-permissions) resource.
     *
     * @param bool $aclEnabled Whether token identities in the Service must be
     *                         granted access to Sync objects by using the
     *                         Permissions resource
     * @return $this Fluent Builder
     */
    public function setAclEnabled($aclEnabled) {
        $this->options['aclEnabled'] = $aclEnabled;
        return $this;
    }

    /**
     * Whether every `endpoint_disconnected` event should occur after a configurable delay. The default is `false`, where the `endpoint_disconnected` event occurs immediately after disconnection. When `true`, intervening reconnections can prevent the `endpoint_disconnected` event.
     *
     * @param bool $reachabilityDebouncingEnabled Whether every
     *                                            endpoint_disconnected event
     *                                            occurs after a configurable delay
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingEnabled($reachabilityDebouncingEnabled) {
        $this->options['reachabilityDebouncingEnabled'] = $reachabilityDebouncingEnabled;
        return $this;
    }

    /**
     * The reachability event delay in milliseconds if `reachability_debouncing_enabled` = `true`.  Must be between 1,000 and 30,000 and defaults to 5,000. This is the number of milliseconds after the last running client disconnects, and a Sync identity is declared offline, before the webhook is called if all endpoints remain offline. A reconnection from the same identity by any endpoint during this interval prevents the webhook from being called.
     *
     * @param int $reachabilityDebouncingWindow The reachability event delay in
     *                                          milliseconds
     * @return $this Fluent Builder
     */
    public function setReachabilityDebouncingWindow($reachabilityDebouncingWindow) {
        $this->options['reachabilityDebouncingWindow'] = $reachabilityDebouncingWindow;
        return $this;
    }

    /**
     * Whether the Service instance should call `webhook_url` when the REST API is used to update Sync objects. The default is `false`.
     *
     * @param bool $webhooksFromRestEnabled Whether the Service instance should
     *                                      call webhook_url when the REST API is
     *                                      used to update Sync objects
     * @return $this Fluent Builder
     */
    public function setWebhooksFromRestEnabled($webhooksFromRestEnabled) {
        $this->options['webhooksFromRestEnabled'] = $webhooksFromRestEnabled;
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
        return '[Twilio.Sync.V1.UpdateServiceOptions ' . \implode(' ', $options) . ']';
    }
}