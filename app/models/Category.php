<?php 

class Category extends Eloquent {
	/**
	*The database table used by the model
	*
	*@var string
	*/

	protected $table = 'categories';

	/**
	 *
	 *  @return
	 *
	 *	    array(
	 *		    '1' => 'Life',
	 *		    '2' => 'Programming'
	 *	    )
     *
	 */

	public static function categoryList( $indexBy = 'id' ) {
		$categories = Category::all();		

		$categoryList = [];
		foreach ($categories as $category) 
		{
			$categoryList[ (string)$category->$indexBy ] = $category->name;
		}

		return $categoryList;
	}	
}