<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=`device-width`, initial-scale=1.0"
        />
        <title>Document</title>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            .card {
                display: flex;
                flex-direction: column;
                gap: 10px;
                width: 300px;
                border: 1px solid black;
                padding: 10px;
                border-radius: 10px;
                transition: all ease-in-out 300ms;
            }

            .card:hover {
                background-color: black;
                color: white;
            }

            .card > img {
                width: 100%;
                height: 200px;
            }

            .title {
                font-size: 25px;
            }

            .desc-body {
                text-align: justify;
                font-size: 16px;
            }

            .container {
                display: flex;
                gap: 20px;
                padding: 10px 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <img
                    src="https://img.freepik.com/free-photo/animal-lizard-nature-multi-colored-close-up-generative-ai_188544-9072.jpg?semt=ais_hybrid&w=740"
                    alt=""
                />
                <p class="title">Lizard</p>
                <p class="desc-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quos aut magnam officia mollitia quasi reprehenderit impedit
                    quia maxime exercitationem nesciunt, veniam alias architecto
                    rerum est animi quaerat aperiam quibusdam? Quibusdam!
                </p>
            </div>
            <div class="card">
                <img
                    src="https://img.freepik.com/free-photo/flying-frog-sitting-green-leaves_488145-308.jpg?semt=ais_hybrid&w=740"
                    alt=""
                />
                <p class="title">Frog</p>
                <p class="desc-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quos aut magnam officia mollitia quasi reprehenderit impedit
                    quia maxime exercitationem nesciunt, veniam alias architecto
                    rerum est animi quaerat aperiam quibusdam? Quibusdam!
                </p>
            </div>
            <div class="card">
                <img
                    src="https://img.freepik.com/free-photo/jaguar-staring-with-fury-tropical-forest-generated-by-ai_188544-30921.jpg?semt=ais_hybrid&w=740"
                    alt=""
                />
                <p class="title">Tiger</p>
                <p class="desc-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quos aut magnam officia mollitia quasi reprehenderit impedit
                    quia maxime exercitationem nesciunt, veniam alias architecto
                    rerum est animi quaerat aperiam quibusdam? Quibusdam!
                </p>
            </div>
            <div class="card">
                <img
                    src="https://img.freepik.com/premium-photo/birds-are-sitting-back-hippopotamus_265142-7281.jpg?semt=ais_hybrid&w=740"
                    alt=""
                />
                <p class="title">Hippo</p>
                <p class="desc-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quos aut magnam officia mollitia quasi reprehenderit impedit
                    quia maxime exercitationem nesciunt, veniam alias architecto
                    rerum est animi quaerat aperiam quibusdam? Quibusdam!
                </p>
            </div>
        </div>
        <script>
            const cards = document.querySelectorAll(".card");
            cards.forEach(ele=>{
                ele.addEventListener('click',()=>{
                    alert(ele.children[1].innerText+'\n'+ele.children[2].innerText);
                })
            })
        </script>
    </body>
</html>
