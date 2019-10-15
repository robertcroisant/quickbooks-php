<?php

trait QuickBooks_QBXML_Traits_HasIncludeLineItems
{
    public function getIncludeLineItems()
    {
        return $this->get('IncludeLineItems');
    }

    public function setIncludeLineItems($includeLine)
    {
        return $this->set('IncludeLineItems', $includeLine);
    }
}
