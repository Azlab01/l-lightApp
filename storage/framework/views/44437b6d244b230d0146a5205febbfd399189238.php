<div>
    <h1>&#128161;<?php echo e($brightness); ?>%</h1>
    <div class="progress">
        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($brightness); ?>%" aria-valuenow="<?php echo e($brightness); ?>" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="mt-2">
          <button class="btn btn-sm btn-danger" wire:click="off">Off</button>
          <button class="btn btn-sm btn-secondary" wire:click="increment" <?php if($brightness > 90): ?> disabled <?php endif; ?>>+</button>
          <button class="btn btn-sm btn-secondary" wire:click="decrement" <?php if($brightness < 10): ?> disabled <?php endif; ?>>-</button>
          <button class="btn btn-sm btn-primary" wire:click="on">On</button>
      </div>
</div>
<?php /**PATH C:\laragon\www\L-lightApp\resources\views/livewire/light.blade.php ENDPATH**/ ?>