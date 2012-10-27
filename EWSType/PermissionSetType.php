<?php
/**
 * Contains EWSType_PermissionSetType.
 */

/**
 * Contains all the permissions that are configured for a folder.
 *
 * @package php-ews\Types
 */
class EWSType_PermissionSetType extends EWSType
{
    /**
     * Contains the collection of permissions for a folder.
     *
     * @var EWSType_ArrayOfPermissionsType
     *
     * @since Exchange 2007 SP1
     */
    public $Permissions;

    /**
     * Contains an array of unknown entries that cannot be resolved against the
     * Active Directory directory service.
     *
     * @var EWSType_ArrayOfUnknownEntriesType
     *
     * @since Exchange 2007 SP1
     */
    public $UnknownEntries;
}
