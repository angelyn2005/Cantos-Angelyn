<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - Student Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=IM+Fell+English&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css" />

  <style>
    body {
      font-family: 'IM Fell English', serif;
      background-color: #ecfdf5; /* light mint background */
    }
    .font-title {
      font-family: 'Cinzel Decorative', cursive;
      letter-spacing: 2px;
    }
    .btn-hover:hover {
      box-shadow: 0 0 12px #34d399, 0 0 24px #065f46;
      transform: scale(1.05);
    }

    /* Pagination container */
    .pagination {
      display: flex !important;
      justify-content: center;
      gap: 8px;
      flex-wrap: nowrap;
      font-family: 'IM Fell English', serif;
      margin-top: 1rem;
    }
    /* Pagination links and current page */
    .pagination a,
    .pagination span {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 6px;
      font-weight: bold;
      transition: all 0.2s ease;
      text-decoration: none;
      white-space: nowrap;
      line-height: 1;
      user-select: none;
    }
    .pagination a {
      background: #16a34a; /* green-600, lighter than logout */
      color: #f0fdf4;
      border: 1px solid #22c55e; /* green-500 border */
    }
    .pagination a:hover {
      background: #22c55e; /* green-500 lighter on hover */
      color: #064e3b;
    }
    .pagination .current {
      background: #15803d; /* green-700 but lighter than logout */
      color: #f0fdf4;
      border: 1px solid #166534; /* green-800 border */
      cursor: default;
    }

    /* Top action container for Add New and Logout */
    .top-actions {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }
    .top-actions .btn-hover {
      font-weight: bold;
      padding: 0.5rem 1.25rem;
      border-radius: 0.5rem;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }
    .top-actions .btn-add {
      background: linear-gradient(to right, #047857, #22c55e); /* green gradient */
      color: white;
    }
    .top-actions .btn-add:hover {
      background: linear-gradient(to right, #065f46, #16a34a);
      box-shadow: 0 0 12px #34d399, 0 0 24px #065f46;
      transform: scale(1.05);
    }
    .top-actions .btn-logout {
      background-color: #065f46; /* dark green */
      color: #f0fdf4;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    .top-actions .btn-logout:hover {
      background-color: #10b981; /* lighter green */
      color: #064e3b;
      box-shadow: 0 0 12px #34d399, 0 0 24px #065f46;
      transform: scale(1.05);
    }
  </style>
</head>
<body class="min-h-screen">

  <!-- Header -->
  <nav class="bg-gradient-to-r from-green-900 via-green-700 to-green-800 shadow-lg border-b-4 border-green-500">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-green-100 font-title text-2xl flex items-center gap-2">
        <i class="fa-solid fa-hat-wizard"></i> Student Directory
      </h1>
    </div>
  </nav>

  <!-- Content -->
  <div class="max-w-6xl mx-auto mt-10 px-4">
    <div class="bg-green-50 shadow-xl rounded-xl p-6 border-4 border-green-500">

      <!-- Top Actions: Add New + Logout -->
      <div class="top-actions">
        <a href="<?=site_url('users/create')?>" class="btn-hover btn-add">
          <i class="fa-solid fa-user-plus"></i> Add New
        </a>
        <a href="<?=site_url('auth/logout')?>" class="btn-logout">
          <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
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

      <!-- Pagination centered horizontally -->
      <div>
        <div class="pagination">
          <?php
            if (!empty($page)) {
              // Clean whitespace to avoid vertical stacking
              $clean_page = preg_replace('/\s+/', ' ', $page);
              echo str_replace(
                ['<a ', '<strong>', '</strong>'],
                [
                  '<a ',
                  '<span class="current">',
                  '</span>'
                ],
                $clean_page
              );
            }
          ?>
        </div>
      </div>

    </div>
  </div>

</body>
</html>