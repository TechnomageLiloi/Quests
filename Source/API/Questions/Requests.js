API.Questions = {
    collection: function ()
    {
        API.request('Exams.Questions.Collection', {
            
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    show: function (key_problem)
    {
        API.request('Exams.Questions.Show', {
            'key_problem': key_problem
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

    remove: function (key_problem, uid)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Exams.Questions.Remove', {
            'key_problem': key_problem
        }, function (data) {
            API.Questions.collection();
        }, function () {

        });
    },

    edit: function (key_problem, uid)
    {
        API.request('Exams.Questions.Edit', {
            'key_problem': key_problem,
            'uid': uid
        }, function (data) {
            $('#map').html(data.render);
        }, function () {

        });
    },

    save: function (key_problem, uid)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#blueprint-edit');
        API.request('Exams.Questions.Save', {
            'key_problem': key_problem,
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