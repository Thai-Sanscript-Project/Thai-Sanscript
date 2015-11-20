<div class="modal"><!-- Place at bottom of page --></div>
<section class="bg-primary" id="about" style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">เลือกตัวอักษรต้นฉบับ</h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div>
        <div class="text-center" style="width: 50%;float:left;">
            <p>
                <a id="select-devanagari" href="javascript:void(0);" class="btn btn-warning btn-xl">เทวนาครี</a>
            </p>
            <textarea id='devanagari' style="width: 98%;height: 250px;color: #000">लोकाः समस्ताः सुखिनोभवन्तु</textarea>
        </div>
        <div class="text-center" style="width: 50%;float:left;">
            <p>
                <a id="select-roman" href="javascript:void(0);" class="btn btn-warning btn-xl">โรมาไนซ์</a>
            </p>
            <textarea id='roman' style="width: 98%;height: 250px;color: #000" >lokāḥ samastāḥ sukhinobhavantu</textarea>
        </div>
    </div>
    <div style="clear: both"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">              
                <!--<p>หากเลือกตัวอักษรต้นฉบับ เป็น เทวนาครี จะถูกปริวรรต โรมาไนซ์ รอจนปริวรรต </p>-->

                <a href="#compare" id="translite-button" class="btn btn-warning btn-xl page-scroll">ปริวรรต เป็น ไทย-สันสฤต</a>
                <p id="compare"></p>
            </div>
        </div>
    </div>

    <div style="clear: both"></div>
    <div id="translite" style="display:none ">


        <div class="code">
            <p class="text-center code-p">เทวนาครี</p>
            <ol class="code-ol">
                <li class="code-li">
                    <div>
                        <span id="dev-1" class="syllable">लोकाः समस्ताः सुखिनोभवन्तु</span>
                        <span id="dev-2" class="syllable">लोकाः समस्ताः सुखिनोभवन्तु</span>
                        <span id="dev-2" class="syllable">लोकाः समस्ताः </span>
                    </div>
                </li>
                <li class="code-li">
                    <div>
                        <span class="syllable">लोकाः समस्ताः सुखिनोभवन्तु</span>
                        <span class="syllable">लोकाः समस्ताः सुखिनोभवन्तु</span>
                        <span class="syllable">लोकाः समस्ताः </span>
                    </div>
                </li>
            </ol>
        </div>
        
        <div class="code">
            <p class="text-center code-p">เทวนาครี</p>
            <ol class="code-ol">
                <li class="code-li">
                    <div>
                        <span>lokāḥ samastāḥ sukhinobhavantu</span>
                        <span class="hilight">lokāḥ samastāḥ sukhinobhavantu</span>
                        <span>lokāḥ samastāḥ sukhinobhavantu</span>
                    </div>
                </li>
                <li class="code-li">
                    <div>
                        <span>โลกาห์ สะมัสตาห์ สุขิโนภะวันตุ </span>
                        <span class="hilight">โลกาห์ สะมัสตาห์ สุขิโนภะวันตุ </span>
                        <span>โลกาห์ สะมัสตาห์ สุขิโนภะวันตุ </span>
                    </div>
                </li>
            </ol>
        </div>
        
        </div>
        <div style="clear: both"></div>
    </div>
    <div style="clear: both"></div>
</section>