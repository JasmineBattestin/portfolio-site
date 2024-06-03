<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Hello there!</title>
        <link rel="icon" type="image/x-icon" href="assets/icon_me.ico">
        <meta charset="utf-8">

        <!-- <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Página padrão" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport"> -->

        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet"> -->

        <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;700&display=swap" rel="stylesheet"> -->
        <!-- <link href='https://fonts.googleapis.com/css?family=Oxanium' rel='stylesheet'> -->

        <link rel="stylesheet" href="home.css">
        <!-- <script src="home.js" defer></script> -->


    </head>
    <body>
        <!-- Include HTML content -->
        <!-- <?php include 'home.php'; ?> -->



        <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item"><a href="" class="navbar-link clicked">/home</a></li>
            <li class="navbar-item"><a href="#" class="navbar-link">/about</a></li>
            <li class="navbar-item"><a href="#" class="navbar-link">/blog</a></li>
            <li class="navbar-item"><a href="#" class="navbar-link">/contact</a></li>
        </ul>
    </nav>



    

    <div class="content">
        <h1>Estou fazendo alguns testes</h1>
        <p>Hahahahaahahahhahahaah</p>
        <div class="link-container">
            <a 
                class=link
                href="/testandoaqui.html"
                rel="nofollow"
                target="_blank"
            >
                Quem sou eu? 
                <svg class="ic-launch" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        clip-rule="evenodd" 
                        d="M16.3333 15.8333H4.66667V4.16667H10.5V2.5H4.66667C3.74167 2.5 3 3.25 3 4.16667V15.8333C3 16.75 3.74167 17.5 4.66667 17.5H16.3333C17.25 17.5 18 16.75 18 15.8333V10H16.3333V15.8333ZM12.1667 2.5V4.16667H15.1583L6.96667 12.3583L8.14167 13.5333L16.3333 5.34167V8.33333H18V2.5H12.1667Z" 
                        fill="#673DE6"
                    />
                </svg>
            </a>
            <a 
                class="link"
                href="https://www.instagram.com/jas_code_odyssey/"
                rel="nofollow"
                target="_blank"
            >
                Instagram profissional
                <svg class="ic-launch" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        clip-rule="evenodd" 
                        d="M16.3333 15.8333H4.66667V4.16667H10.5V2.5H4.66667C3.74167 2.5 3 3.25 3 4.16667V15.8333C3 16.75 3.74167 17.5 4.66667 17.5H16.3333C17.25 17.5 18 16.75 18 15.8333V10H16.3333V15.8333ZM12.1667 2.5V4.16667H15.1583L6.96667 12.3583L8.14167 13.5333L16.3333 5.34167V8.33333H18V2.5H12.1667Z" 
                        fill="#673DE6"
                    />
                </svg>
            </a>
        </div>
        
    </div>







        <!-- Include JavaScript -->
        <!-- <script src="home.js"></script> -->

        <div id="app">
            {{ message }}
        </div>
        
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        
        <script>
            const app = Vue.createApp({
            data() {
                return {
                message: "Hello World!"
                }
            }
            })
        
        app.mount('#app')
        
        </script>

    </body>
</html>