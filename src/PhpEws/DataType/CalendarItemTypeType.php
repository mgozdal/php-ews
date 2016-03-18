<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarItemTypeType type.
 */
class CalendarItemTypeType extends DataType
{
    /**
     * Single
     *
     * @var string
     */
    const SINGLE = 'Single';

    /**
     * Occurrence
     *
     * @var string
     */
    const OCCURRENCE = 'Occurrence';

    /**
     * Exception
     *
     * @var string
     */
    const EXCEPTION = 'Exception';

    /**
     * Recurring Master
     *
     * @var string
     */
    const RECURRING_MASTER = 'RecurringMaster';

}
