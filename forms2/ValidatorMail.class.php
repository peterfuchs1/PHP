<?php

/**
* @package core::form
* @class ValidatorMail
*
* The ValidatorMail class
* checks if a given input
* is valid email address.
* Code found at:
* http://iamcal.com/publish/articles/php/parsing_email
*
* @author Andreas Wilhelm
* @version
* Version 0.1, 13.02.2009
* Version 0.2, 17.11.2010 (Updated documentation.)
* Version 0.3, 18.11.2010 (Removed constructor.)
* Version 0.4, 19.11.2010 (Added exception handling.)
*/
class ValidatorMail extends Validator {
   /**
    * @public
    *
    * Checks if a value is valid.
    *
    * @param string The value.
    *
    * @author Andreas Wilhelm
    * @version
    * Version 0.1, 30.08.2009
    * Version 0.2, 17.11.2010 (Updated documentation.)
    * Version 0.3, 19.11.2010 (Added exception handling.)
    */
   public function isValid($value) {
      // Declare mail pattern.
      $qtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
      $dtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
      $atom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c';
      $atom .= '\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
      $quoted_pair = '\\x5c[\\x00-\\x7f]';
      $domain_literal = "\\x5b($dtext|$quoted_pair)*\\x5d";
      $quoted_string = "\\x22($qtext|$quoted_pair)*\\x22";
      $domain_ref = $atom;
      $sub_domain = "($domain_ref|$domain_literal)";
      $word = "($atom|$quoted_string)";
      $domain = "$sub_domain(\\x2e$sub_domain)*";
      $local_part = "$word(\\x2e$word)*";
      $addr_spec = "$local_part\\x40$domain";
    
      // Check if mail address is valid.
      if( !preg_match("!^$addr_spec$!", $email) ) {
         throw new ValidatorException($this->lang->get("Validator.Error.Mail"));
      }
   }
}

?>
