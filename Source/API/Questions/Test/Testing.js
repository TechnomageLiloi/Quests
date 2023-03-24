const Testing = {
    turnAround: function (key_question)
    {
        const id = '#testing-' + key_question;
        $(id).find('.question').slideToggle();
        $(id).find('.answer').slideToggle();
    },

    checkRadio: function (key_question)
    {
        const id = '#testing-' + key_question;
        const jq_block = $(id);
        const jq_selected = jq_block.find('input:checked');

        if(!jq_selected.length)
        {
            alert('Choose some answer.');
            return;
        }

        const is_correct = jq_selected.data('correct');

        alert('Answer is ' + (is_correct ? '' : 'in') + 'correct');
    }
};