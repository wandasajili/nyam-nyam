<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restoran - Tailwind Restaurant Template</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">
  <!-- Spinner Start -->
  <div id="spinner" class="fixed inset-0 flex items-center justify-center bg-white z-50 hidden">
    <div class="w-12 h-12 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <header class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-4">
      <a href="#" class="text-2xl font-bold text-primary flex items-center">
        <i class="fa fa-utensils mr-2 text-yellow-500"></i>Restoran
      </a>
      <nav class="hidden md:flex space-x-6">
        <a href="/index" class="hover:text-yellow-500">Home</a>
        <a href="/" class="text-yellow-500 font-semibold">About</a>
        <a href="service.html" class="hover:text-yellow-500">Service</a>
        <a href="menu.html" class="hover:text-yellow-500">Menu</a>
        <div class="relative group">
          <button class="hover:text-yellow-500">Pages</button>
          <div class="absolute hidden group-hover:block bg-white text-black mt-2 shadow-lg rounded-md">
            <a href="booking.html" class="block px-4 py-2 hover:bg-gray-100">Booking</a>
            <a href="team.html" class="block px-4 py-2 hover:bg-gray-100">Our Team</a>
            <a href="testimonial.html" class="block px-4 py-2 hover:bg-gray-100">Testimonial</a>
          </div>
        </div>
        <a href="contact.html" class="hover:text-yellow-500">Contact</a>
      </nav>
      <a href="#" class="ml-4 bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Book A Table</a>
    </div>
  </header>
  <!-- Navbar End -->

  <!-- Hero Start -->
  <section class="bg-gray-900 text-white py-20">
    <div class="text-center max-w-2xl mx-auto">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">About Us</h1>
      <nav class="text-sm uppercase tracking-wide">
        <ol class="flex justify-center space-x-2 text-gray-300">
          <li><a href="#" class="hover:text-white">Home</a></li>
          <li>/</li>
          <li><a href="#" class="hover:text-white">Pages</a></li>
          <li>/</li>
          <li class="text-white">About</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- Hero End -->
</body>

</html>
