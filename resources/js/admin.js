(function ($) {
    $(document).ready(function () {
        // Globals
        window.modal = modal;
        window.alert = notify;

        // App Name
        let appName = $('meta[name="app.name"]').attr('content');
        let csrf = $('meta[name="csrf-token"]').attr('content');

        let appUrl = $('meta[name="app.url"]').attr('content');
        if (appUrl.endsWith('/')) {
            appUrl = appUrl.slice(0, -1);
        }

        const ALERT_DELAY = 8000;

        // Smoke & Loader Init
        let smoke = $("body > .smoked-screen");
        let loader = $("body > .smoked-screen > .loader");
        smoke.addClass('hard-hidden');
        loader.addClass('hard-hidden');

        // Facebook redirect url fix
        if (window.location.hash == '#_=_') {
            window.location.hash = '';
        }

        // Ajax Setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        });

        /* 😀 Greetings 😀 */
        console.log(appName + ' 😀');

        /* Theme Switcher */
        $('#themeSwitcher').on('click', function (e) {
            let darkMode;

            if (isDarkMode()) {
                $('html').removeClass('dark');
                darkMode = 0;
            } else {
                $('html').addClass('dark');
                darkMode = 1;
            }

            $.ajax({
                type: 'PUT',
                url: '/user/set/lighting',
                data: {
                    darkMode: darkMode
                }
            });
        });

        /* Modal Caller */
        $('.modal-on').on('click', function () {
            let classname = "main";

            this.classList.forEach(value => {
                if (value.includes('modal-of-')) {
                    classname = value.replace("modal-of-", "");
                }
            });

            let content =
                $(this).data('content')
                ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam perferendis quo veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum magni natus quis quo.';

            modal(false, content, classname);
        });

        /* Tab Switcher */
        $('.tab-on').on('click', function () {
            let tabNo = $(this).data('tab');
            $(this).parent().find('.tab-on').removeClass('tab-active');
            $(this).addClass('tab-active');
            $(this).parent().parent().find('.tab-body').addClass('hidden');
            $(this).parent().parent().find('.tab-body[data-tab=' + tabNo + ']').removeClass('hidden');
        });

        /* Accordion Switcher */
        $('.accordion-on').on('click', function () {
            let accordion = $(this).parent().find('.accordion-body');

            $('.accordion-body').addClass('hidden');

            accordion.hasClass('hidden') ? accordion.removeClass('hidden') : accordion.addClass('hidden');
        });

        /* Dot Changer */
        $('.dot-group .body > button').on('click', function () {
            let dotElm = $(this).parent().parent().find('[class^=dot-]');
            let classesStr = dotElm.attr("class")
                .replace('dot-to-', 'abcabc-')
                .replace('dot-', 'dot-to-')
                .replace('abcabc-', 'dot-');

            dotElm.attr('class', classesStr);
        });

        // Show Modal
        function modal(html = false, content = '', style = 'main', title = appName) {
            let elm = $('.modal-' + style + ':not(.modal-component-example)');
            let modalOff = $('.modal-' + style + ' .btn-close');

            elm.find('.modal-title').text(title);
            html ? elm.find('.modal-body').html(content) : elm.find('.modal-body').html('<p>' + content + '</p>');

            smoke.removeClass('hard-hidden')
            $('html').css('overflow', 'hidden');
            elm.removeClass('hidden');

            if (modalOff.length) {
                modalOff.click(function () {
                    elm.addClass('hidden');
                    smoke.addClass('hard-hidden');
                });
            } else {
                $(smoke).on('click', function () {
                    elm.addClass('hidden');
                    smoke.addClass('hard-hidden');
                    $('html').css('overflow', 'auto');
                });
            }
        }

        /* Show Alert */
        function notify(content = '', style = 'main', title = '') {
            let elm = $('.alert-' + style + '.hidden');
            let alertOff = $('.alert-' + style + ' .btn-close');

            if (title !== '') elm.find('.alert-title').text(title);
            elm.find('.alert-body').html('<p>' + content + '</p>');

            elm.removeClass('hidden');

            setTimeout(function () {
                if (!$('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)').hasClass('do-not-fade')) {
                    $($('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)')).fadeOut();
                }
            }, ALERT_DELAY);
        }

        /* Alert Closer */
        $('[class^=alert-] .btn-close').on('click', function () {
            $(this).closest($('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)')).hide();
        });

        /* Alert Calmer */
        $('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)')
            .on('mouseover', function () {
                $(this).addClass('do-not-fade');
            })
            .on('mouseout', function () {
                $(this).removeClass('do-not-fade');
                setTimeout(function () {
                    if (!$('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)').hasClass('do-not-fade')) {
                        $($('[class^=alert-]:not(.alert-header):not(.alert-body):not(.alert-footer):not(.alert-title)')).fadeOut();
                    }
                }, ALERT_DELAY);
            });

        /* Card Greeter */
        $('[class^=card-]:not(.card-greeter):not(.card-body):not(.card-footer):not(.card-header)')
            .on('mouseover', function () {
                if (isDarkMode()) {
                    $(this).addClass('text-black').find('.card-greeter').removeClass('anim_scaleDownFull').addClass('anim_scaleFull');
                } else {
                    $(this).addClass('text-white').find('.card-greeter').removeClass('anim_scaleDownFull').addClass('anim_scaleFull');
                }
            })
            .on('mouseleave', function () {
                let currThis = $(this);

                if (isDarkMode()) {
                    $(this).find('.card-greeter').removeClass('anim_scaleFull').addClass('anim_scaleDownFull');
                    setTimeout(function () {
                        currThis.removeClass('text-black');
                    }, 500);
                } else {
                    $(this).find('.card-greeter').removeClass('anim_scaleFull').addClass('anim_scaleDownFull');
                    setTimeout(function () {
                        currThis.removeClass('text-white');
                    }, 500);
                }
            });

        /* Tooltip Appearance */
        $('.tooltip')
            .on('mouseover', function () {
                const VARIABLE_SPACE = 5;
                let box = $(this).find('.tooltip-text');
                let boxProps = box.get(0).getBoundingClientRect();
                let boxWidth = boxProps.width;
                let boxSpace = Math.abs(parseInt(box.css('right')));
                let boxDiff = boxSpace - boxWidth;
                let parentProps = $(this).get(0).getBoundingClientRect();
                let parentWidth = parentProps.width;
                let parentHeight = parentProps.height;

                if (boxProps.right > window.innerWidth - VARIABLE_SPACE) {
                    // ERR
                    /* first try to put left, if not put bellow */
                    box.css('right', parentWidth + boxDiff);
                    boxProps = box.get(0).getBoundingClientRect();

                    if (boxProps.left <= VARIABLE_SPACE) {
                        /* bellow */
                        box.css('left', 0).css('top', parentHeight + boxDiff);
                    }
                }

                box.css('visibility', 'visible').removeClass('anim_fadeOutFast').addClass('anim_fadeInFast');
            })
            .on('mouseout', function () {
                $(this).find('.tooltip-text').removeClass('anim_fadeInFast').addClass('anim_fadeOutFast').css('visibility', 'hidden');
            });

        /* nav bar burger switch by Zvone */
        let mobileSwitch = false;
        $('#menu-burger').on('click', function () {
            if (!mobileSwitch) {
                $('#mobile-nav').removeClass('hidden').addClass('flex');
                $('html').css('overflow', 'hidden');
                mobileSwitch = true;
            } else {
                $('#mobile-nav').addClass('hidden').removeClass('flex');
                $('html').css('overflow', 'auto');
                mobileSwitch = false;
            }
        });
    });
})(jQuery);

function isDarkMode() {
    return document.querySelector('html').classList.contains('dark');
}
