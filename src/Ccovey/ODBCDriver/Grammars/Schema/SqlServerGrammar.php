<?php namespace Ccovey\ODBCDriver\Grammars\Schema;

use Illuminate\Database\Schema\Grammars\SqlServerGrammar AS IlluminateSqlServerGrammar;
use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Blueprint;

class SqlServerGrammar extends IlluminateSqlServerGrammar {

	/**
	 * Create the column definition for a text type.
	 *
	 * @param  \Illuminate\Support\Fluent  $column
	 * @return string
	 */
	protected function typeText(Fluent $column)
	{
		return 'ntext';
	}

	/**
	 * Create the column definition for a medium text type.
	 *
	 * @param  \Illuminate\Support\Fluent  $column
	 * @return string
	 */
	protected function typeMediumText(Fluent $column)
	{
		return 'ntext';
	}

	/**
	 * Create the column definition for a long text type.
	 *
	 * @param  \Illuminate\Support\Fluent  $column
	 * @return string
	 */
	protected function typeLongText(Fluent $column)
	{
		return 'ntext';
	}
}
