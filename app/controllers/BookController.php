<?php 
	class BookController extends BaseController {

		public function showBookList()
		{
			$allbook = Books::all();
			$site_title = 'Manage Books';

			return View::make('books.index', compact('site_title', 'allbook'));
		}

		public function createBook()
		{
			$site_title = "Add New Book";
			$categories = Category::categoryList();

			// $cate = Category::create();
			// $cate->categoryList()

			$book = new Books();
			if (is_post()) 
			{
				$book->title = Input::get('title');
				$book->author = Input::get('author');
				$book->summary = Input::get('summary');
				$book->price = Input::get('price');
				//$book->category_id = Input::get('category_id');
				//$book->cover = Input::file('cover');
				$file = Input::file('file');

				$destinationPath = public_path().'/covers/';
				$filename = $file->getClientOriginalName();

				$test = Input::file('file')->move($destinationPath, $filename);
				$book->cover = $filename;
				$book->save();
				return Redirect::to('admin/book-list');
			}

			return View::make('books.form', compact('site_title', 'book', 'categories'));
		}

		public function  editBook($id)
		{
			$site_title = "Edit Books";
			$categories = Category::categoryList();

			// $cate = Category::create();
			// $cate->categoryList()

			$book = Books::find($id);

			if (is_post()) 
			{
				$book->title = Input::get('title');
				$book->author = Input::get('author');
				$book->summary = Input::get('summary');
				$book->price = Input::get('price');
				$book->category_id = Input::get('category_id');
				//$book->cover = Input::file('cover');
				if ($file = Input::file('file')) {
					$destinationPath = public_path().'/covers/';
					$filename = $file->getClientOriginalName();
					$test = Input::file('file')->move($destinationPath, $filename);
					$book->cover = $filename;
				} else {
					$book->cover = $book->cover;
				}
				
				$book->save();
				return Redirect::to('admin/book-list');
			}

			return View::make('books.form', compact('site_title', 'book', 'categories'));	
		}

		public function delBook($id)
		{
			$book = Books::find($id);

			if (! is_null($book)) 
			{
				$book->delete();
			}

			return Redirect::to('admin/book-list');
		}
	}