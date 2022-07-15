#Kitchen API

-[Kitchen API](#vsc-api) -[AUTH](#auth) -[Register](#register) -[Register Request](#register-request) -[Register Response](#register-response) -[Login](#login) -[Login Request](#login-response) -[Login Response](#login-response)

@host = https://localhost:8000

@id = 1

## Auth

## Register

```js
POST {{host}}/auth/register
```

#### Register Request

```json
{
  "name": "John Doe",
  "email": "johndoe@gmail.com",
  "username": "jDoe",
  "phone_numer": "+1234567890",
  "address": "remote",
  "password": "1234567890",
  "confirm": "1234567890"
}
```

#### Register Response

```js
200 OK
```

```json
{
  "session-id": "d89c2d9a-eb3e-4075-95ff-b920b55aa104",
  "firstName": "John",
  "lastName": "Doe",
  "email": "johndoe@gmail.com",
  "token": "eyjhb..hbbQ"
}
```

## Login

```js
POST {{host}}/auth/login
```

#### Login Request

```json
{
  "id": "d89c2d9a-eb3e-4075-95ff-b920b55aa104",
  "firstName": "John",
  "lastName": "Doe",
  "email": "johndoe@gmail.com",
  "token": "eyjhb..hbbQ"
}
```

#### Login Response

```js
200 OK
```

```json
{
  "id": "d89c2d9a-eb3e-4075-95ff-b920b55aa104",
  "email": "johndoe@gmail.com",
  "password": "1234567890",
  "token": "eyjhb..hbbQ"
}
```

## Product

```js
GET {{host}}/products
```

```js
GET {{host}}/search
```

```js
GET {{host}}/single-product/{id}
```

```js
POST {{host}}/single-product/{id}
```

```js
POST {{host}}/add-cart/{id}
```


## Admin

```js
GET {{host}}/products
```

```js
post {{host}}/admin/uploadproduct
```

```js
GET {{host}}/admin/showproduct
```

```js
POST {{host}}/admin/single-product/{id}
```

```js
POST {{host}}/admin/add-cart/{id}
```
