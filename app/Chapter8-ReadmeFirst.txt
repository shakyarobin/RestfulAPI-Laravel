Add Chrome extension called postman
- postman rest client
open the post man and type folowing choosing get
 - myownapi.com/makers
 - myownapi.com/vehicles
 - myownapi.com/makers/1 
 it it will return the values in json format within postman

 now try to send the data using post
 - myownapi.com/makers?name=randomName&phone=5454 or so 
 it will show and error called VerifyCsrfToken.

 open kernel.php
 - and comment //'App\Http\Middleware\VerifyCsrfToken', 

 and again type myownapi.com/makers?name=randomName&phone=5454 or so 
 - it will give you and empty response as we have not create store method.