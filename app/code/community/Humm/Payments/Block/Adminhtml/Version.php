<?php

/**
 * Class Humm_Payments_Block_Adminhtml_Version
 */
class Humm_Payments_Block_Adminhtml_Version extends Mage_Adminhtml_Block_System_Config_Form_Field {
    protected function _getElementHtml( Varien_Data_Form_Element_Abstract $element ) {
        return (string) Mage::getConfig()->getNode()->modules->Humm_Payments->version;
    }
}