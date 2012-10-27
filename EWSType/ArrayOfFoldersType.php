<?php
/**
 * Contains EWSType_ArrayOfFoldersType.
 */

/**
 * Represents an array of folders that are used in folder operations.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfFoldersType extends EWSType
{
    /**
     * Identifies a folder to create, get, find, synchronize, or update.
     *
     * @var EWSType_FolderType
     */
    public $Folder;

    /**
     * Represents a folder that primarily contains calendar items.
     *
     * @var EWSType_CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * Represents a Contacts folder in a mailbox.
     *
     * @var EWSType_ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * Represents a Search folder contained in a mailbox.
     *
     * @var EWSType_SearchFolderType
     */
    public $SearchFolder;

    /**
     * Represents a Tasks folder in a mailbox.
     *
     * @var EWSType_TasksFolderType
     */
    public $TasksFolder;
}
