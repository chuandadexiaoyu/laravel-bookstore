<?php 
	class ShoppingCartController extends BaseController {

		public function ShowCart()
		{
			$site_title = "View Shopping Cart";
			return View::make('user.viewcart', compact('site_title'));
		}

	}