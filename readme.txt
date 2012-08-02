Option to remember their credentials, so you don't have to login again and again. Implement a keep me logged in feature. 

http://pbeblog.wordpress.com/2008/02/12/secure-hashes-in-php-using-salt/
http://stackoverflow.com/questions/1354999/keep-me-logged-in-the-best-approach

When they log out. The cookie is destory. The entry in the database is deleted. 

Need to make a form to allow the submissions of rides.

Eventually have a series of 'events' or 'activities' in one table. Then you can record an 'activity', with a time / distance associated to it. 

Table: activities
	ID, name, calories_burned_formula, distance (bool), time (bool), calories_burned
	// Calories burned formula to allow me to work out how many calories a person has burned.
	// Use the formula to calculate the burned calories and store them in the table, to save calculation times in the future. if edited, run the formula again to obtain and accurate figure. 
	// Distance is boolean. If true, then show distance field when submitting.
	// Time field is boolean. If true, then show time field when submitting.

Table: user_activity
	ID, user_id, activity_id, time, distance, date

Put this mobile version on m.bytefish.co.uk

Have an iPhone / iPad Webapp icon produced. Make it look like an application. Sleek transitions. AJAX. Etc.. 

Possibly Javascript Required to use, or else show 'Danger, Danger Will Robinson. Sorry, that might not be your name. In any case, Javascript is required to use this application'. 

Maybe for things like cycling, running etc.. you are able to map out your route (via google maps, like the website elliot uses). This route is also stored in the database and assigned to the user_activity. Tells you your distance, etc.. 

Show activity overview for day / week / fortnight / month.

BMI shown on dashboard. 
Lots of border-radius. Modern colours. Pastels? Similar styling to aTech / twitter bootstrap.

Table: routes
	ID, user_activity_id, route 