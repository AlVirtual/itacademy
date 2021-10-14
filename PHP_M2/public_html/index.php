<!DOCTYPE html>
<html lang="es">

    <head>
        <title>PHP_M2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <!-- Icones Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Tipografies de google fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Lato">
    </head>
    
    <body>
       
        <!--capcelera amb logo en format .png i icones de xarxes socials fontawesome
            Está inclòs mitjançant la funció 'include' -->
        <?php include('header.html');?>
        
        <!-- contingut de la pagina dividid en dos grans blocks. un block per als elements d'estactas i un altre block per a l'article. -->
        <main>
           <!-- block per als elements destacats imatge(.jpg)+ títol + text + botó -->
            <div class="img-container">
                <div class="img-container-cont">
                    <img class="im" src="images/news.jpg" alt="" width="400" height="230">
                        <h1>Esto es un titular </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras enim purus, condimentum sed placerat sed, volutpat at lorem.</p>          
                        <div class="button"><a href="#">más info</a></div> 
                </div>
                    
                <div class="img-container-cont">
                    <img class="im" src="images/news.jpg" alt="" width="400" height="230">
                    <h1>Esto es un titular</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras enim purus, condimentum sed placerat sed, volutpat at lorem.</p> 
                    <div class="button"><a href="#">más info</a></div> 
                </div>    
            
                <div class="img-container-cont">
                    <img class="im" src="images/news.jpg" alt="" width="400" height="230">
                        <h1>Esto es un titular</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras enim purus, condimentum sed placerat sed, volutpat at lorem.</p> 
                        <div class="button"><a href="#">más info</a></div>                      
                </div>                 
            </div>  
            <!-- block per a l'article -->         
            <div class="container">
                <aside></aside>
            
                <article class="art-container">   
                    <h2>Titulo Articulo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras enim purus, condimentum sed placerat sed, volutpat at lorem. Fusce porttitor erat enim, efficitur placerat dui dignissim id. Etiam laoreet quis purus non aliquet. In velit justo, rutrum sodales urna tincidunt, semper interdum ex. Quisque rutrum eu erat at tempor. Sed facilisis felis ut nunc elementum, sit amet lobortis felis venenatis. Praesent a aliquam tellus. Duis commodo massa nulla, et porta nisl feugiat maximus. Nullam aliquet augue a est eleifend vehicula. In est elit, sollicitudin et nibh et, aliquet ultricies lorem.
                        Curabitur auctor interdum ex vel mollis. Aliquam blandit justo augue, consequat finibus massa venenatis in. Vivamus diam leo, malesuada eget dui ut, sagittis tristique risus. Nullam iaculis pharetra blandit. In imperdiet lacus velit, eget mollis ante consectetur ac. Duis vel sollicitudin est, a consequat massa. Ut molestie porttitor maximus. Quisque varius quis ligula vel pharetra. Proin sodales ligula nec tincidunt cursus. Cras sit amet ornare nisi, vel gravida sem. Maecenas eget orci id elit cursus luctus pellentesque a augue. Phasellus egestas non velit nec mattis. Morbi sit amet sagittis erat. Vivamus volutpat ultrices cursus. Praesent consequat ullamcorper quam. Nullam eget erat eu dolor tristique gravida.
                        Nunc faucibus augue a velit ultrices, vitae interdum nibh posuere. Cras dapibus libero vitae varius commodo. Morbi ligula eros, vestibulum id pellentesque vel, interdum in felis. Ut in quam sed diam dapibus suscipit id commodo elit. Aliquam augue ligula, aliquam vitae turpis sed, interdum facilisis nisi. Phasellus ut enim elementum, vestibulum ex sit amet, congue quam. In ut metus velit. Duis sed dui est. Aenean a purus odio. Sed euismod eros non tortor dapibus convallis. Cras ut malesuada massa, blandit scelerisque urna.
                        Nullam tristique dui ipsum, eget varius lectus euismod facilisis. Curabitur convallis tortor eget venenatis rutrum. Nulla imperdiet sapien ut hendrerit iaculis. Integer ornare lectus id posuere ornare. Sed congue efficitur tellus et feugiat. Mauris quis metus nulla. Praesent quis sollicitudin quam, et aliquam lectus. Nullam felis diam, convallis sed sodales nec, facilisis et nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur augue nisi, viverra consequat cursus vitae, facilisis et metus. In sed malesuada eros. Nam eget purus odio. Aenean finibus libero nec ullamcorper hendrerit. Aenean molestie scelerisque eros at volutpat. Donec euismod in magna in blandit.
                        Curabitur consequat leo sed ornare fringilla. Maecenas fringilla volutpat odio. Nam mollis bibendum mauris, id tincidunt nisi auctor euismod. Aenean lobortis odio et neque luctus, ac viverra justo commodo. Etiam diam justo, convallis et dolor at, ornare tempor lorem. Quisque porttitor maximus mi ut lacinia. Morbi non facilisis orci, in tristique tellus. Sed tempor nulla vitae iaculis fermentum. Mauris non ultrices quam. Praesent venenatis eros purus, non interdum justo porta eget. In vulputate luctus turpis quis congue..</p>
                </article>
        
                <aside></aside>
            </div>
        </main>

        <!-- Peu de pàgina amb 'dades' de contacte, copyright i any.
             Está inclòs mitjançant la funció 'include' -->
        
          <?php include('footer.html');?>

    </body>

