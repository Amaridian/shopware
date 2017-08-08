<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorOptionRelation;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class ProductIdField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('productId', 'product_id', 'product_configurator_option_relation', $constraintBuilder);
    }
}