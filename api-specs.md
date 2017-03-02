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
  }
}
```
  
=======================================================================

#### `GET /courses`

###### Response

```js
{
	"courses": [
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
  
=======================================================================

#### `GET /programs`

###### Response

```js
{
	"programs": [
		{
			"id": "12",
			"name": "MSCIT"
		},
		{
			"id": "",
			"name": ""
		}
	]
}
```

=======================================================================

#### `POST /questions`

###### Request

```js
{
	"programId": "12",
	"selectedCourses": [
		"id1", "id2", "id3"
	]
}
```

###### Response

```js
{
	"questions": [
		{
			"id": "",
			"question": ""
		},
		{
			"id": "",
			"question": ""
		}
	]
}
```

=======================================================================

#### `POST /feedback`

###### Request

```js
{
	"feedback": [
		{
			"id": "courseId",
			"name": "courseName",
			"courseFeedback": [
				{
					"id": "",
					"rating": "",
					"note": ""
				},
				{
					"id": "",
					"rating": "",
					"note": ""
				}
			]
		}
	]
}
```

