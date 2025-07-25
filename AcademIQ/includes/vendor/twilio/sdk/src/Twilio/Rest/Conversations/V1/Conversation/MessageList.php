<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations\V1\Conversation;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class MessageList extends ListResource {
    /**
     * Construct the MessageList
     *
     * @param Version $version Version that contains the resource
     * @param string $conversationSid The unique id of the Conversation for this
     *                                message.
     * @return \Twilio\Rest\Conversations\V1\Conversation\MessageList
     */
    public function __construct(Version $version, $conversationSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('conversationSid' => $conversationSid, );

        $this->uri = '/Conversations/' . \rawurlencode($conversationSid) . '/Messages';
    }

    /**
     * Create a new MessageInstance
     *
     * @param array|Options $options Optional Arguments
     * @return MessageInstance Newly created MessageInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'Author' => $options['author'],
            'Body' => $options['body'],
            'DateCreated' => Serialize::iso8601DateTime($options['dateCreated']),
            'DateUpdated' => Serialize::iso8601DateTime($options['dateUpdated']),
            'Attributes' => $options['attributes'],
            'MediaSid' => $options['mediaSid'],
        ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new MessageInstance($this->version, $payload, $this->solution['conversationSid']);
    }

    /**
     * Streams MessageInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return \Twilio\Stream stream of results
     */
    public function stream($limit = null, $pageSize = null) {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads MessageInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return MessageInstance[] Array of results
     */
    public function read($limit = null, $pageSize = null) {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of MessageInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return \Twilio\Page Page of MessageInstance
     */
    public function page($pageSize = Values::NONE, $pageToken = Values::NONE, $pageNumber = Values::NONE) {
        $params = Values::of(array(
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ));

        $response = $this->version->page(
            'GET',
            $this->uri,
            $params
        );

        return new MessagePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of MessageInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return \Twilio\Page Page of MessageInstance
     */
    public function getPage($targetUrl) {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new MessagePage($this->version, $response, $this->solution);
    }

    /**
     * Constructs a MessageContext
     *
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     * @return \Twilio\Rest\Conversations\V1\Conversation\MessageContext
     */
    public function getContext($sid) {
        return new MessageContext($this->version, $this->solution['conversationSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Conversations.V1.MessageList]';
    }
}