<div class="panel">
    <div class="panel-title"><strong><?php echo e(__('Ical')); ?></strong></div>
    <div class="panel-body">
        <div class="form-group">
            <label><?php echo e(__("Import url")); ?></label>
            <input type="text" value="<?php echo e($row->ical_import_url); ?>"  name="ical_import_url" class="form-control">
        </div>
        <?php if(!empty($row->id)): ?>
        <div class="form-group">
            <label><?php echo e(__("Export url")); ?></label>
            <input type="text" value="<?php echo e(route('booking.admin.export-ical',['type'=>'space',$row->id])); ?>"   class="form-control">
        </div>
            <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/mrkreativez/public_html/shortstay.mrkreativez.com/modules/Space/Views/admin/space/ical.blade.php ENDPATH**/ ?>