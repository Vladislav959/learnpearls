<html>
    <head>
        
    </head>
    <body>
        <input type="text">
        <button onclick="qq()">wdw</button>
        <p></p>
        <script>
        function qq(){
        var str = document.querySelector('input').value;
       str = str.replace('/;/gi',',');
        document.querySelector('p').innerText = str;
        }</script>
    </body>
</html>