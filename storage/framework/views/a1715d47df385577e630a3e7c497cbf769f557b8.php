<?php $__env->startSection('conteudo'); ?>


        <div class="container">
            <div class="contact-head">
                <h2 >Depoimentos</h2>
            </div>

        
            <div  class=" test-grid-1" >
                <div class="col-md-6 test-wrapper">
                    <img src="<?php echo e(asset('site/images/te.jpg')); ?>" alt="" class="img-responsive">
                    <div class="test-grid">
                    <div class="test-gr">
                        <h4>Andery</h4>
                        <span>Aluno Elite</span>
                        </div>
                        <p>dasldkaskdjaskdjasdjasdjawjdljdldjasldjawkdjsal.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 test-wrapper">
                    <img src="<?php echo e(asset('site/images/te1.jpg')); ?>" alt="" class="img-responsive">
                    <div class="test-grid">
                    <div class="test-gr">
                        <h4>Hailey</h4>
                        <span> Professor</span>
                        </div>
                        <p>dasldkaskdjaskdjasdjasdjawjdljdldjasldjawkdjsal.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
            <div class="clearfix"> </div>
            </div>
            <div  class=" test-grid-2" >
                <div class="col-md-6 test-wrapper">
                    <img src="<?php echo e(asset('site/images/te2.jpg')); ?>" alt="" class="img-responsive">
                    <div class="test-grid">
                    <div class="test-gr">
                        <h4>Quincy</h4>
                        <span>Aluno Elite</span>
                        </div>
                        <p>dasldkaskdjaskdjasdjasdjawjdljdldjasldjawkdjsal.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 test-wrapper">
                    <img src="<?php echo e(asset('site/images/te3.jpg')); ?>" alt="" class="img-responsive">
                    <div class="test-grid">
                    <div class="test-gr">
                        <h4>Barb</h4>
                        <span>professor</span>
                        </div>
                        <p>dasldkaskdjaskdjasdjasdjawjdljdldjasldjawkdjsal.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
            <div class="clearfix"> </div>
            </div>
        </div>
    
       </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>