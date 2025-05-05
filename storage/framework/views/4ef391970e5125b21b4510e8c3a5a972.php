<?php $__env->startSection('content'); ?>
<div class="p-6 bg-gray-50 min-h-screen">
  <h1 class="text-2xl font-semibold mb-6">Selamat datang, <?php echo e($username); ?>!</h1>

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <!-- Total Investasi -->
    <div class="bg-white p-4 rounded shadow border-l-4 border-blue-500">
      <p class="text-gray-700">Total Investasi</p>
      <p class="text-xl font-bold text-blue-500">Rp <?php echo e(number_format($totalInvestasi, 0, ',', '.')); ?></p>
    </div>

    <!-- Return -->
    <div class="bg-white p-4 rounded shadow border-l-4 border-green-500">
      <p class="text-gray-700">Return</p>
      <p class="text-xl font-bold text-green-500"><?php echo e($return); ?>%</p>
    </div>

    <!-- Risiko -->
    <div class="bg-white p-4 rounded shadow border-l-4 border-orange-500">
      <p class="text-gray-700">Profil Risiko</p>
      <p class="text-xl font-bold text-orange-500"><?php echo e($profil['profil_risiko'] ?? 'Moderate'); ?></p>
    </div>

    <!-- Tujuan -->
    <div class="bg-white p-4 rounded shadow border-l-4 border-purple-500">
      <p class="text-gray-700">Tujuan Investasi</p>
      <p class="text-sm text-gray-600"><?php echo e($profil['tujuan_investasi'] ?? ' Tabungan Jangka Panjang'); ?></p>
    </div>
  </div>

<!-- Komposisi Investasi -->
<div class="bg-white p-6 rounded shadow mb-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">📊 Komposisi Investasi</h2>
    <div class="space-y-4">
      <?php $__currentLoopData = $komposisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipe => $persen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $warna = match($tipe) {
            'Saham' => 'bg-red-500',
            'Reksa Dana Pasar Uang' => 'bg-blue-500',
            default => 'bg-green-400',
          };
        ?>
        <div class="p-4 bg-gray-100 rounded-lg shadow-sm">
          <div class="flex justify-between items-center mb-2">
            <span class="text-sm font-semibold text-gray-700"><?php echo e($tipe); ?></span>
            <span class="text-sm text-gray-600"><?php echo e($persen); ?>%</span>
          </div>
          <div class="w-full bg-gray-300 h-3 rounded-full overflow-hidden">
            <div class="h-3 rounded-full transition-all duration-500 ease-out <?php echo e($warna); ?>"
                 style="width: <?php echo e($persen); ?>%"></div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

<!-- Rekomendasi Investasi -->
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">⭐ Top Rekomendasi Investasi</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

      <!-- BRI Seruni Pasar Uang III -->
      <div class="bg-white border-blue-500 border-2 p-4 rounded-lg shadow hover:shadow-lg transition relative">
        <h3 class="text-lg font-bold text-black mb-1 flex items-center">
            <img src="https://app.bibit.id/assets/logos/investment-manager/square/OD002.svg" alt="BRI" class="w-5 h-5 mr-1">
            BRI Seruni Pasar Uang III
            <span class="ml-auto text-sm text-green-600 font-semibold">5.62%</span>
        </h3>
        <p class="text-sm text-gray-700 mb-1">Potensi return tinggi untuk profil agresif.</p>
      </div>

      <!-- Bahana Likuid Plus -->
      <div class="bg-white border-red-500 border-2 p-4 rounded-lg shadow hover:shadow-lg transition relative">
        <h3 class="font-bold text-black mb-1 flex items-center">
            <img src="https://app.bibit.id/assets/logos/investment-manager/square/LG002.svg" alt="TRIM" class="w-5 h-5 mr-1">
            TRIM Kapital Plus
            <p class="ml-auto text-sm text-red-600 font-semibold">-1.66%</p> <!-- Ganti sesuai data -->
        </h3>
        <p class="text-sm text-gray-700 mb-1">Stabil dan cocok untuk pemula.</p>
      </div>

      <!-- Manulife Obligasi Unggulan Kelas A -->
      <div class="bg-white border-green-500 border-2 p-4 rounded-lg shadow hover:shadow-lg transition relative">
        <h3 class="font-bold text-black mb-1 flex items-center">
            <img src="https://app.bibit.id/assets/logos/investment-manager/square/MAN02.svg" alt="MANULIFE" class="w-5 h-5 mr-1">
            Manulife Obligasi Unggulan Kelas A
            <p class="ml-auto text-sm text-green-600 font-semibold">6.24%</p> <!-- Ganti sesuai data -->
        </h3>
        <p class="text-sm text-gray-700 mb-1">Aman dan cocok untuk jangka menengah.</p>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\VSCode\SEMESTER 4\UTS\UTS_PWEB_232410101073\resources\views/dashboard.blade.php ENDPATH**/ ?>