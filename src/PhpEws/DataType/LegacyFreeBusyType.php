<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the LegacyFreeBusyType type.
 */
class LegacyFreeBusyType extends DataType
{
    /**
     * Free
     *
     * @var string
     */
    const FREE = 'Free';

    /**
     * Tentative
     *
     * @var string
     */
    const TENTATIVE = 'Tentative';

    /**
     * Busy
     *
     * @var string
     */
    const BUSY = 'Busy';

    /**
     * OOF
     *
     * @var string
     */
    const OOF = 'OOF';

    /**
     * NoData
     *
     * @var string
     */
    const NO_DATA = 'NoData';

}
