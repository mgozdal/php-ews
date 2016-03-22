<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MoveItemType type
 */
class MoveItemType extends DataType
{
    /**
     * SavedItemFolderId property
     *
     * @var DataType\DistinguishedFolderIdType
     */
    public $ToFolderId;

    /**
     * Items property
     *
     * @var NonEmptyArrayOfAllItemsType
     */
    public $Items;

}
