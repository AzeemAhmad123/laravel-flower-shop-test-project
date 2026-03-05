# Understanding HTTP for Backend Engineers

## Introduction
When we open a website or use an app, our browser and the server communicate with each other.

This communication happens using a protocol called HTTP (HyperText Transfer Protocol).

HTTP is one of the most important concepts for backend engineers because every API request, web page, and data exchange depends on it.

In this blog, we will understand the basic ideas behind HTTP in very simple words.

## 1️⃣ Core Ideas of HTTP

There are two main ideas behind the HTTP protocol:
- Stateless
- Client–Server Model

These two ideas explain how HTTP communication works between a browser and a server.

## 2️⃣ Client–Server Model

HTTP follows a client–server architecture.

### Client

The client is usually:
- A browser
- A mobile application
- An API consumer

The client starts the communication by sending a request to the server.

The request contains information such as:
- URL of the resource
- Headers
- Authentication tokens
- Other request data

### Server

The server hosts resources like:
- Websites
- APIs
- Data
- Files

When the server receives a request, it processes it and sends a response back.

The response may contain:
- A web page
- JSON data
- Text data
- Error message

In HTTP communication, the client always starts the request and the server sends the response.

## 3️⃣ Stateless Nature of HTTP

HTTP is a stateless protocol.

Stateless means:
- The server does not remember previous requests.
- Each request is treated as a completely new request.

Because of this, every request must include all the required information like:
- Authentication tokens
- Session information
- Headers
- Request data

### Benefits of Stateless Design

**Simplicity**
The server does not need to store session information for every user.

**Scalability**
Since the server does not store state, it becomes easier to scale systems and handle many requests.

To maintain continuity (like login sessions), developers often use:
- Cookies
- Sessions
- Tokens

## 4️⃣ HTTP vs HTTPS

HTTP and HTTPS work in the same way.

The difference is security.
HTTPS is a secure version of HTTP.

It uses:
- Encryption
- TLS security
- Certificates

This protects the communication between the client and the server.

So when we see:
`https://example.com`

It means the communication is encrypted and secure.

## 5️⃣ HTTP Headers

HTTP headers carry extra information about a request or response.

They help the client and server understand how the request should be processed.
Headers are very flexible and HTTP allows new headers to be added easily.

This makes HTTP highly extensible.
Headers also act like a remote control that allows the client to send instructions or preferences to the server.

### Common Request Headers

- **User-Agent**: Tells the server which browser or application is making the request.
- **Authorization**: Used for authentication like tokens or API keys.
- **Cookies**: Stores session information.
- **Accept**: Tells the server what type of response the client prefers.
  Example: `Accept: application/json`

### General Headers

Some headers are used for general purposes.
Examples include:
- Date
- Cache-Control
- Connection

### Representation Headers

These headers describe the content of the response.
Examples:
- **Content-Length**: Size of the response.
- **Content-Encoding**: Shows if the content is compressed.
- **ETag**: A unique identifier for a resource, often used for caching.

### Security Headers

Some headers help improve security.
Examples include:
- Strict-Transport-Security (HSTS)
- Content-Security-Policy (CSP)
- X-Frame-Options
- X-Content-Type-Options
- Set-Cookie

## 6️⃣ HTTP Methods

HTTP methods represent different actions a client can request from the server.

Each method describes the intent of the request.

Common HTTP methods include:
- **GET**: Used to retrieve data.
- **POST**: Used to create new data.
- **PUT**: Used to update a resource.
- **PATCH**: Used to partially update a resource.
- **DELETE**: Used to remove a resource.
- **OPTIONS**: Used to check the capabilities of a server.

## 7️⃣ Idempotent vs Non-Idempotent Methods

Another important idea in HTTP methods is idempotency.

### Idempotent Methods
Calling these methods multiple times produces the same result.
Examples:
- GET
- PUT
- DELETE

### Non-Idempotent Methods
Calling these methods multiple times may create different results.
Example:
- POST (Each POST request may create a new resource)

## 8️⃣ CORS (Cross-Origin Resource Sharing)

Browsers follow something called the Same-Origin Policy.

This means a web page can normally make requests only to the same domain from which it was loaded.

Example: `example.com`
A page loaded from this domain cannot directly request data from: `api.anotherexample.com`

This restriction exists for security reasons.
To allow cross-domain communication, servers use CORS.
CORS allows servers to specify who can access their resources.

### Types of CORS Requests

#### Simple Requests
Simple requests include methods like:
- GET
- POST
- HEAD

If the server allows the origin, the request succeeds.
Otherwise, the browser blocks it.

#### Preflight Requests
Some requests require a preflight check.

This happens when:
- The method is PUT or DELETE
- Custom headers are used
- Special content types are used

In this case, the browser sends an OPTIONS request first.
The server responds with headers describing what is allowed.
Then the actual request is sent.

![HTTP Overview](./images/http.png)

## Final Thoughts

HTTP is the foundation of communication between browsers and servers.

Understanding these basic ideas helps backend engineers build better APIs and systems.

When we understand how HTTP works, we start designing applications in a more structured and professional way.

In the next part, we will explore:
- HTTP response status codes
- caching
- compression
- content negotiation
- persistent connections
