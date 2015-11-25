<?php


function get_req_value($value_name,$method	=	'request',$def	=	'')
{
	$value	=	"";
	switch ($method)
	{
		case "get":
			$value	=	$_GET[$value_name];
			break;
		case "post":
			$value	=	$_POST[$value_name];
			break;
		default:
			$value	=	$_REQUEST[$value_name];
			break;
	}

	if(is_array($value))
	{
		while(list($key,$val)	=	each($value))
		{
			$val	=	ContentFilter($val);
			$val	=	addslashes($val);
			$val	=	trim($val);
			$value[$key]	=	$val;
		}

		return $value;
	}

	$value	=	ContentFilter($value);
	$value	=	addslashes($value);
	//$value	=	htmlentities($value);
	$value	=	trim($value);
	if($value	==	'')
	{
		return $def;
	}
	else
	{
		return $value;
	}
}


function ContentFilter($str)
{
	$str = trim($str);
	$str = preg_replace( '/[\a\f\e\0\t\x0B]/is', "", $str );
	$str = htmlspecialchars($str, ENT_QUOTES);
	$str = _TagFilter($str);
	$str = _CommonFilter($str);
	$str = _LineFilter($str);
	return $str;
}



function _TagFilter($str)
{
	$str = preg_replace( "/javascript/i" , "j&#097;v&#097;script", $str );
	$str = preg_replace( "/alert/i"      , "&#097;lert"          , $str );
	$str = preg_replace( "/about:/i"     , "&#097;bout:"         , $str );
	$str = preg_replace( "/onmouseover/i", "&#111;nmouseover"    , $str );
	$str = preg_replace( "/onclick/i"    , "&#111;nclick"        , $str );
	$str = preg_replace( "/onload/i"     , "&#111;nload"         , $str );
	$str = preg_replace( "/onsubmit/i"   , "&#111;nsubmit"       , $str );
	$str = preg_replace( "/<script/i"	 , "&#60;script"		 , $str );
	$str = preg_replace( "/document\./i" , "&#100;ocument."      , $str );

	return $str;
}

function _CommonFilter($str)
{

	$str = str_replace( "&#032;"			, " "			, $str );
	$str = preg_replace( "/\\\$/"			, "&#036;"		, $str );


	return $str;
}

function _LineFilter($str)
{
	return strtr($str, array("\r" => "", "\n" => "<br />"));
}



?>