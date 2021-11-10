<?php // phpcs:ignore

namespace ZipWP;

class ZipWP {

	public static function run_script() {
		echo shell_exec( 'bash ./vendor/zip-wp/src/ZipWP/zip.sh' ); // phpcs:ignore
	}
}
