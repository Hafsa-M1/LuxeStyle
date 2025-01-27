## E-Commerce Website

This project is a Laravel-based e-commerce website that includes features like product browsing, cart management, checkout, and user authentication. The application is designed to provide a seamless shopping experience while offering essential backend functionalities for managing products, users, and orders.

## Features

- User Features

Home Page: Browse products with pagination.

Product Details: View detailed information about individual products.

- Cart Management:

Add products to the cart.

View cart items with quantities.

Update quantities or remove items.

- Checkout:

Proceed with cart items to checkout.

- Newsletter Subscription:

Subscribe to newsletters.

Authentication

User login and registration.

Secure logout.

- Admin Features

(Not implemented in the current version but can be extended.)

## Technologies Used

## Backend

- Laravel 10

## Frontend

- Blade Templates

- Bootstrap (for styling)

## Database

- MySQL


## API Endpoints

## GET Requests

- Home Page: /

- Product Details: /product/{slug}

- View Cart: /cart

- CSRF Token: /csrf-token

## POST Requests

- Login: /login

- Register: /register

- Add to Cart: /cart/add/{id}

- Checkout: /checkout

- Newsletter Subscription: /newsletter/subscribe

## DELETE Requests

- Remove Item from Cart: /cart/{product_id}

## PUT Requests

- Update Cart Quantity: /cart/{product_id}/update


