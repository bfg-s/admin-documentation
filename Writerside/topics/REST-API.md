# REST API

This section describes the REST API methods that are available in the admin panel.
To access the REST API, you must use requests with the `Content-Api` and `Content-Layout` headers.
The REST API is available at all addresses that are part of the admin panel.
Each method returns a JSON object:

```json
{
    "meta": {
        "pageTitle": "Dashboard",
        "pageIcon": "fas fa-tachometer-alt",
        "breadcrumbs": [
            {
                "title": "Laravel",
                "url": null
            },
            {
                "title": "Dashboard",
                "url": "https://bfg-admin-6-2.dev/en/bfg/dashboard"
            }
        ]
    },
    "menu": [
        {
            "id": 1745,
            "parent_id": 0,
            "title": "Dashboard",
            "route": "admin.dashboard",
            "icon": "fas fa-tachometer-alt",
            "link": "https://bfg-admin-6-2.dev/en/bfg/dashboard",
            "controller": "Admin\\Controllers\\DashboardController",
            "current_route": "admin.dashboard",
            "action": [
                "Admin\\Controllers\\DashboardController",
                "index"
            ],
            "dontUseSearch": true,
            "selected": true,
            "current": true,
            "target": false,
            "active": true,
            "targetBlank": false
        },
        ...
    ],
    "buttonGroups": [
        ...
    ],
    "contents": [
        ...
    ],
    "query": [],
    "data": [],
    "respond": [],
    "version": "6.4.0"
}
```
