<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\Entity;

use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;
use WellCommerce\Bundle\CoreBundle\Behaviours\Enableable;
use WellCommerce\Bundle\CoreBundle\Behaviours\Identifiable;
use WellCommerce\Bundle\CoreBundle\Entity\EntityInterface;

/**
 * Class UserGroupPermission
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class UserGroupPermission implements EntityInterface
{
    use Identifiable;
    use Enableable;
    use Timestampable;
    
    protected $name = '';
    
    /**
     * @var UserGroup
     */
    protected $group;
    
    public function getGroup(): UserGroup
    {
        return $this->group;
    }
    
    public function setGroup(UserGroup $group)
    {
        $this->group = $group;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
