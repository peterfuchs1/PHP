<?php 
/**
 * @package core::form
 * @class Validator
 *
 * The abstract Validator class
 * pretends the core methods.
 *
 * @author Andreas Wilhelm
 * @version
 * Version 0.1, 13.02.2009
 * Version 0.2, 17.11.2010 (Updated documentation.)
 * Version 0.3, 18.11.2010 (Removed methods getError and setError.)
 * Version 0.4, 18.11.2010 (Removed class attributes errors and messages.)
 * Version 0.5, 19.11.2010 (Added default constructor and language support.)
 */
abstract class Validator {
	/**
	 * @protected
	 * The language object.
	 */
	protected $lang = null;

	/**
	 * @public
	 *
	 * The default constructor loads an
	 * object of the Language class, which
	 * offers multi language support.
	 *
	 * @param string Name of language file to be used.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 19.11.2010<br />
	 */
	public function __construct($langFile = "Validator.Errors.Lang.ini") {
		// Check if Language object was already loaded ...
		if( $this->lang === null ) {
			// ... and get an instance of it if not.
			$this->lang = Language::getInstance();
		}

		// Finally add the given language file.
		$this->lang->addLanguageTags($langFile);
	}

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
	 */
	abstract public function isValid($value);
}

?>

?>