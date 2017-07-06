<?php

namespace Picqer\Xero\Entities;

class Payment extends BaseEntity {

    protected $PaymentID;
    protected $Type;
    protected $Date;
    protected $Amount;
    protected $Reference;
    protected $PaymentType;
    protected $Status;
    protected $UpdatedDateUTC;
    protected $Invoice;

    protected function getForeignEntities()
    {
        return [
            'Invoice' => 'Invoice'
        ];
    }

    public function getPrimaryKey()
    {
        return 'PaymentID';
    }

    public function getEndpoint()
    {
        return '/payments';
    }

    public function getXmlName()
    {
        return 'Payment';
    }

}
