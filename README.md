#GROUPR

GROUPR is a platform that allows users to browse, create, and manage events. It provides a user-friendly interface for finding exciting events and creating new ones. This README file provides an overview of the project, installation instructions, usage guidelines, testing information, limitations, future enhancements, acknowledgments, and contact details.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Testing](#testing)
- [Limitations](#limitations)
- [Future Enhancements](#future-enhancements)
- [Acknowledgments](#acknowledgments)
- [License](#license)

## Features

  - Browse events: Users can view a list of events, filter them by date range, and see event details.
  - Create events: Users can create new events by providing event name, description, date, time, and location.
  - My Events: Users can view and manage events they have created, including editing and deleting events.
  - User Authentication: User registration and login functionality to access personalized features.
  - Responsive Design: The website is optimized for various screen sizes, including desktop and mobile devices.
  
## Technologies Used

  - The following technologies were used in the development of the Website:
  - HTML5 and CSS3: Markup and styling of web pages.
  - JavaScript: Client-side scripting for interactive functionality.
  - PHP: Server-side scripting for handling form submissions and database operations.
  - MySQL: Database management system for storing and retrieving event data.
  - Bootstrap: CSS framework for responsive design and UI components.
  
## Installation

  1. Clone the repository to your local machine: git clone https://github.com/Yaj-t/EventWebsite.git
  2. Create a new MySQL database for the project.
  3. Import the provided SQL dump file (events.sql) into your database to set up the required tables and sample data.
  4. Update the database configuration in config.php with your database credentials.
  5. Deploy the project to a web server or run it locally using a local development environment like XAMPP, WAMP, or MAMP.
 
## Usage

  - Access the Website through a web browser by visiting the URL where you deployed the project.
  - Register a new user account or log in if you already have one.
  - Browse events: Explore the available events, filter them by date range, and view event details.
  - Create events: Click on the "Create Event" link in the navigation bar to open the event creation form. Fill in the required details and submit the form to     create a new event.
  - My Events: Access the "My Events" page to view and manage the events you have created. You can edit event details, delete events, and view event-specific actions.

## Testing

  The Website can be tested using various methods. It is recommended to perform both manual and automated testing to ensure the functionality and user  experience of the website. Here are some testing scenarios to consider:
  - User Registration and Login: Test the registration process by creating new user accounts and logging in with valid credentials. Verify that the user authentication system works as expected.
  - Event Creation: Test the event creation process by submitting the event creation form with different inputs. Ensure that events are created correctly and stored in the database.
  - Browse Events: Verify that events are displayed correctly in the event listing page. Test the event filtering functionality by selecting different date ranges.
  - Edit and Delete Events: Test the ability to edit and delete events. Ensure that changes are saved correctly and deleted events are removed from the database.
  - Responsive Design: Test the website on different devices and screen sizes to ensure that the layout and user interface are responsive and provide a seamless experience.
    
## Limitations

  The current version of the Website has the following limitations:
  - The search functionality is limited to filtering events by date range. Additional search options, such as by location or category, could be implemented in future versions.
  - The event editing and deletion features are only available to the user who created the event. Collaborative event management among multiple users could be considered for future enhancements.
  - The user interface design and styling can be further improved to enhance the overall visual appeal and user experience of the website.4
  
## Future Enhancements

  The Website can be further enhanced with additional features and improvements. Some potential ideas for future development include:
  - Event Categories: Implement a categorization system to classify events into different categories for better organization and searchability.
  - Event RSVP: Allow users to RSVP to events they are interested in attending, providing event organizers with a better understanding of attendance.
  - Event Reminders: Implement a notification system to send event reminders to users before the event date.
  - Social Sharing: Integrate social media sharing functionality to allow users to share events on their social media platforms.
  - User Profiles: Enhance user profiles with additional information and customization options.
  - Event Recommendations: Implement a recommendation system that suggests events to users based on their interests and past activities.
  
## Acknowledgments

  We would like to acknowledge the contributions of the development team and express gratitude to the project advisors and mentors.

## License

  This project is licensed under the [MIT License](LICENSE) - see the [LICENSE](LICENSE) file for details.

## Author

Yaj-t


