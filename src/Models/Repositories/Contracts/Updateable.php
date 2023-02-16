<?php

namespace StellarWP\Models\Repositories\Contracts;

use StellarWP\Models\Model;

interface Updateable {
	/**
	 * Inserts a model record.
	 *
	 * @since 1.0.0
	 *
	 * @param Model $model
	 *
	 * @return Model
	 */
	public function update( Model $model ) : Model;
}