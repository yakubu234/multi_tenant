<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f5f5f5; /* Light gray background */
}

.thankyou-container {
    background-color: #fff; /* White background for the content */
    border-radius: 10px; /* Rounded corners */
    padding: 50px; /* Padding for spacing */
    text-align: center; /* Center text alignment */
}

.thankyou-container h1 {
    margin-bottom: 20px; /* Spacing below the heading */
}

.thankyou-container p {
    font-size: 20px; /* Adjust font size as needed */
    margin-bottom: 20px; /* Spacing below the paragraph */
}

.thankyou-container a {
    display: inline-block; /* Display as inline-block for better styling */
    padding: 15px 20px; /* Padding for the button */
    font-size: 18px; /* Adjust font size as needed */
    background-color: #e47425; /* Orange button color */
    color: #fff; /* White text color */
    text-decoration: none; /* Remove underline */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Indicate clickable behavior */
    transition: all 0.2s ease-in-out; /* Add hover transition */
}

.thankyou-container a:hover {
    background-color: #f96700; /* Change button color on hover */
}

    </style>
</head>
<body>
    <section class="thankyou-container">
        <h1>
            <img src="http://montco.happeningmag.com/wp-content/uploads/2014/11/thankyou.png" alt="Thank you">
        </h1>
        <p>Below is the link to the page we created for you:</p>
        <a href="http://{{ $domain }}" target="_blank">{{ $domain }}</a>
    </section>
</body>
</html>
