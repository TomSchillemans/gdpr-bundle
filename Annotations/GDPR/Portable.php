<?php

namespace SuperBrave\GdprBundle\Annotations\GDPR;

/**
 * Annotation to flag an entity field to be exported
 * to conform with the GDPR right of portability.
 *
 * @Annotation()
 * @Annotation\Target({"PROPERTY"})
 */
class Portable
{
    /**
     * Use given name instead of column name in the exported data.
     *
     * @var string
     */
    public $fieldName;
}
