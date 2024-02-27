import './bootstrap';

(function ($) {
    $(document).ready(function () {
        // Globals
        window.modal = modal;
        window.alert = notify;

        const ALERT_DELAY = 8000;

        // Smoke & Loader Init
        let smoke = $("body > .smoked-screen");
        let loader = $("body > .smoked-screen > .loader");
        smoke.addClass('hard-hidden');
        loader.addClass('hard-hidden');

        // App Name
        let appName = $('meta[name="app.name"]').attr('content');

        // Ajax Setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* 😀 Greetings 😀 */
        console.log(appName + ' 😀');

        /* Modal Caller */
        $('.modal-on').on('click', function () {
            let classname = "main";

            this.classList.forEach(value => {
                if (value.includes('modal-of-')) {
                    classname = value.replace("modal-of-", "");
                }
            });

            modal(false, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam perferendis quo veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum magni natus quis quo.', classname)
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
            let elm = $('.modal-' + style);
            let modalOff = $('.modal-' + style + ' .btn-close');

            elm.find('.modal-title').text(title);
            html ? elm.find('.modal-body').html(content) : elm.find('.modal-body').html('<p>' + content + '</p>');

            smoke.removeClass('hard-hidden')
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
                $(this).addClass('text-white').find('.card-greeter').removeClass('anim_scaleDownFull').addClass('anim_scaleFull');
            })
            .on('mouseout', function () {
                $(this).removeClass('text-white').find('.card-greeter').removeClass('anim_scaleFull').addClass('anim_scaleDownFull');
            });
    });
})(jQuery);


