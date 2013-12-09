<?php 

/**
 * @package core::language
 * @class Language
 *
 * The Language class enables the programmer
 * to develop multi language websites. The
 * translation parameters are stored within an
 * *.ini file grouped by the languages supported
 * by the current application. The current language
 * is predefined but could also be set by the user
 * using a drop-down or something else.
 * @see ArrayAccess
 * @link http://php.net/manual/en/class.arrayaccess.php
 *
 * @author Andreas Wilhelm
 * @version
 * Version 0.1, 14.02.2010
 * Version 0.2, 25.05.2010 (Updated to singleton)<br />
 * Version 0.3, 25.05.2010 (ArrayAccess interface implemented)<br />
 * Version 0.4, 25.05.2010 (Updated method addLanguageTags)<br />
 */
class Language implements ArrayAccess {

	/**
	 * @private
	 * The current class instance.
	 */
	private static $instance = null;

	/**
	 * @private
	 * Holds the indicator of the current language.
	 */
	private $lang = null;

	/**
	 * @private
	 * Holds the indicator of the default language.
	 */
	private $defaultLang = null;

	/**
	 * @private
	 * Holds all language tags.
	 */
	private $langTags = null;

	/**
	 * @public
	 *
	 * Returns an instance of the Language class.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010<br />
	 */
	static public function getInstance() {
		// Check if an instance already exists ...
		if( self::$instance === null ) {
			// ... and create one if not.
			self::$instance = new self;
		}

		// Return the instance.
		return self::$instance;
	}

	/**
	 * @private
	 *
	 * The default constructor assigns the default
	 * and the current language.
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 14.02.2010
	 * Version 0.2, 21.05.2010 (Updated to singleton)<br />
	 */
	private function __construct() {

		// Assign the default ...
		if( $this->defaultLang === null) {
			$this->defaultLang = 'en';
		}

		// ... and the current language.
		if( $this->lang === null ) {
			$this->lang = $this->defaultLang;
		}

		// And initialize the language stack.
		if( $this->langTags === null ) {
			$this->langTags = array();
		}
	}

	/**
	 * @private
	 *
	 * Avoid the cloning of this class.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010 <br />
	 */
	private function __clone() {}

	/**
	 * @public
	 *
	 * Sets the default language.
	 *
	 * @param string $lang The language identifier.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 14.02.2010
	 */
	public function setDefault($lang) {
		if( $this->lang == $this->defaultLang ) {
			$this->lang = $lang;
		}

		$this->defaultLang = $lang;
	}

	/**
	 * @public
	 *
	 * Sets the current language.
	 *
	 * @param string $lang The language identifier.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 14.02.2010
	 */
	public function setLanguage($lang) {
		$this->lang = $lang;
	}

	/**
	 * @public
	 *
	 * Loads all language tags from a given configuration
	 * file and adds them to an array.
	 *
	 * @param string $config The language file.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 14.02.2010
	 * Version 0.4, 25.05.2010 (Reimplemented the merging of arrays)<br />
	 */
	public function addLanguageTags($config) {
		// Check if the given language file exists, ...
		if( file_exists($config) ) {
			// ... load the language configuration ...
			$tempLangTags = parse_ini_file($config, true);

			// ... and add them to the public language tag array.
			foreach($tempLangTags as $language => $tags) {
				foreach($tags as $key => $tag) {
					// Check if error is already set ...
					if( !isset($this->langTags[$language][$key]) ) {
						// ... and append it if not.
						$this->langTags[$language][$key] = $tag;
					}
				}
			}
		}

		// If the file cannot be loaded, ...
		else {
			// ... throw an exception.
			throw new LanguageException('Failed to open ' . $config);
		}
	}

	/**
	 * @public
	 *
	 * Returns the text for the given language tag
	 * in the current language if available. Otherwise
	 * it returns the default value.
	 *
	 * @param string $langTag The language tag.
	 * @return The text in the current language.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 14.02.2010
	 */
	public function get($langTag) {
		// Check if the tag for the current language exists ...
		if( isset($this->langTags[$this->lang][$langTag]) ) {
			return $this->langTags[$this->lang][$langTag];
		}

		else if( isset($this->langTags[$this->defaultLang][$langTag]) ) {
			return $this->langTags[$this->defaultLang][$langTag];
		}

		return "";
	}

	/**
	 * @public
	 *
	 * Validates if the language tag exists within the current
	 * language configuration.
	 *
	 * @param string $offset The language tag.
	 * @return True or false.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010
	 */
	public function offsetExists($offset) {
		return isset($this->langTags[$this->lang][$offset]) ? true : false;
	}

	/**
	 * @public
	 *
	 * Returns the text for the given language tag
	 * in the current language if available. Otherwise
	 * it returns the default value.
	 *
	 * @param string $offset The language tag.
	 * @return The text in the current language.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010
	 */
	public function offsetGet($offset) {
		return $this->get($offset);
	}

	/**
	 * @public
	 *
	 * Just a placeholder required by the
	 * ArrayAccess interface.
	 *
	 * @param string $offset The language tag.
	 * @param string $value The new value of the language tag.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010
	 */
	public function offsetSet($offset, $value) {}

	/**
	 * @public
	 *
	 * Just a placeholder required by the
	 * ArrayAccess interface.
	 *
	 * @param string $offset The language tag.
	 *
	 * @author Andreas Wilhelm
	 * @version
	 * Version 0.1, 25.05.2010
	 */
	public function offsetUnset($offset) {}
}

?>
?>