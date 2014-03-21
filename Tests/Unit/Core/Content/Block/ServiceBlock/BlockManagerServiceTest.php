<?php
/**
 * This file is part of the RedKiteCmsBunde Application and it is distributed
 * under the MIT License. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) RedKite Labs <webmaster@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 *
 * @license    MIT License
 *
 */

namespace RedKiteLabs\RedKiteCms\RedKiteCmsBundle\Tests\Unit\Core\Content\Block\ServiceBlock;

use RedKiteLabs\RedKiteCms\RedKiteCmsBundle\Tests\TestCase;
use RedKiteLabs\RedKiteCms\RedKiteCmsBundle\Core\Content\Block\ServiceBlock\AlBlockManagerService;

/**
 * AlBlockManagerServiceBlock
 *
 * @author RedKite Labs <webmaster@redkite-labs.com>
 */
class AlBlockManagerServiceBlockTest extends TestCase
{
    public function testServiceBlockDefaultValueReturnsNull()
    {
        $eventsHandler = $this->getMock('RedKiteLabs\RedKiteCms\RedKiteCmsBundle\Core\EventsHandler\AlEventsHandlerInterface');
        $factoryRepository = $this->getMock('RedKiteLabs\RedKiteCms\RedKiteCmsBundle\Core\Repository\Factory\AlFactoryRepositoryInterface');

        $blockManager = new AlBlockManagerService($eventsHandler, $factoryRepository);
        $this->assertNull($blockManager->getDefaultValue());
    }
}