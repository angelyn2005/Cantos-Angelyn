<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-green-100 via-emerald-200 to-green-100 min-h-screen flex items-center justify-center font-sans text-gray-800">

  <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md border border-green-300">
    <!-- Header -->
    <div class="flex flex-col items-center mb-6">
      <div class="bg-gradient-to-br from-green-600 to-emerald-700 rounded-full p-3 shadow-lg">
        <i class="fa-solid fa-user text-white text-3xl drop-shadow-md"></i>
      </div>
      <h2 class="text-2xl font-bold text-green-700 mt-3">Create Student Account</h2>
      <p class="text-gray-500 text-sm">Start your journey with us today!</p>
    </div>

    <!-- Form -->
    <form action="<?=site_url('users/create')?>" method="POST" class="space-y-5">
      
      <!-- First Name -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">First Name</label>
        <input type="text" name="first_name" placeholder="Enter your first name" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-400 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none shadow-sm transition duration-200">
      </div>

      <!-- Last Name -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter your last name" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-400 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none shadow-sm transition duration-200">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required
               class="w-full px-4 py-3 bg-green-50 text-gray-800 border border-green-400 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none shadow-sm transition duration-200">
      </div>

      <!-- Sign Up Button -->
      <button type="submit"
              class="w-full bg-gradient-to-r from-green-600 to-emerald-700 hover:from-green-700 hover:to-emerald-800 text-white font-semibold py-3 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
        <i class="fa-solid fa-user-plus mr-2"></i> Sign Up
      </button>
    </form>
  </div>
</body>
</html>
