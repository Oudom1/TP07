<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Laravel Quickstart - Basic</title>
      <!-- Navbar Contents -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
      <style>
            .container{
                  margin-left: 35%;
            }
            .line {
                  display: block;
                  width: 25px;
                  height: 2px;
                  background-color: rgb(154, 150, 150);
                  border-radius: 4px;
                  margin-block: 7px;
                  }
            .category{
                  display:flex;
                  justify-content: space-between;
                  align-items: center;
                  color: gainsboro;
                  text-align: center;
                  margin-top: 10vw;
                  width: 28vw;
                  height: 7vh;
                  border: 1px solid white;
                  font-size: 1.3rem;
                  padding-left: 1vw;
                  padding-right: 1vw;
                  background: linear-gradient(90deg, rgb(224, 143, 238) 0%, rgb(167, 167, 251) 50%, rgb(173, 229, 240) 100%);
            }
            .heading-addTask{
                  border: 1px solid gray;
                  width: 28vw;
                  margin-top: 1.3vw;
                  margin-left: 1vw;
                  margin-right: 10vw;

            }
            .panel-heading{
                  justify-content: center;
                  justify-items: center;
                  border-bottom: 1px solid gray;
                  height: 4vh;
                  padding-left: 1vw;
                  padding-top: 1.5vh;
                  display: block;
                  background-color: gray;
            }
            .form-group{
                  margin-top: 2vh;
                  margin-left: 2vw;
                  margin-right: 2vw;
            }
            .form-control{
                  width: 100%;
                  border-radius: 4px;
                  height: 4vh;
                  margin-top: 2vh;
                  padding-left: 10px;
                  margin-right: 10px;
                  border: 1px solid gray;

            }
            .btn-default{
                  width: 10vw;
                  height: 4vh;
                  margin-bottom: 3vh;
                  background-color: #fff;
                  border: 1px solid gray;
                  border-radius: 4px;
            }   
            .btn-default:hover{
                  background-color: #00a89b;
                 
            }
            .TaskSumit{
                  padding-bottom: 6vh;
                  display: block;
                  margin-bottom: 2vh;
            }
            .penal-delete{
                  border: 1px solid black;
                  background-color: gray;
                  justify-content: space-between;
                  text-align: center;
                  align-items: center;
                  width: 100%;
                  height: 4vh;
            }
            .btn-danger{
                  width: 8vw;
                  height: 4vh;
                  background-color: red;
                  border: 1px solid red;
                  display: block;
                  position: relative;
                  margin-left: 16vw;
                  margin-right: 1.4vw;
                  margin-top: 1vh;
                  margin-bottom: 1vh;
            }
            .task-table{
                  width: 6vw;
                  height: 4vh;
            }
           
      </style>
<body>
     <div class="container">
           <nav class="navbar navbar-default">
                 <!-- Nabar Contents -->
           </nav>
     </div> 

     @yield('content')
</body>
</html>