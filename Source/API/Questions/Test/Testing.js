const Testing = {
    turnAround: function (key_question)
    {
        const id = '#testing-' + key_question;
        $(id).find('.question').slideToggle();
        $(id).find('.answer').slideToggle();
    }
};