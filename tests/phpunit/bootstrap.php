<?php

/**
 * PHPUnit bootstrap file.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Testing
 */

if ( PHP_SAPI !== 'cli' ) {
	die( 'This file is only meant to be executed indirectly by PHPUnit\'s bootstrap process!' );
}

define( 'MEDIAWIKI', true );
define( 'MW_PHPUNIT_TEST', true );
define( 'MW_ENTRY_POINT', 'cli' );

/** @internal Should only be used in MediaWikiIntegrationTestCase::initializeForStandardPhpunitEntrypointIfNeeded() */
define( 'MW_PHPUNIT_UNIT', true );

$IP = realpath( __DIR__ . '/../../' );
require_once "$IP/tests/common/TestSetup.php";

// We don't use a settings file here but some code still assumes that one exists
TestSetup::requireOnceInGlobalScope( "$IP/includes/BootstrapHelperFunctions.php" );
wfDetectLocalSettingsFile( $IP );
define( 'MW_INSTALL_PATH', $IP );

// these variables must be defined before setup runs
$GLOBALS['IP'] = $IP;

TestSetup::snapshotGlobals();

// Faking in lieu of Setup.php
$GLOBALS['wgScopeTest'] = 'MediaWiki Setup.php scope test';
$GLOBALS['wgCommandLineMode'] = true;
$GLOBALS['wgAutoloadClasses'] = [];

TestSetup::requireOnceInGlobalScope( "$IP/includes/AutoLoader.php" );
TestSetup::requireOnceInGlobalScope( "$IP/tests/common/TestsAutoLoader.php" );
TestSetup::requireOnceInGlobalScope( "$IP/includes/Defines.php" );
TestSetup::requireOnceInGlobalScope( "$IP/includes/DefaultSettings.php" );
TestSetup::requireOnceInGlobalScope( "$IP/includes/DevelopmentSettings.php" );
TestSetup::requireOnceInGlobalScope( "$IP/includes/GlobalFunctions.php" );

TestSetup::applyInitialConfig();
MediaWikiCliOptions::initialize();

// Since we do not load settings, expect to find extensions and skins
// in their respective default locations.
$GLOBALS['wgExtensionDirectory'] = "$IP/extensions";
$GLOBALS['wgStyleDirectory'] = "$IP/skins";

// Populate classes and namespaces from extensions and skins present in filesystem.
$directoryToJsonMap = [
	$GLOBALS['wgExtensionDirectory'] => 'extension*.json',
	$GLOBALS['wgStyleDirectory'] => 'skin*.json'
];
foreach ( $directoryToJsonMap as $directory => $jsonFilePattern ) {
	foreach ( new GlobIterator( $directory . '/*/' . $jsonFilePattern ) as $iterator ) {
		$jsonPath = $iterator->getPathname();
		// ExtensionRegistry->readFromQueue is not used as it checks extension/skin
		// dependencies, which we don't need or want for unit tests.
		$json = file_get_contents( $jsonPath );
		$info = json_decode( $json, true );
		$dir = dirname( $jsonPath );
		ExtensionRegistry::exportAutoloadClassesAndNamespaces( $dir, $info );
		ExtensionRegistry::exportTestAutoloadClassesAndNamespaces( $dir, $info );
	}
}
