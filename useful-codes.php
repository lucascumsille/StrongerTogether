<h1 class="bonito"><?php
			$title=get_the_title();
			$categories=get_the_category(); // or use get_categories() for all categories

			if(!empty($categories)) :
				foreach($categories as $category) :
				if(strpos($title,$category->name)===false)
					$title.=', '.$category->name;
				endforeach;
			endif;
			echo $title;
			
?></h1>