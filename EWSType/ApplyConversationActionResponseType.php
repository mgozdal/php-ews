<?php
/**
 * Contains EWSType_ApplyConversationActionResponseType.
 */

/**
 * Defines a response to an ApplyConversationAction operation request.
 *
 * @package php-ews\Types
 */
class EWSType_ApplyConversationActionResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @var EWSType_ArrayOfResponseMessagesType
     *
     * @since Exchange 2010 SP1
     */
    public $ResponseMessages;
}
