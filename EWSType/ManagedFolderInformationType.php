<?php
/**
 * Contains EWSType_ManagedFolderInformationType.
 */

/**
 * Contains information about a managed custom folder.
 *
 * @package php-ews\Types
 */
class EWSType_ManagedFolderInformationType extends EWSType
{
    /**
     * Indicates whether a managed folder can be deleted by a customer.
     *
     * @var boolean
     *
     * @since Exchange 2007
     */
    public $CanDelete;

    /**
     * Indicates whether a given managed folder can be renamed or moved by the
     * customer.
     *
     * @var boolean
     *
     * @since Exchange 2007
     */
    public $CanRenameOrMove;

    /**
     * Contains the comment that is associated with a managed folder.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $Comment;

    /**
     * Describes the total size of all the contents of a managed folder.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $FolderSize;

    /**
     * Indicates whether the managed folder has a quota.
     *
     * @var boolean
     *
     * @since Exchange 2007
     */
    public $HasQuota;

    /**
     * Specifies the URL that will be the default home page for the managed
     * folder.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $HomePage;

    /**
     * Indicates whether the managed folder is the root for all managed folders.
     *
     * @var boolean
     *
     * @since Exchange 2007
     */
    public $IsManagedFoldersRoot;

    /**
     * Contains the folder ID of the managed folder.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $ManagedFolderId;

    /**
     * Indicates whether the managed folder comment must be displayed.
     *
     * @var boolean
     *
     * @since Exchange 2007
     */
    public $MustDisplayComment;

    /**
     * Describes the storage quota for the managed folder.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $StorageQuota;
}
