<?php

namespace AHT\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // return $this->_pageFactory->create();
        echo "<h1>". $this->tinhTong(4, 7) . "</h1>";
    }

    public function tinhTong($a, $b)
    {
        return $a + $b;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ViMagento_HelloWorld::post');
    }
}
