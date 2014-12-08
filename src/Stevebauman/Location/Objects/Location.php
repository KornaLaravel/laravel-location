<?php

namespace Stevebauman\Location\Objects;

class Location {
    
    public $countryName = '';
    
    public $countryCode = '';
    
    public $regionCode = '';
    
    public $regionName = '';
    
    public $cityName = '';
    
    public $zipCode = '';
    
    public $isoCode = '';
    
    public $postalCode = '';
    
    public $latitude = '';
    
    public $longitude = '';
    
    public $metroCode = '';
    
    public $areaCode = '';
    
    /*
     * Indicates if there was an issue gathering the location from the driver.
     * This is used for driver fallbacks
     */
    public $error = false;
    
}