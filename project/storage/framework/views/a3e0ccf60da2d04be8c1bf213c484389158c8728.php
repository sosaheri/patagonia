<div class="item-filter">
    <ul class="filter-list">
        <li class="item-short-area">
            <p><?php echo e(__('Short By')); ?> :</p>
            <select class="short-item" id="sort_by" name="sort_by">
                <option value="latest" selected><?php echo e(__('Newest')); ?></option>
                <option value="oldest"><?php echo e(__('Oldest')); ?></option>
                <option value="price_up"><?php echo e(__('Price Up')); ?></option>
                <option value="price_down"><?php echo e(__('Price Down')); ?></option>
            </select>
        </li>
        <li class="viewitem-no-area">
            <p><?php echo e(__('View')); ?> :</p>
            <select class="short-itemby-no" id="view_count" name="view_count">
                <option value=""><?php echo e(__('Select Number')); ?></option>
                <option value="10" <?php echo e(request()->input('view') == 10 ? 'selected' : ''); ?> >10</option>
                <option value="20" <?php echo e(request()->input('view') == 20 ? 'selected' : ''); ?>>20</option>
                <option value="30" <?php echo e(request()->input('view') == 30 ? 'selected' : ''); ?>>30</option>
            </select>
        </li>
    </ul>
</div><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/inc/filter_section.blade.php ENDPATH**/ ?>