<?php
namespace AHT\HelloWorld\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function __construct()
    {
        $this->_init('\AHT\HelloWorld\Model\ResourceModel\Post');
    }
}
