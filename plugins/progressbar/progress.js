/*jslint browser: true*/
/*global define, module, exports*/
(function (root, factory) {
    'use strict';
    if (typeof define === 'function' && define.amd) {
        define([], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory();
    } else {
        root.Progress = factory();
    }
}(this, function () {
    'use strict';
    var $w         = window,
        $d         = document,
        $circ      = document.querySelector('.animated-circle'),
        $progCount = document.querySelector('.progress-count'),
        init,
        wh,
        h,
        secOffset,
        sHeight,
        percfix = 0;

    function trigger(eventName) {
        var event = $d.createEvent('HTMLEvents');
        event.initEvent(eventName, true, false);

        $w.dispatchEvent(event);
    }

    function updateProgress(perc) {
        var circle_offset = 94 * perc;

        $circ.style.strokeDashoffset = 94 - circle_offset;

        $progCount.innerHTML = (Math.round(perc * 100) + "%");
    }

    function setSizes() {
        wh = $w.innerHeight;
        secOffset = $('.post_container').offset().top;
        h  = $('.post_container').outerHeight();

        sHeight = h - wh;
    }

    function handler() {
        setSizes();
        trigger('scroll');
    }

    init = function () {
        var events = ['DOMContentLoaded', 'load', 'resize'], top, perc;

        setSizes();

        $w.addEventListener('scroll', function () {
            top  = $(window).scrollTop();
            perc = Math.max(0, Math.min(1, (top-secOffset) / sHeight));

            if (perc > percfix) {
                updateProgress(perc);
                percfix = perc;
            }
            
        }, false);

        events.map(function (event) {
            $w.addEventListener(event, handler, false);
        });
    };

    return {
        init : init
    };
}));