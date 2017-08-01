<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class IdField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('id', 'id', $constraintBuilder);
    }

}