<? $formText = get_field('form_text'); ?>
<div class="form-line">
 
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 vcenter vcenter-left">
                <div class="form-line-text">
                    <div class="form-line-div">
                        <img src="<? bloginfo("template_directory");?>/images/email-white.png" alt=""><strong>Заказать бытовку</strong>
                    </div>                          
                    <p>Мы предлагаем бытовки и контейнеры в любом количестве и комплектации.</p> 
                    <p>Вы можете получить консультацию по телефонам</p>
                        <div class="phone-line phone-line1"><a href="tel:+79652295335">+7 (965) 229-53-35</a></div>
                        <div class="phone-line"><a href="tel:+74957227269">+7 (495) 722-72-69</a></div>
                    <p class="more-instr">или воспользоваться формой обратной связи справа <img src="<? bloginfo("template_directory");?>/images/arrow_right.png" alt=""></p>

<!--                     <? if($formText) { 
                        echo $formText; 
                        } else {
                            echo '<div><img src="<? bloginfo("template_directory");?>/images/email-white.png" alt=""><strong>Заказать бытовку</strong></div><br>
                            Мы предлагаем бытовки и контейнеры в любом количестве и комплектации.<br>

                            Вы можете получить консультацию по телефонам<br>
                               <div class="phone-line"><a href="tel:+79652295335">+7 (965) 229-53-35</a></div>
                               <div class="phone-line"><a href="tel:+74957227269">+7 (495) 722-72-69</a></div>';
                        } ?> -->
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 vcenter vcenter-right">
                <div class="form-line-form">
                    <div class="row">
                        <h3>Онлайн-заявка</h3>
                        <? echo do_shortcode('[contact-form-7 id="2786" title="Онлайн-заявка"]'); ?>
                    </div>
                </div>
            </div>
        </div>
 
</div>