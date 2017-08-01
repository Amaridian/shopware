<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\DateField;

class ChangetimeField extends DateField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('changetime', 'changetime', $constraintBuilder);
    }

}