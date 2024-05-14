<?php

    session_start();

    if (!isset($_SESSION['agent']) && !isset($_SESSION['client'])) {
        echo "<script>alert('You must login as an agent or client to view this page');</script>";
        echo "<script>window.location.href = '../view/login.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>
    <link rel="stylesheet" href="../design/design_helpandsupport.css">
</head>
<body>

    <header>
        <div class="class">
            <a href="clientdashboard.php"><img src="logos/logo.png" alt="logo"></a>
            <h1>Help and Support</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="properties.html">Properties</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="faq">
        <div class="class">
            <fieldset>
            <h2><b>Frequently Asked Questions</b></h2>
            <div class="faq-item">
                <h3>1. How do I search for properties on your website?</h3>
                <p>You can use the search bar on the homepage to search for properties based on location, price, size, etc.</p>
            </div>
            <div class="faq-item">
                <h3>2. Can I schedule a property viewing?</h3>
                <p>Yes, you can schedule a property viewing by contacting our customer support team or filling out the contact form on our website.</p>
            </div>
            <div class="faq-item">
                <h3>3 .Do you provide assistance for first-time homebuyers?</h3>
                <p>Absolutely! We understand that buying a home for the first time can be overwhelming, and we're here to help. Our team of experienced agents can guide you through every step of the homebuying process, from finding the perfect property to securing financing and closing the deal.</p>
            </div>
            <div class="faq-item">
                <h3>4. What types of properties do you offer?</h3>
                <p>We offer a wide range of properties to suit various needs and preferences, including single-family homes, condominiums, townhouses, apartments, commercial properties, and vacant land. Whether you're looking for a cozy starter home or a luxurious waterfront estate, we have options for you.</p>
            </div>
            <div class="faq-item">
                <h3>5. Are the property listings on your website updated regularly?</h3>
                <p>Yes, we strive to keep our property listings up-to-date to provide our customers with accurate and relevant information. Our team regularly monitors the real estate market and updates our website with new listings, price changes, and other important updates as they occur.</p>
            </div>
            <div class="faq-item">
                <h3>6. How can I get more information about a specific property?</h3>
                <p>If you have questions about a particular property listed on our website, you can click on the listing to view more details, including photos, descriptions, specifications, and contact information for the listing agent. Additionally, you can reach out to our customer support team for further assistance.</p>
            </div>
            <div class="faq-item">
                <h3>7. Do you offer financing options for property buyers?</h3>
                <p>While we do not provide financing directly, we work closely with reputable lenders and financial institutions to help our clients secure financing for their property purchases. Our agents can connect you with trusted mortgage professionals who can assist you in finding the right financing solution for your needs.</p>
            </div>
            <div class="faq-item">
                <h3>8. What should I do if I'm interested in selling my property through your agency?</h3>
                <p>If you're considering selling your property, we would be happy to assist you! Simply reach out to us through our website or contact our office to schedule a consultation with one of our experienced listing agents. We'll provide you with a personalized marketing plan and guide you through the selling process from start to finish.</p>
            </div>
           
        </div>
        
    </section>
    <hr>
    <fieldset>
    <section id="troubleshooting">
        <div class="class">
            <h2>Troubleshooting Guides</h2>
            <div class="guide">
                <h3>1. Unable to login to your account.</h3>
                <p>Solution : If you're having trouble logging in, make sure you're using the correct username and password. If you've forgotten your password, you can reset it using the "Forgot Password" link on the login page.</p>
            </div>
            <div class="guide">
                <h3>2. Property photos not loading.</h3>
                <p>Solution : If property photos are not loading properly, try refreshing the page or clearing your browser's cache. If the issue persists, please contact our support team for assistance.</p>
            </div>
            
            <div class="guide">
                <h3>3. Users are experiencing difficulty logging into their accounts on the website.</h3>
                <p>Solution :
Ensure that you are entering the correct username and password. Check for any typos or incorrect characters.
If you've forgotten your password, use the "Forgot Password" link on the login page to reset it. Follow the instructions sent to your registered email address to create a new password.
Clear your browser's cache and cookies, then try logging in again.</p>
            </div>
            <div class="guide">
                <h3>4. Users encounter error messages or "Page Not Found" errors when navigating the website.</h3>
                <p>Solution : 
Check the URL to ensure it is spelled correctly and matches the intended page or resource.
If clicking on a link results in an error, try navigating to the desired page using the website's navigation menu or search bar instead.
Clear your browser's cache and cookies, then reload the page to see if that resolves the issue.
If the problem persists, contact our technical support team and provide details about the error message or issue you're experiencing for assistance.</p>
            </div>
            <div class="guide">
                <h3>5. Users notice slow loading times or sluggish performance when browsing the website.</h3>
                <p>Solution : 
Check your internet connection speed using online speed testing tools to ensure it meets recommended requirements for browsing.
Close any unnecessary browser tabs or windows that may be consuming system resources and slowing down performance.
Clear your browser's cache and cookies regularly to free up storage space and improve loading times.
If the website continues to load slowly, try accessing it during off-peak hours when server traffic is lower.
Contact our technical support team to report slow performance issues and provide details about your browsing experience for further investigation.</p>
            </div>
        </div>
    </section>
    </fieldset>
<hr>
<fieldset>
    <section id="video-tutorials">
        <div class="class">
            <h2>Video Tutorials</h2>
            <div class="video">
                <h3>How to search for properties</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WE7eh97w9Nk?si=FzUKSeRZ6pc1_BRi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="video">
                <h3>How to schedule a property viewing</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LQWGGUfiAeg?si=ZQpKKqFZ2JwShrsM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    </fieldset>
<hr>
<fieldset>
    <section id="contact">
        <div class="class">
            <h2>Contact Us</h2>
            <p>If you have any further questions or need assistance, feel free to contact us:</p>
            <ul>
                <li>Email  : info@luxuryestate.bd</li>
                <li>Phone  : +8801641621584</li>
                <li>Address: Kuratoli Bazar , Kuril Bisso Road, Dhaka , Bangladesh</li>
            </ul>
        </div>
    </section>
    </fieldset>
<hr>
    <footer>
        <div class="class">
            <p>&copy; 2024 Real Estate Company. All rights reserved.</p>
        </div>
    </footer>
    </fieldset>
</body>
</html>
