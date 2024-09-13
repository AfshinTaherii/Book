<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">BookFair</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="{{route('home')}}"><i class="feather icon-eye"></i><span class="menu-title"
                                                                                   data-i18n="Ecommerce">نمایش سایت</span></a>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title"
                                                                                     data-i18n="Ecommerce">کاربران</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addUser') ? 'active' : '' }}"><a href="{{route('addUser')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">افزودن کاربر</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listUser') ? 'active' : '' }}"><a href="{{route('listUser')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">نمایش کاربران</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="fa fa-chevron-down"></i><span class="menu-title"
                                                                                     data-i18n="Ecommerce">سطوح دسترسی</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addRoll') ? 'active' : '' }}"><a href="{{route('addRoll')}}"><i
                                class="fa fa-plus"></i><span class="menu-item"
                                                             data-i18n="Shop">افزودن</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listRoll') ? 'active' : '' }}"><a href="{{route('listRoll')}}"><i
                                class="fa fa-list"></i><span class="menu-item" data-i18n="Shop">نمایش</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="fa fa-cube"></i><span class="menu-item"
                                                                             data-i18n="Error">دسته بندی ها</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addCategory') ? 'active' : '' }}"><a
                            href="{{route('addCategory')}}"><i class="fa fa-plus"></i><span
                                class="menu-item">افزودن</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listCategory') ? 'active' : '' }}"><a
                            href="{{route('listCategory')}}"><i class="fa fa-list"></i><span
                                class="menu-item">لیست</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="fa fa-shopping-basket"></i><span class="menu-title"
                                                                                        data-i18n="Ecommerce">محصولات</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addProduct') ? 'active' : '' }}"><a
                            href="{{route('addProduct')}}"><i class="fa fa-plus"></i><span class="menu-item"
                                                                                           data-i18n="Shop">افزودن</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listProduct') ? 'active' : '' }}"><a
                            href="{{route('listProduct')}}"><i class="fa fa-list"></i><span class="menu-item"
                                                                                            data-i18n="Details">لیست</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="fa fa-university"></i><span class="menu-title"
                                                                                   data-i18n="Ecommerce">استان</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addProvince') ? 'active' : '' }}"><a
                            href="{{route('addProvince')}}"><i class="fa fa-plus"></i><span class="menu-item"
                                                                                            data-i18n="Shop">افزودن استان</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listProvince') ? 'active' : '' }}"><a
                            href="{{route('listProvince')}}"><i class="fa fa-list"></i><span class="menu-item"
                                                                                             data-i18n="Shop">لیست استان ها</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="fa fa-building"></i><span class="menu-title"
                                                                                 data-i18n="Ecommerce">شهر</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addCity') ? 'active' : '' }}"><a href="{{route('addCity')}}"><i
                                class="fa fa-plus"></i><span class="menu-item"
                                                             data-i18n="Shop">افزودن شهر</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listCity') ? 'active' : ''}}"><a href="{{route('listCity')}}"><i
                                class="fa fa-list"></i><span class="menu-item"
                                                             data-i18n="Shop">لیست شهر ها</span></a>
                    </li>
                </ul>
            </li>


            {{--            <li class="nav-item"><a href="#"><i class="fa fa-desktop"></i><span class="menu-title"--}}
            {{--                                                                                data-i18n="Ecommerce">سفارشات</span></a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    <li class="{{ Request::routeIs('waitOrder') ? 'active' : '' }}"><a href="{{route('waitOrder')}}"><i class="fa fa-hourglass-half"></i><span class="menu-item"--}}
            {{--                                                                                                                                                               data-i18n="Shop"> سفارشات منتظر</span></a>--}}
            {{--                    </li>--}}
            {{--                    <li class="{{ Request::routeIs('notSubmitOrder') ? 'active' : '' }}"><a href="{{route('notSubmitOrder')}}"><i class="fa fa-user-times"></i><span class="menu-item"--}}
            {{--                                                                                                                                                                     data-i18n="Shop">سفارشات تایید نشده</span></a>--}}
            {{--                    </li>--}}
            {{--                    <li class="{{ Request::routeIs('sendOrder') ? 'active' : '' }}"><a href="{{route('sendOrder')}}"><i class="fa fa-truck"></i><span class="menu-item"--}}
            {{--                                                                                                                                                      data-i18n="Shop">سفارشات ارسال شده</span></a>--}}
            {{--                    </li>--}}

            {{--                </ul>--}}
            {{--            </li>--}}

            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">تخفیفات</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addCoupon') ? 'active' : '' }}"><a href="{{route('addCoupon')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">افزودن تخفیف</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listCoupon') ? 'active' : '' }}"><a
                            href="{{route('listCoupon')}}"><i class="feather icon-circle"></i><span class="menu-item"
                                                                                                    data-i18n="Shop">نمایش تخفیف</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">رویداد</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addEvent') ? 'active' : '' }}"><a href="{{route('addEvent')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">افزودن رویداد</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listEvent') ? 'active' : '' }}"><a href="{{route('listEvent')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">نمایش رویداد</span></a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href="#"><i class="fa fa-sliders"></i><span class="menu-title"
                                                                                data-i18n="Ecommerce">اسلایدر</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addSlider') ? 'active' : '' }}"><a href="{{route('addSlider')}}"><i
                                class="fa fa-plus"></i><span class="menu-item"
                                                             data-i18n="Shop">افزودن اسلایدر</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listSlider') ? 'active' : '' }}"><a
                            href="{{route('listSlider')}}"><i class="fa fa-list"></i><span class="menu-item"
                                                                                           data-i18n="Shop">نمایش اسلایدر</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">مقالات</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addBlog') ? 'active' : '' }}"><a href="{{route('addBlog')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">افزودن مقالات</span></a>
                    </li>
                    <li class="{{ Request::routeIs('listBlog') ? 'active' : '' }}"><a href="{{route('listBlog')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">نمایش مقالات</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">تنظیمات</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('addSetting') ? 'active' : '' }}"><a href="{{route('addSetting')}}"><i
                                class="feather icon-circle"></i><span class="menu-item"
                                                                      data-i18n="Shop">افزودن تنظیمات</span></a>
                    </li>
                </ul>
            </li>
{{--            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"--}}
{{--                                                                                             data-i18n="Ecommerce">نظرات و پیشنهادات</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    --}}{{--                    <li class="{{ Request::routeIs('listContact') ? 'active' : '' }}"><a href="{{route('listContact')}}"><i class="feather icon-circle"></i><span class="menu-item"--}}
{{--                    --}}{{--                                                                                      data-i18n="Shop"> نمایش نظرات و پیشنهادات</span></a>--}}
{{--                    --}}{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"--}}
{{--                                                                                             data-i18n="Ecommerce">نظرات محصولات</span></a>--}}
{{--                                <ul class="menu-content">--}}
{{--                                                      <li class="{{ Request::routeIs('') ? 'active' : '' }}"><a href="{{route('')}}"><i class="feather icon-circle"></i><span class="menu-item"--}}
{{--                                                                                                                                                                                                     data-i18n="Shop">نمایش پیام ها</span></a>--}}
{{--                                                     </li>--}}
{{--                                </ul>--}}
{{--            </li>--}}
            <li class="nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                                                                                             data-i18n="Ecommerce">پشتیبانی</span></a>
                <ul class="menu-content">
                    {{--                  <li class="{{ Request::routeIs('') ? 'active' : '' }}"><a href="{{route(')}}"><i class="feather icon-circle"></i><span class="menu-item"--}}
                    {{--                                                                                                                                                                  data-i18n="Shop"> نمایش پیام ها</span></a>--}}
                    {{--           </li>--}}
                </ul>
            </li>

        </ul>
    </div>
</div>
