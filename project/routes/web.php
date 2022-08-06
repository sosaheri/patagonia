<?php


Route::get('location/state/ajax/{id}','Admin\OtherController@getAjax');
Route::get('location/state/update/{id}','Admin\OtherController@updateState');

Route::prefix('admin')->group(function() {
//------------- Admin Login Section -------------------------------------------//
  Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
  Route::get('/forgot', 'Admin\LoginController@showForgotForm')->name('admin.forgot');
  Route::post('/forgot', 'Admin\LoginController@forgot')->name('admin.forgot.submit');
  Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
//------------- Admin Login Section End-------------------------------------------//

//------------- Admin Profile Section -------------------------------------------//
  Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
  Route::get('/profile', 'Admin\DashboardController@profile')->name('admin.profile');
  Route::post('/profile/update', 'Admin\DashboardController@profileupdate')->name('admin.profile.update');
  Route::get('/password', 'Admin\DashboardController@passwordreset')->name('admin.password');
  Route::post('/password/update', 'Admin\DashboardController@changepass')->name('admin.password.update');
//------------------------------- Admin Login Section End -------------------------------------------//


//--------------------------------- ADMIN USER MESSAGE SECTION -----------------------------//
  Route::get('/messages/datatables', 'Admin\MessageController@datatables')->name('admin-message-datatables');
  Route::get('/messages', 'Admin\MessageController@index')->name('admin-message-index');
  Route::get('/message/{id}', 'Admin\MessageController@message')->name('admin-message-show');
  Route::get('/message/load/{id}', 'Admin\MessageController@messageshow')->name('admin-message-load');
  Route::post('/message/post', 'Admin\MessageController@postmessage')->name('admin-message-store');
  Route::get('/message/{id}/delete', 'Admin\MessageController@messagedelete')->name('admin-message-delete');
  Route::post('/user/send/message', 'Admin\MessageController@usercontact')->name('admin-send-message');
//--------------------------------- ADMIN USER MESSAGE SECTION -----------------------------//


// -------------------------------- ADMIN NOTIFICATION SECTION -----------------------------//
  Route::get('/conv/notf/show', 'Admin\NotificationController@conv_notf_show')->name('conv-notf-show');
  Route::get('/conv/notf/count','Admin\NotificationController@conv_notf_count')->name('conv-notf-count');
  Route::get('/conv/notf/clear','Admin\NotificationController@conv_notf_clear')->name('conv-notf-clear');
// -------------------------------- ADMIN NOTIFICATION SECTION END -----------------------------//

// ------------------------ ADMIN NOTIFICATION SECTION ....................//
  Route::get('notification/count','Admin\NotificationController@notf_count')->name('notification-count');
  Route::get('notification/show','Admin\NotificationController@notf_show')->name('order-notf-show');
  Route::get('notification/clear','Admin\NotificationController@notf_clear')->name('order-notf-clear');
// ------------------------- ADMIN NOTIFICATION SECTION END ....................//




Route::get('/data/bulk/delete', 'Admin\BulkDeleteController@bulkdelete')->name('admin.bulk.delete');


Route::group(['middleware'=>'permissions:Hotel Section'],function(){

// ----------------------------- HOTEL ATTRIBUTES SECTION START --------------------------------------//
  Route::get('/hotel/attribute/datatables','Admin\HotelAttrController@datatables')->name('admin-hotelattr-datatables');
  Route::get('/hotel/attribute','Admin\HotelAttrController@index')->name('admin-hotelattr-index');
  Route::get('/hotel/attribute/create', 'Admin\HotelAttrController@create')->name('admin-hotelattr-create');
  Route::post('/hotel/attribute/create', 'Admin\HotelAttrController@store')->name('admin-hotelattr-store');
  Route::get('/hotel/attribute/edit/{id}', 'Admin\HotelAttrController@edit')->name('admin-hotelattr-edit');
  Route::post('/hotel/attribute/update/{id}', 'Admin\HotelAttrController@update')->name('admin-hotelattr-update');
  Route::get('/hotel/attribute/delete/{id}', 'Admin\HotelAttrController@destroy')->name('admin-hotelattr-delete');
// ----------------------------- HOTEL ATTRIBUTES SECTION END --------------------------------------//


// ----------------------------- HOTEL ATTRIBUTES SECTION START --------------------------------------//
  Route::get('/hotel/attribute/trem/datatables/{id}','Admin\AttrTremController@datatables')->name('admin-attrtrem-datatables');
  Route::get('/hotel/attribute/trem/attributes/{id}','Admin\AttrTremController@index')->name('admin-attrtrem-index');
  Route::post('/hotel/attribute/trem/store', 'Admin\AttrTremController@store')->name('admin-attrtrem-store');
  Route::get('/hotel/attribute/trem/edit/{id}', 'Admin\AttrTremController@edit')->name('admin-attrtrem-edit');
  Route::post('/hotel/attribute/trem/update/{id}', 'Admin\AttrTremController@update')->name('admin-attrtrem-update');
  Route::get('/hotel/attribute/trem/delete/{id}', 'Admin\AttrTremController@destroy')->name('admin-attrtrem-delete');
// ----------------------------- HOTEL ATTRIBUTES SECTION END --------------------------------------//

  // ----------------------------- HOTEL ROOM ATTRIBUTES SECTION START --------------------------------------//
  Route::get('/room/attributes/datatables','Admin\HotelRoomAttrController@datatables')->name('admin-roomattr-datatables');
  Route::get('/room/attributes','Admin\HotelRoomAttrController@index')->name('admin-roomattr-index');
  Route::get('/room/attributes/create', 'Admin\HotelRoomAttrController@create')->name('admin-roomattr-create');
  Route::post('/room/attributes/store', 'Admin\HotelRoomAttrController@store')->name('admin-roomattr-store');
  Route::get('/room/attributes/edit/{id}', 'Admin\HotelRoomAttrController@edit')->name('admin-roomattr-edit');
  Route::post('/room/attributes/update/{id}', 'Admin\HotelRoomAttrController@update')->name('admin-roomattr-update');
  Route::get('/room/attributes/delete/{id}', 'Admin\HotelRoomAttrController@destroy')->name('admin-roomattr-delete');
  // ----------------------------- HOTEL ROOM ATTRIBUTES SECTION END --------------------------------------//




// ----------------------------- HOTEL ATTRIBUTES SECTION START --------------------------------------//
  Route::get('/hotel/room/datatables/{id}','Admin\HotelRoomController@datatables')->name('admin-hotel-room-datatables');
  Route::get('/hotel/room/{id}','Admin\HotelRoomController@index')->name('admin-hotel-room');
  Route::get('/hotel/room/create/{id}','Admin\HotelRoomController@create')->name('admin-hotel-room-create');
  Route::post('/hotel/room/store', 'Admin\HotelRoomController@store')->name('admin-hotel-room-store');
  Route::get('/hotel/room/edit/{id}', 'Admin\HotelRoomController@edit')->name('admin-hotel-room-edit');
  Route::post('/hotel/room/update/{id}', 'Admin\HotelRoomController@update')->name('admin-hotel-room-update');
  Route::get('/hotel/room/delete/{id}', 'Admin\HotelRoomController@destroy')->name('admin-hotel-room-delete');
  Route::get('admin/hotel/room/image/remove/{id}','Admin\HotelController@GalleryRemove')->name('hotel.room.image.remove');
  Route::get('admin/hotel/room/galler/remove/{id}','Admin\HotelRoomController@RoomGalleryRemove')->name('hotel.room.gallery.remove');
// ----------------------------- HOTEL ATTRIBUTES SECTION END --------------------------------------//


// ----------------------------- HOTEL SECTION START --------------------------------------//
  Route::get('/hotel/datatables','Admin\HotelController@datatables')->name('admin-hotel-datatables');
  Route::get('/hotel','Admin\HotelController@index')->name('admin-hotel-index');
  Route::get('/hotel/create', 'Admin\HotelController@create')->name('admin-hotel-create');
  Route::post('/hotel/create', 'Admin\HotelController@store')->name('admin-hotel-store');
  Route::get('/hotel/edit/{id}', 'Admin\HotelController@edit')->name('admin-hotel-edit');
  Route::post('/hotel/update/{id}', 'Admin\HotelController@update')->name('admin-hotel-update');
  Route::get('/hotel/delete/{id}', 'Admin\HotelController@destroy')->name('admin-hotel-delete');
  Route::get('admin/hotel/gallery/image/remove/{id}','Admin\HotelController@GalleryRemove')->name('hotel.gallery.image.remove');
  // ----------------------------- HOTEL SECTION END --------------------------------------//


// ------------------------------ Hotel Order Section Start -------------------------------------------//
  Route::get('/hotel/orders/datatables/{type}','Admin\HotelOrderController@datatables')->name('admin-hotel-datatables-orders');
  Route::get('/hotel/orders/details/{id}','Admin\HotelOrderController@HotelordersDetails')->name('admin.hotel.order.details');
  Route::get('/hotel/order/status/{order_id}/{status}','Admin\HotelOrderController@hotelOrderStatus')->name('admin-hotel-order-status');
  Route::get('/hotel/orders/all','Admin\HotelOrderController@orders')->name('admin-hotel-allorders');
  Route::get('/hotel/orders/pending','Admin\HotelOrderController@orders')->name('admin-hotel-pending.orders');
  Route::get('/hotel/orders/completed','Admin\HotelOrderController@orders')->name('admin-hotel-completed.orders');
  Route::get('/hotel/orders/delete/{id}','Admin\HotelOrderController@ordersDelete')->name('admin-hotel-order-delete');

// ------------------------------ Hotel Order Section End ---------------------------------------------//


});


Route::group(['middleware'=>'permissions:Tour Section'],function(){


// ----------------------------- TOUR CATEGORY SECTION START --------------------------------------//
Route::get('/tour/category/datatables','Admin\TourCategoryController@datatables')->name('admin-tour-cat-datatables');
Route::get('/tour/category','Admin\TourCategoryController@index')->name('admin-tour-cat-index');
Route::get('/tour/category/create', 'Admin\TourCategoryController@create')->name('admin-tour-cat-create');
Route::post('/tour/category/create', 'Admin\TourCategoryController@store')->name('admin-tour-cat-store');
Route::get('/tour/category/edit/{id}', 'Admin\TourCategoryController@edit')->name('admin-tour-cat-edit');
Route::post('/tour/category/update/{id}', 'Admin\TourCategoryController@update')->name('admin-tour-cat-update');
Route::get('/tour/category/delete/{id}', 'Admin\TourCategoryController@destroy')->name('admin-tour-cat-delete');
Route::get('tour/category/status/{id1}/{id2}', 'Admin\TourCategoryController@status')->name('admin-tour-cat-status');
// ----------------------------- TOUR CATEGORY SECTION END --------------------------------------//

// ----------------------------- TOUR ATTRIBUTES SECTION START --------------------------------------//
Route::get('/tour/attribute/datatables','Admin\TourAttrController@datatables')->name('admin-tourattr-datatables');
Route::get('/tour/attribute','Admin\TourAttrController@index')->name('admin-tourattr-index');
Route::get('/tour/attribute/create', 'Admin\TourAttrController@create')->name('admin-tourattr-create');
Route::post('/tour/attribute/create', 'Admin\TourAttrController@store')->name('admin-tourattr-store');
Route::get('/tour/attribute/edit/{id}', 'Admin\TourAttrController@edit')->name('admin-tourattr-edit');
Route::post('/tour/attribute/update/{id}', 'Admin\TourAttrController@update')->name('admin-tourattr-update');
Route::get('/tour/attribute/delete/{id}', 'Admin\TourAttrController@destroy')->name('admin-tourattr-delete');
// ----------------------------- TOUR ATTRIBUTES SECTION END --------------------------------------//

// ----------------------------- TOUR TREM ATTRIBUTES SECTION START --------------------------------------//
Route::get('/tour/attribute/trem/datatables/{id}','Admin\TourTermController@datatables')->name('admin-tourtrem-datatables');
Route::get('/tour/attribute/trem/{id}','Admin\TourTermController@index')->name('admin-tourtrem-index');
Route::post('/tour/attribute/trem/store', 'Admin\TourTermController@store')->name('admin-tourterm-store');
Route::get('/tour/attribute/trem/edit/{id}', 'Admin\TourTermController@edit')->name('admin-tourtrem-edit');
Route::post('/tour/attribute/trem/update/{id}', 'Admin\TourTermController@update')->name('admin-tourtrem-update');
Route::get('/tour/attribute/trem/delete/{id}', 'Admin\TourTermController@destroy')->name('admin-tourtrem-delete');
// ----------------------------- TOUR TREM ATTRIBUTES SECTION END --------------------------------------//

// ----------------------------- TOUR SECTION START --------------------------------------//
Route::get('/tour/datatables','Admin\TourController@datatables')->name('admin-tour-datatables');
Route::get('/tour','Admin\TourController@index')->name('admin-tour-index');
Route::get('/tour/create', 'Admin\TourController@create')->name('admin-tour-create');
Route::post('/tour/create', 'Admin\TourController@store')->name('admin-tour-store');
Route::get('/tour/edit/{id}', 'Admin\TourController@edit')->name('admin-tour-edit');
Route::post('/tour/update/{id}', 'Admin\TourController@update')->name('admin-tour-update');
Route::get('/tour/delete/{id}', 'Admin\TourController@destroy')->name('admin-tour-delete');
Route::post('/tour/inventory/update/{id}','Admin\TourController@inventoryUpdate')->name('inventory.update.image');
Route::post('/new-inventory/image/upload/ajax/{id}','Admin\TourController@inventoryNewUpload');
Route::get('/inventore-remove/single/{id}','Admin\TourController@inventoryRemove');
Route::get('admin/tour/gallery/image/remove/{id}','Admin\TourController@GalleryRemove')->name('admin.tour.gallery.image.remove');
// ----------------------------- TOUR SECTION END --------------------------------------//



// ------------------------------ Tour Order Section Start -------------------------------------------//
Route::get('/tour/orders/datatables/{type}','Admin\TourOrderController@datatables')->name('admin-tour-datatables-orders');
Route::get('/tour/orders/details/{id}','Admin\TourOrderController@TourordersDetails')->name('admin.tour.order.details');
Route::get('/tour/order/status/{order_id}/{status}','Admin\TourOrderController@TourOrderStatus')->name('admin-tour-order-status');
Route::get('/tour/orders/all','Admin\TourOrderController@orders')->name('admin-tour-allorders');
Route::get('/tour/orders/pending','Admin\TourOrderController@orders')->name('admin-tour-pending.orders');
Route::get('/tour/orders/completed','Admin\TourOrderController@orders')->name('admin-tour-completed.orders');
Route::get('/tour/orders/delete/{id}','Admin\TourOrderController@ordersDelete')->name('admin-tour-order-delete');



});


Route::group(['middleware'=>'permissions:Space Section'],function(){


// ----------------------------- SPACE ATTRIBUTES SECTION START --------------------------------------//
Route::get('/space/attribute/datatables','Admin\SpaceAttrController@datatables')->name('admin-spaceattr-datatables');
Route::get('/space/attribute','Admin\SpaceAttrController@index')->name('admin-spaceattr-index');
Route::get('/space/attribute/create', 'Admin\SpaceAttrController@create')->name('admin-spaceattr-create');
Route::post('/space/attribute/create', 'Admin\SpaceAttrController@store')->name('admin-spaceattr-store');
Route::get('/space/attribute/edit/{id}', 'Admin\SpaceAttrController@edit')->name('admin-spaceattr-edit');
Route::post('/space/attribute/update/{id}', 'Admin\SpaceAttrController@update')->name('admin-spaceattr-update');
Route::get('/space/attribute/delete/{id}', 'Admin\SpaceAttrController@destroy')->name('admin-spaceattr-delete');
// ----------------------------- SPACE ATTRIBUTES SECTION END --------------------------------------//


// ----------------------------- Space ATTRIBUTES SECTION START --------------------------------------//
Route::get('/space/attribute/trem/datatables/{id}','Admin\SpaceTermController@datatables')->name('admin-spaceterm-datatables');
Route::get('/space/attribute/trem/{id}','Admin\SpaceTermController@index')->name('admin-spaceterm-index');
Route::post('/space/attribute/trem/store', 'Admin\SpaceTermController@store')->name('admin-spaceterm-store');
Route::get('/space/attribute/trem/edit/{id}', 'Admin\SpaceTermController@edit')->name('admin-spaceterm-edit');
Route::post('/space/attribute/trem/update/{id}', 'Admin\SpaceTermController@update')->name('admin-spaceterm-update');
Route::get('/space/attribute/trem/delete/{id}', 'Admin\SpaceTermController@destroy')->name('admin-spaceterm-delete');
// ----------------------------- Space ATTRIBUTES SECTION END --------------------------------------//


// ----------------------------- SPACE SECTION START --------------------------------------//
Route::get('/space/datatables','Admin\SpaceController@datatables')->name('admin-space-datatables');
Route::get('/space','Admin\SpaceController@index')->name('admin-space-index');
Route::get('/space/create', 'Admin\SpaceController@create')->name('admin-space-create');
Route::post('/space/create', 'Admin\SpaceController@store')->name('admin-space-store');
Route::get('/space/edit/{id}', 'Admin\SpaceController@edit')->name('admin-space-edit');
Route::post('/space/update/{id}', 'Admin\SpaceController@update')->name('admin-space-update');
Route::get('/space/delete/{id}', 'Admin\SpaceController@destroy')->name('admin-space-delete');
Route::get('admin/gallery/image/remove/{id}','Admin\SpaceController@GalleryRemove')->name('admin.space.gallery.image.remove');
// ----------------------------- SPACE SECTION END --------------------------------------//


// ------------------------------ Space Order Section Start -------------------------------------------//
Route::get('/space/orders/datatables/{type}','Admin\SpaceOrderController@datatables')->name('admin-space-datatables-orders');
Route::get('/space/orders/details/{id}','Admin\SpaceOrderController@SpaceordersDetails')->name('admin.space.order.details');
Route::get('/space/order/status/{order_id}/{status}','Admin\SpaceOrderController@SpaceOrderStatus')->name('admin-space-order-status');
Route::get('/space/orders/all','Admin\SpaceOrderController@orders')->name('admin-space-allorders');
Route::get('/space/orders/pending','Admin\SpaceOrderController@orders')->name('admin-space-pending.orders');
Route::get('/space/orders/completed','Admin\SpaceOrderController@orders')->name('admin-space-completed.orders');
Route::get('/space/orders/delete/{id}','Admin\SpaceOrderController@ordersDelete')->name('admin-space-order-delete');
// ------------------------------ Space Order Section End -------------------------------------------//


});


Route::group(['middleware'=>'permissions:Car Section'],function(){

// ----------------------------- CAR ATTRIBUTES SECTION START --------------------------------------//
Route::get('/car/attribute/datatables','Admin\CarAttrController@datatables')->name('admin-carattr-datatables');
Route::get('/car/attribute','Admin\CarAttrController@index')->name('admin-carattr-index');
Route::get('/car/attribute/create', 'Admin\CarAttrController@create')->name('admin-carattr-create');
Route::post('/car/attribute/create', 'Admin\CarAttrController@store')->name('admin-carattr-store');
Route::get('/car/attribute/edit/{id}', 'Admin\CarAttrController@edit')->name('admin-carattr-edit');
Route::post('/car/attribute/update/{id}', 'Admin\CarAttrController@update')->name('admin-carattr-update');
Route::get('/car/attribute/delete/{id}', 'Admin\CarAttrController@destroy')->name('admin-carattr-delete');
// ----------------------------- CAR ATTRIBUTES SECTION END --------------------------------------//


// ----------------------------- CAR ATTRIBUTES SECTION START --------------------------------------//
Route::get('/car/attribute/trem/datatables/{id}','Admin\CarTermController@datatables')->name('admin-carterm-datatables');
Route::get('/car/attribute/trem/{id}','Admin\CarTermController@index')->name('admin-carterm-index');
Route::post('/car/attribute/trem/store', 'Admin\CarTermController@store')->name('admin-carterm-store');
Route::get('/car/attribute/trem/edit/{id}', 'Admin\CarTermController@edit')->name('admin-carterm-edit');
Route::post('/car/attribute/trem/update/{id}', 'Admin\CarTermController@update')->name('admin-carterm-update');
Route::get('/car/attribute/trem/delete/{id}', 'Admin\CarTermController@destroy')->name('admin-carterm-delete');
// ----------------------------- CAR ATTRIBUTES SECTION END --------------------------------------//

// ----------------------------- CAR SECTION START --------------------------------------//
Route::get('/car/datatables','Admin\CarController@datatables')->name('admin-car-datatables');
Route::get('/car','Admin\CarController@index')->name('admin-car-index');
Route::get('/car/create', 'Admin\CarController@create')->name('admin-car-create');
Route::post('/car/create', 'Admin\CarController@store')->name('admin-car-store');
Route::get('/car/edit/{id}', 'Admin\CarController@edit')->name('admin-car-edit');
Route::post('/car/update/{id}', 'Admin\CarController@update')->name('admin-car-update');
Route::get('/car/delete/{id}', 'Admin\CarController@destroy')->name('admin-car-delete');
Route::get('/gallery/image/remove/{id}','Admin\CarController@GalleryRemove')->name('car.gallery.image.remove');
// ----------------------------- CAR SECTION END --------------------------------------//


// ------------------------------ Car Order Section Start -------------------------------------------//
Route::get('/car/orders/datatables/{type}','Admin\CarOrderController@datatables')->name('admin-car-datatables-orders');
Route::get('/car/orders/details/{id}','Admin\CarOrderController@CarordersDetails')->name('admin.car.order.details');
Route::get('/car/order/status/{order_id}/{status}','Admin\CarOrderController@CarOrderStatus')->name('admin-car-order-status');
Route::get('/car/orders/all','Admin\CarOrderController@orders')->name('admin-car-allorders');
Route::get('/car/orders/pending','Admin\CarOrderController@orders')->name('admin-car-pending.orders');
Route::get('/car/orders/completed','Admin\CarOrderController@orders')->name('admin-car-completed.orders');
Route::get('/car/orders/delete/{id}','Admin\CarOrderController@ordersDelete')->name('admin-car-order-delete');


// ------------------------------ Car Order Section End -------------------------------------------//

Route::get('/cancel/booking/datatables','Admin\DashboardController@cancelDatatables')->name('admin-order-cancel-datatables');
Route::get('/cancel/booking','Admin\DashboardController@cancelIndex')->name('admin-order-cancel');
Route::get('/book/cancel/status/{id}/{status}', 'Admin\DashboardController@status')->name('admin-order-cancel-status');



});

Route::group(['middleware'=>'permissions:Home Page Settings Section'],function(){


Route::get('/home-page/cutomize', 'Admin\PageSettingController@pageCustomize')->name('admin-homepage-customize');
Route::get('/home-page/heading/cutomize', 'Admin\PageSettingController@headingCustomize')->name('admin-section-heading');
Route::post('/home/update', 'Admin\PageSettingController@Update')->name('admin-homepage-update');
Route::post('/home/menu/update', 'Admin\PageSettingController@menuUpdate')->name('admin-homepage-menu-update');
Route::post('/home/heading/update', 'Admin\PageSettingController@HeadingUpdate')->name('admin-homepage-heading-update');

Route::get('/member/background/edit', 'Admin\PageSettingController@memberBackgroundUpdate')->name('admin-member-background-edit');
Route::post('/member/background/update', 'Admin\PageSettingController@memberBackgroundstore')->name('admin-member-background-update');



//---------------------------- ADMIN FEATURE SECTION ------------------------------//
Route::get('/slider/datatables', 'Admin\FeatureController@datatables')->name('admin-slider-datatables');
Route::get('/slider', 'Admin\FeatureController@index')->name('admin-slider-index');
Route::get('/slider/create', 'Admin\FeatureController@create')->name('admin-slider-create');
Route::post('/slider/create', 'Admin\FeatureController@store')->name('admin-slider-store');
Route::get('/slider/edit/{id}', 'Admin\FeatureController@edit')->name('admin-slider-edit');
Route::post('/slider/update/{id}', 'Admin\FeatureController@update')->name('admin-slider-update');
Route::get('/slider/delete/{id}', 'Admin\FeatureController@destroy')->name('admin-slider-delete');
//-------------------------------- ADMIN FEATURE SECTION ENDS -----------------------------//




//---------------------------------ADMIN TEAM SECTION -------------------------------------//
Route::get('/member/datatables', 'Admin\MemberController@datatables')->name('admin-member-datatables');
Route::get('/member', 'Admin\MemberController@index')->name('admin-member-index');
Route::get('/member/create', 'Admin\MemberController@create')->name('admin-member-create');
Route::post('/member/create', 'Admin\MemberController@store')->name('admin-member-store');
Route::get('/member/edit/{id}', 'Admin\MemberController@edit')->name('admin-member-edit');
Route::post('/member/edit/{id}', 'Admin\MemberController@update')->name('admin-member-update');
Route::get('/member/delete/{id}', 'Admin\MemberController@destroy')->name('admin-member-delete');
//-------------------------------ADMIN TEAM SECTION ENDS ----------------------------//


});


Route::group(['middleware'=>'permissions:Blog Section'],function(){

//---------------------------------------- ADMIN BLOG SECTION -----------------------//
  Route::get('/blog/datatables', 'Admin\BlogController@datatables')->name('admin-blog-datatables'); //JSON REQUEST
  Route::get('/blog', 'Admin\BlogController@index')->name('admin-blog-index');
  Route::get('/blog/create', 'Admin\BlogController@create')->name('admin-blog-create');
  Route::post('/blog/create', 'Admin\BlogController@store')->name('admin-blog-store');
  Route::get('/blog/edit/{id}', 'Admin\BlogController@edit')->name('admin-blog-edit');
  Route::post('/blog/edit/{id}', 'Admin\BlogController@update')->name('admin-blog-update');
  Route::get('/blog/delete/{id}', 'Admin\BlogController@destroy')->name('admin-blog-delete');
//------------------------------- ADMIN BLOG SECTION End -----------------------//


//------------ ADMIN BLOG CATEGORY SECTION  -----------------------//
  Route::get('/blog/category/datatables', 'Admin\BlogCategoryController@datatables')->name('admin-cblog-datatables'); //JSON REQUEST
  Route::get('/blog/category', 'Admin\BlogCategoryController@index')->name('admin-cblog-index');
  Route::get('/blog/category/create', 'Admin\BlogCategoryController@create')->name('admin-cblog-create');
  Route::post('/blog/category/create', 'Admin\BlogCategoryController@store')->name('admin-cblog-store');
  Route::get('/blog/category/edit/{id}', 'Admin\BlogCategoryController@edit')->name('admin-cblog-edit');
  Route::post('/blog/category/edit/{id}', 'Admin\BlogCategoryController@update')->name('admin-cblog-update');
  Route::get('/blog/category/delete/{id}', 'Admin\BlogCategoryController@destroy')->name('admin-cblog-delete');
  Route::get('blog/category/status/{id1}/{id2}', 'Admin\BlogCategoryController@status')->name('admin-bcat-status');
//------------------------------ ADMIN BLOG CATEGORY SECTION  END -----------------------//

});


Route::group(['middleware'=>'permissions:Menu Page Settings Section'],function(){


//------------------------------ ADMIN PAGE SETTINGS SECTION --------------------------//
  Route::get('/page-settings/contact', 'Admin\PageSettingController@contact')->name('admin-ps-contact');
  Route::get('/page-settings/customize', 'Admin\PageSettingController@customize')->name('admin-ps-customize');
  Route::get('/page-settings/experience', 'Admin\PageSettingController@video')->name('admin-ps-video');
  Route::get('/page-settings/homecontact', 'Admin\PageSettingController@homecontact')->name('admin-ps-homecontact');
  Route::get('/page-settings/donate', 'Admin\PageSettingController@donate')->name('admin-ps-donate');
  Route::get('/page-settings/blog', 'Admin\PageSettingController@blog')->name('admin-ps-blog');
  Route::post('/page-settings/update/all', 'Admin\PageSettingController@update')->name('admin-ps-update');
  Route::post('/page-settings/update/home', 'Admin\PageSettingController@homeupdate')->name('admin-ps-homeupdate');
  Route::post('/page-settings/update/contact', 'Admin\PageSettingController@contactupdate')->name('admin-ps-contact-update');
//----------------------------- ADMIN PAGE SETTINGS SECTION ENDS ---------------------------------//

//----------------------------- ADMIN PAGE SECTION -----------------------------------------//
  Route::get('/page/datatables', 'Admin\PageController@datatables')->name('admin-page-datatables'); //JSON REQUEST
  Route::get('/page', 'Admin\PageController@index')->name('admin-page-index');
  Route::get('/page/create', 'Admin\PageController@create')->name('admin-page-create');
  Route::post('/page/create', 'Admin\PageController@store')->name('admin-page-store');
  Route::get('/page/edit/{id}', 'Admin\PageController@edit')->name('admin-page-edit');
  Route::post('/page/update/{id}', 'Admin\PageController@update')->name('admin-page-update');
  Route::get('/page/delete/{id}', 'Admin\PageController@destroy')->name('admin-page-delete');
  Route::get('/page/header/{id1}/{id2}', 'Admin\PageController@header')->name('admin-page-header');
  Route::get('/page/footer/{id1}/{id2}', 'Admin\PageController@footer')->name('admin-page-footer');
//--------------------------------- ADMIN PAGE SECTION ENDS---------------------------------//
Route::get('menu/customize','Admin\PageSettingController@menuCustomize')->name('admin-menu-customize');


//------------------------------------ ADMIN FAQ SECTION ---------------------------------//
Route::get('/faq/datatables', 'Admin\FaqController@datatables')->name('admin-faq-datatables'); //JSON REQUEST
Route::get('/faq', 'Admin\FaqController@index')->name('admin-faq-index');
Route::get('/faq/create', 'Admin\FaqController@create')->name('admin-faq-create');
Route::post('/faq/create', 'Admin\FaqController@store')->name('admin-faq-store');
Route::get('/faq/edit/{id}', 'Admin\FaqController@edit')->name('admin-faq-edit');
Route::post('/faq/update/{id}', 'Admin\FaqController@update')->name('admin-faq-update');
Route::get('/faq/delete/{id}', 'Admin\FaqController@destroy')->name('admin-faq-delete');
//---------------------------- ADMIN FAQ SECTION ENDS -------------------------------//

});



Route::group(['middleware'=>'permissions:Social Settings Section'],function(){

  //------------ ADMIN SOCIAL SETTINGS SECTION ------------//
  Route::get('/social', 'Admin\SocialSettingController@index')->name('admin-social-index');
  Route::post('/social/update', 'Admin\SocialSettingController@socialupdate')->name('admin-social-update');
  Route::post('/social/update/all', 'Admin\SocialSettingController@socialupdateall')->name('admin-social-update-all');
  Route::get('/social/facebook', 'Admin\SocialSettingController@facebook')->name('admin-social-facebook');
  Route::get('/social/google', 'Admin\SocialSettingController@google')->name('admin-social-google');
  Route::get('/social/facebook/{status}', 'Admin\SocialSettingController@facebookup')->name('admin-social-facebookup');
  Route::get('/social/google/{status}', 'Admin\SocialSettingController@googleup')->name('admin-social-googleup');
  //------------ ADMIN SOCIAL SETTINGS SECTION ENDS-------------------------------//



 //--------------------------------- ADMIN SEOTOOL SETTINGS SECTION ---------------------------------//
 Route::get('/seotools/analytics', 'Admin\SeoToolController@analytics')->name('admin-seotool-analytics');
 Route::post('/seotools/analytics/update', 'Admin\SeoToolController@analyticsupdate')->name('admin-seotool-analytics-update');
 Route::get('/seotools/keywords', 'Admin\SeoToolController@keywords')->name('admin-seotool-keywords');
 Route::post('/seotools/keywords/update', 'Admin\SeoToolController@keywordsupdate')->name('admin-seotool-keywords-update');
 Route::get('/products/popular/{id}','Admin\SeoToolController@popular')->name('admin-prod-popular');
 //---------------------------- ADMIN SEOTOOL SETTINGS SECTION ------------------------------//

});




Route::group(['middleware'=>'permissions:Location Section'],function(){


// ------------------------------ ADMIN COUNTRY ROUTE SECTION START ---------------------------//

Route::get('/location/country/datatables', 'Admin\CountryController@datatables')->name('admin-country-datatables');
 Route::get('/location/country', 'Admin\CountryController@index')->name('admin.country.index');
 Route::get('/location/country/create', 'Admin\CountryController@create')->name('admin.country.create');
 Route::post('/location/country/create', 'Admin\CountryController@store')->name('admin.country.store');
 Route::get('/location/country/edit/{id}', 'Admin\CountryController@edit')->name('admin.country.edit');
 Route::post('/location/country/update/{id}', 'Admin\CountryController@update')->name('admin.country.update');
 Route::get('/location/country/delete/{id}', 'Admin\CountryController@destroy')->name('admin.country.delete');
 Route::get('location/country/status/{id1}/{id2}', 'Admin\CountryController@status')->name('admin.country.status');

// ------------------------------ ADMIN COUNTRY ROUTE SECTION END ---------------------------//

// ------------------------------ ADMIN STATE ROUTE SECTION START ---------------------------//

Route::get('/location/state/datatables', 'Admin\StateController@datatables')->name('admin-state-datatables');
Route::get('/location/state', 'Admin\StateController@index')->name('admin.state.index');
Route::get('/location/state/create', 'Admin\StateController@create')->name('admin.state.create');
Route::post('/location/state/create', 'Admin\StateController@store')->name('admin.state.store');
Route::get('/location/state/edit/{id}', 'Admin\StateController@edit')->name('admin.state.edit');
Route::post('/location/state/update/{id}', 'Admin\StateController@update')->name('admin.state.update');
Route::get('/location/state/delete/{id}', 'Admin\StateController@destroy')->name('admin.state.delete');
// ------------------------------ ADMIN STATE ROUTE SECTION END ---------------------------//


});



Route::group(['middleware'=>'permissions:Language Section'],function(){


  //----------------------------- ADMIN LANGUAGE SETTINGS SECTION ---------------------------------//
  Route::get('/languages/datatables', 'Admin\LanguageController@datatables')->name('admin-lang-datatables'); //JSON REQUEST
  Route::get('/languages', 'Admin\LanguageController@index')->name('admin-lang-index');
  Route::get('/languages/create', 'Admin\LanguageController@create')->name('admin-lang-create');
  Route::get('/languages/edit/{id}', 'Admin\LanguageController@edit')->name('admin-lang-edit');
  Route::post('/languages/create', 'Admin\LanguageController@store')->name('admin-lang-store');
  Route::post('/languages/edit/{id}', 'Admin\LanguageController@update')->name('admin-lang-update');
  Route::get('/languages/status/{id1}/{id2}', 'Admin\LanguageController@status')->name('admin-lang-st');
  Route::get('/languages/delete/{id}', 'Admin\LanguageController@destroy')->name('admin-lang-delete');
  Route::get('/languages/export/{id}', 'Admin\LanguageController@LanguageExport')->name('website.lang.export');
  Route::post('/languages/import/', 'Admin\LanguageController@LanguageImport')->name('website.lang.import');
  //-------------------------------- ADMIN LANGUAGE SETTINGS SECTION ENDS -----------------------------//


  //----------------------------- ADMIN LANGUAGE SETTINGS SECTION ---------------------------------//
  Route::get('/panel/languages/datatables', 'Admin\AdminLanguageController@datatables')->name('admin-lang-admin-datatables'); //JSON REQUEST
  Route::get('/panel/languages/', 'Admin\AdminLanguageController@index')->name('admin-lang-admin-index');
  Route::get('/panel/languages/create', 'Admin\AdminLanguageController@create')->name('admin-lang-admin-create');
  Route::get('/panel/languages/edit/{id}', 'Admin\AdminLanguageController@edit')->name('admin-lang-admin-edit');
  Route::post('/panel/languages/create', 'Admin\AdminLanguageController@store')->name('admin-lang-admin-store');
  Route::post('/panel/languages/edit/{id}', 'Admin\AdminLanguageController@update')->name('admin-lang-admin-update');
  Route::get('/panel/languages/status/{id1}/{id2}', 'Admin\AdminLanguageController@status')->name('admin-lang-admin-st');
  Route::get('/panel/languages/delete/{id}', 'Admin\AdminLanguageController@destroy')->name('admin-lang-admin-delete');
  Route::get('/panel/languages/export/{id}', 'Admin\AdminLanguageController@LanguageExport')->name('admin-lang-export');
  Route::post('/panel/languages/import/', 'Admin\AdminLanguageController@LanguageImport')->name('admin.lang.import');
  //-------------------------------- ADMIN LANGUAGE SETTINGS SECTION ENDS -----------------------------//


});


Route::group(['middleware'=>'permissions:Manage Role Section'],function(){

// ---------------------------------- ROLE SECTION ----------------------//
  Route::get('/role/datatables', 'Admin\RoleController@datatables')->name('admin-role-datatables');
  Route::get('/role', 'Admin\RoleController@index')->name('admin-role-index');
  Route::get('/role/create', 'Admin\RoleController@create')->name('admin-role-create');
  Route::post('/role/create', 'Admin\RoleController@store')->name('admin-role-store');
  Route::get('/role/edit/{id}', 'Admin\RoleController@edit')->name('admin-role-edit');
  Route::post('/role/edit/{id}', 'Admin\RoleController@update')->name('admin-role-update');
  Route::get('/role/delete/{id}', 'Admin\RoleController@destroy')->name('admin-role-delete');
// -------------------------- ROLE SECTION ENDS ----------------------;//


});



Route::group(['middleware'=>'permissions:Manage Staff Section'],function(){


//---------------------------- ADMIN STAFF SECTION ------------------------------//
  Route::get('/staff/datatables', 'Admin\StaffController@datatables')->name('admin-staff-datatables');
  Route::get('/staff', 'Admin\StaffController@index')->name('admin-staff-index');
  Route::get('/staff/create', 'Admin\StaffController@create')->name('admin-staff-create');
  Route::post('/staff/create', 'Admin\StaffController@store')->name('admin-staff-store');
  Route::get('/staff/edit/{id}', 'Admin\StaffController@edit')->name('admin-staff-edit');
  Route::post('/staff/update/{id}', 'Admin\StaffController@update')->name('admin-staff-update');
  Route::get('/staff/show/{id}', 'Admin\StaffController@show')->name('admin-staff-show');
  Route::get('/staff/delete/{id}', 'Admin\StaffController@destroy')->name('admin-staff-delete');
//---------------------------- ADMIN STAFF SECTION ------------------------------//


});




Route::group(['middleware'=>'permissions:User Manage Section'],function(){

//---------------------------- ADMIN STAFF SECTION ------------------------------//
  Route::get('/user/datatables', 'Admin\UserController@datatables')->name('admin-user-datatables');
  Route::get('/user', 'Admin\UserController@index')->name('admin-user-index');
  Route::get('/user/create', 'Admin\UserController@create')->name('admin-user-create');
  Route::post('/user/create', 'Admin\UserController@store')->name('admin-user-store');
  Route::get('/user/edit/{id}', 'Admin\UserController@edit')->name('admin-user-edit');
  Route::post('/user/update/{id}', 'Admin\UserController@update')->name('admin-user-update');
  Route::get('/user/show/{id}', 'Admin\UserController@show')->name('admin-user-show');
  Route::get('/user/delete/{id}', 'Admin\UserController@destroy')->name('admin-user-delete');
//---------------------------- ADMIN STAFF SECTION ------------------------------//


});

Route::group(['middleware'=>'permissions:General Settings Section'],function(){


//------------------------------- ADMIN GENERAL SETTINGS SECTION ------------------------------//
  Route::get('/general-settings/logo', 'Admin\GeneralSettingController@logo')->name('admin-gs-logo');
  Route::get('/general-settings/favicon', 'Admin\GeneralSettingController@fav')->name('admin-gs-fav');
  Route::get('/general-settings/loader', 'Admin\GeneralSettingController@load')->name('admin-gs-load');
  Route::get('/general-settings/contents', 'Admin\GeneralSettingController@contents')->name('admin-gs-contents');
  Route::get('/general-settings/success', 'Admin\GeneralSettingController@success')->name('admin-gs-success');
  Route::get('/general-settings/footer', 'Admin\GeneralSettingController@footer')->name('admin-gs-footer');
  Route::get('/general-settings/error', 'Admin\GeneralSettingController@error')->name('admin-gs-error');
  Route::get('/general-settings/breadcumb', 'Admin\GeneralSettingController@breadcumb')->name('admin-gs-breadcumb');
  Route::post('/general-settings/update/all', 'Admin\GeneralSettingController@generalupdate')->name('admin-gs-update');
  Route::get('/general-settings/status/update/{value}', 'Admin\GeneralSettingController@StatusUpdate')->name('admin.gs.status');
//-------------------------------------- ADMIN GENERAL SETTINGS JSON SECTION END ---------------------------//


});


Route::group(['middleware'=>'permissions:Payment Settings Section'],function(){


Route::get('/payment-informations', 'Admin\GeneralSettingController@paymentsinfo')->name('admin-gs-payments');
Route::get('/paymentgateway/datatables', 'Admin\PaymentGatewayController@datatables')->name('admin-payment-datatables'); //JSON REQUEST
Route::get('/paymentgateway', 'Admin\PaymentGatewayController@index')->name('admin-payment-index');
Route::get('/paymentgateway/create', 'Admin\PaymentGatewayController@create')->name('admin-payment-create');
Route::post('/paymentgateway/create', 'Admin\PaymentGatewayController@store')->name('admin-payment-store');
Route::get('/paymentgateway/edit/{id}', 'Admin\PaymentGatewayController@edit')->name('admin-payment-edit');
Route::post('/paymentgateway/update/{id}', 'Admin\PaymentGatewayController@update')->name('admin-payment-update');
Route::get('/paymentgateway/delete/{id}', 'Admin\PaymentGatewayController@destroy')->name('admin-payment-delete');
Route::get('paymentgateway/status/{id1}/{id2}', 'Admin\PaymentGatewayController@status')->name('admin-payment-status');



// MULTIPLE CURRENCY

Route::get('/currency/datatables', 'Admin\CurrencyController@datatables')->name('admin-currency-datatables'); //JSON REQUEST
Route::get('/currency', 'Admin\CurrencyController@index')->name('admin-currency-index');
Route::get('/currency/create', 'Admin\CurrencyController@create')->name('admin-currency-create');
Route::post('/currency/create', 'Admin\CurrencyController@store')->name('admin-currency-store');
Route::get('/currency/edit/{id}', 'Admin\CurrencyController@edit')->name('admin-currency-edit');
Route::post('/currency/update/{id}', 'Admin\CurrencyController@update')->name('admin-currency-update');
Route::get('/currency/delete/{id}', 'Admin\CurrencyController@destroy')->name('admin-currency-delete');
Route::get('/currency/status/{id1}/{id2}', 'Admin\CurrencyController@status')->name('admin-currency-status');
Route::get('/general-settings/status/{field}/{status}', 'Admin\GeneralSettingController@status')->name('admin-gs-status');

// Withdraw methods route

Route::get('/withdraw/methods/datatables', 'Admin\WithdrawMethodsController@datatables')->name('admin-withdraw-method-datatables');
Route::get('/withdraw/methods', 'Admin\WithdrawMethodsController@index')->name('admin-withdraw-method-index');
Route::get('/withdraw/methods/status/{id1}/{id2}', 'Admin\WithdrawMethodsController@status')->name('admin-withdraw-method-status');
Route::get('/withdraw/method/create', 'Admin\WithdrawMethodsController@create')->name('admin-withdraw-method-create');
Route::post('/withdraw/method/store', 'Admin\WithdrawMethodsController@store')->name('admin-withdraw-method-store');
Route::get('/withdraw/method/edit/{id}', 'Admin\WithdrawMethodsController@edit')->name('admin-withdraw-method-edit');
Route::post('/withdraw/method/update/{id}', 'Admin\WithdrawMethodsController@update')->name('admin-withdraw-method-update');
Route::get('/withdraw/method/delete/{id}', 'Admin\WithdrawMethodsController@delete')->name('admin-withdraw-method-delete');


});


Route::group(['middleware'=>'permissions:Subscriber Section'],function(){
  //----------- ADMIN WITHDRAW SECTION --------------------------------------//
  Route::get('/withdraw/datatables', 'Admin\WithdrawController@datatables')->name('admin-withdraw-datatables'); //JSON REQUEST
  Route::get('/withdraws', 'Admin\WithdrawController@index')->name('admin-withdraw-index');
  Route::get('/withdraw/status/{id}/{status}', 'Admin\WithdrawController@status')->name('admin-withdraw-status');

  //---------------------------- ADMIN WITHDRAW ENDS -----------------------------------------//
  
  });


Route::group(['middleware'=>'permissions:Subscriber Section'],function(){
//----------- ADMIN SUBSCRIBERS SECTION --------------------------------------//
Route::get('/subscribers/datatables', 'Admin\SubscriberController@datatables')->name('admin-subs-datatables'); //JSON REQUEST
Route::get('/subscribers', 'Admin\SubscriberController@index')->name('admin-subs-index');
Route::get('/subscribers/download', 'Admin\SubscriberController@download')->name('admin-subs-download');
//---------------------------- ADMIN SUBSCRIBERS ENDS -----------------------------------------//

});




Route::get('module/review/datatables','Admin\ReviewController@datatables')->name('admin.review.datatables');
Route::get('module/review','Admin\ReviewController@index')->name('admin.review.index');



Route::group(['middleware'=>'permissions:Email Settings Section'],function(){

//--------------------------------- ADMIN EMAIL SETTINGS SECTION ----------------------------//
Route::get('/email-templates/datatables', 'Admin\EmailController@datatables')->name('admin-mail-datatables');
Route::get('/email-templates', 'Admin\EmailController@index')->name('admin-mail-index');
Route::get('/email-templates/{id}', 'Admin\EmailController@edit')->name('admin-mail-edit');
Route::post('/email-templates/{id}', 'Admin\EmailController@update')->name('admin-mail-update');
Route::get('/email-config', 'Admin\EmailController@config')->name('admin-mail-config');
Route::get('/groupemail', 'Admin\EmailController@groupemail')->name('admin-group-show');
Route::post('/groupemailpost', 'Admin\EmailController@groupemailpost')->name('admin-group-submit');
Route::get('/issmtp/{status}', 'Admin\GeneralSettingController@issmtp')->name('admin-gs-issmtp');
//------------------------- ADMIN EMAIL SETTINGS SECTION ENDS -------------------------//

});


});







