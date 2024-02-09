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
- table user
```
id*
name
email
password
```
- table product
```
id*
name
price
stock
category_id (reference : category)
```
- table category
```
id*
name
```
- table order
```
id*
customer_name
created_at
```
- table order_detail
```
id*
order_id (reference : order)
product_id (reference : product)
quantity
price
```
## END POINT
authentication 

- Register http request :

```
get: /register
post: /register
```

- Login http request :

```
get    /login
post   /login
```

- Logout http request :

```
get /logout
```

- Dashboard http request :

```
#auth (login)

get    /
get    /dashboard


```

- Product http request :

```
#auth (login)

get    /products
get    /products/{id}
get    /products/add
post   /products/add
post   /products/edit
get    /products/delete/{id}

```


- Category http request :

```
#auth (login)

get     /categories
get     /categories/{id}
get     /categories/add
post    /categories/add
post    /categories/edit
get     /categories/delete/{id}
```
<hr>

- Order
Http request :

```
#auth (login)

get     /orders
get     /corders/{id}
get     /categories/add
post    /categories/add
```

## INTERFACE
- login
![img.png](README/img.png)
- register
![img_1.png](README/img_1.png)
- dashboard
![img_2.png](README/img_2.png)
- product
![img_3.png](README/img_3.png)
- category
![img_4.png](README/img_4.png)

