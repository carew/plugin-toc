<?php

namespace Carew\Plugin\Toc;

use Carew\ExtensionInterface;
use Carew\Carew;

class TocExtension implements ExtensionInterface
{
    public function register(Carew $carew)
    {
        $eventDispatcher = $carew->getEventDispatcher()->addSubscriber(new TocEventSubscriber());
    }

}