Route::prefix('user')->group(function() {

// ---------------------------- USER DASHBOARD SECTION .....................................//
  Route::get('/dashboard', 'User\UserController@index')->name('user-dashboard');
// ---------------------------- USER DASHBOARD SECTION END .....................................//

// ----------------------------- USER LOGIN SECTION -------------------------------------------//
  Route::get('/login', 'User\LoginController@showLoginForm')->name('user.login');
  Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
// ----------------------------- USER LOGIN SECTION -------------------------------------------//


// ----------------------------- USER REGISTER SECTION -------------------------------------------//
  Route::get('/register', 'User\RegisterController@registerForm')->name('user-register-form');
  Route::post('/register/submit', 'User\RegisterController@register')->name('user-register-submit');
  Route::get('/register/verify/{token}', 'User\RegisterController@token')->name('user-register-token');
// ----------------------------- USER REGISTER SECTION END -------------------------------------------//

// ----------------------------- USER RESET SECTION -------------------------------------------//
  Route::get('/reset', 'User\UserController@resetform')->name('user-reset');
  Route::post('/reset', 'User\UserController@reset')->name('user-reset-submit');
// ----------------------------- USER RESET  SECTION END -------------------------------------------//

// ----------------------------- USER PROFILE SECTION -------------------------------------------//
  Route::get('/profile', 'User\UserController@profile')->name('user-profile');
  Route::post('/profile', 'User\UserController@profileupdate')->name('user-profile-update');
// ----------------------------- USER PROFILE  SECTION END -------------------------------------------//


// ---------------------------- USER FORGOT SECTION -------------------------------------------//
  Route::get('/forgot', 'User\ForgotController@showforgotform')->name('user-forgot');
  Route::post('/forgot', 'User\ForgotController@forgot')->name('user-forgot-submit');
// ----------------------------- USER FORGOT SECTION END -------------------------------------------//

// ----------------------------- USER LOGOUT SECTION -------------------------------------------//
  Route::get('/logout', 'User\LoginController@logout')->name('user-logout');
// ----------------------------- USER LOGOUT SECTION END -------------------------------------------//

  // LOGIN WITH FACEBOOK OR GOOGLE SECTION
  Route::get('auth/{provider}', 'User\SocialRegisterController@redirectToProvider')->name('social-provider');
  Route::get('auth/{provider}/callback', 'User\SocialRegisterController@handleProviderCallback');
// LOGIN WITH FACEBOOK OR GOOGLE SECTION ENDS


/**Support ticket System from user panel*/
  Route::get('/message/datatables/','User\MessageController@datatables')->name('user.message.datatables');
  Route::get('/message','User\MessageController@index')->name('user.message');
  Route::get('/message/{id}', 'User\MessageController@message')->name('user.message.show');
  Route::post('/message/post', 'User\MessageController@postmessage')->name('user.message.store');
  Route::get('/message/load/{id}', 'User\MessageController@messageload')->name('user-message-load');
  Route::get('/message/{id}/delete', 'User\MessageController@adminmessagedelete')->name('user-message-delete1');
  Route::post('/send/message', 'User\MessageController@adminusercontact')->name('user-send-message');
/*------------upport ticket System from user panel end*/

  // ----------------------------- USER NOTIFICATION SECTION -------------------------------------------//
    Route::get('/notf/show', 'User\NotificationController@user_notf_show')->name('customer-notf-show');
    Route::get('/notf/count','User\NotificationController@user_notf_count')->name('customer-notf-count');
    Route::get('/notf/clear','User\NotificationController@user_notf_clear')->name('customer-notf-clear');
  // ----------------------------- USER NOTIFICATION SECTION END -------------------------------------------//


  // ----------------------------- HOTEL SECTION START --------------------------------------//
  Route::get('/hotel/datatables','User\HotelController@datatables')->name('user-hotel-datatables');
  Route::get('/hotel','User\HotelController@index')->name('user-hotel-index');
  Route::get('/hotel/create', 'User\HotelController@create')->name('user-hotel-create');
  Route::post('/hotel/create', 'User\HotelController@store')->name('user-hotel-store');
  Route::get('/hotel/edit/{id}', 'User\HotelController@edit')->name('user-hotel-edit');
  Route::post('/hotel/update/{id}', 'User\HotelController@update')->name('user-hotel-update');
  Route::get('/hotel/delete/{id}', 'User\HotelController@destroy')->name('user-hotel-delete');
  Route::get('/user/hotel/gallery/remove/{id}','User\HotelController@GalleryRemove')->name('user.hotel.gallery.remove');


  // ----------------------------- HOTEL ATTRIBUTES SECTION START --------------------------------------//
  Route::get('/hotel/room/datatables/{id}','User\HotelRoomController@datatables')->name('user-hotel-room-datatables');
  Route::get('/hotel/room/{id}','User\HotelRoomController@index')->name('user-hotel-room');
  Route::get('/hotel/room/create/{id}','User\HotelRoomController@create')->name('user-hotel-room-create');
  Route::post('/hotel/room/store', 'User\HotelRoomController@store')->name('user-hotel-room-store');
  Route::get('/hotel/room/edit/{id}', 'User\HotelRoomController@edit')->name('user-hotel-room-edit');
  Route::post('/hotel/room/update/{id}', 'User\HotelRoomController@update')->name('user-hotel-room-update');
  Route::get('/hotel/room/delete/{id}', 'User\HotelRoomController@destroy')->name('user-hotel-room-delete');
  Route::get('user/hotel/room/image/remove/{id}','User\HotelRoomController@GalleryRemove')->name('hotel.room.image.remove');
  // ----------------------------- HOTEL ATTRIBUTES SECTION END --------------------------------------//


  // -------------------------------- USER BULK DELETE -----------------------------------------------//
  Route::get('/data/bulk/delete', 'User\BulkDeleteController@bulkdelete')->name('user.bulk.delete');
  // -------------------------------- USER BULK DELETE -----------------------------------------------//


   // ------------------------------ Hotel Order Section Start -------------------------------------------//
   Route::get('/hotel/orders/datatables/{type}','User\HotelOrderController@datatables')->name('user-hotel-datatables-orders');
   Route::get('/hotel/orders/details/{id}','User\HotelOrderController@HotelordersDetails')->name('user.hotel.order.details');
   Route::get('/hotel/order/status/{order_id}/{status}','User\HotelOrderController@hotelOrderStatus')->name('user-hotel-order-status');
   Route::get('/hotel/orders/all','User\HotelOrderController@orders')->name('user-hotel-allorders');
   Route::get('/hotel/orders/pending','User\HotelOrderController@orders')->name('user-hotel-pending.orders');
   Route::get('/hotel/orders/completed','User\HotelOrderController@orders')->name('user-hotel-completed.orders');
   Route::get('/hotel/orders/delete/{id}','User\SpaceOrderController@ordersDelete')->name('user-hotel-order-delete');
  // ----------------------------- HOTEL SECTION END --------------------------------------//


// ----------------------------- TOUR SECTION START --------------------------------------//
Route::get('/tour/datatables','User\TourController@datatables')->name('user-tour-datatables');
Route::get('/tour','User\TourController@index')->name('user-tour-index');
Route::get('/tour/create', 'User\TourController@create')->name('user-tour-create');
Route::post('/tour/create', 'User\TourController@store')->name('user-tour-store');
Route::get('/tour/edit/{id}', 'User\TourController@edit')->name('user-tour-edit');
Route::post('/tour/update/{id}', 'User\TourController@update')->name('user-tour-update');
Route::get('/tour/delete/{id}', 'User\TourController@destroy')->name('user-tour-delete');
Route::post('/user/tour/inventory/update/{id}','User\TourController@inventoryUpdate')->name('user.inventory.update.image');
Route::post('/user/new-inventory/image/upload/ajax/{id}','User\TourController@inventoryNewUpload');
Route::get('/user/inventore-remove/single/{id}','User\TourController@inventoryRemove');
Route::get('/user/gallery/remove/{id}','User\TourController@GalleryRemove')->name('user.tour.gallery.image.remove');
// ----------------------------- TOUR SECTION END --------------------------------------//

// ------------------------------ Tour Order Section Start -------------------------------------------//
Route::get('/tour/orders/datatables/{type}','User\TourOrderController@datatables')->name('user-tour-datatables-orders');
Route::get('/tour/orders/details/{id}','User\TourOrderController@TourordersDetails')->name('user.tour.order.details');
Route::get('/tour/order/status/{order_id}/{status}','User\TourOrderController@TourOrderStatus')->name('user-tour-order-status');
Route::get('/tour/orders/all','User\TourOrderController@orders')->name('user-tour-allorders');
Route::get('/tour/orders/pending','User\TourOrderController@orders')->name('user-tour-pending.orders');
Route::get('/tour/orders/completed','User\TourOrderController@orders')->name('user-tour-completed.orders');
Route::get('/tour/orders/delete/{id}','User\SpaceOrderController@ordersDelete')->name('user-tour-order-delete');
//

// ----------------------------- SPACE SECTION START --------------------------------------//
Route::get('/space/datatables','User\SpaceController@datatables')->name('user-space-datatables');
Route::get('/space','User\SpaceController@index')->name('user-space-index');
Route::get('/space/create', 'User\SpaceController@create')->name('user-space-create');
Route::post('/space/create', 'User\SpaceController@store')->name('user-space-store');
Route::get('/space/edit/{id}', 'User\SpaceController@edit')->name('user-space-edit');
Route::post('/space/update/{id}', 'User\SpaceController@update')->name('user-space-update');
Route::get('/space/delete/{id}', 'User\SpaceController@destroy')->name('user-space-delete');
Route::get('/gallery/remove/{id}','User\SpaceController@GalleryRemove')->name('user.space.gallery.image.remove');
Route::get('/user/space/gallery/remove/{id}','User\SpaceController@GalleryRemove')->name('user.space.gallery.remove');
// ----------------------------- SPACE SECTION END --------------------------------------//

// ------------------------------ Space Order Section Start -------------------------------------------//
Route::get('/space/orders/datatables/{type}','User\SpaceOrderController@datatables')->name('user-space-datatables-orders');
Route::get('/space/orders/details/{id}','User\SpaceOrderController@SpaceordersDetails')->name('user.space.order.details');
Route::get('/space/order/status/{order_id}/{status}','User\SpaceOrderController@SpaceOrderStatus')->name('user-space-order-status');
Route::get('/space/orders/all','User\SpaceOrderController@orders')->name('user-space-allorders');
Route::get('/space/orders/pending','User\SpaceOrderController@orders')->name('user-space-pending.orders');
Route::get('/space/orders/completed','User\SpaceOrderController@orders')->name('user-space-completed.orders');
Route::get('/space/orders/delete/{id}','User\SpaceOrderController@ordersDelete')->name('user-space-order-delete');
// ------------------------------ Space Order Section End -------------------------------------------//

// ----------------------------- CAR SECTION START --------------------------------------//
Route::get('/car/datatables','User\CarController@datatables')->name('user-car-datatables');
Route::get('/car','User\CarController@index')->name('user-car-index');
Route::get('/car/create', 'User\CarController@create')->name('user-car-create');
Route::post('/car/create', 'User\CarController@store')->name('user-car-store');
Route::get('/car/edit/{id}', 'User\CarController@edit')->name('user-car-edit');
Route::post('/car/update/{id}', 'User\CarController@update')->name('user-car-update');
Route::get('/car/delete/{id}', 'User\CarController@destroy')->name('user-car-delete');
Route::get('user/car/gallery/remove/{id}','User\CarController@GalleryRemove')->name('user.car.gallery.image.remove');
// ----------------------------- CAR SECTION END --------------------------------------//

// ------------------------------ Car Order Section Start -------------------------------------------//
Route::get('/car/orders/datatables/{type}','User\CarOrderController@datatables')->name('user-car-datatables-orders');
Route::get('/car/orders/details/{id}','User\CarOrderController@CarordersDetails')->name('user.car.order.details');
Route::get('/car/order/status/{order_id}/{status}','User\CarOrderController@CarOrderStatus')->name('user-car-order-status');
Route::get('/car/orders/all','User\CarOrderController@orders')->name('user-car-allorders');
Route::get('/car/orders/pending','User\CarOrderController@orders')->name('user-car-pending.orders');
Route::get('/car/orders/completed','User\CarOrderController@orders')->name('user-car-completed.orders');
Route::get('/car/orders/delete/{id}','User\SpaceOrderController@ordersDelete')->name('user-car-order-delete');
// ------------------------------ Car Order Section End -------------------------------------------//


Route::get('/{order_type}/order/history','User\OrderHistoryController@History')->name('user-order-history');



Route::get('/car/order/history/datatables','User\OrderHistoryController@carDatatables')->name('user-car-datatables-orders-history');
Route::get('/hotel/order/history/datatables','User\OrderHistoryController@hotelDatatables')->name('user-hotel-datatables-orders-history');
Route::get('/space/order/history/datatables','User\OrderHistoryController@spaceDatatables')->name('user-space-datatables-orders-history');
Route::get('/tour/order/history/datatables','User\OrderHistoryController@tourDatatables')->name('user-tour-datatables-orders-history');
Route::post('/order/cancel/submit','User\OrderHistoryController@orderCancel')->name('user.order.cancel');




// ------------------------ USER NOTIFICATION SECTION ....................//
Route::get('notification/count','User\NotificationController@notf_count')->name('user-notification-count');
Route::get('notification/show','User\NotificationController@notf_show')->name('user-order-notf-show');
Route::get('notification/clear','User\NotificationController@notf_clear')->name('user-order-notf-clear');
// ------------------------- USER NOTIFICATION SECTION END ....................//

// ------------------------- USER WITHDRAW SECTION START -----------------------//
Route::get('withdraw/datatables','User\WithdrawController@datatables')->name('user-withdraw-datatables');
Route::get('withdraws','User\WithdrawController@index')->name('user-withdraw-index');
Route::get('withdraw/create','User\WithdrawController@create')->name('user-withdraw-create');
Route::post('withdraw/store','User\WithdrawController@store')->name('user-withdraw-store');
Route::get('withdraw/edit/{id}','User\WithdrawController@edit')->name('user-withdraw-edit');
Route::get('withdraw/edit/update/{id}','User\WithdrawController@update')->name('user-withdraw-update');
// ------------------------- USER WITHDRAW SECTION END -----------------------//

});


