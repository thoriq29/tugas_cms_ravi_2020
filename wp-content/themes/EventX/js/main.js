const $ = jQuery;

$(document).ready(function(){
    // jssor init
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 4,
                $SpacingX: 4,
                $SpacingY: 4,
                $Orientation: 2,
                $Align: 0
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 810);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
    jssor_1_slider_init();

    // write code here

    $('body').on('mouseenter', '.img-wrapper', function(){
        const id = $(this).data('artist')
        const music = $(`audio#music-${id}`)[0]
        music.play()
    })

    $('body').on('mouseleave', '.img-wrapper', function(){
        const id = $(this).data('artist')
        const music = $(`audio#music-${id}`)[0]
        music.pause()
        music.currentTime = 0;
    })

    // countdown

    function countdown(){
        let day = parseInt($('span#days').html().split(' ')[0])
        let hour = parseInt($('span#hours').html().split(' ')[0])
        let minute = parseInt($('span#minutes').html().split(' ')[0])
        let second = parseInt($('span#seconds').html().split(' ')[0])


        second -= 1
        if(second === 0){
            second = 59
            minute -= 1

            if(minute === 0){
                minute = 59
                hour -= 1

                if(hour === 0){
                    hour = 23
                    day -= 1

                    if(day === 0 && hour === 0 && minute === 0 && second === 0){
                        console.log('Event is began or Event was finished')
                    }
                }
            }
        }

        $('span#days').html(day + ' Days |')
        $('span#hours').html(hour + ' Hours |')
        $('span#minutes').html(minute + ' Minutes |')
        $('span#seconds').html(second + ' Seconds')
    }

    setInterval(() => {
        countdown()
    }, 1000)

})