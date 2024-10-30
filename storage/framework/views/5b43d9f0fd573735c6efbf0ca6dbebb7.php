<div class="container-fluid p-5" style="background: #f6f6f6">
    
    <div class="row g-5">
        <div data-wow-delay="0.5s">
            <span style="font-size: 2rem; font-weight:600">من نحن </span>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

            <?php
                $page = App\Models\Page::where('slug', 'mn-nhn')->first();

                // Get the content from the page
                $content = $page->content;

                // $lines = explode('<p>', $content);
                $lines = preg_split('/<p>|<\/p>/', $content, -1, PREG_SPLIT_NO_EMPTY);

                // Get the first three lines and limit each to a specific number of characters
                $limitedLines = array_map(function ($line) {
                    return Str::limit(strip_tags($line), 100);
                }, array_slice($lines, 1, 3));

                // Output the result
                // dd($lines[1]);

            ?>
            <p class="about-us-desc">
                <?php echo $lines[0]; ?>

            </p>
            
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div id="header-carousel-1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner slider-content">

                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div st="top:50px" class="carousel-item <?php echo e($index == 0 ? 'active' : ''); ?>">
                            <img class="w-100" style="max-height: 500px;" src="<?php echo e($item->image_url); ?>" alt="Image">
                            <div class="carousel-caption">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12"
                                            style="margin-top: 275px; background: rgb(46 54 55 / 50%)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel-1"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel-1"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
            
        </div>
    </div>
    
</div>
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/pages/HomeParts/aboutSection.blade.php ENDPATH**/ ?>