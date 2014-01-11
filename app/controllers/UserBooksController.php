<?php 
	class UserBooksController extends BaseController {
		public function showBooks() {
			$allbooks = Books::all();
			$all_categories = Category::all();
			$site_title = 'Hello Store';

			$this->shorpingCart();

			return View::make('user.index', compact('site_title', 'allbooks', 'all_categories', 'cart'));
		}

		public function showByCategory($category_id) {
			$book = Books::find($category_id);
			if (! is_null($book)) 
			{
				var_dump($book->name);	
			} else
			{
				echo "Bye Bye";
			}

			
			//return View::make('user.category', compact('book'));
		}

		public function shorpingCart() {
			
		}
	}


