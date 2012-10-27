<?php
/**
 * Contains EWSType_DisposalType.
 */

/**
 * Indicates how items in a conversation are deleted.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DisposalType extends EWSType
{
    /**
     * Indicates that items in a conversation are permanently removed from the
     * mailbox database.
     *
     * @var string
     *
     * @since Exchange 2010 SP1
     */
    const HARD_DELETE = 'HardDelete';

    /**
     * Indicates that items in a conversation are moved to the Deleted Items
     * folder.
     *
     * @var string
     *
     * EWSType_DisposalType
     */
    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    /**
     * Indicates that items in a conversation are moved to the dumpster if the
     * dumpster is enabled.
     *
     * @var string
     *
     * EWSType_DisposalType
     */
    const SOFT_DELETE = 'SoftDelete';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
