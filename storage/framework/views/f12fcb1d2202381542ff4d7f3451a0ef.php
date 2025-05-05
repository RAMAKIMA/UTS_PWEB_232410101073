<?php $__env->startSection('content'); ?>
<div class="h-[32em] mt-16 mb-7 max-w-2xl mx-auto bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-xl">

    <div class="mt-10 flex items-center space-x-6 mb-6">
      <div class="w-20 h-20 bg-green-100 text-green-800 rounded-full flex items-center justify-center text-3xl font-bold shadow-inner">
        <?php echo e(strtoupper(substr($profil['nama_lengkap'], 0, 1))); ?>

      </div>
      <div>
        <h2 class="text-2xl font-semibold text-gray-800"><?php echo e($profil['nama_lengkap']); ?></h2>
        <p class="text-gray-600 text-sm"><?php echo e($profil['email']); ?></p>
        <p class="text-gray-500 text-sm italic">Username: <?php echo e($username); ?></p>
      </div>
    </div>

    <div class="mt-14 grid grid-cols-1 gap-6 text-gray-700">
      <div>
        <label class="font-semibold block text-gray-800">Profil Risiko:</label>
        <p class="text-base"><?php echo e($profil['profil_risiko']); ?></p>
      </div>
      <div>
        <label class="font-semibold block text-gray-800">Tujuan Investasi:</label>
        <p class="text-base"><?php echo e($profil['tujuan_investasi']); ?></p>
      </div>
    </div>

    <div class="mt-8 text-right">
      <a href="#" class="mt-16 inline-flex items-center bg-green-500 hover:bg-green-700 text-white font-medium px-5 py-2 rounded-xl shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5l3 3L12 15l-4 1 1-4 9.5-9.5z" />
        </svg>
        Edit Profil
      </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\VSCode\SEMESTER 4\UTS\UTS_PWEB_232410101073\resources\views/profile.blade.php ENDPATH**/ ?>