<html>
    <head>
        <title> Sample Print Data </title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>
</head>
    <body>

    <div style="text-align:center">
        <span id="pdf-content">
            <img src="../img/sample.JPG" width="100%">
        </span>
    </div>

    </body>
    <script>
            const name = Date.now();
			var pdfContent = document.querySelector("#pdf-content");
            var optionArray = {
            margin:       10,
            filename:     name+'.pdf',
            };
			html2pdf().set(optionArray).from(pdfContent).save();


	</script>

</html>