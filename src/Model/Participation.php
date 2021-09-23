<?php

namespace Amz\Sellers\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Detailed information that is specific to a seller in a Marketplace.
 */
class Participation extends AbstractModel
{
    /**
     * @var bool
     */
    public $isParticipating = null;

    /**
     * Specifies if the seller has suspended listings. True if the seller Listing
     * Status is set to Inactive, otherwise False.
     *
     * @var bool
     */
    public $hasSuspendedListings = null;
}
