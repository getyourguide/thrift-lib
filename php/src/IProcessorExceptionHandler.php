<?php

interface IProcessorExceptionHandler
{
	/**
	 * Custom exception handler
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