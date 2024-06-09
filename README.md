
**Laravel Project Setup and Migration**

To set up the project and run migrations, follow these steps:

1. Clone the repository to your local machine using `git clone https://github.com/rahulkjdn/laravel_api`
2. Navigate to the project directory using `cd your-project-name`
3. Run `composer install` to install the required dependencies
4. Create a new database and update the `.env` file with the database credentials
5. Update .env and set `QUEUE_CONNECTION=database`
6. Run `php artisan migrate` to run the migrations
7. Run `php artisan server` to start the project
8. Run `php artisan queue:work` in new terminal to start the queue

**Running the API Endpoint**

To test the API endpoint, follow these steps:

1. Send a POST request to `http://localhost:8000/api/submit` with the following parameters:
	* `name`: Required parameter (string)
	* `email`: Required parameter (email)
	* `message`: Required parameter (string)
2. Use a tool like Postman or cURL to send the request
3. Verify that the API returns a successful response with a 200 status code

**API Test Documentation**

The API endpoint is designed to accept three required parameters: `name`, `email`, and `message`. Here is an example of how to test the API endpoint:

### Request Body

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "message": "This is a test message"
}
```

### Request Headers

* `Content-Type`: `application/json`

### Response

* Status Code: 201
* Response Body: `{ "message": "Record added to job successfully!" }`

### Validation

* `name`: Must be a string
* `email`: Must be a valid email address
* `message`: Must be a string

If any of the required parameters are missing or invalid, the API will return an error response with a 400 status code and a JSON body containing an error message.
