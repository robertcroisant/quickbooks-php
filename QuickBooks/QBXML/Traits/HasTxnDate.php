<?php

trait HasTxnDate
{
    public function setFromTxnDate($date)
    {
        return $this->set('TxnDateRangeFilter FromTxnDate', $date);
    }

    public function getFromTxnDate()
    {
        return $this->get('TxnDateRangeFilter FromTxnDate');
    }

    public function setToTxnDate($date)
    {
        return $this->set('TxnDateRangeFilter ToTxnDate', $date);
    }

    public function getToTxnDate()
    {
        return $this->get('TxnDateRangeFilter ToTxnDate');
    }
}
