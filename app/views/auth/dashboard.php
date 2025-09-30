<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=IM+Fell+English&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">

  <style>
    body { font-family: 'IM Fell English', serif; background-color: #ecfdf5; } /* light mint background */
    .font-title { font-family: 'Cinzel Decorative', cursive; letter-spacing: 2px; }
    .btn-hover:hover { box-shadow: 0 0 12px #34d399, 0 0 24px #065f46; transform: scale(1.05); }
  </style>
</head>
<body class="min-h-screen">

  <!-- Header -->
  <nav class="bg-gradient-to-r from-green-900 via-green-700 to-green-800 shadow-lg border-b-4 border-green-500">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-green-100 font-title text-2xl flex items-center gap-2">
        <i class="fa-solid fa-hat-wizard"></i> Student Directory
      </h1>

      <!-- Logout Button -->
      <a href="<?=site_url('auth/logout');?>"
        class="btn-hover bg-green-700 hover:bg-green-800 text-white font-semibold px-4 py-2 rounded-lg shadow flex items-center gap-2">
        <i class="fa-solid fa-right-from-bracket"></i> Logout
      </a>
    </div>
  </nav>

  <!-- Content -->
  <div class="max-w-6xl mx-auto mt-10 px-4">
    <div class="bg-green-50 shadow-xl rounded-xl p-6 border-4 border-green-500">

      <!-- Top Actions -->
      <div class="flex justify-end items-center mb-6">
        <!-- Search Bar -->
        <form method="get" action="<?=site_url('/auth/dashboard')?>" class="flex">
          <input 
            type="text" 
            name="q" 
            value="<?=html_escape($_GET['q'] ?? '')?>" 
            placeholder="Search student..." 
            class="px-4 py-2 border border-green-400 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-600 w-64 bg-green-100">
          <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-semibold px-4 py-2 rounded-r-lg shadow transition-all duration-300">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-xl border-4 border-green-500">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-green-800 to-green-600 text-green-100 uppercase tracking-wider hp-title text-lg">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Email</th>
            </tr>
          </thead>
          <tbody class="text-gray-900 text-sm" style="font-family:'IM Fell English', serif;">
            <?php if(!empty($users)): ?>
              <?php foreach(html_escape($users) as $user): ?>
                <tr class="hover:bg-green-100 transition duration-200">
                  <td class="py-3 px-4 font-medium"><?=($user['id']);?></td>
                  <td class="py-3 px-4"><?=($user['last_name']);?></td>
                  <td class="py-3 px-4"><?=($user['first_name']);?></td>
                  <td class="py-3 px-4"><?=($user['email']);?></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr><td colspan="4" class="py-4 text-gray-600">No students found.</td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-6 flex justify-center">
        <?php include APP_DIR . 'views/partials/pagination.php'; ?>
      </div>

    </div>
  </div>

</body>
</html>
