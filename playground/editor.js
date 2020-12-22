var editor1 = CodeMirror(document.querySelector('#html'), {
  lineNumbers: true,
  tabSize: 2,
  value: '<!DOCTYPE html>\n<html>\n<head>\n<title></title>\n</head>\n<body>\n\n<h2>Welcome!</h2></body>\n</html>',
  mode: 'xml',
  theme: 'monokai'
});
var editor2 = CodeMirror(document.querySelector('#css'), {
  lineNumbers: true,
  tabSize: 2,
  value: 'h2{color:green}',
  mode: 'css',
  theme: 'monokai'
});
var editor3 = CodeMirror(document.querySelector('#javascript'), {
  lineNumbers: true,
  tabSize: 2,
  value: '',
  mode: 'javascript',
  theme: 'monokai'
});

var code = document.getElementById("code").contentWindow.document;
document.getElementById('submit').addEventListener('click',()=>{
	var text1 = editor1.getValue();
	var text2 = editor2.getValue();
	var text3 = editor3.getValue();

	 code.open();
    code.writeln(
      text1 +
        "<style>" +
        text2 +
        "</style>" +
        "<script>" +
        text3 +
        "</script>"
    );
    code.close();
})


