# osteam-static-fullcalendar-test
osteam-static-fullcalendar-test


https://fullcalendar.io/docs/event_data/events_json_feed/

https://fullcalendar.io/docs/resource_data/resources_json_feed/



## DEMO 1 : cal.minedu.cu.cc




## ΜΟΡΦΗ ΕΞΩΤΕΡΙΚΟΥ ERVTHMATOS :
Here is a URL that FullCalendar might visit:

mysite.com/myjsonfeed.php?start=2013-12-01&end=2014-01-12&_=1386054751381



## Add an external JSON event file :
    eventSources: [

        // your event source
        {
            url: 'myjsonfeed.php', // use the `url` property
            type: 'GET',
            color: 'yellow',    // an option!
            textColor: 'black'  // an option!
        }

        // any other sources...

    ], 




## myjsonfeed.php :
```php

echo '[
    
    {
        
        "title": "Τμήμα JSON1 -Πληροφορική - Ρεστάκης",
        "id": "821",
        "end": "2017-06-16T18:00:00",
        "start": "2017-06-16T18:00:00",
         "color": "RED",
         "textColor": "white",
		"description": "Αιθουσα 9"

    },
    
    {
        
        "title": "Τμήμα JSON2 -Κ.Ε.Α. - Σαφίδης",
        "id": "821",
        "end": "2017-06-12T18:00:00",
        "start": "2017-06-12T18:00:00",
         "color": "RED",
         "textColor": "white",
		"description": "Αιθουσα 9"
    }
]';

```

