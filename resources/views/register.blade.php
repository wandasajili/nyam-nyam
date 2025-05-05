<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm px-8 py-10 bg-white rounded-lg shadow-md text-center">

    <!-- Google Logo -->
    <div class="flex justify-center mb-6">
      <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
           alt="Google Logo"
           class="w-12 h-12 rounded-full shadow-md" />
    </div>

    <!-- Form -->
    <form action="#" method="POST" class="space-y-5">
      <input type="email"
             placeholder="Email"
             class="w-full px-5 py-2 text-gray-700 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" />

      <input type="password"
             placeholder="Password"
             class="w-full px-5 py-2 text-gray-700 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300" />

      <button type="submit"
              class="w-full bg-blue-300 hover:bg-blue-400 text-white font-medium py-2 rounded-full shadow-md transition">
        Sign in
      </button>
    </form>

    <!-- Create account link -->
    <p class="mt-6 text-sm text-blue-600 hover:underline cursor-pointer">Create account</p>
  </div>

</body>
</html>

