<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class SsmlPhoneme extends TwiML {
    /**
     * SsmlPhoneme constructor.
     *
     * @param string $words Words to speak
     * @param array $attributes Optional attributes
     */
    public function __construct($words, $attributes = array()) {
        parent::__construct('phoneme', $words, $attributes);
    }

    /**
     * Add Alphabet attribute.
     *
     * @param string $alphabet Specify the phonetic alphabet
     * @return static $this.
     */
    public function setAlphabet($alphabet) {
        return $this->setAttribute('alphabet', $alphabet);
    }

    /**
     * Add Ph attribute.
     *
     * @param string $ph Specifiy the phonetic symbols for pronunciation
     * @return static $this.
     */
    public function setPh($ph) {
        return $this->setAttribute('ph', $ph);
    }
}