<?php
    
    $this->load_template('header.php');
    
    ?>
    <div class="container">
       <div class='box-content'>
            <div class='padding' style='padding:50px'>
                <div class='modal' style='position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;'>
                    <div class='modal-header'>
                           <h3>Daftar</h3>
                    </div>
                      <div class='modal-body'>
    <?php if( $D->error ) { ?>
            <?= errorbox($this->lang('signup_error'), $this->lang($D->errmsg,$D->errmsg_lngkeys)) ?>
            <?php } else { ?>
             <?php } ?>
                            <div class='fuelux'>
                                <div class='wizard'>
                                    <ul class='steps'>
                                        <li class='active' data-target='#step1'>
                                            <span class='step'>1</span>
                                        </li>
                                        <li data-target='#step2'>
                                            <span class='step'>2</span>
                                        </li>
                                        <li data-target='#step3'>
                                            <span class='step'>3</span>
                                        </li>
                                       
                                    </ul>
                                    <div class='actions'>
                                        <button class='btn btn-mini btn-prev'><i class='icon-arrow-left'></i>Sebelumnya
                                        </button>
                                        <button class='btn btn-mini btn-success btn-next' data-last='Akhir tahap'>
                                            Lanjut ke tahap selanjutnya
                                            <i class='icon-arrow-right'></i>
                                        </button>
                                    </div>
                                </div>

                                 <form method="post" action="<?= $C->SITE_URL ?>member/mendaftar<?= ((isset($D->reg_id,$D->reg_key))?"/regid:". $D->reg_id . "/regkey:" . $D->reg_key:'') ?>">
   
                                <div class='step-content'>
                                    <hr class='hr-normal' />
                                    <form accept-charset="UTF-8" action="#" class="form" method="post" style="margin-bottom: 0;" /><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>
                                        <div class='step-pane active' id='step1'>
                                            <div class='control-group'>
                                                <label class='control-label' for='inputText'><?= $this->lang('signup_step2_form_username') ?></label>
                                                <div class='controls'>
                                                 
                                                    <input class='input-block-level' id='inputText' value="<?= htmlspecialchars($D->email) ?>" <?= (isset($D->reg_id,$D->reg_key))?'readonly="readonly"':""; ?> name="username" type='text' />
                                                </div>
                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label' for='inputPassword'><?= $this->lang('signup_step2_form_password') ?></label>
                                                <div class='controls'>
                                                    <input class='input-block-level' id='inputPassword'  value="<?= htmlspecialchars($D->password) ?>" name="password" type='password' />
                                                </div>
                                            </div>
                                            <div class='control-group'>
                                                <label class='control-label' for='inputPassword2'><?= $this->lang('signup_step2_form_password2') ?></label>
                                                <div class='controls'>
                                                    <input class='input-block-level' id='inputPassword2'  value="<?= htmlspecialchars($D->password2) ?>" name="password2" type='password' />
                                                </div>
                                            </div>

                                        </div>
                                        <div class='step-pane' id='step2'>
                                            <label class='control-label' for='inputText'><?= $this->lang('signup_step2_form_fullname') ?></label>
                                                <div class='controls'>
                                                 
                                                    <input class='input-block-level' id='inputText' value="<?= htmlspecialchars($D->fullname) ?>" <?= (isset($D->reg_id,$D->reg_key))?'readonly="readonly"':""; ?> name="fullname" type='text' />
                                                </div>

                                                <label class='control-label' for='inputText'><?= $this->lang('signup_step2_form_email') ?></label>
                                                <div class='controls'>

                                                    <input class='input-block-level' autocomplete="off" id="password"  name="email" value="<?= htmlspecialchars($D->email) ?>" type="text" onblur="return check_username(this.name);" />
                                                </div>

                                                 <label class='control-label' for='inputPassword'>Captcha:</label>
                                              
                                                <?php if( !isset($C->GOOGLE_CAPTCHA_PRIVATE_KEY, $C->GOOGLE_CAPTCHA_PUBLIC_KEY) || $C->GOOGLE_CAPTCHA_PRIVATE_KEY == '' || $C->GOOGLE_CAPTCHA_PUBLIC_KEY == '' ){ ?>
                          
                                <input type="hidden" name="captcha_key" value="<?= $D->captcha_key ?>" />
                                <?= $D->captcha_html ?>
                          
                                
                        <?php }else{ ?>
                            
                        <?php } ?> 
                  <br>
                    <input type="text" maxlength="20" name="captcha_word" value="" autocomplete="off" class="reginp" style="width:166px;margin-top: 3px;" />
                          
                    </div>
                     <div class='step-pane' id='step3'>
                        <textarea class='input-block-level uneditable-input' id='inputTextArea' value="" rows='3' style="height:200px;"><?= $C->TERMSPAGE_CONTENT ?></textarea>

   <div class='controls'>
                                                    <label class='checkbox inline'>
                                                        <input id='inlineCheckbox1' type='checkbox' name="accept_terms" value="1" />
                                                        Saya setuju dengan ketentuan diatas
                                                    </label>
                                                    
                                                </div>
                                                <br>
<center>
                      
                        <input type="submit" class='btn btn-primary' value="Buat akun saya"></a>
                 </center>

</form>
                 </div>
                                            



                                            </div>
                                        </div>
                                        
                  </div></div></div></div></div></div>


    
 
<?php
    
    $this->load_template('footer.php');
    
?>