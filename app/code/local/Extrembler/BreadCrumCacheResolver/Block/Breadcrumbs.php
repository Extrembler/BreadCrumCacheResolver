<?php
/**
* @category Extrembler
* @package Extrembler_BreadCrumCacheResolver
* @author  Extrembler <gaurangpadhiyar1993@gmail.com>
*/
class Extrembler_BreadCrumCacheResolver_Block_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    /**
     * Get block cache life time
     *
     * @return null
    */
    public function getCacheLifetime()
    { 
        return null;
    }
}