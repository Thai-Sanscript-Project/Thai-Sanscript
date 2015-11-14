
<script type="text/javascript">
    var statusSelect = "";
    var devanagari = $('#devanagari');
    var roman = $('#roman');
    var selDevanagari = $('#select-devanagari');
    var selRoman = $('#select-roman');

    $(function () {
        devanagari.prop('readonly', true);
        roman.prop('readonly', true);
        devanagari.autosize();
        roman.autosize();
        textAreaTranslite(devanagari);
    });

    function transliteration() {
        var devanagariValue = devanagari.val();
        var output = Sanscript.t(devanagariValue, 'devanagari', 'iast');
        roman.val("");
        roman.val(output);
        roman.height(devanagari.height());
        roman.height(roman[0].scrollHeight);
    }

    function textAreaTranslite(textArea) {
        textArea.bind('keyup keydown keypress change mousedown paste', function () {
            if (statusSelect === "devanagari") {
                transliteration();
            }
        });
    }

    selDevanagari.click(function () {
        switchSourceButton(selDevanagari, selRoman);
        devanagari.prop('readonly', false);
        roman.prop('readonly', true);
        statusSelect = "devanagari";
    });
    selRoman.click(function () {
        switchSourceButton(selRoman, selDevanagari);
        devanagari.prop('readonly', true);
        roman.prop('readonly', false);
        statusSelect = "roman";
    });

    function switchSourceButton(current, opposite) {

        opposite.removeClass('btn-warning');
        current.removeClass('btn-warning');

        opposite.removeClass('btn-danger');
        current.removeClass('btn-danger');

        opposite.removeClass('btn-success');
        current.removeClass('btn-success');

        current.addClass('btn-success');

        opposite.addClass('btn-danger');
    }


</script>
