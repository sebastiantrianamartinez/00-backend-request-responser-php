
# Backend Request Responser

The Backend Request Responser is a PHP library that provides a set of utility classes for handling HTTP requests and generating standardized responses. It aims to simplify the development of backend APIs by abstracting common response generation tasks and promoting consistent response formats.

The library promotes clean and maintainable code by encapsulating response logic and promoting code reuse. It is designed to be easily integrated into existing PHP projects and follows best practices for extensibility and modularity.

Whether you are building a RESTful API, web service, or backend application, the Backend Request Responser provides a solid foundation for handling HTTP requests and generating standardized responses efficiently and effectively.

## Features

- Generates system responses with customizable status codes, messages, and data.
- Sends HTTP responses with proper headers and content encoding.
- Supports both JSON and other response formats.
- Facilitates error handling and consistent error responses


## Authors

- [@sebastiantrianamartinez](https://github.com/sebastiantrianamartinez)


## License

[MIT](https://choosealicense.com/licenses/mit/)

# Responser Class - Documentation

The `Responser` class provides utility methods for generating and handling HTTP responses.


## Methods

### `systemResponse($statusCode, $statusMessage, $data)`

Generates a system response with the specified status code, status message, and data.

- **Parameters:**
  - `$statusCode` (int): The HTTP status code.
  - `$statusMessage` (string): The status message.
  - `$data` (mixed): Optional data to include in the response.
  
- **Returns:**
  - An array representing the system response.

### `preformedHttpResponse($objectResponse)`

Prepares and sends an HTTP response based on the provided response object.

- **Parameters:**
  - `$objectResponse` (array): The response object containing the status code, message, data, and signature.

### `httpResponse($code, $message, $data)`

Generates an HTTP response with the specified status code, message, and data.

- **Parameters:**
  - `$code` (int): The HTTP status code.
  - `$message` (string): The response message.
  - `$data` (mixed): Optional data to include in the response.

- **Returns:**
  - None.

Note: The actual implementation details and usage examples are not included in this project description.
