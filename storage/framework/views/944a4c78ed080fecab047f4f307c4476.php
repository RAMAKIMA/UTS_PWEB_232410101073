<?php $__env->startSection('content'); ?>
<div class="p-6 bg-gray-50 h-[35em] mt-10 mb-1">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-semibold">Riwayat Investasi</h1>
    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700 font-semibold">+ Tambah Investasi</a>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead class="bg-green-300 text-gray-700">
        <tr>
          <th class="text-left px-6 py-3">Jenis</th>
          <th class="text-left px-6 py-3">Nama</th>
          <th class="text-right px-6 py-3">Investasi Awal (Rp)</th>
          <th class="text-right px-6 py-3">Return (%)</th>
          <th class="text-center px-6 py-3">Keuntungan (Rp)</th>
        </tr>
      </thead>
      <tbody class="text-gray-800">
        <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="border-b hover:bg-gray-50">
          <td class="px-6 py-4"><?php echo e($item['nama']); ?></td>
          <td class="px-6 py-4"><?php echo e($item['tipe']); ?></td>
          <td class="px-6 py-4 text-right">Rp <?php echo e(number_format($item['investasi_awal'], 2, ',', '.')); ?></td>
          <td class="px-6 py-4 text-right">
            <span class="font-semibold <?php echo e($item['return'] >= 0 ? 'text-green-500' : 'text-red-500'); ?>">
              <?php echo e(number_format($item['return'], 2, ',', '.')); ?> %
            </span>
          </td>
          <td class="px-6 py-4 text-right">Rp <?php echo e(number_format($item['nilai_sekarang'], 2, ',', '.')); ?></td>
          <td class="px-6 py-4 text-center space-x-2">
            <a href="#" class="inline-flex items-center text-gray-400 hover:underline">
              <svg xmlns="http://www.w3.org/2000/svg"
                   width="20" height="20" viewBox="0 0 24 24"
                   fill="none" stroke="currentColor"
                   stroke-width="1.5" stroke-linecap="round"
                   stroke-linejoin="round"
                   class="mr-1">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
              </svg>
              <span>Lihat</span>
            </a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\VSCode\SEMESTER 4\UTS\UTS_PWEB_1073\resources\views/pengelolaan.blade.php ENDPATH**/ ?>