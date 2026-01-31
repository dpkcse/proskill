<?php $__env->startSection('title'); ?>
    <?php echo e(__('dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumbs'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"><?php echo e(__('dashboard')); ?></h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if($appSetup->where('status', 0)->count()): ?>
        <?php if (isset($component)) { $__componentOriginala2e4872221adcdc82d2ac210ae823b08 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala2e4872221adcdc82d2ac210ae823b08 = $attributes; } ?>
<?php $component = Modules\SetupGuide\View\Component\SetupGuide::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('setup-guide'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\SetupGuide\View\Component\SetupGuide::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala2e4872221adcdc82d2ac210ae823b08)): ?>
<?php $attributes = $__attributesOriginala2e4872221adcdc82d2ac210ae823b08; ?>
<?php unset($__attributesOriginala2e4872221adcdc82d2ac210ae823b08); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala2e4872221adcdc82d2ac210ae823b08)): ?>
<?php $component = $__componentOriginala2e4872221adcdc82d2ac210ae823b08; ?>
<?php unset($__componentOriginala2e4872221adcdc82d2ac210ae823b08); ?>
<?php endif; ?>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('earnings')); ?></span>
                    <span class="info-box-number">
                        <?php echo e(currencyPosition($data['earnings'])); ?>

                        <?php if($data['earnings'] == null || $data['earnings'] == 0): ?> 0 <?php endif; ?>
                        <span data-toggle="tooltip"
                            
                            title="All the earnings are converted to '<?php echo e(config('templatecookie.currency')); ?>' currency">
                            <?php if (isset($component)) { $__componentOriginal179199c24976241c80d64c95e0c3c75f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal179199c24976241c80d64c95e0c3c75f = $attributes; } ?>
