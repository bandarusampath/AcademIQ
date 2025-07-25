<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010;

use Twilio\Options;
use Twilio\Values;

abstract class AccountOptions {
    /**
     * @param string $friendlyName A human readable description of the account
     * @return CreateAccountOptions Options builder
     */
    public static function create($friendlyName = Values::NONE) {
        return new CreateAccountOptions($friendlyName);
    }

    /**
     * @param string $friendlyName FriendlyName to filter on
     * @param string $status Status to filter on
     * @return ReadAccountOptions Options builder
     */
    public static function read($friendlyName = Values::NONE, $status = Values::NONE) {
        return new ReadAccountOptions($friendlyName, $status);
    }

    /**
     * @param string $friendlyName FriendlyName to update
     * @param string $status Status to update the Account with
     * @return UpdateAccountOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $status = Values::NONE) {
        return new UpdateAccountOptions($friendlyName, $status);
    }
}

class CreateAccountOptions extends Options {
    /**
     * @param string $friendlyName A human readable description of the account
     */
    public function __construct($friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A human readable description of the account to create, defaults to `SubAccount Created at {YYYY-MM-DD HH:MM meridian}`
     *
     * @param string $friendlyName A human readable description of the account
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.Api.V2010.CreateAccountOptions ' . \implode(' ', $options) . ']';
    }
}

class ReadAccountOptions extends Options {
    /**
     * @param string $friendlyName FriendlyName to filter on
     * @param string $status Status to filter on
     */
    public function __construct($friendlyName = Values::NONE, $status = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['status'] = $status;
    }

    /**
     * Only return the Account resources with friendly names that exactly match this name.
     *
     * @param string $friendlyName FriendlyName to filter on
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Only return Account resources with the given status. Can be `closed`, `suspended` or `active`.
     *
     * @param string $status Status to filter on
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
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
        return '[Twilio.Api.V2010.ReadAccountOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateAccountOptions extends Options {
    /**
     * @param string $friendlyName FriendlyName to update
     * @param string $status Status to update the Account with
     */
    public function __construct($friendlyName = Values::NONE, $status = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['status'] = $status;
    }

    /**
     * Update the human-readable description of this Account
     *
     * @param string $friendlyName FriendlyName to update
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Alter the status of this account: use `closed` to irreversibly close this account, `suspended` to temporarily suspend it, or `active` to reactivate it.
     *
     * @param string $status Status to update the Account with
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
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
        return '[Twilio.Api.V2010.UpdateAccountOptions ' . \implode(' ', $options) . ']';
    }
}