<?php

namespace Kryn\CmsBundle\ContentTypes;

use Kryn\CmsBundle\Core;

class ContentTypes {

    /**
     * @var AbstractType[]
     */
    protected $types;

    /**
     * @param string $type
     * @param AbstractType $contentType
     */
    public function addType($type, $contentType)
    {
        $this->types[$type] = $contentType;
    }

    /**
     * @param string $type
     * @return AbstractType
     */
    public function getType($type)
    {
        return $this->types[$type];
    }

}