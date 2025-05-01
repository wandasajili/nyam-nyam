<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-sm">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Log in to your account</h2>

    <form action="#" method="POST" class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <div class="relative">
          <input type="password" placeholder="Enter password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          <span class="absolute right-3 top-2.5 text-gray-400">
            👁️
          </span>
        </div>
      </div>

      <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2 rounded-full hover:bg-blue-700 transition">
        Sign in
      </button>
    </form>

    <p class="mt-4 text-center text-sm text-gray-600">
      Don't have an account?
      <a href="/register" class="text-blue-600 hover:underline">Sign up now</a>
    </p>
  </div>

</body>
</html>
