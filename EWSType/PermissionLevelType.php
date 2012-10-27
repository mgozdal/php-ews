<?php
/**
 * Contains EWSType_PermissionLevelType.
 */

/**
 * Represents the permission level that a user has on a folder.
 *
 * @package php-ews\Enumerations
 */
class EWSType_PermissionLevelType extends EWSType
{
    /**
     * Indicates that the user can create and read all items in the folder, and
     * edit and delete only items that the user creates.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const AUTHOR = 'Author';

    /**
     * Indicates that the user can create items in the folder.
     *
     * The contents of the folder do not appear.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const CONTRIBUTOR = 'Contributor';

    /**
     * Indicates that the user has custom access permissions on the folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const CUSTOM = 'Custom';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const EDITOR = 'Editor';

    /**
     * Indicates that the user can create and read all items in the folder, and
     * delete only items that the user creates.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const NON_EDITING_AUTHOR = 'NoneditingAuthor';

    /**
     * Indicates that the user has no permissions on the folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const NONE = 'None';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder, and create subfolders.
     *
     * The user is both folder owner and folder contact.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const OWNER = 'Owner';

    /**
     * Indicates that the user can create and read all items in the folder,
     * edit and delete only items that the user creates, and create subfolders.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const PUBLISHING_AUTHOR = 'PublishingAuthor';

    /**
     * Indicates that the user can create, read, edit, and delete all items in
     * the folder, and create subfolders.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const PUBLISHING_EDITOR = 'PublishingEditor';

    /**
     * Indicates that the user can read all items in the folder.
     *
     * @var string
     *
     * @since Exchange 2007 SP1
     */
    const REVIEWER = 'Reviewer';

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
