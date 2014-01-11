I write a book store website. I create categorized list and when user clicks a category I want show by category name.So, I create a Route like that

    Route::any('/Category/{category_id}', 'UserBooksController@showByCategory');

And I create a UserBooksController and showByCategory function like that

    public function showByCategory($category_id) {
			$book = Books::find($category_id);
			var_dump($book);
		}

But I got `NULL` result. 

What I was wrong and how I can create like click category and show by category_id