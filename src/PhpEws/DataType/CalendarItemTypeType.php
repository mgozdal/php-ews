<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the CalendarItemTypeType type.
 */
class CalendarItemTypeType extends DataType
{
    /**
     * Send to no attendees.
     *
     * @var string
     */
    const SINGLE = 'Single';

    /**
     * Send to all attendees but do not save a copy.
     *
     * @var string
     */
    const OCCURRENCE = 'Occurrence';

    /**
     * Send to all attendees and save a copy.
     *
     * @var string
     */
    const EXCEPTION = 'Exception';

    /**
     * Send to only the changed attendees but do not save a copy.
     *
     * @var string
     */
    const RECURRING_MASTER = 'RecurringMaster';

}
