<?php

/**
 * WordPress Importer class for managing parsing of WXR files.
 */
class CPO_Companion_Parser {
	function parse( $file ) {
		// Attempt to use proper XML parsers first
		if ( extension_loaded( 'simplexml' ) ) {
			require_once 'class-cpo-companion-parser-simplexml.php';
			$parser = new CPO_Companion_Parser_SimpleXML;
			$result = $parser->parse( $file );

			// If SimpleXML succeeds or this is an invalid WXR file then return the results
			if ( ! is_wp_error( $result ) || 'SimpleXML_parse_error' != $result->get_error_code() ) {
				return $result;
			}
		} elseif ( extension_loaded( 'xml' ) ) {
			require_once 'class-cpo-companion-parser-xml.php';
			$parser = new CPO_Companion_Parser_XML;
			$result = $parser->parse( $file );

			// If XMLParser succeeds or this is an invalid WXR file then return the results
			if ( ! is_wp_error( $result ) || 'XML_parse_error' != $result->get_error_code() ) {
				return $result;
			}
		}

		require_once 'class-cpo-companion-parser-regex.php';
		// use regular expressions if nothing else available or this is bad XML
		$parser = new CPO_Companion_Parser_Regex;
		return $parser->parse( $file );
	}
}
