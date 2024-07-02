# Login

To log in, you must make a request to the address `/en/bfg/login` using the POST method with the `login` and `password` parameters.
You will receive a response in JSON format:

```json
{
    "status": "success",
    "message": "Success!",
    "bearer": "eyJpdiI6IjNHVTFpSXZGSjdJU1ppK3hmZUg4YlE9PSIsInZhbHVlIjoiMXA3R1JKN01ENnJYRlFVUElWdkJaQT09IiwibWFjIjoiMGIzNGVmMzFhYTFhY2NkOTJjMGQ1Yzc1NWVhMTJlYWZlMTYzZmY0YWRmYzY1MWE5ZDNiNzczYjBhNWNiYjE3OCIsInRhZyI6IiJ9",
    "query": [],
    "data": [],
    "respond": [],
    "version": "6.4.0"
}
```

You will receive a `bearer` token, which must be used to access other REST API methods.
