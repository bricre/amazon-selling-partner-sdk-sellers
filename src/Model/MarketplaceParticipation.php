<?php

namespace Amz\Sellers\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class MarketplaceParticipation extends AbstractModel
{
    /**
     * @var \Amz\Sellers\Model\Marketplace
     */
    public $marketplace = null;

    /**
     * @var \Amz\Sellers\Model\Participation
     */
    public $participation = null;
}
