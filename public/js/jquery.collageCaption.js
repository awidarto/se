/*!
 *
 * jQuery collageCaption Plugin v0.1.0
 * extra for collagePlus plugin
 * https://github.com/ed-lea/jquery-collagePlus
 *
 * Copyright 2012, Ed Lea twitter.com/ed_lea
 *
 * built for http://qiip.me
 *
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 *
 */





;(function( $ ) {


  $.fn.collageCaption = function( options ) {


    // Defaults
    var settings = $.extend( {
        // object that contains the images to collage
        'images'          : $(this).children(),
        // colour for the caption background
        'background'      : "black",
        // opacity for the caption background
        'opacity'         : "0.5",
        // speed of the reveal / hide animation
        'speedin'           : 200,
        'speedout'           : 200,

        'topspeedin'           : 100,
        'topspeedout'           : 100,
        // css class for the caption wrapper
        'class'           : "Caption"
    }, options);

    return this.each(function() {

        /*
        *
        * set up vars
        *
        */

        // track row width
        var row         = 0,
        // collect elements to be resized in current row
            elements    = [];


        settings.images.each(
            function(index){

                /*
                *
                * Cache selector
                *
                */
                var $this = $(this);

                /*
                *
                * Do we need to do anything with captions
                *
                */
                if (typeof $this.data("caption") == 'undefined'){
                    return;
                }

                var margin = $this.css('margin');

                /*
                *
                * The HTML to append to the containing element
                *
                */
                var html = '<div class="' + settings.class + '" style="position:relative;"><div class="Caption_Background" style="background-color:' +
                            settings.background + ';opacity:' +
                            settings.opacity + ';position:relative;top:' + margin +';"></div><div class="Caption_Content" style="position:relative;">' +
                            $this.data("caption") + '</div></div>';

                var thtml = '<div class="Top_' + settings.class + '" style="position:relative;"><div class="Top_Caption_Background" style="background-color:' +
                            settings.background + ';opacity:' +
                            settings.opacity + ';position:relative;"></div><div class="Top_Caption_Content" style="position:relative;">' +
                            $this.data("title") + '</div></div>';

                $this.append(html).append(thtml);

                /*
                *
                * Cache the caption selectors
                *
                */
                var $cap    =  $this.find("." + settings.class),
                    $capbg  =  $this.find(".Caption_Background"),
                    $captxt =  $this.find(".Caption_Content");

                var $topcap    =  $this.find(".Top_" + settings.class),
                    $topcapbg  =  $this.find(".Top_Caption_Background"),
                    $topcaptxt =  $this.find(".Top_Caption_Content");

                /*
                *
                * Calculate the caption height
                *
                */
                var h = $cap.height();

                var th = $topcap.height();

                var ih = $this.height();

                //var topcappos = (parseInt(th) * 2) + parseInt(h) + parseInt(ih) - ( 2 * parseInt(margin));

                var topcappos =  ih + h + th;

                $topcap.css("top", "-" + topcappos + "px").css('display','none');
                $cap.css("top", "-" + h + "px").css('display','none');

                /*
                *
                * Set the background for the caption
                *
                */
                $capbg.height(h);

                $topcapbg.height(th);

                /*
                *
                * Overlap the caption content
                *
                */
                $captxt.css("top", "-" + h + "px");

                $topcaptxt.css("top", "-" + th + "px");


                /*
                *
                * Bind the rollover action to the element
                *
                */
                $this.bind(
                    {
                        mouseenter: function(e) {

                            $cap.animate({ opacity: 'show' }, { duration: settings.speedin, queue: false });
                            $topcap.animate({ opacity: 'show' }, { duration: settings.topspeedin, queue: false });
                        },
                        mouseleave: function(e) {
                            $cap.animate({ opacity: 'hide' }, { duration: settings.speedout, queue: false });
                            $topcap.animate({ opacity: 'hide' }, { duration: settings.topspeedout, queue: false });
                        }
                    }
                );
            }
        );
        return this;
    });



  };
})( jQuery );