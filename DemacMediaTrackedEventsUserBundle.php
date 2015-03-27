<?php

namespace DemacMedia\Bundle\TrackedEventsUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DemacMediaTrackedEventsUserBundle extends Bundle
{
    public function getParent()
    {
        return 'OroCRMMagentoBundle';
    }
}
