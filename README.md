## Laravel Sail Project

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

## API Documentation

```
Get api/user -> get all user
```

```json
{
    "data": [
        {
            "id": "1",
            "attributes": {
                "email": "wintheiser.ashley@wehner.com",
                "name": "Mrs. Karine Cormier DDS",
                "ip_address": "63.138.19.120",
                "referrer": "gmail.com",
                "user_agent": "Mozilla/5.0 (X11; Linux x86_64; rv:7.0) Gecko/20110824 Firefox/37.0",
                "path": [
                    {
                        "path": "https://via.placeholder.com/640x480.png/005544?text=animals+dicta"
                    },
                    {
                        "path": "https://via.placeholder.com/640x480.png/004444?text=animals+dolores"
                    },
                    {
                        "path": "https://via.placeholder.com/640x480.png/0088bb?text=animals+aut"
                    }
                ]
            }
        },
        {
            "id": "2",
            "attributes": {
                "email": "lockman.adrain@gmail.com",
                "name": "Myrl Ratke DVM",
                "ip_address": "154.6.94.230",
                "referrer": "hotmail.com",
                "user_agent": "Mozilla/5.0 (Macintosh; PPC Mac OS X 10_8_4 rv:4.0) Gecko/20130311 Firefox/37.0",
                "path": [
                    {
                        "path": "https://via.placeholder.com/640x480.png/00ee33?text=animals+cupiditate"
                    },
                    {
                        "path": "https://via.placeholder.com/640x480.png/000066?text=animals+aspernatur"
                    },
                    {
                        "path": "https://via.placeholder.com/640x480.png/00ccbb?text=animals+sit"
                    }
                ]
            }
        }
    ]
}
```

```
Get /user/{id} -> get assessment by id
```

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
```

```
POST /user -> Create assessment
```

| Parameter               | Type     | Default | Description |
| ----------------------- | -------- | ------- | ----------- |
| `name` (required)       | `String` | `none`  | Name        |
| `email` (required)      | `String` | `none`  | email       |
| `ip_address` (required) | `String` | `none`  | ip address  |

## Front Documentation

## React Project

## Windows, Mac Os, Ubuntu/Linux users continue here:

-   Go to react directory `cd react`.
-   Run `npm install` and `npm run dev`

Thank you
Regards, Marc Angel
