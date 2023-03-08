<?php

namespace StellarWP\Models\Contracts;

use StellarWP\Models\ModelQueryBuilder;

/**
 * @since 1.0.0
 */
interface ModelFromQueryBuilderObject {
	/**
	 * @since 1.0.0
	 *
	 * @param $object
	 *
	 * @return Model
	 */
	public static function fromQueryBuilderObject( $object );
}
