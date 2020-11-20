const electron = require('electron');
const { app, BrowserWindow } = electron;

let mainWindow;

app.on('ready', () => {
    mainWindow = new BrowserWindow({
        width: 1280,
        height: 720
    });

    mainWindow.maximize();

    mainWindow.setTitle('Our Grocery');
    mainWindow.loadURL('https://our-grocery.tk');

    mainWindow.on('closed', () => {
        mainWindow = null;
    });
});