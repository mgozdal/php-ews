<?php
/**
 * Contains EWSType_ApplyConversationActionType.
 */

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Types
 */
class EWSType_ApplyConversationActionType extends EWSType
{
    /**
     * Contains a collection of conversations and the actions to apply to them.
     *
     * @var EWSType_NonEmptyArrayOfApplyConversationActionType
     *
     * @since Exchange 2010 SP1
     */
    public $ConversationActions;
}
