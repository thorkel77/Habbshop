<?php

namespace GeekshopPriceAutoUpdater;

use Illuminate\Console\Command;

class Output
{
	protected static $command;

	public static function bind(Command $command)
	{
		static::$command = $command;
	}

	public static function line($text)
	{
		if (!is_null(static::$command)) {
			static::$command->line($text);
		}
	}

	public static function error($text)
	{
		if (!is_null(static::$command)) {
			static::$command->error($text);
		}
	}

	public static function info($text)
	{
		if (!is_null(static::$command)) {
			static::$command->info($text);
		}
	}
}
