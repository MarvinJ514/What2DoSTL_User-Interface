// Get the modal
var modal = document.getElementById('id01');
            
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function(){
    var introTemplate = $("#intro_template").html();
    Mustache.parse(introTemplate);

    var introRendered = Mustache.render(introTemplate, {
        introduction: [
            {
                description: 'This applications attempts to simply answer the question "What is there to do in STL?" Through personalized preferences this application will attempt to provide results for activities in the St. Louis Area from a continually updated database of events. The database scrapes web accessible event calendars for various types of events and allows users to use one resource in order to find an event that best suits their needs.',
            },
        ],
        show: false
    })
    $("#introduction").html(introRendered);
});

$(document).ready(function(){
    var topChoiceTemplate = $("#Top_template").html();
    Mustache.parse(topChoiceTemplate);

    var topRendered = Mustache.render(topChoiceTemplate, {
        logo: [
            {
                heading:"Movies",
                div_id: "movie",
                aria: "Netflix Logo Link",
                a_id: "linkBlack",
                ref: "https://www.netflix.com",
                img_src: "images/netflix_logo.jpg"
            },
            {
                heading:"Television",
                div_id: "TV",
                aria: "Hulu Logo Link",
                a_id: "linkWhite",
                ref: "https://www.hulu.com",
                img_src: "images/hulu-logo.png"
            },
            {
                heading:"Music",
                div_id: "Music",
                aria: "Spotify Logo Link",
                a_id: "linkWhite",
                ref: "https://www.spotify.com",
                img_src: "images/spotify_logo.jpg"
            },
            {
                heading:"Sports",
                div_id: "Sports",
                aria: "DAZN Logo Link",
                a_id: "linkWhite",
                ref: "https://watch.dazn.com/en-US/sports/",
                img_src: "images/dazn-logo.jpg"
            },
        ],
        show: false
    })
    $("#topChoice_template").html(topRendered);
});