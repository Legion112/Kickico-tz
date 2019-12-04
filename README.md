Need to implement the Laravel composer package to receive JSON encoded data stored in
a predefined format.

Acceptance criteria:
1. The client should be defined as a service in a bundle config.
1. The client should use the PSR-7 implementation of Guzzle as the transport layer.
1. Baseurl, timeouts and other settings of the client should be defined in the config file,
that can be published in the application by laravel publish mechanism.
1. Properly defined exceptions should be thrown on CURL errors, malformed JSON
response, and error JSON response, also errors should be logged.
1. All service dependencies should be resolved with DiC.
1. Code should be covered by phpunit/behat/codecaption tests.

Optional:
1. Requests should be processed through message queues.
1. Client usage example built with docker-compose tool.

JSON success response format:
```
{
 ""data": {
   suggestions": [
     {
       "region": "Москва",
       "value": "г Москва, ул Лубянка Б., д 12",
       "coordinates": {
         "geo_lat": "55.7618518",
         "geo_lon": "37.6284306"
       }
     },
     ...
   ]
 },
 "success": true
}
```

```
JSON error response format:
{
 "data": [
   {
   "code": 1020,
   "message": "Access forbidden"
   },
   ...
 ],
 "success": false
}
```