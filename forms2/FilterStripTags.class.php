<?php
/**
* @package core::form
* @class FilterStripTags
*
* The FilterStripTags class implements a filter
* that removes all code from an input value.
*
* @author Andreas Wilhelm
* @version
* Version 0.1, 13.02.2009
* Version 0.2, 17.11.2010 (Updated documentation.)
*/
class FilterStripTags implements Filter {
   /**
    * @public
    *
    * Removes all code from the input value.
    *
    * @param string Value to be filtered.
    *
    * @return The filtered.
    *
    * @author Andreas Wilhelm
    * @version
    * Version 0.1, 13.02.2009
    * Version 0.2, 17.11.2010 (Updated documentation.)
    */
   public function filter($value) {
      return strip_tags($value);
   }
}

?>