<?php

namespace AHT\HelloWorld\Block;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;

class Dynamic  extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn(
            'name',
            [
                'label' => __('Ho va ten'),
                'class' => 'required-entry'
            ]
        );

        $this->addColumn(
            'age',
            [
                'label' => __('Tuoi'),
                'class' => 'required-entry'
            ]
            );

        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add Type');
    }
}
