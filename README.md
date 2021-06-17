<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Instalation
The project is based on **PHP 7.3.28** you need to have run the following commands:
1. Update packages ```sudo apt-get update```
2. Install composer ```sudo apt-get install composer```
3. Install what you need with composer```composer install```
4. Run migration to create app-8i tables in database ```php artisan migrate```
5. Run seeder to populate the state tables in the database ```php artisan db:seed```


## Pruebas de funcionalidad

Todos los servicios requieren de **token** formato JWT firmado con issuer `https://auth.chileatiende.gob.cl` para retornar datos, de lo contrario retorna _No Autorizado_

> The request and parameters that are detailed next, were used in the DEVELOPMENT environment to carry out tests.  
The fields with "" (double quotes) like ***string***, fields without quotes like ***numerical***, and those that contain square brackets [] like ***array***.  
Finally the variable ***{host}*** corresponds to the main path of each endpoint, example: (direccionServidor.gob.cl:7504/stj/v1/).


### **GET Orders**

Get list of orders

When making the request:
```bash
curl --location --request GET 'http://{host}orders?search=Bonnie Waters&orderBy=id&type=DESC&perPage=5' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "current_page": 1,
            "data": [
                {
                    "id": 1,
                    "name": "Ms.",
                    "description": "Ab accusantium nihil quod sint qui non minus. Minus vitae illum recusandae laborum quo sed.",
                    "discount": 64,
                    "total": 6771,
                    "user_id": 1,
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "user": {
                        "id": 1,
                        "name": "Bonnie Waters",
                        "email": "corkery.tony@example.net",
                        "email_verified_at": "2021-06-17T03:33:49.000000Z",
                        "created_at": "2021-06-17T03:33:49.000000Z",
                        "updated_at": "2021-06-17T03:33:49.000000Z"
                    },
                    "shipping_address": {
                        "id": 8,
                        "direction": "Porter Corner",
                        "department": "658",
                        "number": 21966,
                        "commune": "Skileschester",
                        "region": "Hawaii",
                        "order_id": 1,
                        "created_at": "2021-06-17T03:33:52.000000Z",
                        "updated_at": "2021-06-17T03:33:52.000000Z"
                    },
                    "products": [
                        {
                            "id": 1,
                            "name": "Prof.",
                            "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati.",
                            "stock": 30,
                            "isPublic": 1,
                            "price": 10.46,
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "order_id": 1,
                                "product_id": 1,
                                "price": 30,
                                "quantity": 50
                            }
                        },
                        {
                            "id": 3,
                            "name": "Dr.",
                            "description": "Nesciunt velit repudiandae dolorem. Consequatur sit aut incidunt. Ut temporibus fugiat quo architecto ut vero quia adipisci.",
                            "stock": 27,
                            "isPublic": 1,
                            "price": 35.04,
                            "created_at": "2021-06-17T03:33:50.000000Z",
                            "updated_at": "2021-06-17T03:33:50.000000Z",
                            "pivot": {
                                "order_id": 1,
                                "product_id": 3,
                                "price": 38,
                                "quantity": 2
                            }
                        }
                    ]
                }
            ],
            "first_page_url": "http://127.0.0.1:8000/orders?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http://127.0.0.1:8000/orders?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/orders?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http://127.0.0.1:8000/orders",
            "per_page": "5",
            "prev_page_url": null,
            "to": 1,
            "total": 1
        }
    }
```


### **GET Order**

Get data from an order

When making the request:
```bash
curl --location --request GET 'http://{host}orders/1' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "id": 1,
            "name": "Ms.",
            "description": "Ab accusantium nihil quod sint qui non minus. Minus vitae illum recusandae laborum quo sed.",
            "discount": 64,
            "total": 6771,
            "user_id": 1,
            "created_at": "2021-06-17T03:33:49.000000Z",
            "updated_at": "2021-06-17T03:33:49.000000Z",
            "user": {
                "id": 1,
                "name": "Bonnie Waters",
                "email": "corkery.tony@example.net",
                "email_verified_at": "2021-06-17T03:33:49.000000Z",
                "created_at": "2021-06-17T03:33:49.000000Z",
                "updated_at": "2021-06-17T03:33:49.000000Z"
            },
            "shipping_address": null,
            "products": [
                {
                    "id": 1,
                    "name": "Prof.",
                    "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati.",
                    "stock": 30,
                    "isPublic": 1,
                    "price": 10.46,
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "pivot": {
                        "order_id": 1,
                        "product_id": 1,
                        "price": 30,
                        "quantity": 50
                    }
                },
                {
                    "id": 3,
                    "name": "Dr.",
                    "description": "Nesciunt velit repudiandae dolorem. Consequatur sit aut incidunt.",
                    "stock": 27,
                    "isPublic": 1,
                    "price": 35.04,
                    "created_at": "2021-06-17T03:33:50.000000Z",
                    "updated_at": "2021-06-17T03:33:50.000000Z",
                    "pivot": {
                        "order_id": 1,
                        "product_id": 3,
                        "price": 38,
                        "quantity": 2
                    }
                }
            ]
        }
    }
```

### **GET Products**

Get list of Products

