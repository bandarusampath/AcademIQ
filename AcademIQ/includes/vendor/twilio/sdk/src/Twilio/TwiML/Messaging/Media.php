<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Messaging;

use Twilio\TwiML\TwiML;

class Media extends TwiML {
    /**
     * Media constructor.
     *
     * @param string $url Media URL
     */
    public function __construct($url) {
        parent::__construct('Media', $url);
    }
}