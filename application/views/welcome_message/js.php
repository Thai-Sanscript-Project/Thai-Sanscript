
<script type="text/javascript">
    var statusSelect = "";
    var devanagari = $('#devanagari');
    var roman = $('#roman');
    var selDevanagari = $('#select-devanagari');
    var selRoman = $('#select-roman');
    var transliteButton = $('#translite-button');
    var translite = $('#translite');
    var body = $("body");

    $(document).on({
        ajaxStart: function () {
            body.addClass("loading");
        },
        ajaxStop: function () {
            body.removeClass("loading");
        }
    });

    $(function () {
        devanagari.prop('readonly', true);
        roman.prop('readonly', true);
        devanagari.autosize();
        roman.autosize();
        textAreaTranslite(devanagari);
        selectSource();
        thaiTransliteration();
    });

    function thaiTransliteration() {
        transliteButton.click(function () {
           
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('api'); ?>",
                method: "POST",
                data: {"sanskrit-romanize": roman.val(), "sanskrit-devanagari": devanagari.val()},
                dataType: "html",
                success: function (data) {
                    translite.html(data);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
//                    alert("Status: " + textStatus);
//                    alert("Error: " + errorThrown);
                }
            });
             translite.show();
        });
    }

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
    function selectSource() {
        selDevanagari.click(function () {
            switchSourceButton(selDevanagari, selRoman);
            devanagari.prop('readonly', false);
            roman.prop('readonly', true);
            statusSelect = "devanagari";
            devanagari.val("");
            roman.val("");
        });
        selRoman.click(function () {
            switchSourceButton(selRoman, selDevanagari);
            devanagari.prop('readonly', true);
            roman.prop('readonly', false);
            statusSelect = "roman";
            devanagari.val("");
            roman.val("");
        });
    }

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


//    $('.syllable').click(function () {
//        $('.syllable').removeClass('hilight');
//        $(this).addClass('hilight');
//    });

    $(document).on('click', '.syllable', function () {
        var str = $(this).attr('id');
        var idsplit = str.split("-");
        var num = idsplit[1]+"-"+idsplit[2];
        $('.syllable').removeClass('hilight');
        $("#thai-"+num).addClass('hilight');
         $("#romanize-"+num).addClass('hilight');
        
    });


</script>
