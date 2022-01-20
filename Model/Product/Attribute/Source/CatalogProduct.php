<?php
/**
 * Copyright © ss All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\HelloWorld\Model\Product\Attribute\Source;

class CatalogProduct extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [
        
        ];
        return $this->_options;
    }
}
