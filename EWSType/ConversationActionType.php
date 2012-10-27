<?php
/**
 * Contains EWSType_ConversationActionType.
 */

/**
 * Represents a single action to be applied to a single conversation.
 *
 * @package php-ews\Types
 */
class EWSType_ConversationActionType extends EWSType
{
    /**
     * Contains the action to perform on the conversation specified by the
     * ConversationId element.
     *
     * This element must be present.
     *
     * @var EWSType_ConversationActionTypeType
     *
     * @since Exchange 2010 SP1
     */
    public $Action;

    /**
     * Contains a collection of strings that identify the categories to which
     * items in a conversation belong.
     *
     * @var EWSType_ArrayOfStringsType
     *
     * @since Exchange 2010 SP1
     */
    public $Categories;

    /**
     * Indicates the folder that is targeted for actions that use folders.
     *
     * This element must be present when copying, deleting, moving, and setting
     * read state on conversation items in a target folder.
     *
     * @var EWSType_TargetFolderIdType
     *
     * @since Exchange 2010 SP1
     */
    public $ContextFolderId;

    /**
     * Contains the identifier of the conversation that will have the action
     * specified by the Action element applied to items in the conversation.
     *
     * This element must be present.
     *
     * @var EWSType_ItemIdType
     *
     * @since Exchange 2010 SP1
     */
    public $ConversationId;

    /**
     * Contains the date and time that a conversation was last synchronized.
     *
     * This element must be present when trying to delete all items in a
     * conversation that were received up to the specified time.
     *
     * @var string
     *
     * @since Exchange 2010 SP1
     *
     * @todo Make a DateTime object.
     */
    public $ConversationLastSyncTime;

    /**
     * Indicates how items in a conversation are deleted.
     *
     * @var EWSType_DisposalType
     *
     * @since Exchange 2010 SP1
     */
    public $DeleteType;

    /**
     * Indicates the destination folder for copy and move actions.
     *
     * @var EWSType_TargetFolderIdType
     *
     * @since Exchange 2010 SP1
     */
    public $DestinationFolderId;

    /**
     * Specifies a flag that enables deletion for all new items in a
     * conversation.
     *
     * @var boolean
     *
     * @since Exchange 2010 SP1
     */
    public $EnableAlwaysDelete;

    /**
     * Indicates whether a message has been read.
     *
     * @var boolean
     *
     * @since Exchange 2010 SP1
     */
    public $IsRead;

    /**
     * Indicates whether the response is sent as soon as the action starts
     * processing on the server or whether the response is sent after the action
     * has completed.
     *
     * This element must be present for the response to be sent asynchronous to
     * the requested action.
     *
     * @var boolean
     *
     * @since Exchange 2010 SP1
     */
    public $ProcessRightAway;
}
