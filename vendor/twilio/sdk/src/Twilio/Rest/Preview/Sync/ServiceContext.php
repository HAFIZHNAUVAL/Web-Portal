<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Preview\Sync;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\Preview\Sync\Service\SyncListList;
use Twilio\Rest\Preview\Sync\Service\DocumentList;
use Twilio\Rest\Preview\Sync\Service\SyncMapList;


/**
 * @property SyncListList $syncLists
 * @property DocumentList $documents
 * @property SyncMapList $syncMaps
 * @method \Twilio\Rest\Preview\Sync\Service\SyncListContext syncLists(string $sid)
 * @method \Twilio\Rest\Preview\Sync\Service\SyncMapContext syncMaps(string $sid)
 * @method \Twilio\Rest\Preview\Sync\Service\DocumentContext documents(string $sid)
 */
class ServiceContext extends InstanceContext
    {
    protected $_syncLists;
    protected $_documents;
    protected $_syncMaps;

    /**
     * Initialize the ServiceContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid 
     */
    public function __construct(
        Version $version,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ServiceInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ServiceInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ServiceInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'WebhookUrl' =>
                $options['webhookUrl'],
            'FriendlyName' =>
                $options['friendlyName'],
            'ReachabilityWebhooksEnabled' =>
                Serialize::booleanToString($options['reachabilityWebhooksEnabled']),
            'AclEnabled' =>
                Serialize::booleanToString($options['aclEnabled']),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ServiceInstance(
            $this->version,
            $payload,
            $this->solution['sid']
        );
    }


    /**
     * Access the syncLists
     */
    protected function getSyncLists(): SyncListList
    {
        if (!$this->_syncLists) {
            $this->_syncLists = new SyncListList(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->_syncLists;
    }

    /**
     * Access the documents
     */
    protected function getDocuments(): DocumentList
    {
        if (!$this->_documents) {
            $this->_documents = new DocumentList(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->_documents;
    }

    /**
     * Access the syncMaps
     */
    protected function getSyncMaps(): SyncMapList
    {
        if (!$this->_syncMaps) {
            $this->_syncMaps = new SyncMapList(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->_syncMaps;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Sync.ServiceContext ' . \implode(' ', $context) . ']';
    }
}