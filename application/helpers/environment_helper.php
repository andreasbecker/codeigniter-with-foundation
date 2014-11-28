<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function is_production()
{
	return (ENVIRONMENT === 'production') ? true : false;
}

function is_development()
{
	return (ENVIRONMENT === 'development') ? true : false;
}

function is_staging()
{
	return (ENVIRONMENT === 'staging') ? true : false;
}
