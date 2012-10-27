<?php
/**
 * Contains EWSType_ApplyConversationActionResponseMessageType.
 */

/**
 * Represents the status and results of an ApplyConversationAction operation
 * request.
 *
 * @package php-ews\Types
 *
 * @todo Extends EWSType_ResponseMessageType
 */
class EWSType_ApplyConversationActionResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @var integer
     *
     * @since Exchange 2010 SP1
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @var string
     *
     * @since Exchange 2010 SP1
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @var string
     *
     * @since Exchange 2010 SP1
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @var EWSType_ResponseClassType
     *
     * @since Exchange 2010 SP1
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @var EWSType_ResponseCodeType
     *
     * @since Exchange 2010 SP1
     */
    public $ResponseCode;
}
