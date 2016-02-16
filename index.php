<html>
<div id="barcodes"  style="display:none;">
	<div>
	<button id="btn_print1" onclick="window.print();">Print</button>
	</div>
	<img class="bcodes" id="barcode0">
	<img class="bcodes" id="barcode1">
	<img class="bcodes" id="barcode2">
	<img class="bcodes" id="barcode3">
	<img class="bcodes" id="barcode4">
	<img class="bcodes" id="barcode5">
	<img class="bcodes" id="barcode6">
	<img class="bcodes" id="barcode7">
	<img class="bcodes" id="barcode8">
	<img class="bcodes" id="barcode9">
	<img class="bcodes" id="barcode10">
	<img class="bcodes" id="barcode11">
	<img class="bcodes" id="barcode12">
	<img class="bcodes" id="barcode13">
	<img class="bcodes" id="barcode14">
	<img class="bcodes" id="barcode15">
</div>
<input id="barcode" type="text" value="" maxlength="9" placeholder="Scan Barcode" style="text-transform: uppercase;">
<button id="btn">code</button>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/bower_components/JsBarcode/JsBarcode.all.min.js"></script>
<script src="/bower_components/JsBarcode/JsBarcode.js"></script>
<script type="text/javascript">
var myWindow;
$("#btn").click(function(){
	var barcode_val = $("#barcode").val();
	jsbarcodes(barcode_val);
});

function jsbarcodes(barcode_val){
	for(i=0;i<16;i++){
		$("#barcode"+i).JsBarcode(barcode_val,{format:"CODE39",displayValue:true,fontSize:05});
	}
	myWindow = window.open("", "BARCODE", "width=500, height=500");
	myWindow.document.write($("#barcodes").html());	
}



</script>
</html>