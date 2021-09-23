<?php

namespace Amz\Sellers\Api;

use Amz\Sellers\Model\GetMarketplaceParticipationsResponse as GetMarketplaceParticipationsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Sellers extends AbstractAPI
{
    /**
     * Returns a list of marketplaces that the seller submitting the request can sell
     * in and information about the seller's participation in those marketplaces.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | .016 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetMarketplaceParticipationsResponse
     */
    public function getMarketplaceParticipations(): GetMarketplaceParticipationsResponse
    {
        return $this->client->request('getMarketplaceParticipations', 'GET', 'sellers/v1/marketplaceParticipations',
            [
            ]
        );
    }
}
