<?php

namespace AppBundle\Fixtures;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ds\Component\Security\Fixture\AccessFixture;

/**
 * Class Accesses
 */
class Accesses extends AccessFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritdoc}
     */
    protected function getResource()
    {
        return '/srv/api-platform/src/AppBundle/Resources/fixtures/{env}/access/*/accesses.yml';
    }
}
