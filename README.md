# Laravel | React

## Ubuntu/Linux users continue here:

-   Download composer https://getcomposer.org/download/
-   Pull Laravel/php project from git provider.
-   Open the console and cd your project root directory
-   Run Docker Desktop Application.
-   Add a shell alias `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`(optional).
-   Run `sail composer install` or `sail composer.phar install`.
-   Run `sail up -d ` or `./vendor/bin/sail up `to run the server.

Generate data

-   Run `sail artisan migrate:fresh --seed` to create tables

-   Run `sail artisan Test` to test the APIs

## API Documentation

```
Get api/user -> get all users
```

Get /user/{id} -> get user by id

````

```json
{
    "data": {
        "id": "5",
        "attributes": {
            "email": "aric.dickens@johnston.com",
            "name": "Jeanette Windler",
            "ip_address": "102.57.142.51",
            "referrer": "yahoo.com",
            "user_agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/5361 (KHTML, like Gecko) Chrome/39.0.888.0 Mobile Safari/5361",
            "path": [
                {
                    "path": "https://via.placeholder.com/640x480.png/005511?text=animals+aut"
                },
                {
                    "path": "https://via.placeholder.com/640x480.png/00aa55?text=animals+alias"
                },
                {
                    "path": "https://via.placeholder.com/640x480.png/001188?text=animals+eum"
                }
            ]
        }
    }
}
````

```
POST /user -> Create assessment
```

| Parameter               | Type     | Default | Description |
| ----------------------- | -------- | ------- | ----------- |
| `name` (required)       | `String` | `none`  | Name        |
| `email` (required)      | `String` | `none`  | email       |
| `ip_address` (required) | `String` | `none`  | ip address  |

## Front Documentation

-   Go to react directory `cd react`.
-   Run `npm install` and `npm run dev`

## Tools/Tech:

##The static page is divided into three components:

-   Navbar.jsx (Navigation bar)
-   Main.jsx (Banner content)
-   Content.jsx(Image)
    ![Alt text](components-image.jpg?raw=true "Title")

-   I have used plain css media query for responsiveness of the page
-   CSS flex to manipulate the position of the components
-   useState hook for Navigation menu of mobile

Thank you
Regards, Marc Angel
