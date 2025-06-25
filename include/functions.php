<?php
	defined("_AST") or die("Access denied");
	function secure($input)
	{
		global $mysqli;
		
		$input=str_ireplace('ي','ی',$input);
		$input=str_ireplace('ك','ک',$input);
		
		
		$input=stripslashes($input);
		
		$input=$mysqli->real_escape_string($input);
		
		return $input;
	}
	
	function getRealIP(){
		return $_SERVER['REMOTE_ADDR'];
	}
	/*function text2url($text,$extention='.html'){
		$text=preg_replace('/\s+/','-',$text);
		return '-'.$text.$extention;
	}*/
	function text2url($text, $extention = '.html') {
		if (!is_string($text) || empty(trim($text))) {
			return 'no-title' . $extention;
		}
		
		// حذف تگ‌های HTML
		$text = strip_tags($text);
		
		// تبدیل فاصله‌ها به خط تیره
		$text = preg_replace('/\s+/u', '-', $text);
		
		// حذف کاراکترهای غیرمجاز (فقط حروف، اعداد، خط تیره)
		$text = preg_replace('/[^\p{Arabic}\p{L}\p{N}\-]/u', '', $text);
		
		// حذف خط تیره‌های اضافه از ابتدا و انتها
		$text = trim($text, '-');
		
		return $text . $extention;
	}
	
?>
