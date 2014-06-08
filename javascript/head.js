window.userid = "";
window.buttons =  {"musicClicked":1, "documentClicked":0 };

function fixedEncodeURIComponent(str){
    return encodeURIComponent(str).replace(/[!'()]/g, escape).replace(/\*/g, "%2A");
}

$(document).ready(function() {
	$('body').load(function() {
		$('#searchbox').focus();
	});

	$("#musicButton").click(function() {
		$('#music_types').css('display','inline');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','none');
		$('#image_types').css('display','none');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("none").removeClass("current");

		
		$('#searchbox').focus();

		window.searchType = "music";
		buttons.musicClicked = 1;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 0;
		buttons.imageClicked = 0;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 0;
	});
	
	$("#documentButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','inline');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','none');
		$('#image_types').css('display','none');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("none").removeClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "document";
		buttons.musicClicked = 0;
		buttons.documentClicked = 1;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 0;
		buttons.imageClicked = 0;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 0;
	});
	
	$("#archiveButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','inline');
		$('#video_types').css('display','none');
		$('#image_types').css('display','none');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("none").removeClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "archive";
		buttons.musicClicked = 0;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 1;
		buttons.videoClicked = 0;
		buttons.imageClicked = 0;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 0;
	});
	
	
	$("#videoButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','inline');
		$('#image_types').css('display','none');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("none").removeClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "video";
		buttons.musicClicked = 0;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 1;
		buttons.imageClicked = 0;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 0;
	});


	$("#imageButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','none');
		$('#image_types').css('display','inline');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("none").removeClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "image";
		buttons.musicClicked = 0;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 0;
		buttons.imageClicked = 1;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 0;
	});
	
	
	
	$("#androidButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','none');
		$('#image_types').css('display','none');
		$('#android_types').css('display','inline');
		$('#torrent_types').css('display','none');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("current");
		$('#torrentButton').addClass("none").removeClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "android";
		buttons.musicClicked = 0;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 0;
		buttons.imageClicked = 0;
		buttons.androidClicked = 1;
		buttons.torrentClicked = 0;
	});
	
	
	$("#torrentButton").click(function() {
		$('#music_types').css('display','none');
		$('#document_types').css('display','none');
		$('#archive_types').css('display','none');
		$('#video_types').css('display','none');
		$('#image_types').css('display','none');
		$('#android_types').css('display','none');
		$('#torrent_types').css('display','inline');

		$('#musicButton').addClass("none").removeClass("current");
		$('#documentButton').addClass("none").removeClass("current");
		$('#archiveButton').addClass("none").removeClass("current");
		$('#videoButton').addClass("none").removeClass("current");
		$('#imageButton').addClass("none").removeClass("current");
		$('#androidButton').addClass("none").removeClass("current");
		$('#torrentButton').addClass("current");
		
		$('#searchbox').focus();
		
		window.searchType = "torrent";
		buttons.musicClicked = 0;
		buttons.documentClicked = 0;
		buttons.archiveClicked = 0;
		buttons.videoClicked = 0;
		buttons.imageClicked = 0;
		buttons.androidClicked = 0;
		buttons.torrentClicked = 1;
	});	
	
});