// **************** USER ROUTE SECTION END ***********************************//




// ************************ FRONT ROUTE SECTION START ******************************//


Route::get('/','Front\FrontendController@index')->name('front.index');
Route::get('/faq','Front\FrontendController@faq')->name('front.faq');
Route::get('contact','Front\FrontendController@contact')->name('front.contact');
Route::get('language/setup','Front\FrontendController@languageSet')->name('front.language.setup');
Route::get('currency/setup','Front\FrontendController@currencySet')->name('front.currency.setup');

Route::post('contact/submit','Front\FrontendController@contactemail')->name('front.contact.submit');
Route::post('/newsletter/post/email','Front\FrontendController@subscribe')->name('newsletter.post');



// **************************** GLOBAL CHAPCHA **********************************************//
  Route::get('/contact/refresh_code','Front\FrontendController@refresh_code');
// **************************** GLOBAL CHAPCHA **********************************************//

    // BLOG SECTION
    Route::get('/blog','Front\FrontendController@blog')->name('front.blog');
    Route::get('blog/{slug}','Front\FrontendController@blogshow')->name('front.blog.show');
    Route::get('/blog/category/{slug}','Front\FrontendController@blogcategory')->name('front.blogcategory');
    Route::get('/blog/tag/{slug}','Front\FrontendController@blogtags')->name('front.blogtags');
    Route::get('/blog-search','Front\FrontendController@blogsearch')->name('front.blogsearch');
    Route::get('/blog/archive/{slug}','Front\FrontendController@blogarchive')->name('front.blogarchive');


    // __________________________ Front Tour ________________________________________//
    Route::get('tours','Front\BookingController@tour')->name('front.tours');
    Route::get('tour/search/','Front\BookingController@tourSearch')->name('front.tours.ajax');
    Route::get('tour/{slug}','Front\BookingController@tourDetails')->name('tour.details');
    Route::get('favarite/all/{id_type}','Front\BookingController@favarite')->name('front.favarite');
    Route::post('/tour/book/store','Checkout\TourCheckoutController@booking')->name('tour.book');
    Route::get('tour/booking/checkout','Checkout\TourCheckoutController@checkout')->name('tour.checkout');


    Route::get('hotels/','Front\BookingController@hotel')->name('front.hotels');
    Route::post('/hotel/room/book','Checkout\HotelCheckoutController@booking')->name('front.checkout');
    Route::get('hotel/booking/checkout','Checkout\HotelCheckoutController@checkout')->name('hotel.checkout');
    Route::get('hotel/{slug}','Front\BookingController@hotelDetails')->name('hotel.details');
    Route::get('hotel/room/ajax/search','Checkout\HotelCheckoutController@hotelRoomGet')->name('hotel.room.search');


    Route::get('spaces','Front\BookingController@space')->name('front.spaces');
    Route::get('space/{slug}','Front\BookingController@spaceDetails')->name('space.details');
    Route::post('/space/book/store','Checkout\SpaceCheckoutController@booking')->name('space.book');
    Route::get('space/booking/checkout','Checkout\SpaceCheckoutController@checkout')->name('space.checkout');
    Route::get('space/availability/check','Checkout\SpaceCheckoutController@checkAvailability')->name('space.availability.check');


    Route::get('cars/','Front\BookingController@cars')->name('front.cars');
    Route::get('cars/{slug}','Front\BookingController@cardetails')->name('car.details');
    Route::post('/car/book/store','Checkout\CarCheckoutController@booking')->name('car.book');
    Route::get('car/booking/checkout','Checkout\CarCheckoutController@checkout')->name('car.checkout');
    Route::get('car/availability/check','Checkout\CarCheckoutController@checkAvailability')->name('car.availability.check');


    // CHECKOUT SECTION ENDS
    Route::post('/hotel/stripe/submit', 'Front\StripeController@store')->name('stripe.submit');
    Route::post('hotel/offline/checkout/submit','Front\OfflinePayment@store')->name('offline.payment');
    Route::post('car/chackout/stripe/submit', 'Payment\CarStripeController@store')->name('car.stripe.payment');
    Route::post('car/offline/submit','Payment\CarOfflineController@store')->name('car.offline.payment');
    Route::post('/space/stripe/submit', 'Payment\SpaceStripeController@store')->name('space.stripe.submit');
    Route::post('space/offline/checkout/submit','Payment\SpaceOfflineController@store')->name('space.offline.payment');
    Route::post('/car/stripe/submit', 'Payment\TourStripeController@store')->name('tour.stripe.submit');
    Route::post('car/offline/checkout/submit','Payment\TourOfflineController@store')->name('tour.offline.payment');



    // Instamojo
    Route::post('tour/instamojo/checkout/submit','Payment\TourInstamojoController@store')->name('tour.instamojo.payment');
    Route::get('tour/instamojo/checkout/notify','Payment\TourInstamojoController@notify')->name('tour.instamojo.notify');


    Route::post('tour/mollie/checkout/submit','Payment\TourMollieController@store')->name('tour.mollie.payment');
    Route::get('tour/mollie/checkout/notify','Payment\TourMollieController@notify')->name('tour.mollie.notify');


    Route::post('space/instamojo/checkout/submit','Payment\SpaceInstamojoController@store')->name('space.instamojo.payment');
    Route::get('space/instamojo/checkout/notify','Payment\SpaceInstamojoController@notify')->name('space.instamojo.notify');

    Route::post('space/mollie/checkout/submit','Payment\SpaceMollieController@store')->name('space.mollie.payment');
    Route::get('space/mollie/checkout/notify','Payment\SpaceMollieController@notify')->name('space.mollie.notify');


    Route::post('hotel/instamojo/checkout/submit','Payment\HotelInstamojoController@store')->name('hotel.instamojo.payment');
    Route::get('hotel/instamojo/checkout/notify','Payment\HotelInstamojoController@notify')->name('hotel.instamojo.notify');


    Route::post('car/instamojo/checkout/submit','Payment\CarInstamojoController@store')->name('car.instamojo.payment');
    Route::get('car/instamojo/checkout/notify','Payment\CarInstamojoController@notify')->name('car.instamojo.notify');

    Route::post('car/mollie/checkout/submit','Payment\CarMollieController@store')->name('car.mollie.payment');
    Route::get('car/mollie/checkout/notify','Payment\CarMollieController@notify')->name('car.mollie.notify');

    // Rezorpay
    Route::post('/hotel/rezorpay/checkout/submit','Payment\HotelRezorpayController@store')->name('hotel.rezorpay.payment');
    Route::post('/hotel/rezorpay/checkout/notify','Payment\HotelRezorpayController@notify')->name('hotel.rezorpay.notify');
    
    Route::post('/car/rezorpay/checkout/submit','Payment\CarRezorpayController@store')->name('car.rezorpay.payment');
    Route::post('/car/rezorpay/checkout/notify','Payment\CarRezorpayController@notify')->name('car.rezorpay.notify');
    
    Route::post('/space/rezorpay/checkout/submit','Payment\SpaceRezorpayController@store')->name('space.rezorpay.payment');
    Route::post('/space/rezorpay/checkout/notify','Payment\SpaceRezorpayController@notify')->name('space.rezorpay.notify');
    
    Route::post('/tour/rezorpay/checkout/submit','Payment\TourRezorpayController@store')->name('tour.rezorpay.payment');
    Route::post('/tour/rezorpay/checkout/notify','Payment\TourRezorpayController@notify')->name('tour.rezorpay.notify');

    // Paypal
    Route::post('tour/paypal/checkout/submit','Payment\TourPaypalController@store')->name('tour.paypal.payment');
    Route::get('tour/paypal/checkout/notify','Payment\TourPaypalController@notify')->name('tour.paypal.notify');

    Route::post('space/paypal/checkout/submit','Payment\SpacePaypalController@store')->name('space.paypal.payment');
    Route::get('space/paypal/checkout/notify','Payment\SpacePaypalController@notify')->name('space.paypal.notify');

    Route::post('hotel/paypal/checkout/submit','Payment\HotelPaypalController@store')->name('hotel.paypal.payment');
    Route::get('hotel/paypal/checkout/notify','Payment\HotelPaypalController@notify')->name('hotel.paypal.notify');

    Route::post('hotel/mollie/checkout/submit','Payment\HotelMollieController@store')->name('hotel.mollie.payment');
    Route::get('hotel/mollie/checkout/notify','Payment\HotelMollieController@notify')->name('hotel.mollie.notify');


    Route::post('car/paypal/checkout/submit','Payment\CarPaypalController@store')->name('car.paypal.payment');
    Route::get('car/paypal/checkout/notify','Payment\CarPaypalController@notify')->name('car.paypal.notify');

    // Authorize.ner
    Route::post('tour/authorize/checkout/submit','Payment\TourAuthorizeController@store')->name('tour.authorize.payment');
    Route::post('space/authorize/checkout/submit','Payment\SpaceAuthorizeController@store')->name('space.authorize.payment');
    Route::post('hotel/authorize/checkout/submit','Payment\HotelAuthorizeController@store')->name('hotel.authorize.payment');
    Route::post('car/authorize/checkout/submit','Payment\CarAuthorizeController@store')->name('car.authorize.payment');
    
    Route::post('hotel/paystack/checkout/submit','Payment\HotelPaystackController@store')->name('hotel.paystack.payment');
    Route::post('tour/paystack/checkout/submit','Payment\TourPaystackController@store')->name('tour.paystack.payment');
    Route::post('space/paystack/checkout/submit','Payment\SpacePaystackController@store')->name('space.paystack.payment');
    Route::post('car/paystack/checkout/submit','Payment\CarPaystackController@store')->name('car.paystack.payment');

    Route::post('hotel/mercadopago/checkout/submit','Payment\HotelMercadopagoController@store')->name('hotel.mercadopago.payment');
    Route::post('tour/mercadopago/checkout/submit','Payment\TourMercadopagoController@store')->name('tour.mercadopago.payment');
    Route::post('space/mercadopago/checkout/submit','Payment\SpaceMercadopagoController@store')->name('space.mercadopago.payment');
    Route::post('car/mercadopago/checkout/submit','Payment\CarMercadopagoController@store')->name('car.mercadopago.payment');



    Route::get('front/success','Front\FrontendController@success')->name('front.success');


    Route::post('front/search','Front\FrontendController@search')->name('front.search');

  // Front Review start
    Route::post('front/review/store','Front\ReviewController@reviewstore')->name('front.review.store');
  // Front Review end

  Route::post('the/genius/ocean/2441139', 'Front\FrontendController@subscription');
  Route::get('finalize', 'Front\FrontendController@finalize');

    Route::get('/{slug}','Front\FrontendController@pages')->name('front.pages');
// ************************ FRONT ROUTE SECTION END ******************************//
