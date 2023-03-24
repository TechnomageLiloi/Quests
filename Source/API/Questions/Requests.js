API.Questions = {
    collection: function ()
    {
        API.request('Exams.Questions.Collection', {
            
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    show: function (key_question)
    {
        API.request('Exams.Questions.Show', {
            'key_question': key_question
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Exams.Questions.Create', {

        }, function (data) {
            API.Questions.collection();
        }, function () {

        });
    },

    remove: function (key_question)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Exams.Questions.Remove', {
            'key_question': key_question
        }, function (data) {
            API.Questions.collection();
        }, function () {

        });
    },

    edit: function (key_question)
    {
        API.request('Exams.Questions.Edit', {
            'key_question': key_question
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    save: function (key_question)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#blueprint-edit');
        API.request('Exams.Questions.Save', {
            'key_question': key_question,
            'title': jq_block.find('[name="title"]').val(),
            'mark': jq_block.find('[name="mark"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'type': jq_block.find('[name="type"]').val()
        }, function (data) {
            API.Questions.collection();
        }, function () {

        });
    }
}