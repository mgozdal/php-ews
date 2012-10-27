<?php
/**
 * Contains EWSType_FolderType.
 */

/**
 * Definition of the FolderType type
 *
 * @package php-ews\Types
 */
class EWSType_FolderType extends EWSType
{
    /**
     * Contains the identifier and change key of a folder.
     *
     * @var EWSType_FolderIdType
     *
     * @since Exchange 2007
     */
    public $FolderId;

    /**
     * Represents the identifier of the parent folder that contains the folder.
     *
     * @var EWSType_FolderIdType
     *
     * @since Exchange 2007
     */
    public $ParentFolderId;

    /**
     * Represents the folder class for a given folder.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $FolderClass;

    /**
     * Contains the display name of a folder.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $DisplayName;

    /**
     * Represents the total count of items within a given folder.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $TotalCount;

    /**
     * Represents the number of child folders that are contained within a
     * folder.
     *
     * This property is read-only.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $ChildFolderCount;

    /**
     * Identifies extended properties on folders.
     *
     * @var EWSType_ExtendedPropertyType
     *
     * @since Exchange 2007
     */
    public $ExtendedProperty;

    /**
     * Contains information about a managed folder.
     *
     * @var EWSType_ManagedFolderInformationType
     *
     * @since Exchange 2007
     */
    public $ManagedFolderInformation;

    /**
     * Represents the count of unread items within a given folder.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $UnreadCount;

    /**
     * Contains all the configured permissions for a folder.
     *
     * @var EWSType_PermissionSetType
     *
     * @since Exchange 2007 SP1
     */
    public $PermissionSet;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder.
     *
     * This element is read-only.
     *
     * @var EWSType_EffectiveRightsType
     *
     * @since Exchange 2007 SP1
     */
    public $EffectiveRights;
}
