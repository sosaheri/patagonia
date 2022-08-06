
<?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

    if($stock){
    if(isset($stock[$k]) && in_array($room->id ,$extra_room)){
        $stock_val = $stock[$k];
        
    }else{
        $stock_val = $room->stock;
    }

    }else{
        $stock_val = $room->stock;
    }


?>



<div class="single-room">
    <div class="image" data-toggle="modal" data-target="#staticBackdrop"> 
        <?php if(count($room->gallery->where('type','hotel_room')) > 0): ?>
        <img src="<?php echo e(asset('assets/images/hotel-image/room/'.$room->gallery->where('type','hotel_room')[0]->image)); ?>" alt="">
        <?php else: ?>
        <img src="<?php echo e(asset('assets/images/placeholder.jpg')); ?>" alt="">
        <?php endif; ?>
       
        <div class="count-gallery"><i class="fas fa-image"></i>
            <?php echo e(count($room->gallery->where('type','hotel_room')->where('imagable_id',$room->id))); ?>

        </div>
    </div>
    <div class="hotel-info">
        <h3 class="room-name"><?php echo e($room->room_name); ?></h3>
        <ul class="room-meta">
            <li>
                <div class="item">
                    <i class="fas fa-compass"></i>
                    <span><?php echo e($room->square_fit); ?> <?php echo e(__('sqft')); ?></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <i class="fas fa-bed"></i>
                    <span>x<?php echo e($room->bed); ?> <?php echo e(__('bed')); ?></span>
                </div>
            </li>
            <li>
                <div class="item"><i class="fas fa-users"></i>
                <span>x <?php echo e($room->adult); ?> <?php echo e(__('Adult')); ?></span>
                </div>
            </li>
            <li>
                <div class="item"><i class="fas fa-child fa"></i>
                    <span>x<?php echo e($room->children); ?> <?php echo e(__('Children')); ?></span>
                </div>
            </li>
        </ul>
    </div>
    <div class="hotel-room">
        <?php
            $per_price = 0;
        ?>
        <p class="price_date_wise"></p>
        <select class="form-control per_night_cost" data-target="<?php echo e(PriceHelper::showPrice($room->per_night_cost)); ?>"  data-href="<?php echo e($room->id); ?>" name="per_night_cost" id="per_night_cost">
            <option value="" selected><?php echo e(__('Select Room')); ?></option>
            <?php
                for($i=1;$i<=$stock_val;$i++){
                    $per_price = $room->per_night_cost * $i;
                    echo '<option value="'.$i.'">'.$i.' Room  </option>';
                }
            ?>
        </select>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/load/room.blade.php ENDPATH**/ ?>