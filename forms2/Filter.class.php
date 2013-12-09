<?php

/**
* @package core::form
* @interface Filter
*
* The Filter interface..
*
* @author Andreas Wilhelm
* @version
* Version 0.1, 18.02.2009
* Version 0.2, 17.11.2010 (Updated documentation.)
*/
interface Filter {
   /**
    * @public
    *
    * Executes the filter.
    *
    * @param string Value to be filtered.
    *
    * @return The filtered.
    *
    * @author Andreas Wilhelm
    * @version
    * Version 0.1, 18.02.2009
    * Version 0.2, 17.11.2010 (Updated documentation.)
    */
   public function filter( $value );
}

?>