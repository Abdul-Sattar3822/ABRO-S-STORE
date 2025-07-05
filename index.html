<?php
require_once "config/db.php";
$db = new Database();
$conn = $db->connect();

// Fetch categories
$catStmt = $conn->prepare("SELECT * FROM categories LIMIT 6");
$catStmt->execute();
$categories = $catStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch featured products
$productStmt = $conn->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 8");
$productStmt->execute();
$products = $productStmt->fetchAll(PDO::FETCH_ASSOC);

$cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
 <head>
  <meta charset="utf-8" />
  <title>
   Abro's E-Commerce
  </title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&amp;display=swap" rel="stylesheet" />
  <style>
   body {
    font-family: "Poppins", sans-serif;
   }

   .category-tile {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
   }

   .category-tile:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
   }

   .product-card img {
    transition: transform 0.3s ease;
   }

   .product-card:hover img {
    transform: scale(1.05);
   }

   .btn-primary {
    background: #22c55e;
    border: none;
   }

   .btn-primary:hover {
    background: #16a34a;
   }

   /* Form input focus */
   input:focus,
   textarea:focus {
    outline: none;
    box-shadow: 0 0 0 3px #22c55e88;
    border-color: #22c55e;
   }

   /* Button focus */
   button:focus {
    outline: none;
    box-shadow: 0 0 0 3px #22c55e88;
   }

   /* Floating labels */
   .form-group {
    position: relative;
    margin-bottom: 1.5rem;
   }

   .form-input,
   .form-textarea {
    width: 100%;
    padding: 1.25rem 1rem 0.5rem 1rem;
    border: 1.5px solid #d1d5db;
    border-radius: 0.75rem;
    background: transparent;
    font-size: 1rem;
    transition: border-color 0.3s ease;
   }

   .form-input:focus,
   .form-textarea:focus {
    border-color: #22c55e;
   }

   .form-label {
    position: absolute;
    top: 1.25rem;
    left: 1rem;
    color: #6b7280;
    font-weight: 500;
    font-size: 1rem;
    pointer-events: none;
    transition: all 0.3s ease;
    background: white;
    padding: 0 0.25rem;
    border-radius: 0.25rem;
   }

   .form-input:focus + .form-label,
   .form-input:not(:placeholder-shown) + .form-label,
   .form-textarea:focus + .form-label,
   .form-textarea:not(:placeholder-shown) + .form-label {
    top: 0.25rem;
    left: 0.75rem;
    font-size: 0.75rem;
    color: #16a34a;
    font-weight: 600;
   }

   /* Responsive textarea height */
   .form-textarea {
    min-height: 120px;
    resize: vertical;
   }

   /* Button with icon */
   .btn-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
   }
  </style>
 </head>
 <body class="bg-gray-50 text-gray-800">
  <!-- Navbar -->
  <nav
   class="bg-gray-900 text-white flex items-center justify-between px-4 sm:px-6 lg:px-12 h-16 sticky top-0 z-50 shadow-md"
  >
   <div class="flex items-center space-x-3">
    <img
     alt="Abro's Store logo with stylized letter A in green and black"
     class="w-8 h-8"
     height="32"
     loading="lazy"
     src="https://storage.googleapis.com/a1aa/image/60e265d7-c1f9-4997-53d0-110067591c70.jpg"
     width="32"
    />
    <span class="font-semibold text-lg tracking-wide select-none">ABRO'S STORE</span>
   </div>
   <div class="space-x-3 hidden sm:flex">
    <a
     class="px-4 py-2 border border-green-500 text-green-500 rounded-md font-semibold hover:bg-green-600 hover:text-white transition"
     href="login.php"
     >Login</a
    >
    <a
     class="px-4 py-2 bg-green-500 text-white rounded-md font-semibold hover:bg-green-600 transition"
     href="signup.php"
     >Signup</a
    >
    <a
    class="block px-4 py-2 bg-green-500 text-white rounded-md font-semibold hover:bg-green-600 transition"
    href="index.php"
    >Contact</a
   >
   </div>
   <button
    aria-label="Toggle menu"
    class="sm:hidden text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500"
    id="mobile-menu-button"
   >
    <i class="fas fa-bars fa-lg"></i>
   </button>
  </nav>
  <!-- Mobile Menu -->
  <div class="hidden bg-gray-900 text-white px-4 py-4 space-y-3 sm:hidden" id="mobile-menu">
   <a
    class="block px-4 py-2 border border-green-500 text-green-500 rounded-md font-semibold hover:bg-green-600 hover:text-white transition"
    href="login.php"
    >Login</a
   >
   <a
    class="block px-4 py-2 bg-green-500 text-white rounded-md font-semibold hover:bg-green-600 transition"
    href="signup.php"
    >Signup</a
   >
   <a
    class="block px-4 py-2 bg-green-500 text-white rounded-md font-semibold hover:bg-green-600 transition"
    href="index.php"
    >Contact</a
   >
  </div>
  <!-- Hero -->
  <section
   class="relative w-full py-24 flex items-center justify-center text-center px-6 sm:px-12 lg:px-20 bg-gradient-to-r from-green-400 to-green-600 overflow-hidden"
  >
   <img
    alt="A vibrant shopping mall with people browsing and colorful store displays"
    class="absolute inset-0 w-full h-full object-cover object-center opacity-30 -z-10"
    height="600"
    loading="lazy"
    src="https://storage.googleapis.com/a1aa/image/dea4f118-6a00-4149-bfe3-c2540dda204f.jpg"
    width="1920"
   />
   <div class="max-w-4xl text-white px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl sm:text-6xl font-extralight mb-4 drop-shadow-lg leading-tight">
     Welcome to Abro's Store
    </h1>
    <span class="text-green-200 font-semibold">Your One-Stop Shop</span>
    <p class="text-lg sm:text-xl mb-10 drop-shadow-md max-w-3xl mx-auto">
     Shop trending items with best prices in Pakistan
    </p>
    <a
     class="inline-block px-8 py-3 bg-white text-green-600 font-semibold rounded-full shadow-lg hover:bg-green-50 transition"
     href="signup.php"
     >Start Shopping</a
    >
   </div>
  </section>
  <!-- Categories -->
  <section class="py-12 bg-white">
   <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
    <h2 class="text-3xl font-semibold text-center mb-10 tracking-wide text-gray-900">
     Explore Categories
    </h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
     <?php foreach ($categories as $cat): ?>
     <div
      aria-label="Category <?= htmlspecialchars($cat['name']) ?>"
      class="category-tile bg-white p-6 rounded-xl shadow-md flex flex-col items-center justify-center cursor-pointer hover:shadow-xl transition"
      role="button"
      tabindex="0"
     >
      <i class="fas fa-tags text-green-500 text-3xl mb-3"></i>
      <h3 class="text-center text-gray-800 font-semibold text-base sm:text-lg select-none">
       <?= htmlspecialchars($cat['name']) ?>
      </h3>
     </div>
     <?php endforeach; ?>
    </div>
   </div>
  </section>
  <!-- Featured Products -->
  <section class="py-12 bg-gray-50">
   <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
    <h2 class="text-3xl font-semibold text-center mb-10 tracking-wide text-gray-900">
     Featured Products
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
     <?php foreach ($products as $p): ?>
     <div
      aria-label="Product <?= htmlspecialchars($p['name']) ?> priced at Rs. <?= number_format($p['price']) ?>"
      class="product-card bg-white rounded-xl shadow-md overflow-hidden flex flex-col hover:shadow-2xl transition"
      tabindex="0"
     >
      <img
       alt="Product image of <?= htmlspecialchars($p['name']) ?>"
       class="w-full h-48 object-cover"
       decoding="async"
       loading="lazy"
       src="uploads/<?= htmlspecialchars($p['image']) ?>"
      />
      <div class="p-4 flex flex-col flex-grow">
       <h3 class="text-lg font-semibold text-gray-900 mb-1 line-clamp-2">
        <?= htmlspecialchars($p['name']) ?>
       </h3>
       <p class="text-green-600 font-bold text-xl mb-2">Rs. <?= number_format($p['price']) ?></p>
       <div class="mb-3">
        <?php if ($p['status'] == 1): ?>
        <span
         class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full"
         >New</span
        >
        <?php else: ?>
        <span
         class="inline-block bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full"
         >Sale</span
        >
        <?php endif; ?>
       </div>
       <a
        class="mt-auto inline-block w-full text-center bg-green-500 text-white py-2 rounded-lg font-semibold hover:bg-green-600 transition"
        href="signup.php"
        >View Details</a
       >
      </div>
     </div>
     <?php endforeach; ?>
    </div>
   </div>
  </section>
  <!-- About Us -->
  <section class="py-16 bg-white">
   <div
    class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20 flex flex-col md:flex-row items-center gap-12"
   >
    <div class="md:w-1/2">
     <img
      alt="A diverse team of people working together in a modern office environment, collaborating and smiling"
      class="rounded-xl shadow-lg w-full object-cover"
      decoding="async"
      height="400"
      loading="lazy"
      src="https://storage.googleapis.com/a1aa/image/253c8d81-058f-4682-5f55-234cba534643.jpg"
      width="600"
     />
    </div>
    <div class="md:w-1/2 space-y-6">
     <h2 class="text-4xl font-bold text-gray-900">About Abro's Store</h2>
     <p class="text-gray-700 text-lg leading-relaxed">
      At Abro's Store, we are passionate about bringing you the best shopping
      experience with a wide range of trending products at unbeatable prices.
      Our mission is to empower customers across Pakistan by providing
      quality, affordability, and exceptional service.
     </p>
     <p class="text-gray-700 text-lg leading-relaxed">
      Founded with the vision to revolutionize e-commerce, our dedicated team
      works tirelessly to curate the latest products and ensure a seamless
      shopping journey. Join us and discover why thousands trust Abro's Store
      for their everyday needs.
     </p>
     <a
      class="inline-block px-8 py-3 bg-green-500 text-white rounded-full font-semibold hover:bg-green-600 transition"
      href="about.php"
      >Learn More</a
     >
    </div>
   </div>
  </section>
  <!-- Contact Us -->
  <section class="py-16 bg-green-50">
   <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
    <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Contact Us</h2>
    <form
     id="contactForm"
     action="contact_submit.php"
     method="POST"
     class="max-w-3xl mx-auto bg-white p-10 rounded-3xl shadow-2xl space-y-8"
     novalidate
    >
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
      <div class="form-group relative">
       <input
        type="text"
        id="name"
        name="name"
        placeholder=" "
        required
        autocomplete="name"
        class="form-input peer"
       />
       <label for="name" class="form-label">Name</label>
       <p class="mt-1 text-sm text-red-600 hidden" id="nameError">Please enter your name.</p>
      </div>
      <div class="form-group relative">
       <input
        type="email"
        id="email"
        name="email"
        placeholder=" "
        required
        autocomplete="email"
        class="form-input peer"
       />
       <label for="email" class="form-label">Email</label>
       <p class="mt-1 text-sm text-red-600 hidden" id="emailError">Please enter a valid email address.</p>
      </div>
     </div>
     <div class="form-group relative">
      <input
       type="text"
       id="subject"
       name="subject"
       placeholder=" "
       required
       class="form-input peer"
      />
      <label for="subject" class="form-label">Subject</label>
      <p class="mt-1 text-sm text-red-600 hidden" id="subjectError">Please enter a subject.</p>
     </div>
     <div class="form-group relative">
      <textarea
       id="message"
       name="message"
       placeholder=" "
       required
       class="form-textarea peer"
      ></textarea>
      <label for="message" class="form-label">Message</label>
      <p class="mt-1 text-sm text-red-600 hidden" id="messageError">Please enter your message.</p>
     </div>
     <button
      type="submit"
      class="w-full bg-green-500 text-white py-4 rounded-3xl font-semibold hover:bg-green-600 transition focus:ring-4 focus:ring-green-300 btn-icon"
     >
      <i class="fas fa-paper-plane"></i> Send Message
     </button>
     <p class="text-center text-green-600 font-semibold hidden" id="successMessage">
      Your message has been sent successfully!
     </p>
     <p class="text-center text-red-600 font-semibold hidden" id="errorMessage">
      Oops! Something went wrong. Please try again later.
     </p>
    </form>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 text-center p-8 mt-12 select-none">
   <p class="mb-2 text-sm sm:text-base">
    © <?= date("Y") ?> Abro's Store. All Rights Reserved.
   </p>
   <p class="text-sm sm:text-base space-x-3">
    <a
     class="text-green-400 hover:text-green-500 transition inline-flex items-center gap-1"
     href="mailto:support@abrostore.com"
     ><i class="fas fa-phone-alt"></i> Contact Us</a
    >
    <a class="text-green-400 hover:text-green-500 transition inline-flex items-center gap-1" href="#"
     ><i class="fab fa-instagram"></i> Instagram</a
    >
   </p>
  </footer>
  <script>
   // Mobile menu toggle
   const menuBtn = document.getElementById("mobile-menu-button");
   const mobileMenu = document.getElementById("mobile-menu");

   menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
   });

   // Contact form validation and submission (basic client-side)
   const form = document.getElementById("contactForm");
   const nameInput = document.getElementById("name");
   const emailInput = document.getElementById("email");
   const subjectInput = document.getElementById("subject");
   const messageInput = document.getElementById("message");

   const nameError = document.getElementById("nameError");
   const emailError = document.getElementById("emailError");
   const subjectError = document.getElementById("subjectError");
   const messageError = document.getElementById("messageError");

   const successMessage = document.getElementById("successMessage");
   const errorMessage = document.getElementById("errorMessage");

   function validateEmail(email) {
    const re =
     /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\\.,;:\s@"]+\.)+[^<>()[\]\\.,;:\s@"]{2,})$/i;
    return re.test(String(email).toLowerCase());
   }

   form.addEventListener("submit", function (e) {
    e.preventDefault();

    let valid = true;

    // Reset errors
    [nameError, emailError, subjectError, messageError].forEach((el) => (el.style.display = "none"));
    successMessage.style.display = "none";
    errorMessage.style.display = "none";

    if (!nameInput.value.trim()) {
     nameError.style.display = "block";
     valid = false;
    }
    if (!emailInput.value.trim() || !validateEmail(emailInput.value.trim())) {
     emailError.style.display = "block";
     valid = false;
    }
    if (!subjectInput.value.trim()) {
     subjectError.style.display = "block";
     valid = false;
    }
    if (!messageInput.value.trim()) {
     messageError.style.display = "block";
     valid = false;
    }

    if (!valid) return;

    // Simulate form submission (replace with actual AJAX or form submit)
    // Here we just show success message after 1 second delay
    successMessage.style.display = "none";
    errorMessage.style.display = "none";

    setTimeout(() => {
     successMessage.style.display = "block";
     form.reset();
    }, 1000);
   });
  </script>
 </body>
</html>