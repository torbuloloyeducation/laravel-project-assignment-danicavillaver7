<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f5f9;
            margin: 0;
        }

        /* Navbar */
        .navbar {
            background: #0f172a;
            padding: 15px 40px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links a {
            color: #e2e8f0;
            margin-left: 20px;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-links a:hover {
            color: #38bdf8;
        }

        /* Card Layout */
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        h1 {
            margin-bottom: 20px;
            color: #0f172a;
        }

        p {
            color: #475569;
        }

        /* Buttons */
        .btn {
            background: #38bdf8;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: #0284c7;
        }

        /* Form */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
        }

        textarea {
            height: 120px;
        }
        .job-card:hover {
            transform: translateY(-3px);
            transition: 0.2s;
        }

        button {
            background: #38bdf8;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        .section-card {
            background: #f8fafc;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            transition: 0.2s;
        }

        .section-card:hover {
        transform: translateY(-3px);
        }

        /* Contact box */
        .contact-info {
            margin-top: 30px;
            padding: 20px;
            background: #f8fafc;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #94a3b8;
        }
    </style>
</head>

<body>
    <div class="job-card" style="background:#f8fafc; padding:20px; border-radius:10px; margin-bottom:15px;">
    <div class="navbar">

        <strong>My Laravel App</strong>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/jobs">Jobs</a>
            <a href="/contact">Contact</a>
            <a href="/dashboard">Dashboard</a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        © 2026 My Laravel App. All rights reserved.
    </footer>

</body>
</html>