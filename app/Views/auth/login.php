<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - KlikBelajar Admin Dashboard</title>
    <link rel="stylesheet" crossorigin href="./assets/compiled/css/app.css" />
    <link
        rel="stylesheet"
        crossorigin
        href="./assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" crossorigin href="./assets/compiled/css/auth.css" />
    <style>
        /* Body Background */
        body {
            background: linear-gradient(120deg, #84fab0, #8fd3f4);
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        #auth {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        #auth-left {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .auth-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4CAF50;
        }

        .auth-subtitle {
            color: #555;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            padding: 15px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            width: 100%;
            outline: none;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0px 0px 5px rgba(76, 175, 80, 0.5);
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #4CAF50;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(45deg, #FF6B6B, #FF8E53);
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn:hover {
            background: linear-gradient(45deg, #FF8E53, #FF6B6B);
            box-shadow: 0px 4px 10px rgba(255, 107, 107, 0.3);
        }

        .forgot-password {
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .forgot-password a {
            color: #4CAF50;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div id="auth-left">
            <h1 class="auth-title">Log in</h1>
            <p class="auth-subtitle">Selamat Datang! Silahkan login untuk melanjutkan.</p>
            <form method="POST" action="<?= base_url('auth/login'); ?>">
                <div class="form-group position-relative">
                    <input
                        type="text"
                        class="form-control form-control-xl"
                        name="username"
                        placeholder="Username"
                        required />
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative">
                    <input
                        type="password"
                        class="form-control form-control-xl"
                        name="password"
                        placeholder="Password"
                        required />
                    <div class="form-control-icon">
                        <i class="bi bi-lock"></i>
                    </div>
                </div>
                <button type="submit" class="btn">Log In</button>
            </form>
            <div class="forgot-password">
                <p>Lupa password? <a href="#">Klik di sini</a></p>
            </div>
        </div>
    </div>
</body>

</html>


<?= $this->endSection() ?>