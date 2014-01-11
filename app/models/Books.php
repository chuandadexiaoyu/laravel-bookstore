<?php 

	class Books extends Eloquent {
		/**
		*The database table used by the model
		*
		*@var string
		*/

		protected $table = 'books';

		public static function showBooksByCategory($id) {
			$books = DB::select('select * from books where category_id = $id');
			return $books;
		}
	}