<?php $component = App\View\Components\Svg\InfoIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('svg.info-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Svg\InfoIcon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal179199c24976241c80d64c95e0c3c75f)): ?>
<?php $attributes = $__attributesOriginal179199c24976241c80d64c95e0c3c75f; ?>
<?php unset($__attributesOriginal179199c24976241c80d64c95e0c3c75f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal179199c24976241c80d64c95e0c3c75f)): ?>
<?php $component = $__componentOriginal179199c24976241c80d64c95e0c3c75f; ?>
<?php unset($__componentOriginal179199c24976241c80d64c95e0c3c75f); ?>
<?php endif; ?>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('total_candidates')); ?></span>
                    <span class="info-box-number"> <?php echo e($data['candidates']); ?></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('total_employers')); ?></span>
                    <span class="info-box-number"><?php echo e($data['companies']); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-check"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('total_verified_users')); ?></span>
                    <span class="info-box-number"><?php echo e($data['verified_users']); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('active_jobs')); ?></span>
                    <span class="info-box-number"><?php echo e($data['active_jobs']); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('expired_jobs')); ?></span>
                    <span class="info-box-number"><?php echo e($data['expire_jobs']); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('pending_jobs')); ?></span>
                    <span class="info-box-number"><?php echo e($data['pending_jobs']); ?></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-briefcase"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?php echo e(__('all_jobs')); ?></span>
                    <span class="info-box-number"><?php echo e($data['all_jobs']); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('your_earnings_overview_of_this_year')); ?></h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="barChart" class="chart-design"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?php echo e(__('popular_location')); ?></h3>
                </div>
                <?php if(count($popular_countries->pluck('country')->all()) == 0): ?>
                <div class="card-body">
                    <table class="table table-vcenter mb-0">
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <div class="empty py-5">
                                            <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NotFound::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                    </table>
                </div>
                <?php else: ?>
                <div class="card-body">
                    <canvas id="locationChart" class="chart-design"></canvas>
                </div>
                <?php endif; ?>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h3 class="card-title"><?php echo e(__('recently_published_jobs')); ?></h3>
                        <a href="<?php echo e(route('job.index')); ?>" class="btn btn-dark"><?php echo e(__('view_all')); ?></a>
                    </div>
                </div>
                <div class="card-table table-responsive p-0">
                    <table class="table table-vcenter mb-0">
                        <thead>
                            <tr>
                                <th><?php echo e(__('title')); ?></th>
                                <th><?php echo e(__('experience')); ?></th>
                                <th><?php echo e(__('job_type')); ?></th>
                                <th><?php echo e(__('action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($latest_jobs->count() > 0): ?>
                                <?php $__currentLoopData = $latest_jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('job.show', $latest->id)); ?>">
                                                <?php echo e($latest->title); ?>

                                            </a>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($latest->experience ? $latest->experience->name : ''); ?></td>
                                        <td class="text-muted"><?php echo e($latest->job_type ? $latest->job_type->name : ''); ?>

                                        </td>
                                        <td class="text-muted">
                                            <a href="<?php echo e(route('job.show', $latest->id)); ?>" class="btn bg-info ml-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <div class="empty py-5">
                                            <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NotFound::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="card">
                <div class="card-header">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h3 class="card-title"><?php echo e(__('recently_purchased_orders')); ?></h3>
                        <a href="<?php echo e(route('order.index')); ?>" class="btn btn-dark"><?php echo e(__('view_all')); ?></a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo e(__('order_no')); ?></th>
                                <th><?php echo e(__('amount')); ?></th>
                                <th><?php echo e(__('plan_name')); ?></th>
                                <th><?php echo e(__('payment_provider')); ?></th>
                                <th><?php echo e(__('payment_status')); ?></th>
                                <th><?php echo e(__('created_time')); ?></th>
                                <th></th>
                                <th class="text-center"><?php echo e(__('actions')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($latest_earnings->count() > 0): ?>
                                <?php $__currentLoopData = $latest_earnings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $earning): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            #<?php echo e($earning->order_id); ?>

                                        </td>
                                        <td class="text-muted">
                                        <?php echo e(currencyPosition(
                                                    currencyConversion($earning->usd_amount, config('templatecookie.currency', 'USD') ), false,
                                                    $current_currency
                                            )); ?>

                                        </td>
                                        <td class="text-muted">
                                            <?php if($earning->payment_type == 'per_job_based'): ?>
                                                <span class="badge badge-secondary"><?php echo e(ucfirst(Str::replace('_', ' ', $earning->payment_type))); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-primary"><?php echo e($earning->plan->label); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-muted">
                                            <?php if($earning->payment_provider == 'offline'): ?>
                                                <?php echo e(__('offline')); ?>

                                                <?php if(isset($earning->manualPayment->name)): ?>
                                                    (<b><?php echo e($earning->manualPayment->name); ?></b>)
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php echo e(ucfirst($earning->payment_provider)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($earning->payment_status == 'paid'): ?>
                                                <span class="badge badge-pill bg-success"><?php echo e(__('paid')); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-pill bg-warning"><?php echo e(__('unpaid')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e($earning->created_at->diffForHumans()); ?>

                                        </td>
                                        <td class="text-muted">
                                        <td class="d-flex">
                                            <a href="<?php echo e(route('order.show', $earning->id)); ?>"
                                                class="btn bg-primary mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="<?php echo e(route('admin.transaction.invoice.download', $earning->id)); ?>"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-info">
                                                    <i class=" fas fa-download"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <div class="empty py-5">
                                            <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NotFound::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class=" d-flex justify-content-between align-items-center">
                        <h3 class="card-title"><?php echo e(__('latest_users')); ?></h3>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="<?php echo e(route('candidate.index')); ?>" class="btn btn-success mr-1">
                                <?php echo e(__('view_all_candidates')); ?></a>
                            <a href="<?php echo e(route('company.index')); ?>" class="btn btn-info"><?php echo e(__('view_all_company')); ?></a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('name')); ?></th>
                                    <th><?php echo e(__('email')); ?></th>
                                    <th><?php echo e(__('role')); ?></th>
                                    <th><?php echo e(__('status')); ?></th>
                                    <?php if($data['email_verification']): ?>
                                        <th><?php echo e(__('email_verification')); ?></th>
                                    <?php endif; ?>
                                    <th><?php echo e(__('created_time')); ?></th>
                                    <th><?php echo e(__('action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($users->count() > 0): ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($loop->iteration); ?>

                                            </td>
                                            <td class="text-muted">
                                                <?php echo e($user->name); ?>

                                            </td>
                                            <td class="text-muted">
                                                <?php echo e($user->email); ?>

                                            </td>
                                            <td class="text-muted">
                                                <?php if($user->role == 'company'): ?>
                                                    <span class="badge badge-info">
                                                        <?php echo e(ucfirst($user->role)); ?>

                                                    </span>
                                                <?php else: ?>
                                                    <span class="badge badge-success">
                                                        <?php echo e(ucfirst($user->role)); ?>

                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-muted">
                                                <?php echo e($user->status ? __('active') : __('inactive')); ?>

                                            </td>
                                            <?php if(userCan('candidate.update') && $data['email_verification']): ?>
                                                <td class="text-center" tabindex="0">
                                                    <?php echo e($user->email_verified_at ? __('verified') : __('not_verified')); ?>

                                                </td>
                                            <?php endif; ?>
                                            <td class="text-muted">
                                                <?php echo e($user->created_at->diffForHumans()); ?>

                                            </td>
                                            <td class="d-flex">
                                                <?php if($user->role == 'company'): ?>
                                                    <?php if($user->company && $user->company->id): ?>
                                                        <a href="<?php echo e(route('company.show', $user->company->id)); ?>"
                                                            class="btn bg-primary mr-1">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    <?php else: ?>
                                                    -
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if($user->candidate && $user->candidate->id): ?>
                                                        <a href="<?php echo e(route('candidate.show', $user->candidate->id)); ?>"
                                                            class="btn bg-primary mr-1">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    <?php else: ?>
                                                    -
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr class="text-center">
                                        <td colspan="7">
                                            <div class="empty py-5">
                                                <?php if (isset($component)) { $__componentOriginal29785112a59eec7800237cc87bc86e3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29785112a59eec7800237cc87bc86e3e = $attributes; } ?>
<?php $component = App\View\Components\NotFound::resolve(['message' => ''.e(__('no_data_found')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NotFound::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $attributes = $__attributesOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__attributesOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29785112a59eec7800237cc87bc86e3e)): ?>
<?php $component = $__componentOriginal29785112a59eec7800237cc87bc86e3e; ?>
<?php unset($__componentOriginal29785112a59eec7800237cc87bc86e3e); ?>
<?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(asset('backend')); ?>/plugins/chart.js/Chart.min.js"></script>
        <script>
            var areaChartData = {
                labels: <?php echo json_encode($earnings['months']); ?>,
                datasets: [{
                    label: 'Earnings',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($earnings['amount']); ?>

                }]
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp = areaChartData.datasets
            barChartData.datasets = temp

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false,
                display: false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            var locationChart = $('#locationChart').get(0).getContext('2d')
            var locationData = {
                labels: <?php echo json_encode($popular_countries->pluck('country')->all()); ?>,
                datasets: [{
                    data: <?php echo json_encode($popular_countries->pluck('total')->all()); ?>,
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
                        '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
                    ],
                }]
            }
            var locationChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(locationChart, {
                type: 'pie',
                data: locationData,
                options: locationChartOptions
            })
        </script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('style'); ?>
        <style>
            .chart-design {
                height: 230px;
                min-height: 230px
            }
        </style>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/backend/index.blade.php ENDPATH**/ ?>