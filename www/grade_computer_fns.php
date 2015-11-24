<?php  
 
 function write_log($content){
        $filename = 'debug_log.txt';		
		$content = $content."\r\n";	
		if(is_writable($filename)){	
			if(false == ($handle = fopen($filename, 'a'))) return "Error: can't open";		
			if(fwrite($handle, $content) === false) return "Error: can't write";					
			fclose($handle);		
		}
		else
			return "Error: no write permission";
}

?>