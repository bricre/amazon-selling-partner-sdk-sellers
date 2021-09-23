<?php

namespace Amz\Sellers\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Detailed information about an Amazon market where a seller can list items for
 * sale and customers can view and purchase items.
 */
class Marketplace extends AbstractModel
{
    /**
     * The encrypted marketplace value.
     *
     * @var string
     */
    public $id = null;

    /**
     * Marketplace name.
     *
     * @var string
     */
    public $name = null;

    /**
     * The ISO 3166-1 alpha-2 format country code of the marketplace.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The ISO 4217 format currency code of the marketplace.
     *
     * @var string
     */
    public $defaultCurrencyCode = null;

    /**
     * The ISO 639-1 format language code of the marketplace.
     *
     * @var string
     */
    public $defaultLanguageCode = null;

    /**
     * The domain name of the marketplace.
     *
     * @var string
     */
    public $domainName = null;
}
