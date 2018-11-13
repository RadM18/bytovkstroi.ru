<? $formText = get_field('form_text'); ?>
<div class="form-line form-line-delivery">
   
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 vcenter vcenter-left">
                <div class="form-line-text">
                    <div class="form-line-div">
                        <img src="<? bloginfo("template_directory");?>/images/delivery-white.png" alt=""><strong>Заказать доставку </strong>
                    </div>                          
                    <p>Мы предлагаем бытовки и контейнеры в любом количестве и комплектации.</p> 

                        <div class="delivery-line">
                            <ul>
                                <li>стоимость доставки 4 000 ₽</li>
                                <li>доставка за 3 часа с момента заказа</li>
                            </ul>
                        </div>
                    <div class="btn-wrap-buy">
                        <button class="btn btn-buy" onclick="tModalForm.show('buy');">Заказать бытовку</button>
                    </div>
 
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
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 vcenter vcenter-right">
                <div class="form-line-form">
                    <div class="row">
                        <img src="<? bloginfo('template_directory');?>/images/bytovkaby3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
 
 
</div>