<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ImagePrintStatus extends AbstractTag
{

    protected $Id = 50286;

    protected $Name = 'ImagePrintStatus';

    protected $FullName = 'Kodak::Meta';

    protected $GroupName = 'MetaIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'MetaIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image Print Status';

}