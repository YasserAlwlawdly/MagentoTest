<?php
namespace Magento\Framework\View\Layout\ScheduledStructure;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout\ScheduledStructure
 */
class Interceptor extends \Magento\Framework\View\Layout\ScheduledStructure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [])
    {
        $this->___init();
        parent::__construct($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setElementToSortList($parentName, $elementName, $offsetOrSibling, $isAfter = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementToSortList');
        return $pluginInfo ? $this->___callPlugins('setElementToSortList', func_get_args(), $pluginInfo) : parent::setElementToSortList($parentName, $elementName, $offsetOrSibling, $isAfter);
    }

    /**
     * {@inheritdoc}
     */
    public function isListToSortEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isListToSortEmpty');
        return $pluginInfo ? $this->___callPlugins('isListToSortEmpty', func_get_args(), $pluginInfo) : parent::isListToSortEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElementToSort($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElementToSort');
        return $pluginInfo ? $this->___callPlugins('unsetElementToSort', func_get_args(), $pluginInfo) : parent::unsetElementToSort($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementToSort($elementName, array $default = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementToSort');
        return $pluginInfo ? $this->___callPlugins('getElementToSort', func_get_args(), $pluginInfo) : parent::getElementToSort($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function getListToSort()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getListToSort');
        return $pluginInfo ? $this->___callPlugins('getListToSort', func_get_args(), $pluginInfo) : parent::getListToSort();
    }

    /**
     * {@inheritdoc}
     */
    public function getListToMove()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getListToMove');
        return $pluginInfo ? $this->___callPlugins('getListToMove', func_get_args(), $pluginInfo) : parent::getListToMove();
    }

    /**
     * {@inheritdoc}
     */
    public function getListToRemove()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getListToRemove');
        return $pluginInfo ? $this->___callPlugins('getListToRemove', func_get_args(), $pluginInfo) : parent::getListToRemove();
    }

    /**
     * {@inheritdoc}
     */
    public function getElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElements');
        return $pluginInfo ? $this->___callPlugins('getElements', func_get_args(), $pluginInfo) : parent::getElements();
    }

    /**
     * {@inheritdoc}
     */
    public function getElement($elementName, $default = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElement');
        return $pluginInfo ? $this->___callPlugins('getElement', func_get_args(), $pluginInfo) : parent::getElement($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function isElementsEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isElementsEmpty');
        return $pluginInfo ? $this->___callPlugins('isElementsEmpty', func_get_args(), $pluginInfo) : parent::isElementsEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function setElement($elementName, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElement');
        return $pluginInfo ? $this->___callPlugins('setElement', func_get_args(), $pluginInfo) : parent::setElement($elementName, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function hasElement($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasElement');
        return $pluginInfo ? $this->___callPlugins('hasElement', func_get_args(), $pluginInfo) : parent::hasElement($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElement($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElement');
        return $pluginInfo ? $this->___callPlugins('unsetElement', func_get_args(), $pluginInfo) : parent::unsetElement($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementToMove($elementName, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementToMove');
        return $pluginInfo ? $this->___callPlugins('getElementToMove', func_get_args(), $pluginInfo) : parent::getElementToMove($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setElementToMove($elementName, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementToMove');
        return $pluginInfo ? $this->___callPlugins('setElementToMove', func_get_args(), $pluginInfo) : parent::setElementToMove($elementName, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElementFromListToRemove($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElementFromListToRemove');
        return $pluginInfo ? $this->___callPlugins('unsetElementFromListToRemove', func_get_args(), $pluginInfo) : parent::unsetElementFromListToRemove($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function setElementToRemoveList($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementToRemoveList');
        return $pluginInfo ? $this->___callPlugins('setElementToRemoveList', func_get_args(), $pluginInfo) : parent::setElementToRemoveList($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function getStructure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStructure');
        return $pluginInfo ? $this->___callPlugins('getStructure', func_get_args(), $pluginInfo) : parent::getStructure();
    }

    /**
     * {@inheritdoc}
     */
    public function getStructureElement($elementName, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStructureElement');
        return $pluginInfo ? $this->___callPlugins('getStructureElement', func_get_args(), $pluginInfo) : parent::getStructureElement($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function isStructureEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStructureEmpty');
        return $pluginInfo ? $this->___callPlugins('isStructureEmpty', func_get_args(), $pluginInfo) : parent::isStructureEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function hasStructureElement($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasStructureElement');
        return $pluginInfo ? $this->___callPlugins('hasStructureElement', func_get_args(), $pluginInfo) : parent::hasStructureElement($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function setStructureElement($elementName, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStructureElement');
        return $pluginInfo ? $this->___callPlugins('setStructureElement', func_get_args(), $pluginInfo) : parent::setStructureElement($elementName, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetStructureElement($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetStructureElement');
        return $pluginInfo ? $this->___callPlugins('unsetStructureElement', func_get_args(), $pluginInfo) : parent::unsetStructureElement($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function getStructureElementData($elementName, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStructureElementData');
        return $pluginInfo ? $this->___callPlugins('getStructureElementData', func_get_args(), $pluginInfo) : parent::getStructureElementData($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setStructureElementData($elementName, array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStructureElementData');
        return $pluginInfo ? $this->___callPlugins('setStructureElementData', func_get_args(), $pluginInfo) : parent::setStructureElementData($elementName, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPaths()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPaths');
        return $pluginInfo ? $this->___callPlugins('getPaths', func_get_args(), $pluginInfo) : parent::getPaths();
    }

    /**
     * {@inheritdoc}
     */
    public function getPath($elementName, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        return $pluginInfo ? $this->___callPlugins('getPath', func_get_args(), $pluginInfo) : parent::getPath($elementName, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function hasPath($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasPath');
        return $pluginInfo ? $this->___callPlugins('hasPath', func_get_args(), $pluginInfo) : parent::hasPath($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function setPathElement($elementName, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPathElement');
        return $pluginInfo ? $this->___callPlugins('setPathElement', func_get_args(), $pluginInfo) : parent::setPathElement($elementName, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetPathElement($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetPathElement');
        return $pluginInfo ? $this->___callPlugins('unsetPathElement', func_get_args(), $pluginInfo) : parent::unsetPathElement($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElementFromBrokenParentList($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElementFromBrokenParentList');
        return $pluginInfo ? $this->___callPlugins('unsetElementFromBrokenParentList', func_get_args(), $pluginInfo) : parent::unsetElementFromBrokenParentList($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function setElementToBrokenParentList($elementName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementToBrokenParentList');
        return $pluginInfo ? $this->___callPlugins('setElementToBrokenParentList', func_get_args(), $pluginInfo) : parent::setElementToBrokenParentList($elementName);
    }

    /**
     * {@inheritdoc}
     */
    public function flushPaths()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'flushPaths');
        return $pluginInfo ? $this->___callPlugins('flushPaths', func_get_args(), $pluginInfo) : parent::flushPaths();
    }

    /**
     * {@inheritdoc}
     */
    public function flushScheduledStructure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'flushScheduledStructure');
        return $pluginInfo ? $this->___callPlugins('flushScheduledStructure', func_get_args(), $pluginInfo) : parent::flushScheduledStructure();
    }

    /**
     * {@inheritdoc}
     */
    public function __toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__toArray');
        return $pluginInfo ? $this->___callPlugins('__toArray', func_get_args(), $pluginInfo) : parent::__toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function populateWithArray(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'populateWithArray');
        return $pluginInfo ? $this->___callPlugins('populateWithArray', func_get_args(), $pluginInfo) : parent::populateWithArray($data);
    }
}
