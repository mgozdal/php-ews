<?php
/**
 * Contains EWSType_PermissionType.
 */

/**
 * Defines the access that a user has to a folder.
 *
 * @package php-ews\Types
 */
class EWSType_PermissionType extends EWSType
{
    /**
     * Indicates whether a user has permission to create items in a folder.
     *
     * @var boolean
     *
     * @since Exchange 2007 SP1
     */
    public $CanCreateItems;

    /**
     * Indicates whether a user has permission to create subfolders in a folder.
     *
     * @var boolean
     *
     * @since Exchange 2007 SP1
     */
    public $CanCreateSubFolders;

    /**
     * Indicates whether a user has permission to delete items in a folder.
     *
     * @var EWSType_PermissionActionType
     *
     * @since Exchange 2007 SP1
     */
    public $DeleteItems;

    /**
     * Indicates whether a user has permission to edit items in a folder.
     *
     * @var EWSType_PermissionActionType
     *
     * @since Exchange 2007 SP1
     */
    public $EditItems;

    /**
     * Indicates whether a user is a contact for a folder.
     *
     * @var boolean
     *
     * @since Exchange 2007 SP1
     */
    public $IsFolderContact;

    /**
     * Indicates whether a user is the owner of a folder.
     *
     * @var boolean
     *
     * @since Exchange 2007 SP1
     */
    public $IsFolderOwner;

    /**
     * Indicates whether a user can view a folder.
     *
     * @var boolean
     *
     * @since Exchange 2007 SP1
     */
    public $IsFolderVisible;

    /**
     * Represents the combination of permissions that a user has on a folder.
     *
     * @var EWSType_PermissionLevelType
     *
     * @since Exchange 2007 SP1
     */
    public $PermissionLevel;

    /**
     * Indicates whether a user has permission to read items within a folder.
     *
     * @var EWSType_PermissionReadAccessType
     *
     * @since Exchange 2007 SP1
     */
    public $ReadItems;

    /**
     * Identifies a delegate user or a user who has folder access permissions.
     *
     * @var EWSType_UserIdType
     *
     * @since Exchange 2007 SP1
     */
    public $UserId;
}
