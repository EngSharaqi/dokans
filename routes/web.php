<?php

Route::get('/','FrontendController@welcome')->name('welcome');

Route::get('/priceing','FrontendController@priceing')->name('priceing');

Route::get('/merchant/plan/{id}','FrontendController@register_view')->name('merchant.form');

//Route::post('/merchant/plan/{id}','FrontendController@register')->name('merchant.register-make');

Route::get('/service','FrontendController@service')->name('service');

Route::get('/contact','FrontendController@contact')->name('contact');

Route::get('/page/{slug}','FrontendController@page')->name('page');

Route::post('/send-email','FrontendController@send_mail')->name('send_mail');

Route::get('/translate','FrontendController@translate')->name('translate');

Route::get('/login','Customer\LoginController@loginIndex')->name('login');

Route::post('/login/form','Customer\LoginController@login')->name('login.form');


///Route::group(['prefix' => ''], function () {
//    Route::group(['middleware' => 'customer'], function () {
//       Route::group(['middleware' => ['role:superadmin']], function () {
//            Route::get('/user/dashboard','Admin\AdminController@dashboard')->name('');
//        });
//    });
//});




Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\AdminController@login_form')->name('admin.login.form');
    Route::post('login/form', 'Admin\AdminController@login')->name('admin.login');
    Route::post('logout', 'Admin\AdminController@logout')->name('admin.logout');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::group(['middleware' => ['role:Super Admin']], function () {
            Route::get('dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard.static');
            Route::get('profile', 'Admin\AdminController@EditProfile')->name('admin.profile.settings');
            Route::get('dashboard/perfomance/{period}', 'Admin\AdminController@perfomance')->name('admin.dashboard.perfomance');
            Route::get('dashboard/visitors/{period}', 'Admin\AdminController@fetchTotalVisitorsAndPageViews')->name('admin.dashboard.visitors');
            Route::get('dashboard/order_statics/{month}', 'Admin\AdminController@order_statics')->name('admin.order_statics');
            Route::get('dashboard/visitors/{days}?_={view_id}', 'Admin\AdminController@google_analytics')->name('admin.google_analytics');


            Route::get('plan', 'Admin\PlanController@index')->name('admin.plan.index');
            Route::get('plan/create', 'Admin\PlanController@create')->name('admin.plan.create');

            Route::get('report', 'Admin\ReportController@index')->name('admin.report');

            Route::get('customers', 'Admin\customerController@index')->name('admin.customers.index');
            Route::get('customers/create', 'Admin\customerController@create')->name('admin.customers.create');
            Route::post('customers/store', 'Admin\customerController@store')->name('admin.customers.store');
            Route::get('customers/show/{id}', 'Admin\CustomerController@show')->name('admin.customers.show');
            Route::post('customers/delete', 'Admin\CustomerController@destroy')->name('admin.customers.destroy');
            Route::get('customers/edit/{id}', 'Admin\CustomerController@edit')->name('admin.customers.edit');
            Route::post('customers/update/{id}', 'Admin\CustomerController@update')->name('admin.customers.update');
            Route::get('customers/plan/edit/{id}', 'Admin\CustomerController@planview')->name('admin.customers.planedit');
            Route::post('customers/plan/update/{id}', 'Admin\CustomerController@updateplaninfo')->name('admin.customers.updateplaninfo');


            Route::get('domains', 'Admin\DomainController@index')->name('admin.domains.index');
            Route::get('domains/create', 'Admin\DomainController@create')->name('admin.domains.create');
            Route::post('domains/store', 'Admin\DomainController@store')->name('admin.domains.store');
            Route::get('domains/show/{id}', 'Admin\DomainController@show')->name('admin.domains.show');
            Route::get('domains/delete', 'Admin\DomainController@destroy')->name('admin.domains.destroy');
            Route::get('domains/edit/{id}', 'Admin\DomainController@edit')->name('admin.domains.edit');
            Route::post('domains/update/{id}', 'Admin\DomainController@update')->name('admin.domains.update');


            Route::post('customdomains/update/{id}', 'Admin\CustomdomainController@update')->name('admin.customdomains.update');
            Route::get('customdomains', 'Admin\CustomdomainController@index')->name('admin.customdomains.index');
            Route::get('customdomains/show/{id}', 'Admin\CustomdomainController@show')->name('admin.customdomains.show');
            Route::post('customdomains/delete', 'Admin\CustomdomainController@destroy')->name('admin.customdomains.destroy');

            Route::post('cron/store', 'Admin\CronController@store')->name('admin.cron.store');

            Route::get('payment-geteway/show/{id}', 'Admin\PaymentController@show')->name('admin.payment-geteway.show');
            Route::post('payment-geteway/update/{id}', 'Admin\PaymentController@update')->name('admin.payment-geteway.update');

            Route::post('template/delete', 'Admin\TemplateController@destroy')->name('admin.templates.delete');
            Route::post('template/store', 'Admin\TemplateController@store')->name('admin.template.store');





            Route::get('cron', 'Admin\CronController@index')->name('admin.cron.index');
            Route::get('cron/create', 'Admin\CronController@create')->name('admin.cron.create');

            Route::get('payment-geteway', 'Admin\PaymentController@index')->name('admin.payment-geteway.index');
            Route::get('payment-geteway/create', 'Admin\PaymentController@create')->name('admin.payment-geteway.create');

            Route::get('template', 'Admin\TemplateController@index')->name('admin.template.index');
            Route::get('template/create', 'Admin\TemplateController@create')->name('admin.template.create');
            Route::post('template/store', 'Admin\TemplateController@store')->name('admin.template.store');
            Route::post('template/delete/{id}', 'Admin\TemplateController@destroy')->name('admin.templates.delete');


            Route::get('pages', 'Admin\PageController@index')->name('admin.pages.index');
            Route::get('pages/create', 'Admin\PageController@create')->name('admin.pages.create');
            Route::post('pages/store', 'Admin\PageController@store')->name('admin.pages.store');
            Route::get('pages/edit/{id}', 'Admin\PageController@edit')->name('admin.pages.edit');
            Route::post('pages/update/{id}', 'Admin\PageController@update')->name('admin.pages.update');
            Route::post('pages/delete', 'Admin\PageController@destroy')->name('admin.pages.destroy');

            Route::get('languages', 'Admin\LanguageController@index')->name('admin.languages.index');
            Route::get('languages/create', 'Admin\LanguageController@create')->name('admin.languages.create');
            Route::post('languages/store', 'Admin\LanguageController@store')->name('admin.languages.store');
            Route::get('languages/edit/{id}', 'Admin\LanguageController@edit')->name('admin.languages.edit');
            Route::post('languages/update/{id}', 'Admin\LanguageController@update')->name('admin.languages.update');
            Route::post('languages/active', 'Admin\LanguageController@setActiveLanuguage')->name('admin.languages.active');
            Route::get('languages/show/{id}', 'Admin\LanguageController@show')->name('admin.languages.show');
            Route::get('pages/delete/{id}', 'Admin\LanguageController@destroy')->name('admin.languages.destroy');
            Route::post('languages/add_key', 'Admin\LanguageController@add_key')->name('admin.languages.add_key');


            Route::get('language', 'Admin\LanguageController@index')->name('admin.language.index');
            Route::get('language/create', 'Admin\LanguageController@create')->name('admin.language.create');

            Route::get('language', 'Admin\LanguageController@index')->name('admin.language.index');
            Route::get('language/create', 'Admin\LanguageController@create')->name('admin.language.create');

            Route::get('appearance', 'Admin\FrontendController@show')->name('admin.appearance.show');

            Route::get('gallery', 'Admin\GalleryController@index')->name('admin.gallery.index');

            Route::get('menu', 'Admin\MenuController@index')->name('admin.menu.index');

            Route::get('seo', 'Admin\SeoController@index')->name('admin.seo.index');

            Route::get('marketing', 'Admin\MarketingController@index')->name('admin.marketing.index');

            Route::get('role', 'Admin\RoleController@index')->name('admin.role.index');
            Route::get('role/edit/{id}', 'Admin\RoleController@edit')->name('admin.role.edit');
            Route::post('role/update/{id}', 'Admin\RoleController@update')->name('admin.role.update');
            Route::post('role/delete', 'Admin\RoleController@destroy')->name('admin.roles.destroy');
            Route::get('role/create', 'Admin\RoleController@create')->name('admin.role.create');
            Route::post('role/store', 'Admin\RoleController@store')->name('admin.role.store');




            Route::get('admins', 'Admin\AdminController@index')->name('admin.admins.index');
            Route::get('admins/create', 'Admin\AdminController@create')->name('admin.admins.create');
            Route::post('admins/store', 'Admin\AdminController@store')->name('admin.admins.store');
            Route::post('admins/delete', 'Admin\AdminController@destroy')->name('admin.admins.destroy');
            Route::get('admins/edit/{id}', 'Admin\AdminController@edit')->name('admin.admins.edit');
            Route::post('admins/update/{id}', 'Admin\AdminController@update')->name('admin.admins.update');
            Route::post('admins/send-email','Admin\EmailController@store')->name('admin.email.store');

            Route::get('orders', 'Admin\OrderController@index')->name('admin.orders.index');
            Route::get('orders/create', 'Admin\OrderController@create')->name('admin.orders.create');
            Route::post('orders/store', 'Admin\OrderController@store')->name('admin.orders.store');
            Route::post('orders/delete', 'Admin\OrderController@destroy')->name('admin.orders.destroy');
            Route::get('orders/edit/{id}', 'Admin\OrderController@edit')->name('admin.orders.edit');
            Route::post('orders/update/{id}', 'Admin\OrderController@update')->name('admin.orders.update');
            Route::get('orders/invoice/{id}', 'Admin\OrderController@invoice')->name('admin.orders.invoice');
            Route::get('orders/show/{id}', 'Admin\OrderController@show')->name('admin.orders.show');

            Route::get('plans', 'Admin\PlanController@index')->name('admin.plans.index');
            Route::get('plans/create', 'Admin\PlanController@create')->name('admin.plans.create');
            Route::post('plans/store', 'Admin\PlanController@store')->name('admin.plans.store');
            Route::post('plans/delete', 'Admin\PlanController@destroy')->name('admin.plans.destroy');
            Route::get('plans/edit/{id}', 'Admin\PlanController@edit')->name('admin.plans.edit');
            Route::post('plans/update/{id}', 'Admin\PlanController@update')->name('admin.plans.update');
            Route::get('plans/show/{id}', 'Admin\PlanController@show')->name('admin.plans.show');


//            Route::resource('admins', 'Admin\AdminController')->only('admin.admins.index', 'admin.admins.create',
//                'admin.admins.store', 'admin.admins.edit', 'admin.admins.update', 'admin.admins.destroy');
            Route::get('appearance/show/{header}', 'Admin\FrontendController@show')->name('admin.appearance.show');
            Route::post('appearance/update/{type}', 'Admin\FrontendController@update')->name('admin.appearance.update');
            Route::post('appearance/store', 'Admin\FrontendController@store')->name('admin.appearance.store');


            Route::post('appearance/delete', 'Admin\FrontendController@destroy')->name('admin.categories.destroy');

            Route::post('galleries/delete', 'Admin\GalleryController@destroy')->name('admin.galleries.destroy');
            Route::post('galleries/store', 'Admin\GalleryController@store')->name('admin.galleries.store');


            Route::post('menus/store', 'Admin\MenuController@store')->name('admin.menus.store');
            Route::post('menus/delete', 'Admin\MenuController@destroy')->name('admin.menus.destroy');
            Route::get('menus/show/{id}', 'Admin\MenuController@show')->name('admin.menus.show');
            Route::get('menus/edit/{id}', 'Admin\MenuController@edit')->name('admin.menus.edit');
            Route::post('menus/MenuNodeStore', 'Admin\MenuController@MenuNodeStore')->name('admin.menus.MenuNodeStore');

            Route::post('seo/store', 'Admin\SeoController@store')->name('admin.seo.store');
            Route::post('seo/update/{id}', 'Admin\SeoController@update')->name('admin.seo.update');


            Route::get('marketing', 'Admin\MarketingController@index')->name('admin.marketing.index');
            Route::post('marketing/store', 'Admin\MarketingController@store')->name('admin.marketing.store');


            Route::get('site-settings', 'Admin\SiteController@site_settings')->name('admin.site.settings');
            Route::post('site-settings', 'Admin\SiteController@update')->name('admin.site_settings.update');

            Route::get('system-environment', 'Admin\SiteController@system_environment_view')->name('admin.site.environment');
            Route::post('env/update', 'Admin\SiteController@env_update')->name('admin.env.update');





        });
    });
});
