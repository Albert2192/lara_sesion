<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page with Lateral Sidebar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #f4f4f4;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            overflow-y: auto;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: #333;
            text-decoration: none;
        }
        .nav-menu {
            list-style: none;
            margin-bottom: auto;
        }
        .nav-item {
            margin-bottom: 1rem;
        }
        .nav-link {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .main-content {
            flex-grow: 1;
            padding: 2rem;
            margin-left: 250px;
        }
        h1 {
            color: #333;
            margin-bottom: 1rem;
        }
        p {
            margin-bottom: 1rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                position: static;
                padding: 1rem;
            }
            .nav-menu {
                display: flex;
                justify-content: space-between;
                margin-bottom: 1rem;
            }
            .nav-item {
                margin-bottom: 0;
            }
            .main-content {
                margin-left: 0;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <a href="#" class="logo">My Website</a>
        <nav>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
        <h1>Welcome to My Website</h1>
        <p>This is a sample home page with a lateral sidebar. The sidebar is fixed on the left side of the screen on larger devices and becomes a top navigation bar on smaller screens for better responsiveness.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Feel free to explore the different sections of the website using the navigation menu in the sidebar. If you have any questions or need assistance, don't hesitate to reach out.</p>
        <a href="#" class="cta-button">Get Started</a>
    </main>
</body>
</html>