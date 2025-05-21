<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_setting('site_name'); ?> - Login</title>
    <link rel="shortcut icon" href="<?= base_url().'/' ?>assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    <link rel="stylesheet" href="<?= base_url().'/' ?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?= base_url().'/' ?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?= base_url().'/' ?>assets/compiled/css/auth.css">
    <style>
        :root {
            --primary-color: #9F2840;
            --primary-color-light: #c54258;
            --primary-color-dark: #7e1f33;
        }
        
        body {
            background-color: #f8f9fa;
        }
        
        #auth {
            height: 100vh;
            overflow: hidden;
        }
        
        .auth-container {
            display: flex;
            height: 100%;
        }
        
        .auth-left {
            flex: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-color-dark), var(--primary-color));
            color: white;
        }
        
        .auth-right {
            flex: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
        
        .brand-logo {
            margin-bottom: 2rem;
        }
        
        .auth-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .auth-subtitle {
            opacity: 0.8;
            margin-bottom: 2rem;
            font-size: 1.25rem;
        }
        
        .login-form {
            width: 100%;
            max-width: 400px;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 45px 12px 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(159, 40, 64, 0.25);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-control-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #888;
        }
        
        .btn-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-color-dark) !important;
            border-color: var(--primary-color-dark) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(159, 40, 64, 0.3);
        }
        
        .company-info {
            margin-top: 2rem;
            margin-bottom: 1.5rem;
        }
        
        .company-info h2 {
            color: white;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .company-info p {
            opacity: 0.9;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        .company-feature {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        
        .company-feature i {
            margin-right: 10px;
            font-size: 1.25rem;
        }
        
        @media (max-width: 767px) {
            .auth-container {
                flex-direction: column;
            }
            .auth-left {
                display: none;
            }
            .auth-right {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <script src="<?= base_url().'/' ?>assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="auth-container">
            <div class="auth-left">
                <div class="company-info">
                    <h2>Welcome to <?= get_setting('site_name'); ?></h2>
                    <p>Streamlined ticketing system for efficient business operations.</p>
                    
                    <div class="company-feature">
                        <i class="bi bi-check-circle-fill" style="min-width: 24px; display: inline-block; text-align: center;"></i>
                        <span>Secure management system</span>
                    </div>
                    <div class="company-feature">
                        <i class="bi bi-check-circle-fill" style="min-width: 24px; display: inline-block; text-align: center;"></i>
                        <span>Real-time tracking & updates</span>
                    </div>
                    <div class="company-feature">
                        <i class="bi bi-check-circle-fill" style="min-width: 24px; display: inline-block; text-align: center;"></i>
                        <span>User-friendly interface</span>
                    </div>
                    <div class="company-feature">
                        <i class="bi bi-check-circle-fill" style="min-width: 24px; display: inline-block; text-align: center;"></i>
                        <span>Streamlined workflow</span>
                    </div>
                </div>
            </div>
            
            <div class="auth-right">
                <div class="login-form">
                    <div class="text-center brand-logo">
                        <img width="150" src="<?= base_url() . '/' ?>assets/compiled/logo/logoRaw.png" alt="Logo">
                    </div>
                    
                    <h1 class="auth-title text-center" style="color: var(--primary-color);">Login</h1>
                    <p class="auth-subtitle mb-4 text-center text-muted">Please sign in to continue</p>

                    <?php if(isset($error)): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                    <?php endif; ?>
                    
                    <form action="<?= base_url('auth') ?>" method="post">
                        <div class="form-group position-relative has-icon-right mb-4">
                            <input class="form-control" name="username" type="text" required placeholder="Username">
                            
                        </div>
                        
                        <div class="form-group position-relative has-icon-right mb-4">
                            <input class="form-control" name="password" type="password" required placeholder="Password">
                           
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block shadow-lg mt-4">
                            LOG IN
                        </button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <p class="text-muted small">
                            &copy; <?= date('Y') ?> <?= get_setting('site_name'); ?>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
