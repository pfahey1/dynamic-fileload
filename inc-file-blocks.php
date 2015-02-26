<?php 
    		//function to create include block for css files
    		function getCssBlock(){
    			$resource_block = "";
    			$base_dir=dirname(__FILE__).'/../css/';
    		
    			$directory_list=opendir($base_dir);
    			while(($cur_file=readdir($directory_list))!==false){
    				if(!in_array($cur_file,array('.','..','libs'))){
    					$resource_block .= '<link rel="stylesheet" href="../../css/'.$cur_file.'"/>'."\n";
    				}	
    			}
    				
    			echo "\n";
    			return $resource_block;
    		}
		    		
			//function to create include block for css library files
    		function getCssLibBlock(){
    			$resource_block = "";
    			$base_dir=dirname(__FILE__).'/../css/libs';
    		
    			$directory_list=opendir($base_dir);
    			while(($cur_file=readdir($directory_list))!==false){
    				if(!in_array($cur_file,array('.','..'))){
    					$files[]= $cur_file;
    				}	
    			}
    				
    			sort($files);
    			
    			foreach($files as $file) {
    				
    				$resource_block.= '<link rel="stylesheet" href="../../css/libs/'.$file.'"/>'."\n";
    				
    			}
    			
    			echo "\n";
    			return $resource_block;
    		}	
    		
    		//function to create include block for Javascript files
    		function getJsBlock(){
    			$resource_block = "";
    			$base_dir=dirname(__FILE__).'/../js/';
    		
    			$directory_list=opendir($base_dir);
    			while(($cur_file=readdir($directory_list))!==false){
    				if(!in_array($cur_file,array('.','..','libs'))){
    					
    					$resource_block.= '<script src="../../js/'.$cur_file.'"></script>'."\n";
    				}
    			}

    			echo "\n";
    			return $resource_block;
    		}
    		
    		//function to create include block for JavaScript library files
    		function getJsLibBlock(){
    			$resource_block = "";
    			$base_dir=dirname(__FILE__).'/../js/libs';
    		
    			$directory_list=opendir($base_dir);
    			while(($cur_file=readdir($directory_list))!==false){
    				if(!in_array($cur_file,array('.','..'))){
    					$files[]= $cur_file;
    				}
    			}
    		
    			sort($files);
    			 
    			foreach($files as $file) {
    		
    				$resource_block.= '<script src="../../js/libs/'.$file.'"></script>'."\n";
    		
    			}
    			
    			
    			echo "\n";
    			return $resource_block;
    		}
    		
    		//function to create include block for template files
    		function getTemplateBlock(){
    			$resource_block = "";
    			$base_dir=dirname(__FILE__).'/../templates/';
    		
    			$directory_list=opendir($base_dir);
    			while(($cur_file=readdir($directory_list))!==false){
    				if(!in_array($cur_file,array('.','..'))){
    					
    					$template_id= str_replace(".hbs","",$cur_file);
    					$resource_block.= '<script id="'.$template_id.'" type="text/x-handlebars-template">'."\n".file_get_contents($base_dir.''.$cur_file)."\n".'</script>'."\n";
    				}
    			}
    		
    			echo "\n";
    			return $resource_block;
    		}
    		
 		?>