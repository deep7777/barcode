<?php
?>
<html>
<div id="barcodes" class="bc" style="display:none;">
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
</div>
<input id="barcode" type="text" value="" maxlength="9" placeholder="Scan Barcode" style="text-transform: uppercase;">
<button id="btn">code</button>
<script src="/bower_components/JsBarcode/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>

<script type="text/javascript">
var myWindow;
$("#btn").click(function(){
	var barcode_val = $("#barcode").val();
	jsbarcodes(barcode_val);
});

function jsbarcodes(barcode_val){
	JsBarcode("#barcode0",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode1",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode2",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode3",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode4",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode5",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode6",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode7",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode8",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode9",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode10",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode11",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode12",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode13",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	JsBarcode("#barcode14",barcode_val,{format:"CODE39",displayValue:true,width:2,height:25});
	myWindow = window.open("", "MsgWindow", "width=400, height=400");
	myWindow.document.write($("#barcodes").html());	
	$(".bc").hide();
}



</script>
</html>