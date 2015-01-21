<?php namespace Ccovey\ODBCDriver\Grammars;

use Illuminate\Database\Query\Grammars\SqlServerGrammar;

class SqlServerODBCGrammar extends SqlServerGrammar {
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