When making the request:
```bash
curl --location --request GET 'http://{host}products?search=Prof.&orderBy=id&type=DESC&perPage=5' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "current_page": 1,
            "data": [
                {
                    "id": 1,
                    "name": "Prof.",
                    "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati. Et consequuntur aut delectus libero numquam. Eligendi error reiciendis est repudiandae.",
                    "stock": 30,
                    "isPublic": 1,
                    "price": 10.46,
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "categories": [
                        {
                            "id": 1,
                            "name": "Dawson Herzog",
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "product_id": 1,
                                "category_id": 1
                            }
                        },
                        {
                            "id": 2,
                            "name": "Haylee Orn",
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "product_id": 1,
                                "category_id": 2
                            }
                        }
                    ]
                },
                {
                    "id": 7,
                    "name": "Prof.",
                    "description": "Qui nostrum deleniti labore et cupiditate. Qui fugiat sunt inventore dolorem ipsa. Atque cumque ea commodi eum consequatur. Ut aut rerum vero. Provident velit sint sapiente vel fugiat.",
                    "stock": 25,
                    "isPublic": 1,
                    "price": 35.38,
                    "created_at": "2021-06-17T03:33:50.000000Z",
                    "updated_at": "2021-06-17T03:33:50.000000Z",
                    "categories": []
                },
                {
                    "id": 9,
                    "name": "Prof.",
                    "description": "Voluptates cupiditate ad non. Id ad officia eos delectus cumque dolor eveniet. Quibusdam consequatur sed magni. Voluptatem rem quis mollitia placeat amet. In et molestiae reprehenderit vitae ex ipsam repellendus.",
                    "stock": 20,
                    "isPublic": 0,
                    "price": 48.72,
                    "created_at": "2021-06-17T03:33:51.000000Z",
                    "updated_at": "2021-06-17T03:33:51.000000Z",
                    "categories": [
                        {
                            "id": 3,
                            "name": "Mr. Hardy Stanton",
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "product_id": 9,
                                "category_id": 3
                            }
                        }
                    ]
                }
            ],
            "first_page_url": "http://127.0.0.1:8000/products?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http://127.0.0.1:8000/products?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/products?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http://127.0.0.1:8000/products",
            "per_page": "5",
            "prev_page_url": null,
            "to": 3,
            "total": 3
        }
    }
```


### **GET Product**

Get data from an Product

When making the request:
```bash
curl --location --request GET 'http://{host}products/1' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "id": 1,
            "name": "Prof.",
            "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati.",
            "stock": 30,
            "isPublic": 1,
            "price": 10.46,
            "created_at": "2021-06-17T03:33:49.000000Z",
            "updated_at": "2021-06-17T03:33:49.000000Z",
            "categories": [
                {
                    "id": 1,
                    "name": "Dawson Herzog",
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "pivot": {
                        "product_id": 1,
                        "category_id": 1
                    }
                },
                {
                    "id": 2,
                    "name": "Haylee Orn",
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "pivot": {
                        "product_id": 1,
                        "category_id": 2
                    }
                }
            ]
        }
    }
```


### **GET Categories**

Get list of Categories

When making the request:
```bash
curl --location --request GET 'http://{host}categories?search=Dawson Herzog&orderBy=id&type=DESC&perPage=5' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "current_page": 1,
            "data": [
                {
                    "id": 1,
                    "name": "Dawson Herzog",
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "products": [
                        {
                            "id": 1,
                            "name": "Prof.",
                            "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati.",
                            "stock": 30,
                            "isPublic": 1,
                            "price": 10.46,
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "product_id": 1,
                                "category_id": 1
                            }
                        },
                        {
                            "id": 2,
                            "name": "Ms.",
                            "description": "Aut rerum aut in qui et perspiciatis. Sint voluptate natus aperiam nemo expedita dolores reiciendis.",
                            "stock": 23,
                            "isPublic": 0,
                            "price": 32.34,
                            "created_at": "2021-06-17T03:33:49.000000Z",
                            "updated_at": "2021-06-17T03:33:49.000000Z",
                            "pivot": {
                                "product_id": 1,
                                "category_id": 2
                            }
                        }
                    ]
                }
            ],
            "first_page_url": "http://127.0.0.1:8000/categories?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http://127.0.0.1:8000/categories?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/categories?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http://127.0.0.1:8000/categories",
            "per_page": "5",
            "prev_page_url": null,
            "to": 1,
            "total": 1
        }
    }
```


### **GET Category**

Get data from an Category

When making the request:
```bash
curl --location --request GET 'http://{host}category/1' \
```

_must return:_ 

`HTTP STATUS 200 OK` 
  ```json 
    {
        "status": "ok",
        "data": {
            "id": 1,
            "name": "Dawson Herzog",
            "created_at": "2021-06-17T03:33:49.000000Z",
            "updated_at": "2021-06-17T03:33:49.000000Z",
            "products": [
                {
                    "id": 1,
                    "name": "Prof.",
                    "description": "Numquam dolores eligendi et ipsam ut molestiae corporis. Ipsa hic voluptatem ea fugit perspiciatis minima occaecati.",
                    "stock": 30,
                    "isPublic": 1,
                    "price": 10.46,
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "pivot": {
                        "product_id": 1,
                        "category_id": 1
                    }
                },
                {
                    "id": 2,
                    "name": "Ms.",
                    "description": "Aut rerum aut in qui et perspiciatis. Sint voluptate natus aperiam nemo expedita dolores reiciendis.",
                    "stock": 23,
                    "isPublic": 0,
                    "price": 32.34,
                    "created_at": "2021-06-17T03:33:49.000000Z",
                    "updated_at": "2021-06-17T03:33:49.000000Z",
                    "pivot": {
                        "product_id": 1,
                        "category_id": 2
                    }
                }
            ]
        }
    }
```
