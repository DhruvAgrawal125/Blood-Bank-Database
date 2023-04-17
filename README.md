# Blood-Bank-DatabaseRead me:

Project title :  Online Blood Bank










Softwares used:
1)Php
2)MySql
3)HTML
4)CSS
5)XAMP local host
The front end has been built via HTML and CSS for our web application and it has been connected to the local host where our data is stored via Php.


Our sample database has been entered in the local host which will be extracted by the user while logging in.

Modules:
Index.php
Login.php
Home.php
Db_conn.php
Logout.php

The first page is the index page where the user has to show his credentials. On this page the credentials are taken by the user.
Db_conn.php is used to establish the connection with the database.
The login page checks the input credentials from the local host and redirects accordingly.
$sql = "SELECT * FROM users WHERE user_name='$uname' AND password ='$pass'";
$result = mysqli_query($conn, $sql);

Home.php on this page most of our program functionalities take place.
From the username we use an sql query to filter out user details and display them.

Once we have the user name we know his city name and we can use it to filter out the closest blood bank for him using a select query.



The dataset values which we receive in rows can be stored in variables to be displayed further.
Logout.php will return to the index page after destroying the session.








Working:


This is the login page for the user.
On entering Invalid credentials.

Once we access the site.
Our credentials our shown to us.


Our cityname is mentioned here which can be used to find the location of blood banks near me according to the hospital dataset I have provided.

For different users the output fetched will be different.





The logout option at the end of the page will take us back to the Home page.





Conclusion:

"In conclusion, our platform has the ability to increase blood donation rates by providing an easy and accessible way for donors and receivers  to receive  and donate. It also streamlines the process of blood collection and distribution by allowing hospitals and clinics to easily dispay  and receive the blood they need.

The development of our online blood bank highlights the importance of using technology to improve healthcare services. By leveraging the power of the internet, we can overcome the limitations of traditional healthcare systems and provide more efficient and effective care.
In the future, we plan to continue improving our online blood bank by implementing additional features such as personalized donor profiles and real-time inventory tracking.








