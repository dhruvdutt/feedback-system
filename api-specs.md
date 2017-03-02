## API Specs

#### `POST /login`

###### Request

```js
{
	"id": "",
	"password": "",
	"type": "user"
}
```

###### Response

```js
{
  "status": {
    "code": 200,
    "message": "Authentication successful"
  },
  "data": {
    "access_token": "564b48fbffe96cca728b4567"
}
```
  
=======================================================================

#### `GET /courses`

###### Response

```js
{
	courses: [
		{
			"id": "",
			"name": ""
		},
		{
			"id": "",
			"name": ""
		},
	]
}
```




