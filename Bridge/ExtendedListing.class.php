<?php
require_once 'Listing.class.php';

class ExtendedListing extends Listing
{
    function __construct($data_source)
    {
        parent::__construct($data_source);
    }

    function readWithEncode() {
        return htmlspecialchars($this->read(), ENT_QUOTES, mb_internal_encoding());
    }

}