<?php

namespace Picqer\Xero\Entities;

class CreditNote extends BaseEntity {

    protected $CreditNoteID;
    protected $CreditNoteNumber;
    protected $LineAmountTypes;
    protected $Type;
    protected $Date;
    protected $Status;
    protected $SubTotal;
    protected $TotalTax;
    protected $Total;

    protected $LineItems = [];
    protected $Contact = [];

    protected function getChildEntities()
    {
        return [
            'LineItems' => 'InvoiceLineItem',
        ];
    }

    protected function getForeignEntities()
    {
        return [
            'Contact' => 'Contact'
        ];
    }

    public function getPrimaryKey()
    {
        return 'CreditNoteID';
    }

    public function getEndpoint()
    {
        return '/CreditNotes';
    }

    public function getXmlName()
    {
        return 'CreditNote';
    }
    
    public function addLineItem($lineitem)
    {
        $this->LineItems[] = $lineitem;
    }
}
