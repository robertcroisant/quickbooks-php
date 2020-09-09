<?php

trait QuickBooks_QBXML_Traits_HasModifiedDate
{

    public function setModifiedDateRangeFilterFromModifiedDate($date)
    {
        return $this->set('ModifiedDateRangeFilter FromModifiedDate', $date);
    }

    public function getModifiedDateRangeFilterFromModifiedDate()
    {
        return $this->get('ModifiedDateRangeFilter FromModifiedDate');
    }

    public function setFromModifiedDate($date)
    {
        return $this->set('FromModifiedDate', $date);
    }

    public function getFromModifiedDate()
    {
        return $this->get('FromModifiedDate');
    }

    public function setModifiedDateRangeFilterToModifiedDate($date)
    {
        return $this->set('ModifiedDateRangeFilter ToModifiedDate', $date);
    }

    public function getModifiedDateRangeFilterToModifiedDate()
    {
        return $this->get('ModifiedDateRangeFilter ToModifiedDate');
    }

    public function setToModifiedDate($date)
    {
        return $this->set('ToModifiedDate', $date);
    }

    public function getToModifiedDate()
    {
        return $this->get('ToModifiedDate');
    }
}
