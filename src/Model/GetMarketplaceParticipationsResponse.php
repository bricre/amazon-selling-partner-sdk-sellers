<?php

namespace Amz\Sellers\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getMarketplaceParticipations operation.
 */
class GetMarketplaceParticipationsResponse extends AbstractModel
{
    /**
     * The payload for the getMarketplaceParticipations operation.
     *
     * @var \Amz\Sellers\Model\MarketplaceParticipationList
     */
    public $payload = null;

    /**
     * Encountered errors for the getMarketplaceParticipations operation.
     *
     * @var \Amz\Sellers\Model\ErrorList
     */
    public $errors = null;
}
