<?php $__env->startSection('conteudo'); ?>
<!-- contact -->
    
        <div class="container">
            <div class="contact-head">
                <h2 >Contato</h2>
            </div>
            <div class="contact-grids">
                <div class="col-md-8 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3910.7380391518773!2d-61.45707988576659!3d-11.426549941882373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-11.4252868!2d-61.4549649!4m5!1s0x93c82f11d9126ba9%3A0xb1697e3a21d2e14!2sElite+Cursos+Preparat%C3%B3rios+-+Avenida+Belo+Horizonte%2C+3105+-+Liberdade%2C+Cacoal+-+RO!3m2!1d-11.4278128!2d-61.4549641!5e0!3m2!1spt-BR!2sbr!4v1477853643568"  allowfullscreen></iframe>
                </div>
                <div class="col-md-4 con-grid">
                    <div class="contact-grid1">
                        <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        <div class="con-ic">
                            <p>Av. Belo Horizonte, 3105 Bairro Novo Cacoal <span>Cacoal/RO - Brasil.</span></p>
                        </div>
                            <div class="clearfix"> </div>
                    </div>
                    <div class="contact-grid contact-grid1">
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        <div class="con-ic">
                            <p>+55 69 3441-1513<span>+55 69 99264-9373</span></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="contact-grid1">
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <div class="con-ic">
                            <p><a href="mailto:alves.era@hotmail.com">alves.era@hotmail.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <?php echo Form::open(['route' => 'site.montaEmailContato', 'method' => 'post', 'id' => 'formContato']); ?>

                <div class="contact-grids1">
                    <div class="contact-me ">
                        <h4 style="color: black;">Message</h4>
                        <textarea id="Message" name="Message"  placeholder="" required=""> </textarea>
                    </div>
                    <div class="col-md-5 contact-form1">
                        <h4 style="color: black;">Name</h4>
                        <input type="text" name="Name" name="Name" placeholder="" required="">
                    </div>
                    <div class="col-md-5 contact-form1">
                        <h4 style="color: black;">Email</h4>
                        <input type="email" name="Email" name="Email" placeholder="" required="">
                    </div>
                    <div class="col-md-2 contact-form">
                        <input type="submit" value="Enviar" >
                    </div>
                    <div class="clearfix"> </div>
                </div>
            <?php echo Form::close(); ?>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>