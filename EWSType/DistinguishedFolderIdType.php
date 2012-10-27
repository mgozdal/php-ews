<?php
/**
 * Contains EWSType_DistinguishedFolderIdType.
 */

/**
 * Identifies folders that can be referenced by name.
 *
 * @package php-ews\Types
 */
class EWSType_DistinguishedFolderIdType extends EWSType
{
    /**
     * Contains a string that identifies a version of a folder that is
     * identified by the Id attribute.
     *
     * This attribute is optional. Use this attribute to make sure that the
     * correct version of a folder is used.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $ChangeKey;

    /**
     * Identifies a default folder.
     *
     * This attribute is required.
     *
     * @var EWSType_DistinguishedFolderIdNameType
     *
     * @since Exchange 2007
     */
    public $Id;

    /**
     * Identifies a primary SMTP address.
     *
     * Proxy addresses are not allowed.
     *
     * @var EWSType_EmailAddressType
     *
     * @since Exchange 2007
     */
    public $Mailbox;
}
