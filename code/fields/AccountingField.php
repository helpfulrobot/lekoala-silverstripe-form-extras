<?php

/**
 * A field that uses accounting for formatting
 *
 * @author Koala
 */
class AccountingField extends TextField
{

    public function extraClass()
    {
        return 'text '.parent::extraClass();
    }

    public function Field($properties = array())
    {
        FormExtraJquery::include_jquery();
        FormExtraJquery::include_accounting();
        Requirements::javascript(FORM_EXTRAS_PATH.'/javascript/AccountingField.js');

        return parent::Field($properties);
    }

    public function getPrecision()
    {
        return $this->getAttribute('data-precision');
    }

    public function setPrecision($value)
    {
        return $this->setAttribute('data-precision', $value);
    }
}