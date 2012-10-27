<?php
/**
 * Contains EWSType_NonEmptyArrayOfApplyConversationActionType.
 */

/**
 * Defines a request to apply actions to items in a conversation.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfApplyConversationActionType extends EWSType
{
    /**
     * Contains a single action to be applied to a single conversation.
     *
     * @var EWSType_ConversationActionType
     *
     * @since Exchange 2010 SP1
     */
    public $ConversationAction;
}
