<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        footer {
            background-color: rgba(255, 255, 255, 0.8); /* Background transparan */
            position: relative;
            text-align: center;
            font-size: 14px;
        }
        .footer-content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        .footer-overlay {
    
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0); /* Overlay transparan */
            padding: 20px;
            z-index: 0;
        }
        footer nav ul {
            list-style-type: none;
            padding: 0;
        }
        footer nav ul li {
            display: inline;
            margin: 0 10px;
        }
        footer .social-media a {
            margin: 0 10px;
        }
        footer .social-media img {
            width: 32px;
            height: 32px;
        }
        footer .contact-info,
        footer .additional-links,
        footer .newsletter-subscription {
            margin: 10px 0;
        }
        footer .newsletter-subscription form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        footer .newsletter-subscription input[type="email"] {
            margin-right: 10px;
            padding: 5px;
            font-size: 14px;
        }
        footer .newsletter-subscription button {
            padding: 5px 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <main>
        <center>
            <!-- Main content goes here -->
        </center>    
    </main>
    <footer>
        <div class="footer-overlay"></div>
        <div class="footer-content">
            <h6>&copy; 2024 | KELOMPOK YUDHAWWW</h6>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="social-media">
                <a href="https://www.facebook.com/yourprofile"><img src="../gambar/fb.png" alt="Facebook"></a>
                <a href="https://www.twitter.com/yourprofile"><img src="../gambar/tw.png" alt="Twitter"></a>
                <a href="https://www.instagram.com/yourprofile"><img src="../gambar/instagram-icon.png" alt="Instagram"></a>
            </div>
            <div class="contact-info">
                <p>Email: info@kelompokayudhawa.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
            <div class="additional-links">
                <a href="#privacy-policy">Privacy Policy</a> |
                <a href="#terms-of-service">Terms of Service</a>
            </div>
            <div class="newsletter-subscription">
                <form action="/subscribe" method="post">
                    <label for="email">Subscribe to our newsletter:</label>
                    <input type="email" id="email" name="email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>
