# Infinity Desk
an marketplace app for managing your furniture sels
## Preparation
    To start please configure the environment variables and copy the key 
    - cp .env.example .env
    - php artisan key:generate
    - php artisan migrate:fresh
    - php artisan seed:data // populate database with data
    
### Controllers 
    Theres many kind of controllers in this project
    - AdminDashboard //  handle Admin Dashboard 
    - SellerDashboard // handle Seller Dashboard
    - UserDashboard // Handle User Dashboard
    - Authorization // handle authorization
    - Landing // handle guest and frontend 

### Models

Models explanation

#### User

Represent User, Seller and Admin

#### Promo 

Represent discount , coupon that can decrease purchase of a product

#### Review

Represent score, and review of a product

#### Category

Represent tag or category of a product

#### Change

Represent Change of Model, when changes is made to model we create a snapshot of previous data and changed data

#### Product

a Product

#### Cart 

Represent product that user added to their cart with the spesification of order such as , qty , type, notes and etc.

#### Procurement

Represent purchases or payment made by user when they purchase a product

has User that represent buyer
has Seller that represent seller
has Carts that represent product that purchased, type , color ,quantity, notes and 