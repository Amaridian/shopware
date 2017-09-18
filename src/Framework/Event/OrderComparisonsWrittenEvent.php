<?php declare(strict_types=1);

namespace Shopware\Framework\Event;

class OrderComparisonsWrittenEvent extends NestedEvent
{
    const NAME = 'order_comparisons.written';

    /**
     * @var string[]
     */
    private $orderComparisonsUuids;

    /**
     * @var NestedEventCollection
     */
    private $events;

    /**
     * @var array
     */
    private $errors;

    public function __construct(array $orderComparisonsUuids, array $errors = [])
    {
        $this->orderComparisonsUuids = $orderComparisonsUuids;
        $this->events = new NestedEventCollection();
        $this->errors = $errors;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return string[]
     */
    public function getOrderComparisonsUuids(): array
    {
        return $this->orderComparisonsUuids;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return count($this->errors) > 0;
    }

    public function addEvent(NestedEvent $event): void
    {
        $this->events->add($event);
    }

    public function getEvents(): NestedEventCollection
    {
        return $this->events;
    }
}