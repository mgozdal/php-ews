<?php
/**
 * Contains EWSType_FolderInfoResponseMessageType.
 */

/**
 * Represents the status and result of a single CopyFolder operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extends EWSType_ResponseMessageType
 */
class EWSType_FolderInfoResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @var integer
     *
     * @since Exchange 2007
     */
    public $DescriptiveLinkKey;

    /**
     * Contains an array of copied folders.
     *
     * @var EWSType_ArrayOfFoldersType
     *
     * @since Exchange 2007
     */
    public $Folders;

    /**
     * Provides a text description of the status of the response.
     *
     * @var string
     *
     * @since Exchange 2007
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @var string
     *
     * @since Exchange 2007
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @var EWSType_ResponseClassType
     *
     * @since Exchange 2007
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @var EWSType_ResponseCodeType
     *
     * @since Exchange 2007
     */
    public $ResponseCode;
}
