# Jitsi Meet with Timer

This project demonstrates embedding Jitsi Meet video conferencing in a web application and implementing a timer with a call duration limit.

The timer starts when the user joins the video conference and displays the remaining time. When the timer reaches its limit, the call will automatically end.

## Installation

1. Clone the repository
2. Open the index.html file in a web browser or host the files on a web server to access the application.

## Configuration

Edit the index.html file and replace 'somethingspecialgroup' with your desired Jitsi Meet room name or room ID.
Set up the server-side code (store_duration.php) to handle AJAX requests and store the call duration appropriately. Modify the PHP script as per your requirements.

## Usage

Open the web application in a web browser or access it on your web server.
Join a video conference by following the prompts and granting camera/microphone access.
The timer will start automatically, displaying the remaining time for the call.
Once the timer reaches its limit, the call will automatically end.

## License

MIT License

Feel free to modify and customize this project according to your needs.

## Contributing

Contributions are welcome! Fork the repository, make your changes, and submit a pull request.

If you encounter any issues or have suggestions, please open an issue in the repository.

## Acknowledgements

This project utilizes the Jitsi Meet External API for embedding Jitsi Meet video conferencing.

Jitsi Meet: https://meet.jit.si/
Jitsi Meet External API: https://github.com/jitsi/jitsi-meet/blob/master/doc/api.md
