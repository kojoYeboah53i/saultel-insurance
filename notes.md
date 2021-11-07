	## first create a helper class for pagination on collections

	-  go to AppServiceProviders 
	- edit the boot method
	- blade file should have indexing for the pagination a common syntax is {{ !! items->render() !! }}