<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DeleteItemType type
 */
class DeleteItemFieldType extends DataType
{
    /**
     * Identifies extended MAPI properties to set.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
