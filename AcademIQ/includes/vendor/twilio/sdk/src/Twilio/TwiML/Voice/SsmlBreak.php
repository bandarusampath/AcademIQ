<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class SsmlBreak extends TwiML {
    /**
     * SsmlBreak constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = array()) {
        parent::__construct('break', null, $attributes);
    }

    /**
     * Add Strength attribute.
     *
     * @param string $strength Set a pause based on strength
     * @return static $this.
     */
    public function setStrength($strength) {
        return $this->setAttribute('strength', $strength);
    }

    /**
     * Add Time attribute.
     *
     * @param string $time Set a pause to a specific length of time in seconds or
     *                     milliseconds, available values: [number]s, [number]ms
     * @return static $this.
     */
    public function setTime($time) {
        return $this->setAttribute('time', $time);
    }
}