
# excel
 - composer require maatwebsite/excel
 - php artisan make:export UsersExport --model=User




##  features
- the mobile view should be on a subdomain "m.insuranceplus.com" the idea is to have two separate applications, one specifically for the desktop with responsive width and alignments and a different app for the mobile devices and tablets. this way he can limit features on the small devices as well as have rich quality user experience on both desktop and mobile.
  
## data schema
 - all users (users)
 - admin     ( superAdmin .e.g company)
 - client     (admin, .e.g GlicoInsurace,  )
 - Service p  (serviceProviders .e.g hospitals, )
 - Agent       (InsuranceAgent)
 - end client  (benefactor)
 - payment visa and mobile  ``` back log ```
 - orders    (end user bill for hospital or car insurance)
 - collections  (passbook where the agents collect the payment on the field)
   ``` have a simulated passbook version for agents to display claims on the admin portal``` 

## two apps with one db
- insurancePlus has superAdmin, partner and service providers but users and agents table are being developed with another application. Now we have to work around building a web application that has two separate applications feeding from the same database and rendering a single unified user-experience. Julius the project lead thinks I should created the same tables(agents and users)  as he has in his database and form relationships with the them so that the superAdmin can delete a user added by a partner and partners can delete users and agents. agents can also delete users. this way we would have a database cluster online with a collection that has these relationships so the application in production can query the database from anywhere. 

## users table
  id name firstname lastname email password  `` done ``

## script functions
 - forget password 
 - form validation
  

## pass the data from the api through a resource



## add partner 
 
 - name
 - email
 - location

## view partner 
-  paginated data
  
  # after they login
 - profile 

  # map
 - get api keys
 - show specific lat and lon for each health facility 
 - show a big map show all the health facilities across the country on the map 


# edit health facility
- button redirects to a page with the columns for editing the data
  in the past i did this with ajax call and getting the specific health facility with an ID
  which means this has to go through and api