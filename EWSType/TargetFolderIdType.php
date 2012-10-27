<?php
/**
 * Contains EWSType_TargetFolderIdType.
 */

/**
 * Indicates the folder that is targeted for actions that use folders.
 */
class EWSType_TargetFolderIdType extends EWSType
{
    /**
     * Identifies folders that can be referenced by name.
     *
     * @var EWSType_DistinguishedFolderIdType
     *
     * @since Exchange 2010 SP1
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier and change key of the context folder.
     *
     * @var EWSType_FolderIdType
     *
     * @since Exchange 2010 SP1
     */
    public $FolderId;
}
