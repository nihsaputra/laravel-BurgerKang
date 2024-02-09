## About BurgerKang

BurgerKang adalah aplikasi kasir yang dibuat menggunakan Laravel 10, php dan bootstrap.
Terdapat featur :
- Login
- Register
- Product [CRUD]
- Category [CRUD]
- Order [CRUD]
- Report [CRUD]

## ERD
user
```
id*
name
email
password
```
product
```
id*
name
price
stock
category_id (reference : category)
```
category
```
id*
name
```
order
```
id*
customer_name
created_at
```
order_detail
```
id*
order_id (reference : order)
product_id (reference : product)
quantity
price
```
## END POINT
register

<p>Http request :</p>

```
get: /register
post: /register
```
<hr>

login
<p>Http request :</p>

```
get    /login
post   /login
```
<hr>

logout
<p>Http request :</p>

```
get /logout
```
<hr>

product
<p>Http request :</p>

```
get    /products
get    /products/{id}
get    /products/add
post   /products/add
post   /products/edit
get    /products/delete/{id}

```
<hr>

category
<p>Http request :</p>

```
get     /categories
get     /categories/{id}
get     /categories/add
post    /categories/add
post    /categories/edit
get     /categories/delete/{id}
```
<hr>

Order
<p>Http request :</p>

```
get     /orders
get     /corders/{id}
get     /categories/add
post    /categories/add
```
