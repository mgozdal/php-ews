<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MessageDispositionType type.
 */
class MessageDispositionType extends DataType
{
    /**
     * Do not send to attendees and save a copy
     *
     * @var string
     */
    const SAVE_ONLY = 'SaveOnly';

    /**
     * Send only but do not save a copy.
     *
     * @var string
     */
    const SEND_ONLY = 'SendOnly';

    /**
     * Send and save a copy.
     *
     * @var string
     */
    const SEND_AND_SAVE_COPY = 'SendAndSaveCopy';

}
