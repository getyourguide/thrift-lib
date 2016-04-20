<?php

interface IProcessorErrorHandler
{
	/**
	 * Custom error handling function
	 *
	 * It may or may not re-throw the exception
	 *
	 * @param $functionName
	 * @param Exception $exception
	 * @return void
	 * @throws Exception
	 */
	public function handle($functionName, Exception $exception);
}