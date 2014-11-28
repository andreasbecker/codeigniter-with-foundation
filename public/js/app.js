/*
|----------------------------------------------------------------------------------------------
|
|  PROJECT NAME
|  Author: KOPFMUNTER, Andreas Becker
|  Author URL: http://kopfmunter.de/
|
|----------------------------------------------------------------------------------------------
*/



(function($) {

	$(document).foundation();

    var Project = {

        init: function(config) {
            Project.config = config;
            Project.bindEvents();
        },

        bindEvents: function() {
            Project.config.sendBtn.on('click', Project.sendData);
        },

        sendData: function() {

            $.ajax({
                type: "POST",
                url: ProjectSettings.baseUrl + 'calculator',
                data: ({

                }),
                dataType: 'json',
                beforeSend: function() {
                    console.log('beforeSend');
                },
                success: function(response) {
                    console.log(response);
                }
            });


        }

    };


    $(window).load(function() {

        Project.init({
            sendBtn: $('.send-btn')
        });

    });


})(jQuery);
