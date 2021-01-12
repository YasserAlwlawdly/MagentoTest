<?php
namespace Magento\Cms\Model\Wysiwyg\Images\Storage\Collection;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\Storage\Collection
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\Storage\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($entityFactory, $filesystem);
    }

    /**
     * {@inheritdoc}
     */
    public function setDirsFilter($regex)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDirsFilter');
        return $pluginInfo ? $this->___callPlugins('setDirsFilter', func_get_args(), $pluginInfo) : parent::setDirsFilter($regex);
    }

    /**
     * {@inheritdoc}
     */
    public function setFilesFilter($regex)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilesFilter');
        return $pluginInfo ? $this->___callPlugins('setFilesFilter', func_get_args(), $pluginInfo) : parent::setFilesFilter($regex);
    }

    /**
     * {@inheritdoc}
     */
    public function setDisallowedFilesFilter($regex)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDisallowedFilesFilter');
        return $pluginInfo ? $this->___callPlugins('setDisallowedFilesFilter', func_get_args(), $pluginInfo) : parent::setDisallowedFilesFilter($regex);
    }

    /**
     * {@inheritdoc}
     */
    public function setCollectDirs($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCollectDirs');
        return $pluginInfo ? $this->___callPlugins('setCollectDirs', func_get_args(), $pluginInfo) : parent::setCollectDirs($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCollectFiles($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCollectFiles');
        return $pluginInfo ? $this->___callPlugins('setCollectFiles', func_get_args(), $pluginInfo) : parent::setCollectFiles($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCollectRecursively($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCollectRecursively');
        return $pluginInfo ? $this->___callPlugins('setCollectRecursively', func_get_args(), $pluginInfo) : parent::setCollectRecursively($value);
    }

    /**
     * {@inheritdoc}
     */
    public function addTargetDir($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTargetDir');
        return $pluginInfo ? $this->___callPlugins('addTargetDir', func_get_args(), $pluginInfo) : parent::addTargetDir($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setDirsFirst($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDirsFirst');
        return $pluginInfo ? $this->___callPlugins('setDirsFirst', func_get_args(), $pluginInfo) : parent::setDirsFirst($value);
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadData');
        return $pluginInfo ? $this->___callPlugins('loadData', func_get_args(), $pluginInfo) : parent::loadData($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function addCallbackFilter($field, $value, $type, $callback, $isInverted = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCallbackFilter');
        return $pluginInfo ? $this->___callPlugins('addCallbackFilter', func_get_args(), $pluginInfo) : parent::addCallbackFilter($field, $value, $type, $callback, $isInverted);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $cond, $type = 'and')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($field, $cond, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter($field, $value, $type = 'and')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        return $pluginInfo ? $this->___callPlugins('addFilter', func_get_args(), $pluginInfo) : parent::addFilter($field, $value, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        return $pluginInfo ? $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo) : parent::getAllIds();
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackLike($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackLike');
        return $pluginInfo ? $this->___callPlugins('filterCallbackLike', func_get_args(), $pluginInfo) : parent::filterCallbackLike($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackEq($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackEq');
        return $pluginInfo ? $this->___callPlugins('filterCallbackEq', func_get_args(), $pluginInfo) : parent::filterCallbackEq($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackInArray($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackInArray');
        return $pluginInfo ? $this->___callPlugins('filterCallbackInArray', func_get_args(), $pluginInfo) : parent::filterCallbackInArray($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackIsNull($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackIsNull');
        return $pluginInfo ? $this->___callPlugins('filterCallbackIsNull', func_get_args(), $pluginInfo) : parent::filterCallbackIsNull($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackIsMoreThan($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackIsMoreThan');
        return $pluginInfo ? $this->___callPlugins('filterCallbackIsMoreThan', func_get_args(), $pluginInfo) : parent::filterCallbackIsMoreThan($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCallbackIsLessThan($field, $filterValue, $row)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCallbackIsLessThan');
        return $pluginInfo ? $this->___callPlugins('filterCallbackIsLessThan', func_get_args(), $pluginInfo) : parent::filterCallbackIsLessThan($field, $filterValue, $row);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilter');
        return $pluginInfo ? $this->___callPlugins('getFilter', func_get_args(), $pluginInfo) : parent::getFilter($field);
    }

    /**
     * {@inheritdoc}
     */
    public function isLoaded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoaded');
        return $pluginInfo ? $this->___callPlugins('isLoaded', func_get_args(), $pluginInfo) : parent::isLoaded();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageNumber');
        return $pluginInfo ? $this->___callPlugins('getLastPageNumber', func_get_args(), $pluginInfo) : parent::getLastPageNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageSize');
        return $pluginInfo ? $this->___callPlugins('getPageSize', func_get_args(), $pluginInfo) : parent::getPageSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSize');
        return $pluginInfo ? $this->___callPlugins('getSize', func_get_args(), $pluginInfo) : parent::getSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstItem');
        return $pluginInfo ? $this->___callPlugins('getFirstItem', func_get_args(), $pluginInfo) : parent::getFirstItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastItem');
        return $pluginInfo ? $this->___callPlugins('getLastItem', func_get_args(), $pluginInfo) : parent::getLastItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        return $pluginInfo ? $this->___callPlugins('getItems', func_get_args(), $pluginInfo) : parent::getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnValues($colName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnValues');
        return $pluginInfo ? $this->___callPlugins('getColumnValues', func_get_args(), $pluginInfo) : parent::getColumnValues($colName);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemsByColumnValue', func_get_args(), $pluginInfo) : parent::getItemsByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemByColumnValue', func_get_args(), $pluginInfo) : parent::getItemByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        return $pluginInfo ? $this->___callPlugins('addItem', func_get_args(), $pluginInfo) : parent::addItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItemByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItemByKey');
        return $pluginInfo ? $this->___callPlugins('removeItemByKey', func_get_args(), $pluginInfo) : parent::removeItemByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllItems');
        return $pluginInfo ? $this->___callPlugins('removeAllItems', func_get_args(), $pluginInfo) : parent::removeAllItems();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        return $pluginInfo ? $this->___callPlugins('clear', func_get_args(), $pluginInfo) : parent::clear();
    }

    /**
     * {@inheritdoc}
     */
    public function walk($callback, array $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walk');
        return $pluginInfo ? $this->___callPlugins('walk', func_get_args(), $pluginInfo) : parent::walk($callback, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function each($objMethod, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'each');
        return $pluginInfo ? $this->___callPlugins('each', func_get_args(), $pluginInfo) : parent::each($objMethod, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataToAll($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataToAll');
        return $pluginInfo ? $this->___callPlugins('setDataToAll', func_get_args(), $pluginInfo) : parent::setDataToAll($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCurPage($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurPage');
        return $pluginInfo ? $this->___callPlugins('setCurPage', func_get_args(), $pluginInfo) : parent::setCurPage($page);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageSize($size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageSize');
        return $pluginInfo ? $this->___callPlugins('setPageSize', func_get_args(), $pluginInfo) : parent::setPageSize($size);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemObjectClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemObjectClass');
        return $pluginInfo ? $this->___callPlugins('setItemObjectClass', func_get_args(), $pluginInfo) : parent::setItemObjectClass($className);
    }

    /**
     * {@inheritdoc}
     */
    public function getNewEmptyItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewEmptyItem');
        return $pluginInfo ? $this->___callPlugins('getNewEmptyItem', func_get_args(), $pluginInfo) : parent::getNewEmptyItem();
    }

    /**
     * {@inheritdoc}
     */
    public function distinct($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'distinct');
        return $pluginInfo ? $this->___callPlugins('distinct', func_get_args(), $pluginInfo) : parent::distinct($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($arrRequiredFields = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($arrRequiredFields);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionHash');
        return $pluginInfo ? $this->___callPlugins('toOptionHash', func_get_args(), $pluginInfo) : parent::toOptionHash();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($idValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        return $pluginInfo ? $this->___callPlugins('getItemById', func_get_args(), $pluginInfo) : parent::getItemById($idValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIterator');
        return $pluginInfo ? $this->___callPlugins('getIterator', func_get_args(), $pluginInfo) : parent::getIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        return $pluginInfo ? $this->___callPlugins('count', func_get_args(), $pluginInfo) : parent::count();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlag');
        return $pluginInfo ? $this->___callPlugins('getFlag', func_get_args(), $pluginInfo) : parent::getFlag($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($flag, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFlag');
        return $pluginInfo ? $this->___callPlugins('setFlag', func_get_args(), $pluginInfo) : parent::setFlag($flag, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasFlag');
        return $pluginInfo ? $this->___callPlugins('hasFlag', func_get_args(), $pluginInfo) : parent::hasFlag($flag);
    }
}
