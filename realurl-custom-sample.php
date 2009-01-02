<?php

/**
 * RealURL alternate rootpage_id and multiple domain setup example
 *
 * multiple domain setup
 * 	Update domains
 * 	Update rootpage_id
 *	The root page id is the uid of your domain home in the TYPO3 page tree
 *
 * @author Michael Cannon <michael@cannonbose.com>
 * @version $Id: realurl-custom-sample.php,v 1.1 2008/04/02 19:57:18 cannon Exp $
 */


// Edit rootpage_id to your website's root page UID
if ( false )
{
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT']['pagePath']['rootpage_id'] = 1;
}

// edit for single subdomains
if ( false )
{
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['subdomain.example.com'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['subdomain.example.com']['pagePath']['rootpage_id'] = 357;
}

// edit for multiple domains
if ( false )
{
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['www.example.com'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['www.example.com']['pagePath']['rootpage_id'] = 45;
	$TYPO3_CONF_VARS['EXTCONF']['realurl']['example.com'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['www.example.com'];
}

?>
