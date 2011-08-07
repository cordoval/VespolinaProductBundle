<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vesoplina\ProductBundle\Model\Identifier;

use Vesoplina\ProductBundle\Model\Node\IdentifierNode;

/**
 * @author Richard D Shank <develop@zestic.com>
 */
class IdIdentifier extends IdentifierNode
{

    public function getName()
    {
        return 'id';
    }
}