
<?php if(config('templatecookie.testing_mode')): ?>
<?php
$headerCountries = Modules\Location\Entities\Country::select('id', 'name', 'slug', 'icon')->active()->get();
$headerCurrencies = Modules\Currency\Entities\Currency::all();
$languages = loadLanguage();
$defaultLanguage = Modules\Language\Entities\Language::where('code',
config('templatecookie.default_language'))->first();
?>
<?php endif; ?>


<header class="header rt-fixed-top">
    <script>
        function changeSearchSelections() {
            var job_search_url = "<?php echo e(route('website.job')); ?>";
            var candidate_search_url = "<?php echo e(route('website.candidate')); ?>";
            var company_search_url = "<?php echo e(route('website.company')); ?>";
            var search_selection = $("#headerSearchs").val();

            if (search_selection == 'job') {
                $(".header-search-form").attr('action', job_search_url);
            } else if (search_selection == 'candidate') {
                $(".header-search-form").attr('action', candidate_search_url);
            } else if (search_selection == 'company') {
                $(".header-search-form").attr('action', company_search_url);
            }
        }
    </script>
    <div class="n-header">
        <div class="n-header--top relative">
            <?php if(auth()->guard('user')->check()): ?>
            <?php if(!authUser()->status): ?>
            <div class="alert alert-danger" role="alert">
                <div class="container tw-px-0">
                    <div class="rt-ml-13">
                        <?php echo e(__('your_account_is_not_active_please_wait_until_the_account_is_activated_by_admin')); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <div class="container tw-px-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="n-header--top__left main-menu">
                        <div
                            class="mbl-top d-flex align-items-center justify-content-between container position-relative d-lg-none">
                            <div class="d-flex align-items-center">
                                <a href="<?php echo e(route('website.home')); ?>" class="brand-logo">
                                    <img src="<?php echo e($setting->dark_logo_url); ?>" alt="logo">
                                </a>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center ">
                                    <div class="search-icon d-lg-none tw-text-white">
                                        <svg id="mblSearchIcon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20.9999 21L16.6499 16.65" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="mblTogglesearch bg-primary-500 rounded">
                                        <form action="<?php echo e(route('website.job')); ?>" method="GET" id="search-form"
                                            class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">
                                            <div class="form-item">
                                                <input name="keyword" class="search-input w-100" type="text"
                                                    placeholder="<?php echo e(__('job_title_keyword')); ?>"
                                                    value="<?php echo e(request('keyword')); ?>" id="mobile_search_input">
                                            </div>
                                        </form>
                                    </div>
                                    <?php if(auth()->guard('user')->check()): ?>
                                    <ul
                                        class="custom-border list-unstyled d-flex align-items-center justify-content-end">
                                        <?php if(auth()->user()->role == 'company'): ?>
                                        <?php if (isset($component)) { $__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\NotificationsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('website.company.notifications-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Website\Company\NotificationsComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b)): ?>
<?php $attributes = $__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b; ?>
<?php unset($__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b)): ?>
<?php $component = $__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b; ?>
<?php unset($__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        <?php if(auth()->user()->role == 'candidate'): ?>
                                        <?php if (isset($component)) { $__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac = $attributes; } ?>
<?php $component = App\View\Components\Website\Candidate\NotificationsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('website.candidate.notifications-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Website\Candidate\NotificationsComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac)): ?>
<?php $attributes = $__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac; ?>
<?php unset($__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac)): ?>
<?php $component = $__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac; ?>
<?php unset($__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        <?php if (\Illuminate\Support\Facades\Blade::check('company')): ?>
                                        <li class="relative">
                                            <a href="<?php echo e(route('user.dashboard')); ?> " class="candidate-profile p-0">
                                                <img src="<?php echo e(auth()->check() ? auth()->user()?->company?->logo_url : ''); ?>"
                                                    alt="company logo">
                                            </a>
                                        </li>
                                        <?php else: ?>
                                        <li class="relative">
                                            <a href="<?php echo e(route('user.dashboard')); ?> " class="candidate-profile p-0">
                                                <img src="<?php echo e(auth()->check() ? auth()->user()?->candidate?->photo : ''); ?>"
                                                    alt="user logo">
                                            </a>
                                        </li>
                                        <?php endif; ?>

                                        <?php if(!request()->is('email/verify') && !request()->is('verification/notice')): ?>
                                        <?php if(auth()->user()->role !== 'company' && auth()->user()->role !== 'candidate'): ?>
                                        <li>
                                            <a href="<?php echo e(route('company.job.create')); ?>">
                                                <button class="btn btn-primary">
                                                    <?php echo e(__('post_job')); ?>

                                                </button>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endif; ?>

                                        <?php if(request()->is('email/verify') || request()->is('verification/notice')): ?>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <button class="btn btn-primary">
                                                    <?php echo e(__('log_out')); ?>

                                                </button>
                                            </a>
                                        </li>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                        <?php endif; ?>
                                    </ul>
                                    <?php endif; ?>

                                    <?php if(auth()->guard()->guest()): ?>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="<?php echo e(route('company.job.create')); ?>"
                                                class="btn btn-primary text-white"
                                                style="padding:12px 24px !important;"><?php echo e(__('post_job')); ?>

                                            </a>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if(auth('user')->check()): ?>
                        <?php if(authUser()->role == 'company'): ?>
                        <div class="container">
                            <ul class="menu-active-classes">
                                <?php if(isset($company_menu_lists)): ?>
                                <?php $__currentLoopData = $company_menu_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_menu_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="menu-item">
                                    <?php
                                    // Check if the URL starts with "http" or "https" to identify external links
                                    $isExternalLink = Str::startsWith($company_menu_list['url'], ['http://',
                                    'https://']);
                                    ?>
                                    <a href="<?php echo e($company_menu_list['url']); ?>" <?php if($isExternalLink): ?> target="_blank"
                                        <?php endif; ?>
                                        class="<?php echo e(urlMatch(url()->current(), url($company_menu_list['url'])) ? 'text-primary active' : ''); ?>">
                                        <?php if($company_menu_list['title']): ?>
                                        <?php echo e($company_menu_list['title']); ?>

                                        <?php else: ?>
                                        <?php if($company_menu_list['en_title']): ?>
                                        <?php echo e($company_menu_list['en_title']); ?>

                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($custom_pages->where('show_header', 1)->count() > 0 ): ?>
                                <li class="menu-item extra-page d-none d-lg-inline-block">
                                    <a href="javascript:void(0)" class="dropdown-toggle">
                                        Extra Pages
                                    </a>
                                    <ul class="ll-dropdown-menu">
                                        <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="!tw-px-5 !tw-py-2"
                                                href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>

                                <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="d-lg-none">
                                    <a class="" href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                            <div class="tw-mb-post-job">
                                <a href="<?php echo e(route('company.job.create')); ?>">
                                    <button class="btn btn-primary">
                                        <?php echo e(__('post_job')); ?>

                                    </button>
                                </a>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="container">
                            <ul class="menu-active-classes ">
                                <?php if(isset($candidate_menu_lists)): ?>
                                <?php $__currentLoopData = $candidate_menu_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate_menu_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="menu-item">
                                    <?php
                                    // Check if the URL starts with "http" or "https" to identify external links
                                    $isExternalLink = Str::startsWith($candidate_menu_list['url'], ['http://',
                                    'https://']);
                                    ?>
                                    <a href="<?php echo e($candidate_menu_list['url']); ?>" <?php if($isExternalLink): ?> target="_blank"
                                        <?php endif; ?>
                                        class="<?php echo e(urlMatch(url()->current(), url($candidate_menu_list['url'])) ? 'text-primary active' : ''); ?>">
                                        <?php if($candidate_menu_list['title']): ?>
                                        <?php echo e($candidate_menu_list['title']); ?>

                                        <?php else: ?>
                                        <?php if($candidate_menu_list['en_title']): ?>
                                        <?php echo e($candidate_menu_list['en_title']); ?>

                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($custom_pages->where('show_header', 1)->count() > 0 ): ?>
                                <li class="menu-item extra-page d-none d-lg-inline-block">
                                    <a href="javascript:void(0)" class="dropdown-toggle">
                                        Extra Pages
                                    </a>
                                    <ul class="ll-dropdown-menu">
                                        <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="!tw-px-5 !tw-py-2"
                                                href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="d-lg-none">
                                    <a class="" href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <div class="container">
                            <ul class="menu-active-classes">
                                <?php if(isset($public_menu_lists)): ?>
                                <?php $__currentLoopData = $public_menu_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $public_menu_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="menu-item">
                                    <?php
                                    // Check if the URL starts with "http" or "https" to identify external links
                                    $isExternalLink = Str::startsWith($public_menu_list['url'], ['http://',
                                    'https://']);
                                    ?>
                                    <a href="<?php echo e($public_menu_list['url']); ?>" <?php if($isExternalLink): ?> target="_blank"
                                        <?php endif; ?>
                                        class="<?php echo e(urlMatch(url()->current(), url($public_menu_list['url'])) ? 'text-primary active' : ''); ?>">
                                        <?php if($public_menu_list['title']): ?>
                                        <?php echo e($public_menu_list['title']); ?>

                                        <?php else: ?>
                                        <?php if($public_menu_list['en_title']): ?>
                                        <?php echo e($public_menu_list['en_title']); ?>

                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($custom_pages->where('show_header', 1)->count() > 0 ): ?>
                                <li class="menu-item extra-page d-none d-lg-inline-block">
                                    <a href="javascript:void(0)" class="dropdown-toggle">
                                        <?php echo e(__('extra_pages')); ?>

                                    </a>
                                    <ul class="ll-dropdown-menu">
                                        <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="!tw-px-5 !tw-py-2"
                                                href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <?php $__currentLoopData = $custom_pages->where('show_header', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="d-lg-none">
                                    <a class="<?php echo e(urlMatch(url()->current(), url($public_menu_list['url'])) ? 'text-primary active' : ''); ?>"
                                        href="<?php echo e($page->slug); ?>"><?php echo e($page->title); ?></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <div class="xs:tw-hidden tw-mt-6 mbl-bottom">
                            <div class="container">
                                <?php if($cms_setting?->footer_phone_no): ?>
                                <div class="contact-info">
                                    <a class="text-gray-900" href="tel:<?php echo e($cms_setting?->footer_phone_no); ?>">
                                        <?php if (isset($component)) { $__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0 = $attributes; } ?>
<?php $component = App\View\Components\Svg\Telephone2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.telephone2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Svg\Telephone2Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0)): ?>
<?php $attributes = $__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0; ?>
<?php unset($__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0)): ?>
<?php $component = $__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0; ?>
<?php unset($__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0); ?>
<?php endif; ?>
                                        <?php echo e($cms_setting?->footer_phone_no); ?>

                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if($setting->app_country_type === 'multiple_base'): ?>
                                <form action="<?php echo e(route('website.job')); ?>" method="GET" id="search-form">
                                    <div class="tw-flex tw-w-full">
                                        <?php
                                        $selected_country = session('selected_country');
                                        ?>
                                        <div class="dropdown dropup tw-w-full">
                                            <button
                                                class="btn tw-flex tw-justify-between tw-w-full tw-px-0 dropdown-toggle"
                                                type="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div>
                                                    <?php if($selected_country && selected_country()): ?>
                                                    <i class="flag-icon <?php echo e(selected_country()->icon); ?>"></i>
                                                    <?php echo e(selected_country()->name); ?>

                                                    <?php else: ?>
                                                    <?php echo e(__('all_country')); ?>

                                                    <?php endif; ?>
                                                </div>
                                            </button>

                                            <ul class="dropdown-menu mx-height-400 overflow-auto tw-p-2"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                                        href="<?php echo e(route('website.set.country')); ?>">
                                                        <svg width="26" height="26" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16">
                                                            </path>
                                                        </svg>
                                                        <span class="marginleft">
                                                            <?php echo e(__('all_country')); ?>

                                                        </span>
                                                    </a>
                                                </li>

                                                <?php $__currentLoopData = $headerCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li id="lang-dropdown-item">
                                                    <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                                        href="<?php echo e(route('website.set.country', ['country' => $country->id])); ?>">
                                                        <i class="flag-icon <?php echo e($country->icon); ?>"></i>
                                                        <?php echo e($country->name); ?>

                                                    </a>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                                <?php endif; ?>
                                <?php if(count($headerCurrencies) && $setting->currency_switcher): ?>
                                <?php
                                $currency_count = count($headerCurrencies) && count($headerCurrencies) > 1;
                                $current_currency_code = currentCurrencyCode();
                                ?>
                                <div class="dropdown dropup">
                                    <button
                                        class="btn tw-flex tw-w-full tw-justify-between tw-px-0 <?php echo e(count($headerCurrencies) ? 'dropdown-toggle' : ''); ?>"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <?php echo e($current_currency_code); ?>

                                    </button>
                                    <?php if($currency_count): ?>
                                    <ul class="dropdown-menu tw-p-2" aria-labelledby="dropdownMenuButton1">
                                        <?php $__currentLoopData = $headerCurrencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($currency->code != $current_currency_code): ?>
                                        <li id="lang-dropdown-item">
                                            <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                                href="<?php echo e(route('changeCurrency', $currency->code)); ?>">
                                                <?php echo e($currency->code); ?>

                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="n-header--top__right d-flex align-items-center tw-px-3">
                        <?php if($cms_setting?->footer_phone_no): ?>
                        <div class="contact-info xs:tw-inline-flex tw-hidden">
                            <a class="text-gray-900" href="tel:<?php echo e($cms_setting?->footer_phone_no); ?>">
                                <?php if (isset($component)) { $__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0 = $attributes; } ?>
<?php $component = App\View\Components\Svg\Telephone2Icon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.telephone2-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Svg\Telephone2Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0)): ?>
<?php $attributes = $__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0; ?>
<?php unset($__attributesOriginal0f5803ccd75c5381ff64c9ee28fb2ce0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0)): ?>
<?php $component = $__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0; ?>
<?php unset($__componentOriginal0f5803ccd75c5381ff64c9ee28fb2ce0); ?>
<?php endif; ?>
                                <?php echo e($cms_setting?->footer_phone_no); ?>

                            </a>
                        </div>
                        <?php endif; ?>
                        <?php if($setting->language_changing): ?>
                        <div class="dropdown">
                            <?php
                            $language_count = count($languages) && count($languages) > 1;
                            $language_count2 = count($languages);
                            $current_language = currentLanguage() ? currentLanguage() : loadDefaultLanguage();
                            ?>
                            <button class="btn <?php echo e($language_count ? 'dropdown-toggle' : ''); ?>" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i
                                    class="flag-icon <?php echo e(isset($current_language->icon) && $current_language->icon ? $current_language->icon : ''); ?>"></i>
                                <?php echo e(isset($current_language->name) && $current_language->name ? $current_language->name :
                                ''); ?>

                            </button>
                            <?php if($language_count): ?>
                            <ul class="dropdown-menu mx-height-300 overflow-auto tw-p-2"
                                aria-labelledby="dropdownMenuButton1">
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($current_language->code) && $current_language->code != $lang->code): ?>
                                <li id="lang-dropdown-item">
                                    <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                        href="<?php echo e(route('changeLanguage', $lang->code)); ?>">
                                        <i
                                            class="flag-icon <?php echo e(isset($lang->icon) && $lang->icon ? $lang->icon : ''); ?> tw-me-2.5"></i>
                                        <?php echo e($lang->name); ?>

                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(count($headerCurrencies) && $setting->currency_switcher): ?>
                        <?php
                        $currency_count = count($headerCurrencies) && count($headerCurrencies) > 1;
                        $current_currency_code = currentCurrencyCode();
                        ?>
                        <div class="dropdown xs:tw-inline-flex tw-hidden">
                            <button class="btn <?php echo e(count($headerCurrencies) ? 'dropdown-toggle' : ''); ?>" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e($current_currency_code); ?>

                            </button>
                            <?php if($currency_count): ?>
                            <ul class="dropdown-menu mx-height-300 overflow-auto tw-p-2"
                                aria-labelledby="dropdownMenuButton1">
                                <?php $__currentLoopData = $headerCurrencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($currency->code != $current_currency_code): ?>
                                <li id="lang-dropdown-item">
                                    <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                        href="<?php echo e(route('changeCurrency', $currency->code)); ?>">
                                        <?php echo e($currency->code); ?>

                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php if($setting->app_country_type === 'multiple_base'): ?>
                        <form action="<?php echo e(route('website.job')); ?>" method="GET" id="search-form"
                            class="mx-width-300 xs:tw-inline-flex tw-hidden">
                            <div class="d-flex">
                                <?php
                                $selected_country = session('selected_country');
                                ?>
                                <div class="">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id=""
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php if($selected_country && selected_country()): ?>
                                            <i class="flag-icon <?php echo e(selected_country()->icon); ?>"></i>
                                            <?php echo e(selected_country()->name); ?>

                                            <?php else: ?>
                                            <?php echo e(__('all_country')); ?>

                                            <?php endif; ?>
                                        </button>

                                        <ul class="dropdown-menu mx-height-300 overflow-auto tw-p-2"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                                    href="<?php echo e(route('website.set.country')); ?>">
                                                    <svg width="26" height="26" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16">
                                                        </path>
                                                    </svg>
                                                    <span class="marginleft">
                                                        <?php echo e(__('all_country')); ?>

                                                    </span>
                                                </a>
                                            </li>
                                            <?php $__currentLoopData = $headerCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li id="lang-dropdown-item">
                                                <a class="dropdown-item hover:tw-bg-[#F1F2F4] hover:tw-rounded-[4px]"
                                                    href="<?php echo e(route('website.set.country', ['country' => $country->id])); ?>">
                                                    <i class="flag-icon <?php echo e($country->icon); ?>"></i>
                                                    <?php echo e($country->name); ?>

                                                </a>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php endif; ?>
                    </div>
                    <div class="mobile-menu">
                        <div class="menu-click tw-pe-3">
                            <button class="effect1">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header top -->
        <div class="n-header--bottom">
            <div class="container position-relative">
                <div class="d-flex flex-wrap  tw-gap-2 tw-items-center">
                    <div class="n-header--bottom__left d-flex align-items-center">
                        <a href="<?php echo e(route('website.home')); ?>" class="brand-logo">
                            <img src="<?php echo e($setting->dark_logo_url); ?>" alt="logo">
                        </a>

                        <?php
                        $form_action = route('website.job');
                        if (session('header_search_role') == 'candidate') {
                        $form_action = route('website.candidate');
                        } elseif (session('header_search_role') == 'company') {
                        $form_action = route('website.company');
                        }
                        ?>

                        <form action="<?php echo e($form_action); ?>" method="GET" id="search-form"
                            class="mx-width-300 header-search-form d-lg-block d-none">
                            <div class="search-box">
                                <select id="headerSearchs" onclick="changeSearchSelections()" class="form-select"
                                    aria-label="Default select example">
                                    <option <?php if(session('header_search_role')=='job' ): echo 'selected'; endif; ?> value="job"><?php echo e(__('jobs')); ?></option>
                                    <?php if(auth()->guard()->guest()): ?>
                                    <option <?php if(session('header_search_role')=='candidate' ): echo 'selected'; endif; ?> value="candidate"><?php echo e(__('candidate')); ?>

                                    </option>
                                    <option <?php if(session('header_search_role')=='company' ): echo 'selected'; endif; ?> value="company"><?php echo e(__('company')); ?></option>
                                    <?php endif; ?>
                                    <?php if(auth()->guard('user')->check()): ?>
                                    <option <?php if(session('header_search_role')=='candidate' ): echo 'selected'; endif; ?> value="candidate"><?php echo e(__('candidate')); ?>

                                    </option>
                                    <?php endif; ?>
                                    <?php if(auth('user')->check() && authUser()->role == 'company'): ?>
                                    <option <?php if(session('header_search_role')=='company' ): echo 'selected'; endif; ?> value="company"><?php echo e(__('company')); ?></option>
                                    <?php endif; ?>
                                </select>
                                <div class="d-flex flex-column flex-md-row align-items-center tw-ps-3">
                                    <svg class="searcbox-searchicon" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <input name="keyword" class="search-input" type="text"
                                        placeholder="<?php echo e(__('job_title_keyword')); ?>" value="<?php echo e(request('keyword')); ?>"
                                        id="global_search">
                                </div>

                                <span id="autocomplete_job_results"></span>
                            </div>
                        </form>
                    </div>

                    <div class="n-header--bottom__right">
                        <div class="d-flex align-items-center ">
                            <div class="search-icon tw-ml-2 d-lg-none !tw-cursor-pointer">
                                <span>
                                    <svg id="searchIcon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                            stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.9999 21L16.6499 16.65" stroke="#FFFFFF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="togglesearch">
                                <form action="<?php echo e(route('website.job')); ?>" method="GET" id="search-form"
                                    class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">

                                    <div class="search-box form-item position-relative">
                                        <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <input name="keyword" class="search-input w-100" type="text"
                                            placeholder="<?php echo e(__('job_title_keyword')); ?>" value="<?php echo e(request('keyword')); ?>"
                                            id="search_input">

                                    </div>
                                </form>
                            </div>
                            <?php if(auth()->guard('user')->check()): ?>
                            <ul class="list-unstyled tw-gap-6 tw-flex tw-items-center tw-justify-between">

                                <?php if(auth()->user()->role == 'company'): ?>
                                <?php if (isset($component)) { $__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b = $attributes; } ?>
