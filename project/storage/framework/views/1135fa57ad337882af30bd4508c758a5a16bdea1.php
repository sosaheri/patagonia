
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Tour Checkout')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    		<!--Main Breadcrumb Area Start -->
		<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pagetitle">
							<?php echo e(__('Checkout')); ?>

						</h1>
						<ul class="pages">
							<li>
								<a href="<?php echo e(route('front.index')); ?>">
									<?php echo e(__('Home')); ?>

								</a>
							</li>
							<li class="active">
								<a href="javascript:;">
									<?php echo e(__('Checkout')); ?>

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--Main Breadcrumb Area End -->

        <!-- Checkout Area Start -->
        <section class="checkout-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="submission-area">
                            <h4 class="title">
                                <?php echo e(__('Booking Submission')); ?>

                            </h4>
                        
                            <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger alert-dismissible m-2 p-1">
                                <?php echo e(Session::get('error')); ?>

                            </div>
                            <?php endif; ?>
                            <form action="javascript:;" method="POST" id="payment-form">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname"><?php echo e(__('Name')); ?> *</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($user->name); ?>">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"><?php echo e(__('Email')); ?> *</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e($user->email); ?>">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number"><?php echo e(__('Mobile Number')); ?> *</label>
                                            <input type="text" class="form-control" id="number" name="number" placeholder="<?php echo e(__('Mobile Number')); ?>" value="<?php echo e($user->phone); ?>">
                                            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_line_1"><?php echo e(__('Address line')); ?></label>
                                            <input type="text" class="form-control" id="address_line_1" name="address" placeholder="<?php echo e(__('Your Address line')); ?>" value="<?php echo e($user->address); ?>">
                                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city"><?php echo e(__('City')); ?></label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo e(__('City')); ?>">
                                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="state"><?php echo e(__('State/Province/Region')); ?></label>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="<?php echo e(__('State/Province/Region')); ?>">
                                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zip_code"><?php echo e(__('Zip code')); ?></label>
                                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="<?php echo e(__('Zip code')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country"><?php echo e(__('Country')); ?></label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="<?php echo e(__('country')); ?>">
                                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-danger"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="summery"><?php echo e(__('Special Requirements')); ?></label>
                                            <textarea class="form-control" name="summery" id="summery" rows="4" placeholder="<?php echo e(__('Special Requirements')); ?>"></textarea>
                                          </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <h4 class="title">
                                            <?php echo e(__('Select Payment Method')); ?>

                                        </h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <?php $__currentLoopData = $gateweys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gatewey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" id="customRadio<?php echo e($key); ?>" name="method" class="custom-control-input payment-check" value="<?php echo e($gatewey->keyword ? $gatewey->keyword : $gatewey->title); ?>" data-href="<?php echo e($gatewey->details); ?>">
                                            <label class="custom-control-label"  for="customRadio<?php echo e($key); ?>"><?php echo e($gatewey->type == 'automatic' ? $gatewey->name : $gatewey->title); ?> <?php echo e(__('Payment')); ?></label>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="col-lg-12 d-none string-show">
                                        <div class="border p-3 mt-3">
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="card_number"><?php echo e(__('Card Number')); ?></label>
                                                        <input type="text" class="form-control card-elements" name="cardNumber" placeholder="<?php echo e(__('Card Number')); ?>" autocomplete="off" id="validateCard">
                                                        <span id="errCard" class="text-danger"></span>
                                                        <?php $__errorArgs = ['cardNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cardCVC"><?php echo e(__('Cvc')); ?></label>
                                                        <input type="text" class="form-control card-elements"  placeholder="<?php echo e(__('Cvc')); ?>" name="cardCVC" id="validateCVC">
                                                        <span id="errCVC text-danger"></span>
                                                        <?php $__errorArgs = ['cardCVC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Month')); ?></label>
                                                        <input type="text" class="form-control card-elements" id="" placeholder="<?php echo e(__('Month')); ?>" name="month">
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Year')); ?></label>
                                                        <input type="text" class="form-control card-elements" id="" placeholder="<?php echo e(__('Year')); ?>" name="year">
                                                        <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-none mercadapago-show">
                                        <div class="border p-3 mt-3">
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="card_number"><?php echo e(__('Card Number')); ?></label>
                                                        <input type="text" class="form-control " id="cardNumber" data-checkout="cardNumber" onselectstart="return false" autocomplete="off" >
                                                        <span id="errCard" class="text-danger"></span>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cardCVC"><?php echo e(__('Cvc')); ?></label>
                                                        <input type="text" class="form-control " id="securityCode" data-checkout="securityCode" placeholder="<?php echo e(__('Security Code')); ?>" onselectstart="return false" autocomplete="off"  >
                                                        <span id="errCVC text-danger"></span>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Month')); ?></label>
                                                        <input type="text" class="form-control " id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="<?php echo e(__('Expiration Month')); ?>" autocomplete="off" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Year')); ?></label>
                                                        <input type="text" class="form-control "id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="<?php echo e(__('Expiration Year')); ?>" autocomplete="off" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Card Name')); ?></label>
                                                        <input type="text" class="form-control " id="cardholderName" data-checkout="cardholderName" placeholder="<?php echo e(__('Card Holder Name')); ?>" >
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="docType" id="dc-label"><?php echo e(__('Document type')); ?></label>
                                                        <select class="form-control" id="docType" data-checkout="docType" >
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?php echo e(__('Document Number')); ?></label>
                                                        <input type="text" class="form-control " id="docNumber" data-checkout="docNumber" placeholder="<?php echo e(__('Document Number')); ?>">
                                                        
                                                    </div>
                                                </div>

                                                <input type="hidden" id="installments" value="1"/>
                                                <input type="hidden" name="amount" id="amount"/>
                                                <input type="hidden" name="description"/>
                                                <input type="hidden" name="paymentMethodId" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-none offline-show">
                                        <div class="border p-3 mt-3">
                                            <p><b class="details_show_offline"></b></p>
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="card_number"><?php echo e(__('Transaction ID')); ?></label>
                                                        <input type="text" class="form-control" name="transaction_id"  placeholder="<?php echo e(__('Transaction ID')); ?>" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="currency_code" value="<?php echo e(PriceHelper::showCurrencyCode()); ?>">
                                    <input type="hidden" name="currency_sign" value="<?php echo e(PriceHelper::showCurrency()); ?>">
                                    <input type="hidden" name="ref_id" id="ref_id" value="">
                                    <div class="col-lg-12 mt-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"> I have read and accept the <a href="#">terms and conditions</a></label>
                                          </div>
                                          <button class="mybtn1 final-btn mt-3"><?php echo e(__('Checkout')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
               
                    <div class="col-lg-4">
                        <div class="booking-info">
                            <div class="top-area">
                                <h5 class="name"><?php echo e($tour['tour']['title']); ?></h5>
                                <p class="location"><i class="fas fa-map-marker-alt"></i> <?php echo e($tour['tour']->country->country); ?>, <?php echo e($tour['tour']->state->state); ?></p>
                                <div class="image">
                                    <img src="<?php echo e(asset('assets/images/tour/feature-image/'.$tour['tour']->image->image)); ?>" alt="">
                                </div>
                            </div>
                            <div class="area-two">
                                <ul>
                                    <li>
                                        <span><?php echo e(__('Start date')); ?>:</span>
                                        <span><?php echo e($tour['start_date']); ?></span>
                                    </li>
                                    <li>
                                        <span><?php echo e(__('End date')); ?>:</span>
                                        <span><?php echo e($tour['end_date']); ?></span>
                                    </li>
                                    <li>
                                        <span><?php echo e(__('Duration')); ?>:</span>
                                        <span><?php echo e($tour['night']); ?> <?php echo e(__('Night')); ?></span>
                                    </li>
                                    
                                </ul>
                            </div>
                            <?php if($tour['fac_name']): ?>
                            <div class="area-three">
                                <h6 class="mt-2">
                                    <?php echo e(__('Extra Prices')); ?>:
                                </h6>
                                <ul>
                                    <?php $__currentLoopData = $tour['fac_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $e_p_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <span><?php echo e($e_p_name); ?>: <small>(<?php echo e(str_replace('_',' ',$tour['fac_type'][$key])); ?>)</small></span>
                                        <span><?php echo e(PriceHelper::showCurrency()); ?> <?php echo e(PriceHelper::showPrice($tour['fac_price'][$key])); ?></span>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                       
                            <?php if($tour['person_type']): ?>
                            <div class="area-three">
                                <h6 class="mt-2">
                                    <?php echo e(__('Persons')); ?>:
                                </h6>

                                <ul>
                                    <?php $__currentLoopData = $tour['person_type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $t_p_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <span><?php echo e($t_p_type); ?> * <?php echo e($tour['person_qty'][$key]); ?> : </span>
                                        <span><?php echo e(PriceHelper::showCurrency()); ?><?php echo e(PriceHelper::showPrice($tour['person_price'][$key])); ?></span>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <div class="area-four">
                                <h4>
                                    <?php echo e(__('Total')); ?>:
                                </h4>
                                <h4 class="total">
                                    <?php echo e(PriceHelper::showCurrency()); ?> <?php echo e(PriceHelper::showPrice($tour['total'])); ?>

                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <input type="hidden" id="tour_stripe_route" value="<?php echo e(route('tour.stripe.submit')); ?>">
       <input type="hidden" id="tour_offline_route" value="<?php echo e(route('tour.offline.payment')); ?>">
       <input type="hidden" id="tour_instamojo_route" value="<?php echo e(route('tour.instamojo.payment')); ?>">
       <input type="hidden" id="tour_paypal_route" value="<?php echo e(route('tour.paypal.payment')); ?>">
       <input type="hidden" id="tour_authorize_route" value="<?php echo e(route('tour.authorize.payment')); ?>">
       <input type="hidden" id="tour_mollie_route" value="<?php echo e(route('tour.mollie.payment')); ?>">
       <input type="hidden" id="tour_paystack_route" value="<?php echo e(route('tour.paystack.payment')); ?>">
       <input type="hidden" id="tour_mercadopago_route" value="<?php echo e(route('tour.mercadopago.payment')); ?>">
       <input type="hidden" id="tour_rezorpay_route" value="<?php echo e(route('tour.rezorpay.payment')); ?>">

<?php
    $paystack = App\Models\PaymentGateway::whereKeyword('paystack')->first();
    $paystackData = $paystack->convertAutoData();

    $mercadopago = App\Models\PaymentGateway::whereKeyword('Mercadopago')->first();
    $mercadopagoData = $mercadopago->convertAutoData();
?>
<input type="hidden" value="<?php echo e($mercadopagoData['public_key']); ?>" id="tourmercadopagokey">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script src="https://js.stripe.com/v2/"></script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>

    <script src="<?php echo e(asset('assets/front/js/tour/index.js')); ?>"></script>
  
    <script>
        
        $(document).on('submit','.step1-form',function(){
           
            var total = "<?php echo e(round(PriceHelper::showPrice($tour['total']))); ?>";
                
                var handler = PaystackPop.setup({
                    key: '<?php echo e($paystackData['key']); ?>',
                    email: $('input[name=email]').val(),
                    amount: total * 100,
                    currency: "<?php echo e(PriceHelper::showCurrencyCode()); ?>",
                    ref: ''+Math.floor((Math.random() * 1000000000) + 1),
                    callback: function(response){
                    $('#ref_id').val(response.reference);
                    $('#payment-form').removeClass('step1-form');
                    
                    $('.final-btn').click();
                    },
                    onClose: function(){
                    window.location.reload();
                    }
                });
                handler.openIframe();
                    return false;
                
            });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/checkout/tour_checkout.blade.php ENDPATH**/ ?>