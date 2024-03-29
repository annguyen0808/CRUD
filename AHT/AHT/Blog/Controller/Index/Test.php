<?php
namespace AHT\Blog\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action{

    protected $pageFactory;

    public function __construct(\Magento\Framework\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->pageFactory=$pageFactory;
        return parent::__construct($context);
    }

    public function execute()  {
        // echo "AHT Blog";
        // exit;
        return $this->pageFactory->create();
    }    
}

