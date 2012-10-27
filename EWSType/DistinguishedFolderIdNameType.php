<?php
/**
 * Contains EWSType_DistinguishedFolderIdNameType.
 */

/**
 * Represents default calendar ids.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DistinguishedFolderIdNameType extends EWSType
{
    /**
     * Represents the admin audit logs folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const ADMIN_AUDIT_LOGS = 'adminauditlogs';

    /**
     * Represents the archive deleted items folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_DELETED = 'archivedeleteditems';

    /**
     * Represents the archive Inbox folder.
     *
     * @var string
     *
     * @since Exchange 2013 CU5
     */
    const ARCHIVE_INBOX = 'archiveinbox';

    /**
     * Represents the root archive message folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_MESSAGE_ROOT = 'archivemsgfolderroot';

    /**
     * Represents the archive recoverable items deletions folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_RECOVERABLE_DELETIONS = 'Archiverecoverableitemsdeletions';

    /**
     * Represents the archive recoverable items purges folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_RECOVERABLE_PURGES = 'Archiverecoverableitemspurges';

    /**
     * Represents the archive recoverable items root folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_RECOVERABLE_ROOT = 'archiverecoverableitemsroot';

    /**
     * Represents the archive recoverable items versions folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_RECOVERABLE_VERSIONS = 'Archiverecoverableitemsversions';

    /**
     * Represents the root archive folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const ARCHIVE_ROOT = 'archiveroot';

    /**
     * Represents the Calendar folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const CALENDAR = 'calendar';

    /**
     * Represents the conflicts folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const CONFLICTS = 'conflicts';

    /**
     * Represents the Contacts folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const CONTACTS = 'contacts';

    /**
     * Represents the conversation history folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const CONVERSATION_HISTORY = 'conversationhistory';

    /**
     * Represents the Deleted Items folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const DELETED = 'deleteditems';

    /**
     * Represents the directory folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const DIRECTORY = 'directory';

    /**
     * Represents the Drafts folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const DRAFTS = 'drafts';

    /**
     * Represents the Favorites folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const FAVORITES = 'favorites';

    /**
     * Represents the Inbox folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const INBOX = 'inbox';

    /**
     * Represents the IM contact list folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const IM_CONTACT_LIST = 'imcontactlist';

    /**
     * Represents the Journal folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const JOURNAL = 'journal';

    /**
     * Represents the Junk E-mail folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const JUNK = 'jußnkemail';

    /**
     * Represents the local failures folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const LOCAL_FAILURES = 'localfailures';

    /**
     * Represents the message folder root.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const MESSAGE_ROOT = 'msgfolderroot';

    /**
     * Represents the My Contacts folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const MY_CONTACTS = 'mycontacts';

    /**
     * Represents the Notes folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const NOTES = 'notes';

    /**
     * Represents the Outbox folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const OUTBOX = 'outbox';

    /**
     * Represents the people connect folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const PEOPLE_CONNECT = 'peopleconnect';

    /**
     * Represents the quick contacts folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const QUICK_CONTACTS = 'quickcontacts';

    /**
     * Represents the recipient cache folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const RECIPIENT_CACHE = 'recipientcache';

    /**
     * Represents the dumpster deletions folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const RECOVERABLE_DELETIONS = 'recoverableitemsdeletions';

    /**
     * Represents the dumpster purges folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const RECOVERABLE_PURGES = 'recoverableitemspurges';

    /**
     * Represents the dumpster root folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const RECOVERABLE_ROOT = 'recoverableitemsroot';

    /**
     * Represents the dumpster versions folder.
     *
     * @var string
     *
     * @since Exchange 2010.
     */
    const RECOVERABLE_VERSIONS = 'recoverableitemsversions';

    /**
     * Represents the root of the mailbox.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const ROOT = 'root';

    /**
     * Represents the Search Folders folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const SEARCH = 'searchfolders';

    /**
     * Represents the Sent Items folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const SENT = 'sentitems';

    /**
     * Represents the server failures folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const SERVER_FAILURES = 'serverfailures';

    /**
     * Represents the sync issues folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const SYNC_ISSUES = 'syncissues';

    /**
     * Represents the Tasks folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const TASKS = 'tasks';

    /**
     * Represents the todo search folder.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    const TODO_SEARCH = 'todosearch';

    /**
     * Represents the Voice Mail folder.
     *
     * @var string
     *
     * @since Exchange 2007.
     */
    const VOICE_MAIL = 'voicemail';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;


    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
