<?php

trait QuickBooks_QBXML_Traits_HasModifiedDate
{
    public function setFromModifiedDate($date)
    {
        return $this->set('ModifiedDateRangeFilter FromModifiedDate', $date);
    }

    public function getFromModifiedDate()
    {
        return $this->get('ModifiedDateRangeFilter FromModifiedDate');
    }

    public function setModifiedToDate($date)
    {
        return $this->set('ModifiedDateRangeFilter ToModifiedDate', $date);
    }

    public function getToModifiedDate()
    {
        return $this->get('ModifiedDateRangeFilter ToModifiedDate');
    }
}
