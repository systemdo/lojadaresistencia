var magicJSAddEventMethod = 'je1';
    if(typeof(magicJS.Doc.je1) == 'undefined') magicJSAddEventMethod = 'jAddEvent';

var magicToolboxLinks = [];
$mjs(window)[magicJSAddEventMethod]('DOMContentLoaded', function() {
    
    magictoolboxBindSelectors();
})

selectorClass = 'mz-thumb-selected active-selector';

function magictoolboxBindSelectors() {
    
    var magic360Container = document.getElementsByClassName('m360container')[0];
    var videoSelectors = document.getElementsByClassName('video-selector');
    if (typeof(idimg) !== "undefined") {
        var mainImageContainer = document.getElementById(idimg); //id sets in module.php
    } else {
        return;
    }
    
    
     var container = document.getElementById('MagicToolboxSelectors'+productId);
    if(container) {
        var aTagsArray = Array.prototype.slice.call(container.getElementsByTagName('a'));
        for(var i = 0; i < aTagsArray.length; i++) {
            if(aTagsArray[i].getElementsByTagName('img').length) {
                magicToolboxLinks.push(aTagsArray[i]);
            }
        }
    }
    
       
       
    
    
    if(magic360Container || videoSelectors.length) {


        loadVimeoJSFramework = function() {
            //NOTE: to avoid multiple loading
            if(typeof(arguments.callee.loadedVimeoJSFramework) !== 'undefined') {
                return;
            }
            arguments.callee.loadedVimeoJSFramework = true;

            //NOTE: load vimeo js framework
            if(typeof(window.$f) == 'undefined') {
                var firstScriptTag = document.getElementsByTagName('script')[0],
                    newScriptTag = document.createElement('script');
                newScriptTag.async = true;
                newScriptTag.src = 'https://secure-a.vimeocdn.com/js/froogaloop2.min.js';
                firstScriptTag.parentNode.insertBefore(newScriptTag, firstScriptTag);
            }
        }

        loadYoutubeApi = function() {
            //NOTE: to avoid multiple loading
            if(typeof(arguments.callee.loadedYoutubeApi) !== 'undefined') {
                return;
            }
            arguments.callee.loadedYoutubeApi = true;

            //NOTE: load youtube api
            if(typeof(window.YT) == 'undefined' || typeof(window.YT.Player) == 'undefined') {
                var firstScriptTag = document.getElementsByTagName('script')[0],
                    newScriptTag = document.createElement('script');
                newScriptTag.async = true;
                newScriptTag.src = 'https://www.youtube.com/iframe_api';
                firstScriptTag.parentNode.insertBefore(newScriptTag, firstScriptTag);
            }
        }

        pauseYoutubePlayer = function(iframe) {
            if(typeof(arguments.callee.youtubePlayers) === 'undefined') {
                arguments.callee.youtubePlayers = {};
            }
            var id = iframe.getAttribute('id');
            if(id && typeof(arguments.callee.youtubePlayers[id]) != 'undefined') {
                arguments.callee.youtubePlayers[id].pauseVideo();
                return;
            }
            var player = new window.YT.Player(iframe, {
                events: {
                    'onReady': function(event) {
                        event.target.pauseVideo();
                    }
                }
            });
            id = iframe.getAttribute('id');
            arguments.callee.youtubePlayers[id] = player;
            return;
        }


        function stopCurrentVideo() {
                var iframe = $('.magicActiveVideo iframe')[0];

                if (iframe !== undefined) {

                        var activeVideoType = $(iframe).attr('data-video-type');

                        if(activeVideoType == 'vimeo') {
                    var vimeoPlayer = window.$f(iframe);
                    if(vimeoPlayer) {
                        vimeoPlayer.api('pause');
                    }
                } else if(activeVideoType == 'youtube') {
                    pauseYoutubePlayer(iframe);
                }
                $('.magicActiveVideo').removeClass('magicActiveVideo');
            }
        }


        var magicToolboxSelectors =  $('.MagicToolboxSelectorsContainer a');
        var switchFunction = function(e) {
            
            var objThis = e.target || e.srcElement;
            
            if(objThis.tagName.toLowerCase() == 'img') {
                objThis = objThis.parentNode;   
            }
            if (magic360Container) {
                var isMagic360Visible = magic360Container.style.display != 'none';
                var isThisMagic360Selector = objThis.href.match(/360icon/);
            }
            var isThisVideo = $(objThis).attr('data-video-type');

                if (isThisVideo !== undefined) { //if video selector clicked
                        if (isThisVideo == 'youtube') {
                                loadYoutubeApi();
                        } else if (isThisVideo == 'vimeo') {
                                loadVimeoJSFramework();
                        }
                        var videoId = $(objThis).attr('data-magic-slide-id');
                        $('.magicActiveVideo').hide();
                        
                        mainImageContainer.style.display = 'none';
                        if (magic360Container) {
                            magic360Container.style.display = 'none';
                        }

                        
                        stopCurrentVideo();


                        $('#'+videoId).addClass('magicActiveVideo');
                        $('#'+videoId).show();
                        if (typeof(MagicScroll) != "undefined") {
                            MagicScroll.resize();
                        }

                        
                        if (magic360Container) {
                                $mjs(magicToolboxSelectors[0]).jRemoveClass(selectorClass);
                        }
                        for(var k = 0; k < magicToolboxSelectors.length; k++) { 
                    $mjs(magicToolboxSelectors[k]).jRemoveClass(selectorClass);
                }

                $mjs(objThis).jAddClass(selectorClass);
                        

                } else {
                        $('.video-selector').removeClass(selectorClass);
                        $('.magicActiveVideo').hide();
                        stopCurrentVideo();
                        if (typeof(MagicScroll) != "undefined") {
                            MagicScroll.resize();
                        }
                }

                
            if(isThisMagic360Selector && !isMagic360Visible && isThisVideo === undefined) { //click on 360 selector action
                mainImageContainer.style.display = 'none';
                magic360Container.style.setProperty ("display", "inline-block");
                for(var k = 0; k < magicToolboxSelectors.length; k++) { 
                    $mjs(magicToolboxSelectors[k]).jRemoveClass(selectorClass);
                }
                
                $mjs(magicToolboxSelectors[0]).jAddClass(selectorClass);

            } else if(isMagic360Visible && !isThisMagic360Selector && isThisVideo === undefined) { //click on zoom selector after 360
                
                magic360Container.style.setProperty ("display", "none");
                mainImageContainer.style.display = 'inline-block';
                
                mainImageContainer.style.position = 'relative'; 
                mainImageContainer.style.left = 'initial';
                
                $mjs(objThis).jAddClass(selectorClass);
                $mjs(magicToolboxSelectors[0]).jRemoveClass(selectorClass);
                
            } else if (isThisVideo === undefined) { //justShowZoom
                mainImageContainer.style.display = 'inline-block';
                
                mainImageContainer.style.position = 'relative'; 
                mainImageContainer.style.left = 'initial';
                
                $mjs(objThis).jAddClass(selectorClass);
            }

            if(mainImageContainer.className.match(new RegExp('(?:\\s|^)MagicZoom(?:\\s|$)'))) {

                MagicZoom.switchTo('MagicZoomImage_Main', objThis); //switch image
             
            }
            return false;
        };


        if(mainImageContainer.className.match(new RegExp('(?:\\s|^)MagicZoom(?:\\s|$)'))) {
            var switchEvent = (magictoolboxEvent == 'click' ? 'btnclick' : magictoolboxEvent);
        }
        
        for(var j = 0; j < magicToolboxSelectors.length; j++) {
            if (magic360Container) {
                if ($mjs(magicToolboxSelectors[j]).href.match(/360icon/)) {
                    $mjs(magicToolboxSelectors[j]).jAddClass(selectorClass);
                } else {
                    $mjs(magicToolboxSelectors[j]).jRemoveClass(selectorClass);
                }
            }
            if(mainImageContainer.className.match(new RegExp('(?:\\s|^)MagicZoom(?:\\s|$)'))) {
                $mjs(magicToolboxSelectors[j])[magicJSAddEventMethod](switchEvent+' tap', switchFunction, 1);
            }
        }
    }
}