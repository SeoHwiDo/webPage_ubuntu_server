var videos =
[
 ["media/Clannad/1/01.mp4",
 "media/Clannad/1/02.mp4",
 "media/Clannad/1/03.mp4",
 "media/Clannad/1/04.mp4",
 "media/Clannad/1/05.mp4",
 "media/Clannad/1/06.mp4",
 "media/Clannad/1/07.mp4",
 "media/Clannad/1/08.mp4",
 "media/Clannad/1/09.mp4",
 "media/Clannad/1/10.mp4",
 "media/Clannad/1/11.mp4",
 "media/Clannad/1/12.mp4",
 "media/Clannad/1/13.mp4",
 "media/Clannad/1/14.mp4",
 "media/Clannad/1/15.mp4",
 "media/Clannad/1/16.mp4",
 "media/Clannad/1/17.mp4",
 "media/Clannad/1/18.mp4",
 "media/Clannad/1/19.mp4",
 "media/Clannad/1/20.mp4",
 "media/Clannad/1/21.mp4",
 "media/Clannad/1/22.mp4",
 "media/Clannad/1/23.mp4",
 "media/Clannad/1/24.mp4"],
 [
 "media/Clannad/2/01.mp4",
 "media/Clannad/2/02.mp4",
 "media/Clannad/2/03.mp4",
 "media/Clannad/2/04.mp4",
 "media/Clannad/2/05.mp4",
 "media/Clannad/2/06.mp4",
 "media/Clannad/2/07.mp4",
 "media/Clannad/2/08.mp4",
 "media/Clannad/2/09.mp4",
 "media/Clannad/2/10.mp4",
 "media/Clannad/2/11.mp4",
 "media/Clannad/2/12.mp4",
 "media/Clannad/2/13.mp4",
 "media/Clannad/2/14.mp4",
 "media/Clannad/2/15.mp4",
 "media/Clannad/2/16.mp4",
 "media/Clannad/2/17.mp4",
 "media/Clannad/2/18.mp4",
 "media/Clannad/2/19.mp4",
 "media/Clannad/2/20.mp4",
 "media/Clannad/2/21.mp4",
 "media/Clannad/2/22.mp4",
 "media/Clannad/2/23.mp4",
 "media/Clannad/2/24.mp4",]
];

function changeVid(n,m){
    var video = document.getElementById('video');
	video.setAttribute("src", videos[n][m]);
    video.load();
}
