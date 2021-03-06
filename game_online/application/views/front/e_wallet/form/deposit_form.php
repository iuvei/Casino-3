<!-- Deposit Modal -->
<div id="Deposit_app">
    <div id="Deposit_app">
        <div class="modal-header"><h1>Deposit</h1></div>
        <div class="modal-container">
            <div class="form-container">
                <form id ="deposit_form" name ="deposit_form" method ="POST" target ="hiddenframe" action ="<?= site_url('e_wallet/deposit')?>">
                <section>
                    <h2 class="title">Bank Transfer</h2>
                    신청 후 입금하실 계좌를 전송해 드립니다.
                    <hr>                
                        <div class="row">
                            <label>Sender Name</label>
                            <input id="user_no" name = "user_no"  type="hidden" value="<?= !empty($user) ? $user -> user_no :'' ?>" >
                            <input id="user_name" name="sender_name" placeholder="Sender Name" type="text" value="<?= !empty($user) ? $user -> user_name : ''?>">
                        </div>
                        <div class="row">
                            <label>Amount</label>
                            <div class="amount_btn">
                                <button type ="button" data-amount ="100"    class ="deposit_amount_button"_>100</button>
                                <button type ="button" data-amount ="500"    class ="deposit_amount_button">500</button>
                                <button type ="button" data-amount ="1000"   class ="deposit_amount_button">1,000</button>
                                <button type ="button" data-amount ="5000"   class ="deposit_amount_button">5,000</button>
                                <button type ="button" data-amount ="10000"  class ="deposit_amount_button">10,000</button>
                                <button type ="button" data-amount ="50000"  class ="deposit_amount_button">50,000</button>
                                <button type ="button" data-amount ="100000" class ="deposit_amount_button">100,000</button>
                                <button type ="button" data-amount ="reset"  class ="deposit_amount_button reset">Reset</button>
                            </div>
                        </div>                                      
                        <div class="row" style="margin-top:5px;margin-bottom:10px">
                            <label></label>
                            <input class="invalid amount_input" id="deposit_amount" name="deposit_amount" placeholder="Amount" type="text" value="" > <b>CNY</b>
                        </div>
                    <hr>
                    <div class="row">
                        <label></label>
                          <input type ="button" id ="deposit_now" class="joinbutton lostloginbutton2" value ="Deposit Now">
                    </div>
                </section>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function alertAndclearElement(m,el){
        alert(m);
        el.val('');
        el.focus();
    }
    
    function trim(str){
         return str.replace(/(^\s*)|(\s*$)/gi, "");
    }
    
    <?php if(!empty($casino_policy)):?>
        var deposit_limit = { 
            min_limit : <?=$casino_policy -> min_per_deposit?>, 
            max_limit : <?=$casino_policy -> max_per_deposit?>
            };
    <?php endif;?> 
    
    $(document).ready(function(){
         $('.deposit_amount_button').click(function(e){
             var sel_amount = $(this).attr('data-amount');
             if (sel_amount == 'reset'){
                  $('#deposit_amount').val('');
                  return;
             }
             
             var sel_amount = parseInt(sel_amount);
             var cur_amount = $('#deposit_amount').val();
             if (cur_amount  == ''){
                 cur_amount = 0;
             }else {
                 cur_amount  = parseInt(cur_amount.replace(',',''));
             }
             
             var total_deposit = sel_amount + cur_amount;
             $('#deposit_amount').val(total_deposit);
             $('#deposit_amount').trigger('change');
             
         });
         
         $('#deposit_amount').change(function(){
             var payment_str = $(this).val().replace(/,/gi,'');
             if (payment_str.length < 1){
                 return;
             }
             if (!$.isNumeric(payment_str)) {
                 alert("숫자만 입력해 주세요");
                 $(this).val('');
                 return false;
             }
             $(this).val($.number($(this).val()));
         });
         $('#deposit_amount').keyup(function(){$('#deposit_amount').trigger('change');});
         $('#deposit_now').click(function(){
            var payment_str = $('#deposit_amount').val().replace(/,/gi,'');
            if (payment_str.length < 1){
                alert('입금하실 금액을 입력해주세요');
                return;
            }
            var deposit_amount = parseInt($('#deposit_amount').val().replace(',',''));
            if (deposit_amount < deposit_limit.min_limit || deposit_amount > deposit_limit.max_limit){
                alert('입금 금액은 ' + deposit_limit.min_limit + ' 이상 ' +deposit_limit.max_limit + '이하여만 합니다' );
                return;
            }
            document.deposit_form.submit();
         })
     });
 </script>
<!-- //Deposit Modal -->