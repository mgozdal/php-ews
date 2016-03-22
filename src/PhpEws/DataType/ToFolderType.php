<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ToFolderType type
 * @see https://msdn.microsoft.com/en-us/library/office/aa565020(v=exchg.150).aspx
 */
class ToFolderType extends DataType
{
    /**
     * Identifies a named destination folder for a copied or moved item or folder.
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Contains the identifier of a destination folder for a copied or moved item or folder.
     *
     * @var FolderIdType
     */
    public $FolderId;
}
