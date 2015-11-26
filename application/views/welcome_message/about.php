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
            <textarea id='textarea-devanagari'  class="select-lang" >लोकाः समस्ताः सुखिनोभवन्तु</textarea>
        </div>
        <div class="text-center" style="width: 50%;float:left;">
            <p>
                <a id="select-roman" href="javascript:void(0);" class="btn btn-warning btn-xl">โรมาไนซ์</a>
            </p>
            <textarea id='textarea-roman' class="select-lang" >lokāḥ samastāḥ sukhinobhavantu</textarea>
        </div>
    </div>
    <div style="clear: both"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">              
                <p>หากเลือกตัวอักษรต้นฉบับ เป็น เทวนาครี กดคลิกหนึ่งครั้ง เทวนาครี จะถูกปริวรรต โรมาไนซ์  </p>

                <a href="#compare" id="translite-button" class="btn btn-info btn-xl page-scroll">
                    <span class="glyphicon glyphicon glyphicon-transfer" aria-hidden="true"></span>
                    &nbsp;ปริวรรต เป็น ไทย-สันสฤต
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div id="compare" style="clear: both;height: 50px"></div>
    <div id="translite" style="display:none ">
        <!-- translite ajax call -->
    </div>
    <div style="clear: both"></div>
    <div class="container">
        <div class="row" style="height: 100px">
            <div class="col-lg-8 col-lg-offset-2 text-center">              
                <p> </p>          
                <a href="#about" class="btn btn-default btn-xl page-scroll">
                    <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
                    กลับไปปริวรรต
                </a>
            </div>
        </div>
    </div>   

    <div style="clear: both;"></div>
</section>