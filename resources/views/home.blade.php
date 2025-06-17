<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function change(){
            const tag  = document.getElementById("text-tag");
            const img = document.createElement("img");

            tag.innerHTML="";
            img.setAttribute("src","https://img.freepik.com/free-photo/animal-lizard-nature-multi-colored-close-up-generative-ai_188544-9072.jpg?semt=ais_hybrid&w=740");
            
            tag.appendChild(img);
        }
    </script>
</head>
<body>
    <div id="text-tag">
        <img src="https://img.freepik.com/free-photo/flying-frog-sitting-green-leaves_488145-308.jpg?semt=ais_hybrid&w=740" alt="">
    </div>
    <button onclick="change()">Click Me</button>
</body>
</html>