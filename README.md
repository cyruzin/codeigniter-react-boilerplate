# CodeIgniter React Boilerplate

> A CodeIgniter boilerplate with React.

## Installation

Clone the repository and run the command below to install node dependencies.  

```sh
npm install or yarn install
```

After that, configure the project to use with XAMPP or Docker.

## Docker

Make sure that you have Docker and Docker Compose installed in your machine and then run:

```sh
docker-compose up
```

After that, check the project up and running: http://localhost:8080

If you want to change Docker port, go to the "src/util" folder and modify the constants.js file.

## Usage

```sh
yarn or npm run [command]
```

| Command          | Description                                       |
|------------------|---------------------------------------------------|
| `yarn install`   | Install the dependencies                          |
| `yarn run dev`   | Start development mode and watch for file changes |
| `yarn run build` | Generates the minified file ready for production  |

## Create new components

Go to the "src/components" folder, create a new component. Then add it in the app.js file.

Check the "Welcome" controller and the "welcome_message" view as well to see how to load the components.

If is not clear yet, check the "util_helper" for more info.

## Requirements

The project have been tested using the versions below:

- XAMPP Stack / Docker with PHP version 7.4.7
- Node version 12.17
- Yarn version 1.22.4

## Contributing

Fork the repository, modify it and make a pull request.

## License

MIT
