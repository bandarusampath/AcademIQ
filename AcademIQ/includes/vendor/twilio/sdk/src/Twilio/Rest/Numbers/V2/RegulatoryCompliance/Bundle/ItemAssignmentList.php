<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance\Bundle;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;

class ItemAssignmentList extends ListResource {
    /**
     * Construct the ItemAssignmentList
     *
     * @param Version $version Version that contains the resource
     * @param string $bundleSid The unique string that identifies the Bundle
     *                          resource.
     * @return \Twilio\Rest\Numbers\V2\RegulatoryCompliance\Bundle\ItemAssignmentList
     */
    public function __construct(Version $version, $bundleSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('bundleSid' => $bundleSid, );

        $this->uri = '/RegulatoryCompliance/Bundles/' . \rawurlencode($bundleSid) . '/ItemAssignments';
    }

    /**
     * Create a new ItemAssignmentInstance
     *
     * @param string $objectSid The sid of an object bag
     * @return ItemAssignmentInstance Newly created ItemAssignmentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create($objectSid) {
        $data = Values::of(array('ObjectSid' => $objectSid, ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ItemAssignmentInstance($this->version, $payload, $this->solution['bundleSid']);
    }

    /**
     * Streams ItemAssignmentInstance records from the API as a generator stream.
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
     * Reads ItemAssignmentInstance records from the API as a list.
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
     * @return ItemAssignmentInstance[] Array of results
     */
    public function read($limit = null, $pageSize = null) {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of ItemAssignmentInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return \Twilio\Page Page of ItemAssignmentInstance
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

        return new ItemAssignmentPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of ItemAssignmentInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return \Twilio\Page Page of ItemAssignmentInstance
     */
    public function getPage($targetUrl) {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new ItemAssignmentPage($this->version, $response, $this->solution);
    }

    /**
     * Constructs a ItemAssignmentContext
     *
     * @param string $sid The unique string that identifies the resource
     * @return \Twilio\Rest\Numbers\V2\RegulatoryCompliance\Bundle\ItemAssignmentContext
     */
    public function getContext($sid) {
        return new ItemAssignmentContext($this->version, $this->solution['bundleSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Numbers.V2.ItemAssignmentList]';
    }
}