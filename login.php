<?php
session_start();
require_once "config/db.php";

$message = '';

if (isset($_POST['login'])) {
    $db = new Database();
    $conn = $db->connect();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['name'] = $user['name'];

        if ($user['role'] === 'admin') {
            header("Location: admin/dashboard.php");
        } else {
            header("Location: customer/home.php");
        }
        exit();
    } else {
        $message = '<div class="alert alert-danger mt-3 text-center">❌ Invalid email or password!</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <title>
   Login - Abro Store
  </title>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <style>
   body,
    html {
      height: 100%;
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background-color: #f7f7f7;
      overflow-x: hidden;
    }

    .background-container {
      position: fixed;
      inset: 0;
      z-index: 0;
      overflow: hidden;
    }

    .background-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.6) saturate(1.1);
      transition: transform 0.6s ease;
      will-change: transform;
    }

    .background-container:hover img {
      transform: scale(1.07);
    }

    .container-center {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1.5rem;
      position: relative;
      z-index: 10;
    }

    .glass-form {
      background: rgba(255, 255, 255, 0.9);
      padding: 3rem 2.5rem;
      border-radius: 16px;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      backdrop-filter: saturate(180%) blur(25px);
      -webkit-backdrop-filter: saturate(180%) blur(25px);
      border: 1px solid rgba(255, 255, 255, 0.35);
      transition: box-shadow 0.3s ease;
    }

    .glass-form:hover,
    .glass-form:focus-within {
      box-shadow: 0 25px 50px rgba(37, 99, 235, 0.5);
    }

    .glass-form h3 {
      text-align: center;
      margin-bottom: 2rem;
      font-weight: 700;
      font-size: 1.875rem;
      color: #1e40af;
      user-select: none;
    }

    .form-label {
      font-weight: 600;
      color: #334155;
      user-select: none;
    }

    .form-control {
      border-radius: 12px;
      border: 2px solid #cbd5e1;
      padding: 0.75rem 1rem;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: inset 0 1px 3px rgb(0 0 0 / 0.1);
    }

    .form-control:focus {
      border-color: #2563eb;
      box-shadow: 0 0 8px rgba(37, 99, 235, 0.6);
      outline: none;
      background-color: #f0f9ff;
    }

    .btn-custom {
      background-color: #2563eb;
      color: white;
      border: none;
      border-radius: 12px;
      padding: 0.75rem 0;
      font-weight: 700;
      font-size: 1.125rem;
      box-shadow: 0 8px 15px rgba(37, 99, 235, 0.3);
      transition: background-color 0.3s ease, box-shadow 0.3s ease,
        transform 0.15s ease;
      user-select: none;
    }

    .btn-custom:hover,
    .btn-custom:focus {
      background-color: #1e40af;
      box-shadow: 0 12px 20px rgba(30, 64, 175, 0.6);
      transform: translateY(-2px);
      outline: none;
    }

    .btn-custom:active {
      transform: translateY(0);
      box-shadow: 0 6px 10px rgba(30, 64, 175, 0.4);
    }

    .alert {
      font-weight: 600;
      font-size: 0.9rem;
      color: #b91c1c;
      background-color: #fee2e2;
      border-radius: 8px;
      padding: 0.75rem 1rem;
      margin-bottom: 1rem;
      text-align: center;
      user-select: none;
    }

    p.mt-3 {
      font-size: 0.9rem;
      color: #475569;
      user-select: none;
    }

    p.mt-3 a {
      color: #2563eb;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    p.mt-3 a:hover,
    p.mt-3 a:focus {
      color: #1e40af;
      outline: none;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .glass-form {
        padding: 2rem 1.5rem;
        border-radius: 14px;
        max-width: 100%;
      }

      .glass-form h3 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
      }

      .btn-custom {
        font-size: 1rem;
        padding: 0.65rem 0;
      }
    }
  </style>
 </head>
 <body>
  <div aria-hidden="true" class="background-container">
   <img alt="Modern retail store interior with shelves filled with various colorful products, bright lighting, and a welcoming atmosphere" height="1080" src="https://storage.googleapis.com/a1aa/image/3f2d1872-77c7-4320-91bd-ccf79c4b18b9.jpg" width="1920"/>
  </div>
  <div class="container-center">
   <div aria-label="Login form for Abro Store" class="glass-form" role="main" tabindex="-1">
    <h3>
     🔐 Login to Abro Store
    </h3>
    <?php if (!empty($message)) {
        echo $message;
      } ?>
    <form method="POST" novalidate="">
     <div class="mb-4">
      <label class="form-label" for="email">
       Email address
      </label>
      <input aria-describedby="emailHelp" aria-required="true" autocomplete="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="" type="email"/>
     </div>
     <div class="mb-5">
      <label class="form-label" for="password">
       Password
      </label>
      <input aria-required="true" autocomplete="current-password" class="form-control" id="password" name="password" placeholder="Enter your password" required="" type="password"/>
     </div>
     <button aria-label="Login to Abro Store" class="btn btn-custom w-100" name="login" type="submit">
      Login
     </button>
    </form>
    <p class="mt-3 text-center">
     Don't have an account?
     <a class="focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 rounded" href="signup.php">
      Sign up
     </a>
    </p>
   </div>
  </div>
 </body>
</html>
