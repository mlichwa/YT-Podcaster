# YT Podcaster ![CI status](https://img.shields.io/badge/build-passing-brightgreen.svg)

### Overview
YT Podcaster is a Youtube to mp3 converter and podcast feed generator written in PHP and based on youtube-dl library. Right now, the interface is very minimal and consists of two API calls the user has to make in order to convert new files or delete existing ones. Also, this is a self-hosted app, which means that this code needs to be hosted on your server.

### Why YT Podcaster?
I have a few youtube channels I signed up and those are mainly longer interviews where video isn't necessary so I thought that it would be great to have them in my Podcast player. 
There is a service that provides similar functionality called [Podsync](https://podsync.net), but unfortunately doesn't work with Overcast so I had to work on my own solution.

### What's next
For now, this is a very simple API and a podcast feed generator without any UI. I can imagine extending its functionality and making a service out of it... but would need to know if anyone needs a solution like this. 

## Installation

### Requirements
* Linux
* Python 2.7 and up
* PHP 5.4 and up
* youtube-dl
* ffmpeg 

### Server configuration
Before you can do any conversion from youtube video format to mp3, you need to make sure that your server can run PHP and Python. Most modern servers already do so.
In order to extract audio from a youtube file, we use youtube-dl. On Ubuntu, you can install it with wget and then change its permissions so our php app can use it. If you need alternative ways to install it, visit [this page.](https://rg3.github.io/youtube-dl/download.html)
```
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl

sudo chmod a+rx /usr/local/bin/youtube-dl
```

In order to install ffmpeg on Ubuntu, type:
```
sudo apt-get install ffmpeg
```
### App Installation and configuration
In order to install the app, simply drag all files to the location you will be running the app from.

**config.php**- lets you configure your Podcast feed.   
**convert.php**- used to convert video to audio and to delete existing files from the server.   
**index.php**- generates the feed and parses xml.

## Usage
For now, this app is in a form of a self-hosted API. Once installed on your server, it will allow you to convert youtube files into mp3 format and generate an xml feed.

In order to convert a youtube video, you will need its URL. Sample link will look like this:

```
https://yourwebsite.com/ytconverter/convert.php?yt=https://www.youtube.com/watch?v=R7fn_jOzzfY
```
Conversion takes a few seconds so be patient. Sometimes with longer videos you might see a timeout message... but it should all work once you refresh the site.

In order to delete all files:
```
https://yourwebsite.com/ytconverter/convert.php?delete
```

Your feed is already active. If everything is configured properly, you can see it at:
```
https://yourwebsite.com/ytconverter/
```

## Contributions
As much as I would like to claim that all code was written by me, I used a few projects to structure everything and make this demo. After all, this was my weekend project.
- [youtube-dll library](https://github.com/rg3/youtube-dl)
- [Michael Belgium's Youtube-to-mp3-API](https://github.com/MichaelBelgium/Youtube-to-mp3-API)
- [Minimalistic Feed Generator](https://github.com/herrbischoff/screaming-liquid-tiger)


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)