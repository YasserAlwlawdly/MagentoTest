<?php

namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action {

    public function execute()
    {
//        /** @var \Magento\Framework\Controller\Result\Raw $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('Hello World!');
//        return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
