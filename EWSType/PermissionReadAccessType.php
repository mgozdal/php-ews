<?php
/**
 * Contains EWSType_PermissionReadAccessType.
 */

/**
 * Indicates whether a user has permission to read items within a folder.
 *
 * @package php-ews\Enumerations
 */
class EWSType_PermissionReadAccessType extends EWSType
{
    /**
     * Indicates that the user has permission to read all items in the folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const FULL_DETAILS = 'FullDetails';

    /**
     * Indicates that the user does not have permission to read items in the
     * folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const NONE = 'None';

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
