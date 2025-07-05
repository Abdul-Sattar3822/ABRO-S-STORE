<?php
require_once "config/db.php";
session_start();

$message = '';
if (isset($_POST['submit'])) {
    $db = new Database();
    $conn = $db->connect();

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'];

    // Check if email already exists
    $check = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $check->bindParam(':email', $email);
    $check->execute();

    if ($check->rowCount() > 0) {
        $message = '<div class="alert alert-danger">❌ Email already registered!</div>';
    } else {
        // Image handling
        $image = '';
        if (!empty($_FILES['image']['name'])) {
            $image = time() . "_" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
        }

        $sql = "INSERT INTO users (name, email, password, role, image) 
                VALUES (:name, :email, :password, :role, :image)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':image', $image);

        if ($stmt->execute()) {
            $message = '<div class="alert alert-success">✅ Signup successful!</div>';
        } else {
            $message = '<div class="alert alert-danger">❌ Signup failed!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup - Abro Store</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
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

        .form-container {
            position: relative;
            z-index: 10;
            max-width: 480px;
            margin: 60px auto 60px auto;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            padding: 2.5rem 2rem;
            backdrop-filter: saturate(180%) blur(25px);
            -webkit-backdrop-filter: saturate(180%) blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.35);
            transition: box-shadow 0.3s ease;
        }

        .form-container:hover,
        .form-container:focus-within {
            box-shadow: 0 25px 50px rgba(37, 99, 235, 0.5);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-family: "Segoe UI", sans-serif;
            font-weight: 900;
            font-size: 1.875rem;
            color: #1e40af;
            user-select: none;
        }

        .form-floating > input,
        .form-floating > select,
        .form-control {
            border-radius: 12px;
            border: 2px solid #cbd5e1;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: inset 0 1px 3px rgb(0 0 0 / 0.1);
            background-color: white;
        }

        .form-floating > input:focus,
        .form-floating > select:focus,
        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 8px rgba(37, 99, 235, 0.6);
            outline: none;
            background-color: #f0f9ff;
        }

        label {
            font-weight: 600;
            color: #334155;
            user-select: none;
        }

        .btn-primary {
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

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #1e40af;
            box-shadow: 0 12px 20px rgba(30, 64, 175, 0.6);
            transform: translateY(-2px);
            outline: none;
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 6px 10px rgba(30, 64, 175, 0.4);
        }

        p.text-center {
            font-size: 0.9rem;
            color: #475569;
            user-select: none;
        }

        p.text-center a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        p.text-center a:hover,
        p.text-center a:focus {
            color: #1e40af;
            outline: none;
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            .form-container {
                margin: 40px 1rem 40px 1rem;
                padding: 2rem 1.5rem;
                border-radius: 14px;
                max-width: 100%;
            }

            h3 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                
            }

            .btn-primary {
                font-size: 1rem;
                padding: 0.65rem 0;
            }
        }
    </style>
</head>
<body>
    <div aria-hidden="true" class="background-container">
        <img alt="Trendy modern shopping mall interior with stylish decor, bright lights, and shoppers browsing colorful products" height="1080" src="https://storage.googleapis.com/a1aa/image/4b60059e-7daa-48c9-b70a-aaf36e20535c.jpg" width="1920" />
    </div>

    <div class="form-container" role="main" aria-label="Sign up form for Abro Store" tabindex="-1">
        <h3>📝 Create an Account</h3>

        <?= $message ?>

        <form action="" method="POST" enctype="multipart/form-data" novalidate>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name" autocomplete="name" />
                <label for="name">Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email" autocomplete="email" />
                <label for="email">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" required placeholder="Password" autocomplete="new-password" />
                <label for="password">Password</label>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-select" id="role" required>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Upload Profile Picture (optional)</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*" />
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100" aria-label="Create Account">
                Create Account
            </button>
        </form>

        <p class="text-center mt-3">
            Already have an account? <a href="login.php">Login</a>
        </p>
    </div>
</body>
</html>