<?php
/**
 * Created by PhpStorm.
 * User: eh2ru85
 * Date: 09.10.2017
 * Time: 15:38
 */

namespace Doctrine\DBAL\Types\ASE;

use Doctrine\DBAL\Types\Type;

interface PatchedType
{
    /**
     * @param Type $type
     */
    public function setParent(Type $type);
}