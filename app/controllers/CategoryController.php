<?php 
	class CategoryController extends BaseController {

		public function showList()
		{
			$categories = Category::all();
			$site_title = 'Manage Categories';

			return View::make('categories.index', compact('site_title', 'categories'));
		}

		public function createCategory()
		{
			$site_title = 'Create Category';
			$category = new Category();
			if (is_post()) 
			{
				$category->name = Input::get('name');
				$category->remark = Input::get('remark');
				$category->save();
				
				return Redirect::to('admin/cat-list');
			}

			return View::make('categories.form', compact('site_title', 'category'));
		}

		public function editCategory($id)
		{
			$site_title = 'Edit Category';

			$category = Category::find($id);

			if (is_post()) 
				{
					$category->name = Input::get('name');
					$category->remark = Input::get('remark');
					$category->save();

					return Redirect::to('admin/cat-list');
				}				
			return View::make('categories.form',compact('site_title', 'category'));
		}

		public function delete($id)
		{
			$category = Category::find($id);

			if(! is_null($category))
			{
				$category->delete();
			}

			return Redirect::to('/admin/cat-list');
		}

	}
