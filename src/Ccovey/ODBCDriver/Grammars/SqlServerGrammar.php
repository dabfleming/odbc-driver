<?php namespace Ccovey\ODBCDriver\Grammars;

use Illuminate\Database\Query\Grammars\SqlServerGrammar AS IlluminateSqlServerGrammar;

class SqlServerGrammar extends IlluminateSqlServerGrammar {
	/**
	 * Get the format for database stored dates.
	 *
	 * @return string
	 */
	public function getDateFormat()
	{
		return 'Y-m-d H:i:s.u';
	}
}
