# Create4Life

Create4Life is the website for a charity that supports children in remote and underserved communities. It tells the charity's story, shows its work and makes it simple for supporters to donate and for the team to confirm every donation.

## Business idea

Children in isolated villages are often cut off from good education and stay trapped in poverty. Create4Life runs programmes that teach these children and connect them to opportunities beyond their community. The website helps the charity raise and manage the money that funds this work:

- **Tell the story** — about, gallery and contact pages show the mission and its impact ("It's time for a better help").
- **Collect donations** — supporters donate and upload proof of payment.
- **Build trust** — admins review and confirm each payment, so every donation is accounted for.
- **Grow a community** — visitors subscribe for updates.

## Key features

- Public pages: home, about, gallery, donations and contact
- Donation flow with payment proof upload
- Newsletter subscription and contact messages
- Admin login with:
  - payment review, confirmation and updates
  - transactions overview
  - settings and password change
- Email sending with PHPMailer
- Animated, responsive design

## Tech stack

- **Backend:** PHP
- **Database:** MySQL
- **Email:** PHPMailer
- **Frontend:** HTML, CSS, Bootstrap, jQuery, Owl Carousel, Slick, AOS, WOW.js

## Project structure

```
index.php, about.php, gallery.php, donations.php, contact.php   # Public pages
admin.php, adminLogin.php, payments.php, transactions.php        # Admin area
ajax/                                                             # Payment, message and subscription endpoints
includes/                                                         # Database connection and shared layout
phpmailer/                                                        # Email sending
```

## Getting started

1. Install a PHP and MySQL stack such as XAMPP.
2. Copy the project into your web server folder.
3. Create the MySQL database and update `includes/connect.php`.
4. Configure your email settings in `phpmailer/`.
5. Open the site in your browser.
