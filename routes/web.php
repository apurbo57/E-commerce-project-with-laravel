<?php

use Illuminate\Support\Facades\Route;

// fontend routes //

Route::get('/','homeController@index')->name('index');
Route::get('/get-productByCat/{id}','homeController@getProductByCat')->name('get-productByCat');
Route::get('/get-productBySubCat/{id}','homeController@getProductBySubCat')->name('get-productBySubCat');
Route::get('/get-productBy-Brand/{id}','homeController@getProductByBrand')->name('productBy-Brand');
Route::get('/product/{id}','homeController@product')->name('product');
// cart routes
Route::post('/add-to-cart','cartController@add_to_cart')->name('add-to-cart');
Route::get('/show-cart','cartController@show_cart')->name('show-cart');
Route::get('/cart-delete/{id}','cartController@cart_delete')->name('cart-delete');
Route::post('/update-cart','cartController@update_cart')->name('update-cart'); 
// cheakout
Route::get('/login-cheak','cheakoutController@login_cheak')->name('login-cheak');
Route::get('/cheak-logout','cheakoutController@cheak_logout')->name('cheak-logout');
Route::post('/customer-registration','cheakoutController@customer_registration')->name('customer-registration');
Route::post('/customer-login','cheakoutController@customer_login')->name('customer-login');
Route::get('/cheakout','cheakoutController@cheakout')->name('cheakout');
Route::post('/save-shipping-details','cheakoutController@save_shipping_details')->name('save-shipping-details');
Route::get('/payment','cheakoutController@payment')->name('payment');
Route::post('/order-place','cheakoutController@order_place')->name('order-place');
//manage order
Route::get('/manage-order','orderController@manage_order')->name('manage-order');
Route::get('/view-order/{id}','orderController@view_order')->name('view-order');


// backend routes //

Route::get('/admin','adminController@index');
Route::post('/admin-dashboard','adminController@dashboard')->name('admin-dashboard');
Route::get('/dashboard','adminController@show_dash')->name('dashboard');


//brand controller
Route::get('/add-Brand','brandController@addBrand')->name('add-Brand');
Route::post('/save-Brand','brandController@saveBrand')->name('save-Brand');
Route::get('/all-Brand','brandController@allBrand')->name('all-Brand');
Route::get('/active-status/{id}','brandController@activeStatus')->name('active-status');
Route::get('/inactive-status/{id}','brandController@inactiveStatus')->name('inactive-status');
Route::get('/edit-brand/{id}','brandController@editBrand')->name('edit-brand');
Route::post('/update-brand','brandController@updateBrand')->name('update-brand');
Route::get('/delete-brand/{id}','brandController@deleteBrand')->name('delete-brand');

//category controller
Route::get('/add-category','categoryController@addCategory')->name('add-category');
Route::post('/save-category','categoryController@saveCategory')->name('save-category');
Route::get('/edit-category/{id}','categoryController@editCategory')->name('edit-category');
Route::get('/active-status/{id}','categoryController@activeStatus')->name('active-status');
Route::get('/inactive-status/{id}','categoryController@inactiveStatus')->name('inactive-status');
Route::post('/update-category','categoryController@updateCategory')->name('update-category');
Route::get('/delete-category/{id}','categoryController@deleteCategory')->name('delete-category');
//sub category
Route::get('/add-Subcategory','categoryController@addSubCategory')->name('add-Subcategory');
Route::post('/save-subCategory','categoryController@saveSubCategory')->name('save-subCategory');
Route::get('/edit-subcategory/{id}','categoryController@editSubCategory')->name('edit-subcategory');
Route::get('/sub_active-status/{id}','categoryController@SubactiveStatus')->name('sub_active-status');
Route::get('/sub_inactive-status/{id}','categoryController@SubinactiveStatus')->name('sub_inactive-status');
Route::post('/update-subcategory','categoryController@updateSubCategory')->name('update-subcategory');
Route::get('/delete-subcategory/{id}','categoryController@deleteSubCategory')->name('delete-subcategory');
Route::get('/all-category','categoryController@allCategory')->name('all-category');

//product controller
Route::get('/add-product','productController@addproduct')->name('add-product');
Route::post('/save-product','productController@saveProduct')->name('save-product');
Route::get('/all-product','productController@allProduct')->name('all-product');
Route::get('/p_active-status/{id}','productController@activeStatus')->name('p_active-status');
Route::get('/p_inactive-status/{id}','productController@inactiveStatus')->name('p_inactive-status');
Route::get('/edit-product/{id}','productController@editProduct')->name('edit-product');
Route::post('/update-product','productController@updateProduct')->name('update-product');
Route::get('/delete-product/{id}','productController@deleteProduct')->name('delete-product');

//sliders controller
Route::get('/add-slider','sliderController@addSlider')->name('add-slider');
Route::post('/save-slider','sliderController@saveSlider')->name('save-slider');
Route::get('/all-slider','sliderController@allSlider')->name('all-slider');
Route::get('/s_active-status/{id}','sliderController@activeStatus')->name('s_active-status');
Route::get('/s_inactive-status/{id}','sliderController@inactiveStatus')->name('s_inactive-status');
Route::get('/edit-slider/{id}','sliderController@editSlider')->name('edit-slider');
Route::post('/update-slider','sliderController@updateSlider')->name('update-slider');
Route::get('/delete-slider/{id}','sliderController@deleteSlider')->name('delete-slider');



Route::get('/logout', 'superAdminController@logout')->name('logout');

