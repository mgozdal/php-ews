<?php
/**
 * Contains EWSType_ArrayOfPermissionsType.
 */

/**
 * Contains the collection of permissions for a folder.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfPermissionsType extends EWSType
{
    /**
     * Defines the access that a delegate has to a folder.
     *
     * @var EWSType_PermissionType
     *
     * @since Exchange 2007 SP1
     */
    public $Permission;
}
