## About this project

Backend Technical Exam

- A simple REST API


## Install

Install the composer dependencies

```bash
composer install
```

Context Table Mapping
```php
[Hello, Hi] => Welcome to StationFive.
[Goodbye, bye] => Thank you, see you around.
No Context => Sorry, I don't understand.
```


## Sample Request Body and Response

```text
URL = /api/conversation
```

Request
```json
{
    "conversation_id" : 12121,
    "message" : "adsf there"
}
```

Response
```json
{
    "response_id": 12121,
    "response": "Sorry, I don't understand"
}
```
Request
```json
{
    "conversation_id" : "abcd123",
    "message" : "Hello, I’m John"
}
```
Response
```json
{
    "response_id": "abcd123",
    "response": "Welcome to StationFive."
}
```

## Testing
```bash
vendor/bin/phpunit
```
