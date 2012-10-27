<?php
/**
 * Contains EWSType_ArrayOfResponseMessagesType.
 */

/**
 * Represents the response messages for an Exchange Web Services request.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfResponseMessagesType extends EWSType
{
    /**
     * Contains the status and results of an ApplyConversationAction Operation
     * request.
     *
     * @var EWSType_ApplyConversationActionResponseMessageType
     *
     * @since Exchange 2010 SP1
     */
    public $ApplyConversationActionResponseMessage;

    /**
     * Contains the status and result of a ConvertId request.
     *
     * @var EWSType_ConvertIdResponseMessageType
     *
     * @since Exchange 2007 SP1
     */
    public $ConvertIdResponseMessage;

    /**
     * Contains the status and result of a single CopyFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CopyFolderResponseMessage;

    /**
     * Contains the status and result of a single CopyItem request.
     *
     * @var EWSType_ItemInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CopyItemResponseMessage;

    /**
     * Contains the status and result of a single CreateAttachment request.
     *
     * @var EWSType_AttachmentInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CreateAttachmentResponseMessage;

    /**
     * Contains the status and result of a single CreateFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CreateFolderResponseMessage;

    /**
     * Contains the status and result of a single CreateItem request.
     *
     * @var EWSType_ItemInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CreateItemResponseMessage;

    /**
     * Contains the status and result of a single CreateManagedFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $CreateManagedFolderResponseMessage;

    /**
     * Contains the status and results of a CreateUserConfiguration request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2010
     */
    public $CreateUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single DeleteAttachment request.
     *
     * @var EWSType_DeleteAttachmentResponseMessageType
     *
     * @since Exchange 2007
     */
    public $DeleteAttachmentResponseMessage;

    /**
     * Contains the status and result of a single DeleteFolder request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2007
     */
    public $DeleteFolderResponseMessage;

    /**
     * Contains the status and result of a single DeleteItem request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2007
     */
    public $DeleteItemResponseMessage;

    /**
     * Contains the status and results of a DeleteUserConfiguration request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2010
     */
    public $DeleteUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single EmptyFolder request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2010
     */
    public $EmptyFolderResponseMessage;

    /**
     * Contains the status and result of a single ExpandDL request.
     *
     * @var EWSType_ExpandDLResponseMessageType
     *
     * @since Exchange 2007
     */
    public $ExpandDLResponseMessage;

    /**
     * Contains the status and results of a single ExportItems request.
     *
     * @var EWSType_ExportItemsResponseMessageType
     *
     * @since Exchange 2010 SP1
     */
    public $ExportItemsResponseMessage;

    /**
     * Contains the status and result of a single FindFolder request.
     *
     * @var EWSType_FindFolderResponseMessageType
     *
     * @since Exchange 2007
     */
    public $FindFolderResponseMessage;

    /**
     * Contains the status and result of a single FindItem request.
     *
     * @var EWSType_FindItemResponseMessageType
     *
     * @since Exchange 2007
     */
    public $FindItemResponseMessage;

    /**
     * Contains the status and result of a single GetAttachment request.
     *
     * @var EWSType_AttachmentInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $GetAttachmentResponseMessage;

    /**
     * Contains the status and result of a single GetEvents request.
     *
     * @var EWSType_GetEventsResponseMessageType
     *
     * @since Exchange 2007
     */
    public $GetEventsResponseMessage;

    /**
     * Contains the status and result of a single GetFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $GetFolderResponseMessage;

    /**
     * Contains the status and result of a single GetItem request.
     *
     * @var EWSType_ItemInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $GetItemResponseMessage;

    /**
     * Contains the status and results of a GetReminders request.
     *
     * @var EWSType_GetRemindersResponseMessageType
     *
     * @since Exchange 2013 SP1
     */
    public $GetRemindersResponse;

    /**
     * Contains the status and results of a GetRoomLists request.
     *
     * @var EWSType_GetRoomListsResponseMessageType
     *
     * @since Exchange 2010
     */
    public $GetRoomListsResponse;

    /**
     * Contains the status and results of a GetRooms request.
     *
     * @var EWSType_GetRoomsResponseMessageType
     *
     * @since Exchange 2010
     */
    public $GetRoomsResponse;

    /**
     * Contains the status and result of a single GetServerTimeZones request.
     *
     * @var EWSType_GetServerTimeZonesResponseMessageType
     *
     * @since Exchange 2010
     */
    public $GetServerTimeZonesResponseMessage;

    /**
     * Contains the status and results of a GetSharingFolder request.
     *
     * @var EWSType_GetSharingFolderResponseMessageType
     *
     * @since Exchange 2010
     */
    public $GetSharingFolderResponseMessage;

    /**
     * Contains the status and results of a GetSharingMetadata request.
     *
     * @var EWSType_GetSharingMetadataResponseMessage
     *
     * @since Exchange 2010
     */
    public $GetSharingMetadataResponseMessage;

    /**
     * Contains the status and result of a single GetStreamingEvents request.
     *
     * @var EWSType_GetStreamingEventsResponseMessageType
     *
     * @since Exchange 2010 SP1
     */
    public $GetStreamingEventsResponseMessage;

    /**
     * Contains the status and results of a GetUserConfiguration request.
     *
     * @var EWSType_GetUserConfigurationResponseMessageType
     *
     * @since Exchange 2010
     */
    public $GetUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single MoveFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $MoveFolderResponseMessage;

    /**
     * Contains the status and result of a single MoveItem request.
     *
     * @var EWSType_ItemInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $MoveItemResponseMessage;

    /**
     * Contains the status and results of a PerformReminderAction request.
     *
     * @var EWSType_PerformReminderActionResponseMessageType
     *
     * @since Exchange 2013
     */
    public $PerformReminderActionResponse;

    /**
     * Contains the status and results of a RefreshSharingFolder request.
     *
     * @var EWSType_RefreshSharingFolderResponseMessageType
     *
     * @since Exchange 2010
     */
    public $RefreshSharingFolderResponseMessage;

    /**
     * Contains the status and result of a ResolveNames request.
     *
     * @var EWSType_ResolveNamesResponseMessageType
     *
     * @since Exchange 2007
     */
    public $ResolveNamesResponseMessage;

    /**
     * Contains the status and result of a single SendItem request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2007
     */
    public $SendItemResponseMessage;

    /**
     * Contains the status and result of a single SendNotification request.
     *
     * @var EWSType_SendNotificationResponseMessageType
     *
     * @since Exchange 2007
     */
    public $SendNotificationResponseMessage;

    /**
     * Contains the status and result of a single Subscribe request.
     *
     * @var EWSType_SubscribeResponseMessageType
     *
     * @since Exchange 2007
     */
    public $SubscribeResponseMessage;

    /**
     * Contains the status and result of a SyncFolderHierarchy request.
     *
     * @var EWSType_SyncFolderHierarchyResponseMessageType
     *
     * @since Exchange 2007
     */
    public $SyncFolderHierarchyResponseMessage;

    /**
     * Contains the status and result of a SyncFolderItems request.
     *
     * @var EWSType_SyncFolderItemsResponseMessageType
     *
     * @since Exchange 2007
     */
    public $SyncFolderItemsResponseMessage;

    /**
     * Contains the status and result of a single Unsubscribe request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2007
     */
    public $UnsubscribeResponseMessage;

    /**
     * Contains the status and result of a single UpdateFolder request.
     *
     * @var EWSType_FolderInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $UpdateFolderResponseMessage;

    /**
     * Contains the status and result of a single UpdateItem request.
     *
     * @var EWSType_ItemInfoResponseMessageType
     *
     * @since Exchange 2007
     */
    public $UpdateItemResponseMessage;

    /**
     * Contains the status and results of an UpdateUserConfiguration request.
     *
     * @var EWSType_ResponseMessageType
     *
     * @since Exchange 2010
     */
    public $UpdateUserConfigurationResponseMessage;

    /**
     * Contains the status and results of a single UploadItems request.
     *
     * @var EWSType_UploadItemsResponseMessageType
     *
     * @since Exchange 2010 SP1
     */
    public $UploadItemsResponseMessage;
}
