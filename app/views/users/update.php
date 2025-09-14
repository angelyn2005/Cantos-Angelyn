<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-emerald-200 to-green-100 min-h-screen flex items-center justify-center font-sans text-gray-800">

  <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md border border-green-200">
    <h2 class="text-2xl font-semibold text-center text-green-800 mb-6">Update Student Information</h2>

    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-4">
      <div>
        <label class="block text-gray-700 mb-1">First Name</label>
        <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-700 mb-1">Last Name</label>
        <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none">
      </div>

      <div>
        <label class="block text-gray-700 mb-1">Email Address</label>
        <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none">
      </div>

      <button type="submit"
              class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-medium py-3 rounded-xl shadow-md transition duration-300 hover:scale-[1.02]">
        Update
      </button>
    </form>
  </div>
</body>
</html>
