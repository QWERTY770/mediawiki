<?php

namespace MediaWiki\Page\Hook;

use MediaWiki\Page\ImagePage;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "ImagePageShowTOC" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface ImagePageShowTOCHook {
	/**
	 * This hook is called when the file toc on an image page is generated.
	 *
	 * @since 1.35
	 *
	 * @param ImagePage $page
	 * @param string[] &$toc Array of `<li>` strings
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onImagePageShowTOC( $page, &$toc );
}
