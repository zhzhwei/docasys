<?php

    namespace Wise\WiseDocasysBackend\ViewHelpers\Be;

    /***************************************************************
    *  Copyright notice
    *
    *  (c) 2010 Franz Koch <typo3@elements-net.de>, Koch & Koch GbR
    *              
    *  All rights reserved
    *
    *  This script is part of the TYPO3 project. The TYPO3 project is
    *  free software; you can redistribute it and/or modify
    *  it under the terms of the GNU General Public License as published by
    *  the Free Software Foundation; either version 2 of the License, or
    *  (at your option) any later version.
    *
    *  The GNU General Public License can be found at
    *  http://www.gnu.org/copyleft/gpl.html.
    *
    *  This script is distributed in the hope that it will be useful,
    *  but WITHOUT ANY WARRANTY; without even the implied warranty of
    *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    *  GNU General Public License for more details.
    *
    *  This copyright notice MUST APPEAR in all copies of the script!
    ***************************************************************/

    use TYPO3\CMS\Core\Utility\GeneralUtility;
    use TYPO3\CMS\Extbase\Utility\LocalizationUtility;


    /**
    * Is fetching property values from TCA
    * 
    * Usage: 
    * <nameOfNamespace:TcaOptions property="nameOfProperty" subject="NameOfVendor\\NameOfExtension\\Domain\\Model\\NameOfModel" />
    * 
    * respectively via inline-syntax:
    * <f:form.select options="{nameOfNamespace:TcaOptions(property:'nameOfProperty',subject:'NameOfVendor\\NameOfExtension\\Domain\\Model\\NameOfModel')}" />
    *
    * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
    */
    class TcaOptionsViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

        /**
        * local cache for dataMaps
        * @var array
        */
        protected $dataMaps = array();

        /**
        * @var \TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper
        * @inject
        */
        protected $dataMapper;

        /**
        * objectManager
        *
        * @var \TYPO3\CMS\Extbase\Object\ObjectManager
        * @inject
        */
        protected $objectManager;

        /**
        * Is returning select values for a property or propertyPath of a given object or className
        * @param mixed $subject The object or className the property belongs to
        * @param string $property The property itself
        * @return array The select options as array
        */
        public function render($subject = NULL, $property = '') {
            if (!is_object($subject) && is_string($subject) && class_exists($subject)) {
                $subject= $this->objectManager->get($subject);
            }
            return self::getSelectOptions($property, $subject);
        } 

        /**
        * Is resolving the select values for a property or propertyPath of a given object or className
        * @param string $propertyPath The property itself
        * @param object $subject The object or className the property belongs to
        * @return array The select options as array
        */
        private function getSelectOptions($propertyPath, $subject) {
            $selectOptions = array();

            if (is_object($subject)) {
                $propertyPathSegments = GeneralUtility::trimExplode('.', $propertyPath);
                $object = clone($subject);
                $propertyName = $propertyPath;

                // resolve a property path
                if (count($propertyPathSegments) > 1) {
                    foreach($propertyPathSegments as $key => $propertyName) {
                        $propertyType = $this->dataMapper->getType(get_class($tempObject), $propertyName);
                        if (strpos($propertyType,'_')) {
                            $object = $this->objectManager->create($propertyType);
                        } else {
                            break;    
                        }
                    }
                }

                $dataMap = self::getDataMap($object);

                if ($dataMap == NULL || !$dataMap->isPersistableProperty($propertyName)) {
                    return $selectOptions;    
                }

                $tableName = $this->dataMapper->convertClassNameToTableName(get_class($object));
                $columnName = $dataMap->getColumnMap($propertyName)->getColumnName();

                // only convert select items which do not have a DB relation
                $columnConfig = $GLOBALS['TCA'][$tableName]['columns'][$columnName]['config'];
                if ($columnConfig['type'] == 'select' && count($columnConfig['items']) && !$columnConfig['foreign_table']) {
                    foreach ($columnConfig['items'] as $option) {
                        $selectOptions[$option[1]] = LocalizationUtility::translate($option[0], $this->controllerContext->getRequest()->getControllerExtensionName());
                    }
                }
            }
            return $selectOptions;
        }

        /**
        * Resolve the dataMap for the given object
        * @param object $object The domain object to get the dataMap for
        * @return \TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMap
        */
        private function getDataMap($object) {
            $class = is_object($object) ? get_class($object) : $object;
            if (!isset($this->dataMaps[$class])) {
                $this->dataMaps[$class] = $this->dataMapper->getDataMap($class);
            }
            return $this->dataMaps[$class];    
        }
    }


?>