<?php $component = App\View\Components\Website\Company\NotificationsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('website.company.notifications-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Website\Company\NotificationsComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b)): ?>
<?php $attributes = $__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b; ?>
<?php unset($__attributesOriginal003f6fb5e8c60d97dc7dd68c98a8884b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b)): ?>
<?php $component = $__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b; ?>
<?php unset($__componentOriginal003f6fb5e8c60d97dc7dd68c98a8884b); ?>
<?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->user()->role == 'candidate'): ?>
                                <?php if (isset($component)) { $__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac = $attributes; } ?>
<?php $component = App\View\Components\Website\Candidate\NotificationsComponent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('website.candidate.notifications-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Website\Candidate\NotificationsComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac)): ?>
<?php $attributes = $__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac; ?>
<?php unset($__attributesOriginal17943bacb7770086b2d4afd2bc8fc2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac)): ?>
<?php $component = $__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac; ?>
<?php unset($__componentOriginal17943bacb7770086b2d4afd2bc8fc2ac); ?>
<?php endif; ?>
                                <?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginal2d404e9be18e32508c2c43e037eb15ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d404e9be18e32508c2c43e037eb15ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.website.company.message-component','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('website.company.message-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d404e9be18e32508c2c43e037eb15ad)): ?>
<?php $attributes = $__attributesOriginal2d404e9be18e32508c2c43e037eb15ad; ?>
<?php unset($__attributesOriginal2d404e9be18e32508c2c43e037eb15ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d404e9be18e32508c2c43e037eb15ad)): ?>
<?php $component = $__componentOriginal2d404e9be18e32508c2c43e037eb15ad; ?>
<?php unset($__componentOriginal2d404e9be18e32508c2c43e037eb15ad); ?>
<?php endif; ?>

                                <div class="dropdown dropstart">
                                    <a href="javascript:void(0)" class="candidate-profile position-relative"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php if (\Illuminate\Support\Facades\Blade::check('company')): ?>
                                        <img src="<?php echo e(auth()->user()->company->logo_url); ?>" alt="logo">
                                        <?php else: ?>
                                        <img src="<?php echo e(auth()->user()->candidate->photo); ?>" alt="photo">
                                        <?php if(auth()->user()->candidate->status == 'available'): ?>
                                        <span class="available-alert-header">
                                            <svg class="circle" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="6" fill="#2ecc71" stroke="white"
                                                    stroke-width="2">
                                                </circle>
                                            </svg>
                                        </span>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('candidate')): ?>
                                    <ul class="custom-border dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('candidate.dashboard') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('candidate.dashboard')); ?>">
                                                <i class="ph-stack"></i>
                                                <?php echo e(__('dashboard')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('candidate.setting') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('candidate.setting')); ?>">
                                                <i class="ph-gear"></i>
                                                <?php echo e(__('settings')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ph-sign-out"></i>
                                                <?php echo e(__('log_out')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="dropdown-menu custom-border" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('company.dashboard') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('company.dashboard')); ?>">
                                                <i class="ph-stack"></i>
                                                <?php echo e(__('dashboard')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('company.myjob') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('company.myjob')); ?>">
                                                <i class="ph-suitcase-simple"></i>
                                                <?php echo e(__('my_jobs')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('company.plan') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('company.plan')); ?>">
                                                <i class="ph-notebook"></i>
                                                <?php echo e(__('plans_billing')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item <?php echo e(request()->routeIs('company.setting') ? 'active' : ''); ?>"
                                                href="<?php echo e(route('company.setting')); ?>">
                                                <i class="ph-gear"></i>
                                                <?php echo e(__('settings')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ph-sign-out"></i>
                                                <?php echo e(__('log_out')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                <?php if(!request()->is('email/verify') && !request()->is('verification/notice')): ?>
                                <?php if (\Illuminate\Support\Facades\Blade::check('company')): ?>
                                <li class="tw-hidden sm:tw-block">

                                    <a href="<?php echo e(route('company.job.create')); ?>">
                                        <button class="btn btn-light">
                                            <?php echo e(__('post_job')); ?>

                                        </button>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if(request()->is('email/verify') || request()->is('verification/notice')): ?>
                                <li>
                                    <a href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <button class="btn btn-primary">
                                            <?php echo e(__('log_out')); ?>

                                        </button>
                                    </a>
                                </li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <?php endif; ?>
                            </ul>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                            <ul class="list-unstyled tw-flex tw-flex-wrap tw-gap-3 tw-items-center tw-justify-between">
                                <li>
                                    <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-light"><?php echo e(__('sign_in')); ?></a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="<?php echo e(route('company.job.create')); ?>" class="btn btn-light"><?php echo e(__('post_job')); ?>

                                    </a>
                                </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rt-mobile-menu-overlay"></div>
        <div class="sidebar-overlay"></div>
    </div>
</header><?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/frontend/partials/header.blade.php ENDPATH**/ ?>