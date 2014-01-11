<?php 

### For REQUEST METHOD
if (!function_exists('is_post'))
{
	function is_post()
	{
		return Input::server('REQUEST_METHOD') == 'POST';
	}
}
