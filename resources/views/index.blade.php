<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Tailwind Version</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="icon" href="img/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Spinner Start -->
    <div id="spinner" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <div class="w-12 h-12 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="bg-gray-900 text-white px-6 py-4 flex flex-wrap items-center justify-between">
        <a href="#" class="text-2xl font-bold text-yellow-500 flex items-center gap-2">
            <i class="fas fa-utensils"></i> Restoran
        </a>
        <div class="hidden md:flex space-x-6">
            <a href="/home" class="hover:text-yellow-400">Home</a>
            <a href="/" class="hover:text-yellow-400">About</a>
            <a href="service.html" class="hover:text-yellow-400">Service</a>
            <a href="menu.html" class="hover:text-yellow-400">Menu</a>
            <div class="relative group">
                <button class="hover:text-yellow-400">Pages</button>
                <div class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg">
                    <a href="booking.html" class="block px-4 py-2 hover:bg-gray-200">Booking</a>
                    <a href="team.html" class="block px-4 py-2 hover:bg-gray-200">Our Team</a>
                    <a href="testimonial.html" class="block px-4 py-2 hover:bg-gray-200">Testimonial</a>
                </div>
            </div>
            <a href="contact.html" class="hover:text-yellow-400">Contact</a>
        </div>
        <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Book A Table</a>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="bg-gray-900 py-20">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 text-white text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Enjoy Our<br>Delicious Meal</h1>
                <p class="mb-6">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos.</p>
                <a href="#" class="bg-yellow-500 px-6 py-3 rounded text-white hover:bg-yellow-600">Book A
                    Table</a>
            </div>
            <div class="lg:w-1/2 mt-10 lg:mt-0 text-center">
                <img src="img/hero.png" alt="Hero" class="mx-auto">
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6 border rounded shadow">
                <i class="fas fa-user-tie text-4xl text-yellow-500 mb-4"></i>
                <h5 class="font-semibold mb-2">Master Chefs</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="text-center p-6 border rounded shadow">
                <i class="fas fa-utensils text-4xl text-yellow-500 mb-4"></i>
                <h5 class="font-semibold mb-2">Quality Food</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="text-center p-6 border rounded shadow">
                <i class="fas fa-cart-plus text-4xl text-yellow-500 mb-4"></i>
                <h5 class="font-semibold mb-2">Online Order</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
            <div class="text-center p-6 border rounded shadow">
                <i class="fas fa-headset text-4xl text-yellow-500 mb-4"></i>
                <h5 class="font-semibold mb-2">24/7 Service</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Menu Start -->
    <div class="max-w-screen-2xl mx-auto py-20 px-4">
        <div class="text-center mb-12">
            <h5 class="text-lg font-medium text-primary font-secondary">Food Menu</h5>
            <h1 class="text-4xl font-bold mt-2">Most Popular Items</h1>
        </div>

        <div class="text-center mb-12">
            <ul class="flex justify-center border-b border-gray-300">
                <li>
                    <a href="#tab-1"
                        class="flex items-center text-start px-6 pb-3 border-b-2 border-primary text-primary">
                        <i class="fa fa-coffee text-2xl"></i>
                        <div class="pl-3 text-left">
                            <small class="text-gray-600 block">Popular</small>
                            <h6 class="text-base font-semibold -mt-1">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab-2" class="flex items-center text-start px-6 pb-3 hover:text-primary">
                        <i class="fa fa-hamburger text-2xl text-primary"></i>
                        <div class="pl-3 text-left">
                            <small class="text-gray-600 block">Special</small>
                            <h6 class="text-base font-semibold -mt-1">Launch</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab-3" class="flex items-center text-start px-6 pb-3 hover:text-primary">
                        <i class="fa fa-utensils text-2xl text-primary"></i>
                        <div class="pl-3 text-left">
                            <small class="text-gray-600 block">Lovely</small>
                            <h6 class="text-base font-semibold -mt-1">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div id="tab-1" class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Menu Item -->
            <div class="flex items-center">
                <img src="img/menu-1.jpg" alt="" class="w-20 h-20 object-cover rounded" />
                <div class="ml-4 w-full">
                    <h5 class="flex justify-between border-b pb-2 text-lg font-medium">
                        <span>Chicken Burger</span>
                        <span class="text-primary">$115</span>
                    </h5>
                    <small class="italic text-gray-500">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="flex items-center">
            <img class="w-20 h-20 object-cover rounded" src="img/menu-8.jpg" alt="">
            <div class="w-full flex flex-col text-left ps-4 pl-4">
                <h5 class="flex justify-between border-b pb-2 text-lg font-semibold">
                    <span>Chicken Burger</span>
                    <span class="text-primary text-blue-600">$115</span>
                </h5>
                <small class="italic text-sm text-gray-600">Ipsum ipsum clita erat amet dolor justo diam</small>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="flex items-center">
            <img class="w-20 h-20 object-cover rounded" src="img/menu-6.jpg" alt="">
            <div class="w-full flex flex-col text-left pl-4">
                <h5 class="flex justify-between border-b pb-2 text-lg font-semibold">
                    <span>Chicken Burger</span>
                    <span class="text-primary text-blue-500">$115</span>
                </h5>
                <small class="italic text-sm text-gray-600">Ipsum ipsum clita erat amet dolor justo diam</small>
            </div>
        </div>

        <div class="flex items-center">
            <img class="w-20 h-20 object-cover rounded" src="img/menu-7.jpg" alt="">
            <div class="w-full flex flex-col text-left pl-4">
                <h5 class="flex justify-between border-b pb-2 text-lg font-semibold">
                    <span>Chicken Burger</span>
                    <span class="text-primary text-blue-500">$115</span>
                </h5>
                <small class="italic text-sm text-gray-600">Ipsum ipsum clita erat amet dolor justo diam</small>
            </div>
        </div>

        <div class="flex items-center">
            <img class="w-20 h-20 object-cover rounded" src="img/menu-8.jpg" alt="">
            <div class="w-full flex flex-col text-left pl-4">
                <h5 class="flex justify-between border-b pb-2 text-lg font-semibold">
                    <span>Chicken Burger</span>
                    <span class="text-primary text-blue-500">$115</span>
                </h5>
                <small class="italic text-sm text-gray-600">Ipsum ipsum clita erat amet dolor justo diam</small>
            </div>
        </div>
    </div>

    <!-- Reservation Start -->
    <div class="w-full py-12 px-0">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <!-- Video Section -->
            <div class="relative bg-cover bg-center h-96 md:h-auto"
                style="background-image: url('img/video-placeholder.jpg');">
                <button type="button" class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4.5 3.5v13l11-6.5-11-6.5z" />
                        </svg>
                    </div>
                </button>
            </div>

            <!-- Form Section -->
            <div class="bg-gray-900 flex items-center">
                <div class="p-8 w-full">
                    <h5 class="text-lg font-medium text-blue-500 mb-2">Reservation</h5>
                    <h1 class="text-white text-3xl font-bold mb-6">Book A Table Online</h1>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm text-white mb-1">Your Name</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-2 rounded bg-white text-gray-800" placeholder="Your Name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm text-white mb-1">Your Email</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-2 rounded bg-white text-gray-800" placeholder="Your Email">
                            </div>
                            <div>
                                <label for="datetime" class="block text-sm text-white mb-1">Date & Time</label>
                                <input type="text" id="datetime"
                                    class="w-full px-4 py-2 rounded bg-white text-gray-800" placeholder="Date & Time">
                            </div>
                            <div>
                                <label for="select1" class="block text-sm text-white mb-1">No Of People</label>
                                <select id="select1" class="w-full px-4 py-2 rounded bg-white text-gray-800">
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label for="message" class="block text-sm text-white mb-1">Special Request</label>
                                <textarea id="message" class="w-full px-4 py-2 rounded bg-white text-gray-800 h-24" placeholder="Special Request"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <button type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded transition duration-200">Book
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video (Tailwind CSS + Alpine.js) -->
    <div x-data="{ open: false, videoSrc: '' }">
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50"
            @click.self="open = false; videoSrc = ''">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-4">
                <div class="flex justify-between items-center border-b pb-2">
                    <h2 class="text-lg font-semibold">Youtube Video</h2>
                    <button @click="open = false; videoSrc = ''"
                        class="text-gray-600 hover:text-red-500">&times;</button>
                </div>
                <div class="mt-4 aspect-w-16 aspect-h-9">
                    <iframe x-bind:src="videoSrc" allowfullscreen allow="autoplay"
                        class="w-full h-full rounded"></iframe>
                </div>
            </div>
        </div>
        <button @click="open = true; videoSrc = 'https://www.youtube.com/embed/DWRcNpR6Kdc'"
            class="bg-red-600 text-white px-4 py-2 rounded mt-4">
            Play Video
        </button>
    </div>

    <!-- Team Section (Tailwind CSS) -->
    <div class="w-full pt-16 pb-8 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h5 class="text-blue-500 text-sm font-medium uppercase mb-2">Team Members</h5>
                <h1 class="text-3xl font-bold">Our Master Chefs</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member Card -->
                <div class="bg-white text-center rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden mt-4">
                        <img src="img/team-1.jpg" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h5 class="mt-4 text-lg font-semibold">Full Name</h5>
                    <p class="text-gray-500 text-sm">Designation</p>
                    <div class="flex justify-center space-x-2 mt-4 mb-4">
                        <a href="#" class="text-white bg-blue-600 rounded-full p-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white bg-blue-400 rounded-full p-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white bg-pink-500 rounded-full p-2"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Repeat for other team members -->
            </div>
        </div>
    </div>


    <!-- Testimonial Start -->
    <div class="max-w-7xl mx-auto py-10 px-4">
        <div class="text-center">
            <h5 class="text-primary text-lg font-light mb-2">Testimonial</h5>
            <h1 class="text-3xl font-bold mb-10">Our Clients Say!!!</h1>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border rounded p-6 shadow">
                <i class="fa fa-quote-left text-primary text-2xl mb-3"></i>
                <p class="mb-4 text-sm text-gray-600">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                    stet amet eirmod eos labore diam</p>
                <div class="flex items-center">
                    <img class="w-12 h-12 rounded-full object-cover" src="img/testimonial-1.jpg" alt="">
                    <div class="ml-4">
                        <h5 class="font-semibold">Client Name</h5>
                        <small class="text-gray-500">Profession</small>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded p-6 shadow">
                <i class="fa fa-quote-left text-primary text-2xl mb-3"></i>
                <p class="mb-4 text-sm text-gray-600">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                    stet amet eirmod eos labore diam</p>
                <div class="flex items-center">
                    <img class="w-12 h-12 rounded-full object-cover" src="img/testimonial-2.jpg" alt="">
                    <div class="ml-4">
                        <h5 class="font-semibold">Client Name</h5>
                        <small class="text-gray-500">Profession</small>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded p-6 shadow">
                <i class="fa fa-quote-left text-primary text-2xl mb-3"></i>
                <p class="mb-4 text-sm text-gray-600">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                    stet amet eirmod eos labore diam</p>
                <div class="flex items-center">
                    <img class="w-12 h-12 rounded-full object-cover" src="img/testimonial-3.jpg" alt="">
                    <div class="ml-4">
                        <h5 class="font-semibold">Client Name</h5>
                        <small class="text-gray-500">Profession</small>
                    </div>
                </div>
            </div>
            <div class="bg-white border rounded p-6 shadow">
                <i class="fa fa-quote-left text-primary text-2xl mb-3"></i>
                <p class="mb-4 text-sm text-gray-600">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
                    stet amet eirmod eos labore diam</p>
                <div class="flex items-center">
                    <img class="w-12 h-12 rounded-full object-cover" src="img/testimonial-4.jpg" alt="">
                    <div class="ml-4">
                        <h5 class="font-semibold">Client Name</h5>
                        <small class="text-gray-500">Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <footer class="bg-gray-900 text-gray-300 pt-10">
        <div class="max-w-7xl mx-auto px-4 py-10 grid md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <h4 class="text-primary text-xl font-semibold mb-4">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                    <li><a href="#" class="hover:underline">Reservation</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms & Condition</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-primary text-xl font-semibold mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="mb-4"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="flex space-x-3">
                    <a href="#" class="text-white hover:text-primary"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white hover:text-primary"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white hover:text-primary"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white hover:text-primary"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-primary text-xl font-semibold mb-4">Opening</h4>
                <p class="text-white">Monday - Saturday</p>
                <p>09AM - 09PM</p>
                <p class="text-white mt-4">Sunday</p>
                <p>10AM - 08PM</p>
            </div>
            <div>
                <h4 class="text-primary text-xl font-semibold mb-4">Newsletter</h4>
                <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="relative">
                    <input type="text"
                        class="w-full p-3 pr-20 rounded border border-primary bg-gray-800 text-white"
                        placeholder="Your email">
                    <button
                        class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-primary text-white py-2 px-4 rounded">SignUp</button>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-10 py-6 text-sm">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between">
                <p class="text-center md:text-left">&copy; <a href="#"
                        class="text-primary hover:underline">Your Site Name</a>, All Right Reserved. Designed By <a
                        class="text-primary hover:underline" href="https://htmlcodex.com">HTML Codex</a></p>
                <div class="flex justify-center md:justify-end space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:underline">Home</a>
                    <a href="#" class="hover:underline">Cookies</a>
                    <a href="#" class="hover:underline">Help</a>
                    <a href="#" class="hover:underline">FQAs</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#"
        class="fixed bottom-5 right-5 w-12 h-12 flex items-center justify-center bg-primary text-white rounded-full shadow-lg hover:bg-primary-dark transition"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries (optional if using Tailwind + Alpine/Stimulus instead of jQuery/Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS (only include necessary parts for Tailwind setup) -->
    <script src="js/main.js"></script>
</body>

</html>
