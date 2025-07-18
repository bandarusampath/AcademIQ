<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Options;
use Twilio\Values;

abstract class VerificationOptions {
    /**
     * @param string $customMessage The text of a custom message to use for the
     *                              verification
     * @param string $sendDigits The digits to send after a phone call is answered
     * @param string $locale The locale to use for the verification SMS or call
     * @param string $customCode A pre-generated code
     * @param string $amount The amount of the associated PSD2 compliant
     *                       transaction.
     * @param string $payee The payee of the associated PSD2 compliant transaction
     * @param array $rateLimits The custom key-value pairs of Programmable Rate
     *                          Limits.
     * @param array $channelConfiguration Channel specific configuration in json
     *                                    format.
     * @param string $appHash App Hash to be included at the end of an SMS.
     * @return CreateVerificationOptions Options builder
     */
    public static function create($customMessage = Values::NONE, $sendDigits = Values::NONE, $locale = Values::NONE, $customCode = Values::NONE, $amount = Values::NONE, $payee = Values::NONE, $rateLimits = Values::NONE, $channelConfiguration = Values::NONE, $appHash = Values::NONE) {
        return new CreateVerificationOptions($customMessage, $sendDigits, $locale, $customCode, $amount, $payee, $rateLimits, $channelConfiguration, $appHash);
    }
}

class CreateVerificationOptions extends Options {
    /**
     * @param string $customMessage The text of a custom message to use for the
     *                              verification
     * @param string $sendDigits The digits to send after a phone call is answered
     * @param string $locale The locale to use for the verification SMS or call
     * @param string $customCode A pre-generated code
     * @param string $amount The amount of the associated PSD2 compliant
     *                       transaction.
     * @param string $payee The payee of the associated PSD2 compliant transaction
     * @param array $rateLimits The custom key-value pairs of Programmable Rate
     *                          Limits.
     * @param array $channelConfiguration Channel specific configuration in json
     *                                    format.
     * @param string $appHash App Hash to be included at the end of an SMS.
     */
    public function __construct($customMessage = Values::NONE, $sendDigits = Values::NONE, $locale = Values::NONE, $customCode = Values::NONE, $amount = Values::NONE, $payee = Values::NONE, $rateLimits = Values::NONE, $channelConfiguration = Values::NONE, $appHash = Values::NONE) {
        $this->options['customMessage'] = $customMessage;
        $this->options['sendDigits'] = $sendDigits;
        $this->options['locale'] = $locale;
        $this->options['customCode'] = $customCode;
        $this->options['amount'] = $amount;
        $this->options['payee'] = $payee;
        $this->options['rateLimits'] = $rateLimits;
        $this->options['channelConfiguration'] = $channelConfiguration;
        $this->options['appHash'] = $appHash;
    }

    /**
     * The text of a custom message to use for the verification.
     *
     * @param string $customMessage The text of a custom message to use for the
     *                              verification
     * @return $this Fluent Builder
     */
    public function setCustomMessage($customMessage) {
        $this->options['customMessage'] = $customMessage;
        return $this;
    }

    /**
     * The digits to send after a phone call is answered, for example, to dial an extension. For more information, see the Programmable Voice documentation of [sendDigits](https://www.twilio.com/docs/voice/twiml/number#attributes-sendDigits).
     *
     * @param string $sendDigits The digits to send after a phone call is answered
     * @return $this Fluent Builder
     */
    public function setSendDigits($sendDigits) {
        $this->options['sendDigits'] = $sendDigits;
        return $this;
    }

    /**
     * The locale to use for the verification SMS or call. Can be: `af`, `ar`, `ca`, `cs`, `da`, `de`, `el`, `en`, `es`, `fi`, `fr`, `he`, `hi`, `hr`, `hu`, `id`, `it`, `ja`, `ko`, `ms`, `nb`, `nl`, `pl`, `pt`, `pr-BR`, `ro`, `ru`, `sv`, `th`, `tl`, `tr`, `vi`, `zh`, `zh-CN`, or `zh-HK.`
     *
     * @param string $locale The locale to use for the verification SMS or call
     * @return $this Fluent Builder
     */
    public function setLocale($locale) {
        $this->options['locale'] = $locale;
        return $this;
    }

    /**
     * A pre-generated code to use for verification. The code can be between 4 and 10 characters, inclusive.
     *
     * @param string $customCode A pre-generated code
     * @return $this Fluent Builder
     */
    public function setCustomCode($customCode) {
        $this->options['customCode'] = $customCode;
        return $this;
    }

    /**
     * The amount of the associated PSD2 compliant transaction. Requires the PSD2 Service flag enabled.
     *
     * @param string $amount The amount of the associated PSD2 compliant
     *                       transaction.
     * @return $this Fluent Builder
     */
    public function setAmount($amount) {
        $this->options['amount'] = $amount;
        return $this;
    }

    /**
     * The payee of the associated PSD2 compliant transaction. Requires the PSD2 Service flag enabled.
     *
     * @param string $payee The payee of the associated PSD2 compliant transaction
     * @return $this Fluent Builder
     */
    public function setPayee($payee) {
        $this->options['payee'] = $payee;
        return $this;
    }

    /**
     * The custom key-value pairs of Programmable Rate Limits. Keys should be the unique_name configured while creating you Rate Limit along with the associated values for each particular request. You may include multiple Rate Limit values in each request.
     *
     * @param array $rateLimits The custom key-value pairs of Programmable Rate
     *                          Limits.
     * @return $this Fluent Builder
     */
    public function setRateLimits($rateLimits) {
        $this->options['rateLimits'] = $rateLimits;
        return $this;
    }

    /**
     * [`email`](https://www.twilio.com/docs/verify/email) channel configuration in json format. Must include 'from' and 'from_name'.
     *
     * @param array $channelConfiguration Channel specific configuration in json
     *                                    format.
     * @return $this Fluent Builder
     */
    public function setChannelConfiguration($channelConfiguration) {
        $this->options['channelConfiguration'] = $channelConfiguration;
        return $this;
    }

    /**
     * Your [App Hash](https://developers.google.com/identity/sms-retriever/verify#computing_your_apps_hash_string) to be included at the end of an SMS. **Only applies for SMS.**
     *
     * @param string $appHash App Hash to be included at the end of an SMS.
     * @return $this Fluent Builder
     */
    public function setAppHash($appHash) {
        $this->options['appHash'] = $appHash;
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
        return '[Twilio.Verify.V2.CreateVerificationOptions ' . \implode(' ', $options) . ']';
    }
}