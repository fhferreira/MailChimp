<?php

/**
 * Handles folder related API calls
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 * @package MailChimp
 * @subpackage Manager
 */
namespace MailChimp\Manager;

use MailChimp\Client\ClientInterface;

class Folder extends ManagerAbstract
{
    /**
     * Set the API client
     * @param unknown_type $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}
