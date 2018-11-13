<? $formText = get_field('form_text'); ?>
<div class="form-line">
    <div class="container">
        <div class="row">
            <div class="col-md-7 vcenter">
                <div class="form-line-text">
                    <? if($formText) { 
                        echo $formText; 
                        } else {
                            echo '<span>Затрудняетесь с выбором?</span><br>
                            Не тратьте своё время! наш менеджер вам перезвонит и решит все вопросы!';
                        } ?>
                </div>
            </div>
            <div class="col-md-5 vcenter">
                <div class="form-line-form">
                    <div class="row">
                        <? echo do_shortcode('[contact-form-7 id="285" title="Открытая форма"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>