<?php
	class Head{
		/**
		 * @var array
		 */
		private static $scripts=array();
		/**
		 * @var array
		 */
		private static $stylesheets=array();
		
		/**
		 * @param $path
		 */
		static function addScript($path){
			if (!in_array($path,self::$scripts))
				self::$scripts[]=$path;
		}
		
		/**
		 * @param $path
		 */
		static function addStylesheet($path,$media="all"){
			$media=strtolower($media);
			
			foreach(self::$stylesheets as $item)
				if ($item['Path']==$path)
					return;
			
			//add to array
			self::$stylesheets[]=array(
				"Path"=>$path,
				"Media"=>$media
			);
			
		}
		
		/**
		 * make html head
		 */
		static function makeHead(){
			self::makeHeadStylesheets();
			echo "\n\t";
			self::makeHeadScripts();
		}
		
		/**
		 * make scripts
		 */
		static function makeHeadScripts(){
			foreach(self::$scripts as $item){
				echo "<script src='$item'></script>\n\t";
			}
		}
		
		/**
		 * make stylesheets
		 */
		/*
		static function makeHeadStylesheets(){
			
			foreach (self::$stylesheets as $item){
				$media='';
				//بعدا باید بررسی شود که آدرس لوکال خودمون هست یا نه
				// بعداباید اصلاح شود
				if (file_exists($item['Path'])) {
					$time = filemtime($item['Path']);
				} else {
					$time = time(); // یا مقدار پیش‌فرض
				}
				
				if($item['Media']!='all')
					$media=' media="'.$item['Media'].'"';
				
				echo "<link rel='stylesheet' href='".$item['Path'].'?'.$time."'".$media.">\n\t";
				
			}
		}
		*/
		static function makeHeadStylesheets() {
			foreach (self::$stylesheets as $item) {
				$media = '';
				$filePath = $_SERVER['DOCUMENT_ROOT'] . $item['Path'];
				
				if (file_exists($filePath)) {
					$time = filemtime($filePath);
				} else {
					$time = time(); // یا مثلاً: $time = '';
				}
				
				if ($item['Media'] != 'all') {
					$media = ' media="' . $item['Media'] . '"';
				}
				
				echo "<link rel='stylesheet' href='" . $item['Path'] . '?' . $time . "'" . $media . ">\n\t";
			}
		}
	}
?>